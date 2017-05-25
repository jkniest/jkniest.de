<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Featured projects
    |--------------------------------------------------------------------------
    |
    | Here are all projects that are featured. There should never be more than
    | two featured project at a time.
    */

    'featured' => [
        \App\Projects\ExampleProject::class,
        \App\Projects\ExampleProject2::class
    ],

    /*
    |--------------------------------------------------------------------------
    | Medium projects
    |--------------------------------------------------------------------------
    |
    | Here are all projects that are categorized as medium. There should never
    | be more than three medium project at a time.
    */

    'medium' => [
        \App\Projects\ExampleProject::class,
        \App\Projects\ExampleProject2::class,
        \App\Projects\ExampleProject::class
    ],

    /*
    |--------------------------------------------------------------------------
    | Other projects
    |--------------------------------------------------------------------------
    |
    | Here are all other projects
    */

    'other' => [
        \App\Projects\ExampleProject::class,
        \App\Projects\ExampleProject2::class,
        \App\Projects\ExampleProject::class,
        \App\Projects\ExampleProject2::class,
        \App\Projects\ExampleProject2::class,
        \App\Projects\ExampleProject::class
    ]

];
