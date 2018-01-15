<?php

namespace App\Projects;

use App\Media;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Mateusjatenee\JsonFeed\Contracts\FeedItemContract;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;

/**
 * Base class for all projects.
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
 *
 * @author   Jordan Kniest <contact@jkniest.de>
 * @license  GNU AFFERO GENERAL PUBLIC LICENSE <http://www.gnu.org/licenses/agpl.txt>
 *
 * @link     https://jkniest.de
 */
class Project implements FeedItemContract, Feedable
{
    /**
     * The name.
     *
     * @var string
     */
    protected $name;

    /**
     * The slug.
     *
     * @var string
     */
    protected $slug;

    /**
     * The meta tags.
     *
     * @var array
     */
    protected $tags;

    /**
     * All related media files.
     *
     * @var array
     */
    protected $media;

    /**
     * The cover media file (should be an image).
     *
     * @var string
     */
    protected $cover;

    /**
     * The year when this project was created.
     *
     * @var int
     */
    protected $year;

    /**
     * The date when this project was added to the portfolio (or when this project
     * was created).
     *
     * Format: yyyy-mm-dd
     *
     * @var string
     */
    protected $date;

    /**
     * Additional meta information that is shown inside the project page.
     *
     * @var array
     */
    protected $meta;

    /**
     * Return the name of the project.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Return the slug of the project.
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Return the public path to the cover image.
     *
     * @return string
     */
    public function getCoverPath()
    {
        return asset(
            'media/'.$this->getClassName().'/cover_'.$this->cover
        );
    }

    /**
     * Return the view name of the short description.
     *
     * @return string
     */
    public function getDescription()
    {
        $view = 'projects.partials.'.app()->getLocale().'.'.$this->getClassName().'_short';

        if (view()->exists($view)) {
            return $view;
        }

        return 'projects.partials.en.'.$this->getClassName().'_short';
    }

    /**
     * Return all media files.
     *
     * @return array
     */
    public function getMedia()
    {
        return collect($this->media)
            ->map(function ($file) {
                return new Media($file, $this->getClassName());
            })->toArray();
    }

    /**
     * Return all meta tags.
     *
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Return the name of the details view.
     *
     * @return string
     */
    public function getView()
    {
        $view = 'projects.partials.'.app()->getLocale().'.'.$this->getClassName();

        if (view()->exists($view)) {
            return $view;
        }

        return 'projects.partials.en.'.$this->getClassName();
    }

    /**
     * Return the year when this project was created.
     *
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Return all meta information.
     *
     * @return array
     */
    public function getMeta()
    {
        return $this->meta ?: [];
    }

    /**
     * Return the creation date.
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Create a new project based on the slug. The class will be loaded from the
     * "storage/projects.json" file.
     *
     * @param string $slug The slug of the project
     *
     * @return Project
     */
    public static function createFromSlug(string $slug)
    {
        $project = collect(json_decode(File::get(storage_path('projects.json'))))
            ->first(function ($project, $key) use ($slug) {
                return $key == $slug;
            });

        if ($project) {
            return new $project();
        } else {
            return;
        }
    }

    /**
     * Get a converted class name that only allows digits and letters.
     *
     * @return string
     */
    protected function getClassName()
    {
        return preg_replace('~[^\pL\d]+~u', '', $this->name);
    }

    /**
     * JSON feed - Get the id.
     *
     * @return string
     */
    public function getFeedId()
    {
        return $this->slug;
    }

    /**
     * JSON feed - Get the publishing date.
     *
     * @return Carbon
     */
    public function getFeedDatePublished()
    {
        return Carbon::parse($this->date);
    }

    /**
     * JSON feed - Get the title.
     *
     * @return string
     */
    public function getFeedTitle()
    {
        return $this->name;
    }

    /**
     * JSON feed - Get the url.
     *
     * @return string
     */
    public function getFeedUrl()
    {
        return route('project', ['slug' => $this->slug]);
    }

    /**
     * JSON feed - Get the cover image / feed image.
     *
     * @return string
     */
    public function getFeedImage()
    {
        return $this->getCoverPath();
    }

    /**
     * JSON feed - Get all tags.
     *
     * @return array
     */
    public function getFeedTags()
    {
        return $this->tags;
    }

    /**
     * Convert the project to a valid rss item.
     *
     * @return FeedItem
     */
    public function toFeedItem()
    {
        return new FeedItem([
            'id'      => $this->slug,
            'title'   => $this->name,
            'updated' => Carbon::parse($this->date),
            'summary' => $this->name,
            'link'    => route('project', ['slug' => $this->slug]),
            'author'  => config('app.name'),
        ]);
    }
}
