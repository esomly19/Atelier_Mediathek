<?php

namespace Illuminate\Contracts\Console;

interface Application
{
    /**
<<<<<<< HEAD
     * Run an Artisan console command by name.
     *
     * @param  string  $command
     * @param  array  $parameters
     * @param  \Symfony\Component\Console\Output\OutputInterface|null  $outputBuffer
     * @return int
     */
    public function call($command, array $parameters = [], $outputBuffer = null);
=======
     * Call a console application command.
     *
     * @param  string  $command
     * @param  array  $parameters
     * @return int
     */
    public function call($command, array $parameters = []);
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10

    /**
     * Get the output from the last command.
     *
     * @return string
     */
    public function output();
}
