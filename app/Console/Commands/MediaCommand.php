<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use InvalidArgumentException;

/**
 * This command converts all images inside the media directory to different sizes:
 *
 * source -> No resizing
 * featured -> 512x512
 * medium -> 256x256
 * small -> 128x128
 *
 * Copyright (C) 2017 Jordan Kniest
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @category Core
 * @package  JKniest.de
 * @author   Jordan Kniest <contact@jkniest.de>
 * @license  GNU AFFERO GENERAL PUBLIC LICENSE <http://www.gnu.org/licenses/agpl.txt>
 * @link     https://jkniest.de
 */
class MediaCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'media';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Convert the source media files to specific resolutions';

    /**
     * @var Filesystem
     */
    protected $files;

    /**
     * Create a new command instance.
     *
     * @param Filesystem $files The filesystem
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();

        $this->files = $files;
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $dirs = collect($this->files->directories(base_path('media')));

        $dirs->each(function ($dir) {
            $this->info('Converting ' . $dir);

            $path = $this->getPublicPath($dir);

            $this->createStorageFolder($path);
            $this->handleFiles($dir, $path);
        });
    }

    /**
     * Get the storage path based on the media path
     *
     * @param string $source The media directory path
     *
     * @return string
     */
    protected function getPublicPath(string $source)
    {
        $dir = str_replace(base_path('media/'), '', $source);

        return public_path('media/' . $dir);
    }

    /**
     * Create the storage folder
     *
     * @param string $path The full path
     *
     * @return void
     */
    protected function createStorageFolder(string $path)
    {
        if (!$this->files->isDirectory($path)) {
            mkdir($path, 0777, true);
        }
    }

    /**
     * Handle all files inside the source directory
     *
     * @param string $source      The source directory
     * @param string $destination The target directory
     *
     * @return void
     */
    protected function handleFiles(string $source, string $destination)
    {
        $files = collect($this->files->files($source));

        $files->each(function ($file) use ($source, $destination) {
            $fileName = str_replace($source . '/', '', $file);
            $this->comment(' -> ' . $fileName);

            $this->copyFile($file, $destination, $fileName);
            $this->generateFeaturedFile($file, $destination, $fileName);
            $this->generateHeaderFile($file, $destination, $fileName);
        });
    }

    /**
     * Copy a single file to the storage directory
     *
     * @param string $path        The file path
     * @param string $destination The destination folder
     * @param string $fileName    The isolated filename
     *
     * @return void
     */
    protected function copyFile(string $path, string $destination, string $fileName)
    {
        $this->files->copy($path, $destination . '/source_' . $fileName);
    }

    /**
     * Copy a source file and resize it to the featured size (512x512)
     *
     * @param string $path        The file path
     * @param string $destination The destination folder
     * @param string $fileName    The isolated filename
     *
     * @return void
     */
    protected function generateFeaturedFile(string $path, string $destination, string $fileName)
    {
        $size = 512;
        $target = $destination . '/featured_' . $fileName;

        $this->saveThumb($path, $size, $target);
    }

    /**
     * Copy a source file and resize it to the header size (1920x480)
     *
     * @param string $path        The file path
     * @param string $destination The destination folder
     * @param string $fileName    The isolated filename
     *
     * @return void
     */
    protected function generateHeaderFile(string $path, string $destination, string $fileName)
    {
        $width = 1518;
        $height = 480;
        $target = $destination . '/header_' . $fileName;

        $this->saveImage($path, $width, $height, $target);
    }

    /**
     * Create a image object from any filetype
     *
     * @param string $filename The image file path
     *
     * @return resource
     */
    protected function createImageFromFile(string $filename)
    {
        if (!file_exists($filename)) {
            throw new InvalidArgumentException('File "' . $filename . '" not found.');
        }
        switch (strtolower(pathinfo($filename, PATHINFO_EXTENSION))) {
            case 'jpeg':
            case 'jpg':
                return imagecreatefromjpeg($filename);

            case 'png':
                return imagecreatefrompng($filename);

            case 'gif':
                return imagecreatefromgif($filename);

            default:
                throw new InvalidArgumentException('File "' . $filename .
                    '" is not valid jpg, png or gif image.');
        }
    }

    /**
     * Save a given image as a thumbnail
     *
     * @param string $path   The source image path
     * @param int    $size   The size of the new image
     * @param string $target The target dictionary of the new image
     *
     * @return void
     */
    protected function saveThumb(string $path, int $size, string $target)
    {
        $this->saveImage($path, $size, $size, $target);
    }

    /**
     * @param string $path
     * @param int    $w
     * @param int    $h
     * @param string $target
     *
     * @internal param int $size
     */
    protected function saveImage(string $path, int $w, int $h, string $target): void
    {
        list($width, $height) = getimagesize($path);

        $myImage = $this->createImageFromFile($path);

        if ($width > $height) {
            $y = 0;
            $x = ($width - $height) / 2;
            $smallestSide = $height;
        } else {
            $x = 0;
            $y = ($height - $width) / 2;
            $smallestSide = $width;
        }

        $thumb = imagecreatetruecolor($w, $h);
        imagecopyresampled($thumb, $myImage, 0, 0, $x, $y, $w, $h, $smallestSide, $smallestSide);

        touch($path);
        imagejpeg($thumb, $target);
    }
}
