<?php

namespace App\Projects;

class GENARender extends Project
{
    /**
     * The name
     *
     * @var string
     */
    protected $name = 'GENA Render';

    /**
     * The slug
     *
     * @var string
     */
    protected $slug = 'gena-render';

    /**
     * The meta tags
     *
     * @var array
     */
    protected $tags = ['laravel', 'php', 'javascript', 'blender', 'python'];

    /**
     * All related media files
     *
     * @var array
     */
    protected $media = [
        'job.png',
        'lightbox.png',
        'admin-roles.png',
        'api.png',
        'languages.png'
    ];

    /**
     * The cover media file (should be an image)
     *
     * @var string
     */
    protected $cover = 'job.png';

    /**
     * The year when this project was created
     *
     * @var int
     */
    protected $year = '2016';

    /**
     * Additional meta information that is shown inside the project page
     *
     * @var array
     */
    protected $meta = [
        'framework' => 'Laravel',
        'languages' => 'PHP, Javascript, Python'
    ];
}
