<?php

namespace Illuminate\Contracts\Console;

interface Kernel
{
    /**
     * Handle an incoming console command.
     *
     * @param  \Symfony\Component\Console\Input\InputInterface  $input
<<<<<<< HEAD
     * @param  \Symfony\Component\Console\Output\OutputInterface|null  $output
=======
     * @param  \Symfony\Component\Console\Output\OutputInterface  $output
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @return int
     */
    public function handle($input, $output = null);

    /**
     * Run an Artisan console command by name.
     *
     * @param  string  $command
     * @param  array  $parameters
<<<<<<< HEAD
     * @param  \Symfony\Component\Console\Output\OutputInterface|null  $outputBuffer
     * @return int
     */
    public function call($command, array $parameters = [], $outputBuffer = null);
=======
     * @return int
     */
    public function call($command, array $parameters = []);
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10

    /**
     * Queue an Artisan console command by name.
     *
     * @param  string  $command
     * @param  array  $parameters
     * @return \Illuminate\Foundation\Bus\PendingDispatch
     */
    public function queue($command, array $parameters = []);

    /**
     * Get all of the commands registered with the console.
     *
     * @return array
     */
    public function all();

    /**
     * Get the output for the last run command.
     *
     * @return string
     */
    public function output();
<<<<<<< HEAD

    /**
     * Terminate the application.
     *
     * @param  \Symfony\Component\Console\Input\InputInterface  $input
     * @param  int  $status
     * @return void
     */
    public function terminate($input, $status);
=======
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
}
