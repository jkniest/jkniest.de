<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

/**
 * Create a new project with an artisan command
 *
 * @category Core
 * @package  JKniest.de
 * @author   Jordan Kniest <contact@jkniest.de>
 * @license  MIT <https://opensource.org/licenses/MIT>
 * @link     https://jkniest.de
 */
class ProjectMakeCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:project';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new project class';

    /**
     * The tpye of class being generated.
     *
     * @var string
     */
    protected $type = 'Project';

    /**
     * Get the stub file for this generator
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/stubs/project.stub';
    }

    /**
     * Build the class with the given name.
     *
     * @param string $name The project name
     *
     * @return string
     */
    protected function buildClass($name = null)
    {
        $stub = $this->files->get($this->getStub());

        return $this->replaceClass($stub, $name);
    }

    /**
     * Replace the class and slug name for the given stub.
     *
     * @param string $stub The given stub
     * @param string $name The project name
     *
     * @return string
     */
    protected function replaceClass($stub, $name)
    {
        $stub = str_replace('{{class}}', $this->getClassName($name), $stub);
        $stub = str_replace('{{name}}', $name, $stub);
        $stub = str_replace('{{slug}}', $this->getSlug($name), $stub);

        return $stub;
    }

    /**
     * Get the destination class path.
     *
     * @param string $name The project name
     *
     * @return string
     */
    protected function getPath($name)
    {
        $name = $this->getClassName($name);

        return app_path('Projects/' . str_replace('\\', '/', $name) . '.php');
    }

    /**
     * Parse the class name and format according to the root namespace.
     * In this case, just return the original name.
     *
     * @param string $name The project name
     *
     * @return string
     */
    protected function qualifyClass($name)
    {
        return $name;
    }

    /**
 * Get a converted class name that only allows digits and letters.
 *
 * @param string $name The original name
 *
 * @return string
 */
    protected function getClassName(string $name)
    {
        return preg_replace('~[^\pL\d]+~u', '', $name);
    }

    /**
     * Build the directory for the class if necessary.
     *
     * @param  string $path The path
     *
     * @return string
     */
    protected function makeDirectory($path)
    {
        if (!$this->files->isDirectory(dirname($path))) {
            $this->files->makeDirectory(dirname($path), 0777, true, true);
        }

        $this->createMediaPath();

        $this->createViewFiles();

        return $path;
    }

    /**
     * Get the slugifyed version of the name
     *
     * @param string $name The name
     *
     * @return string
     */
    protected function getSlug(string $name)
    {
        // replace non letter or digits by -
        $name = preg_replace('~[^\pL\d]+~u', '-', $name);

        // transliterate
        $name = iconv('utf-8', 'us-ascii//TRANSLIT', $name);

        // remove unwanted characters
        $name = preg_replace('~[^-\w]+~', '', $name);

        // trim
        $name = trim($name, '-');

        // remove duplicate -
        $name = preg_replace('~-+~', '-', $name);

        // lowercase
        $name = strtolower($name);

        if (empty($name)) {
            return 'n-a';
        }

        return $name;
    }

    /**
     * Create the media folder for this project
     *
     * @return void
     */
    protected function createMediaPath()
    {
        $path = base_path('media/' . $this->getClassName($this->getNameInput()));

        if (!$this->files->exists($path)) {
            $this->files->makeDirectory($path, 0777, true, true);
        }
    }

    /**
     * Create the default view file for this project
     *
     * @return void
     */
    protected function createViewFiles()
    {
        $path = resource_path('views/projects/partials/en/');
        if (!$this->files->isDirectory($path)) {
            $this->files->makeDirectory($path, 0777, true, true);
        }

        // Main file
        $file = $path . $this->getClassName($this->getNameInput()) . '.blade.php';
        if (!$this->files->exists($file)) {
            $this->files->put($file, 'This is a new project');
        }

        // Short description file
        $file = $path . $this->getClassName($this->getNameInput()) . '_short.blade.php';
        if (!$this->files->exists($file)) {
            $this->files->put($file, 'Lorem ipsum dolor sit amet');
        }
    }
}
