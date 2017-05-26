<?php

namespace App\Projects;

/**
 * Base class for all projects
 *
 * @category Core
 * @package  JKniest.de
 * @author   Jordan Kniest <contact@jkniest.de>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     https://jkniest.de
 */
class Project
{
    /**
     * The name
     *
     * @var string
     */
    protected $name;

    /**
     * The slug
     *
     * @var string
     */
    protected $slug;

    /**
     * The meta tags
     *
     * @var array
     */
    protected $tags;

    /**
     * All related media files
     *
     * @var array
     */
    protected $media;

    /**
     * The cover media file (should be an image)
     *
     * @var string
     */
    protected $cover;

    /**
     * The year when this project was created
     *
     * @var int
     */
    protected $year;

    /**
     * Additional meta information that is shown inside the project page
     *
     * @var array
     */
    protected $meta;

    /**
     * Return the name of the project
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Return the slug of the project
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Return the public path to the cover image
     *
     * @param int $size The image size
     *
     * @return string
     */
    public function getCoverPath(int $size)
    {
        $prefix = $this->getPrefixBySize($size);

        return asset(
            'media/' . $this->getClassName() . '/' . $prefix . '_' . $this->cover
        );
    }

    /**
     * Return the view name of the short description
     *
     * @return string
     */
    public function getDescription()
    {
        $view = 'projects.partials.' . app()->getLocale() . '.' . $this->getClassName() . '_short';

        if (view()->exists($view)) {
            return $view;
        }

        return 'projects.partials.en.' . $this->getClassName() . '_short';
    }

    /**
     * Return the prefix based on the given size
     *
     * @param int $size The image size
     *
     * @return string
     */
    protected function getPrefixBySize(int $size)
    {
        switch ($size) {
            case 1024:
                return 'big';

            case 512:
                return 'featured';

            case 256:
                return 'medium';

            case 128:
                return 'small';

            default:
                return 'source';
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
}
