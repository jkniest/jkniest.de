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
     * The short description
     *
     * @var string
     */
    protected $description;

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
}
