<?php

namespace Illuminate\Support;

use Illuminate\Filesystem\Filesystem;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\PhpExecutableFinder;

class Composer
{
    /**
     * The filesystem instance.
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * The working path to regenerate from.
     *
<<<<<<< HEAD
     * @var string|null
=======
     * @var string
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     */
    protected $workingPath;

    /**
     * Create a new Composer manager instance.
     *
     * @param  \Illuminate\Filesystem\Filesystem  $files
     * @param  string|null  $workingPath
     * @return void
     */
    public function __construct(Filesystem $files, $workingPath = null)
    {
        $this->files = $files;
        $this->workingPath = $workingPath;
    }

    /**
     * Regenerate the Composer autoloader files.
     *
<<<<<<< HEAD
     * @param  string|array  $extra
=======
     * @param  string  $extra
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @return void
     */
    public function dumpAutoloads($extra = '')
    {
<<<<<<< HEAD
        $extra = $extra ? (array) $extra : [];

        $command = array_merge($this->findComposer(), ['dump-autoload'], $extra);

        $this->getProcess($command)->run();
=======
        $process = $this->getProcess();

        $process->setCommandLine(trim($this->findComposer().' dump-autoload '.$extra));

        $process->run();
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
    }

    /**
     * Regenerate the optimized Composer autoloader files.
     *
     * @return void
     */
    public function dumpOptimized()
    {
        $this->dumpAutoloads('--optimize');
    }

    /**
     * Get the composer command for the environment.
     *
<<<<<<< HEAD
     * @return array
=======
     * @return string
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     */
    protected function findComposer()
    {
        if ($this->files->exists($this->workingPath.'/composer.phar')) {
<<<<<<< HEAD
            return [$this->phpBinary(), 'composer.phar'];
        }

        return ['composer'];
    }

    /**
     * Get the PHP binary.
     *
     * @return string
     */
    protected function phpBinary()
    {
        return ProcessUtils::escapeArgument((new PhpExecutableFinder)->find(false));
=======
            return ProcessUtils::escapeArgument((new PhpExecutableFinder)->find(false)).' composer.phar';
        }

        return 'composer';
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
    }

    /**
     * Get a new Symfony process instance.
     *
<<<<<<< HEAD
     * @param  array  $command
     * @return \Symfony\Component\Process\Process
     */
    protected function getProcess(array $command)
    {
        return (new Process($command, $this->workingPath))->setTimeout(null);
=======
     * @return \Symfony\Component\Process\Process
     */
    protected function getProcess()
    {
        return (new Process('', $this->workingPath))->setTimeout(null);
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
    }

    /**
     * Set the working path used by the class.
     *
     * @param  string  $path
     * @return $this
     */
    public function setWorkingPath($path)
    {
        $this->workingPath = realpath($path);

        return $this;
    }
}
