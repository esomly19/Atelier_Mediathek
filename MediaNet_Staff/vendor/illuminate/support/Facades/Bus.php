<?php

namespace Illuminate\Support\Facades;

use Illuminate\Support\Testing\Fakes\BusFake;
use Illuminate\Contracts\Bus\Dispatcher as BusDispatcherContract;

/**
<<<<<<< HEAD
 * @method static mixed dispatch($command)
 * @method static mixed dispatchNow($command, $handler = null)
 * @method static bool hasCommandHandler($command)
 * @method static bool|mixed getCommandHandler($command)
 * @method static \Illuminate\Contracts\Bus\Dispatcher pipeThrough(array $pipes)
 * @method static \Illuminate\Contracts\Bus\Dispatcher map(array $map)
 *
=======
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
 * @see \Illuminate\Contracts\Bus\Dispatcher
 */
class Bus extends Facade
{
    /**
     * Replace the bound instance with a fake.
     *
<<<<<<< HEAD
     * @return \Illuminate\Support\Testing\Fakes\BusFake
     */
    public static function fake()
    {
        static::swap($fake = new BusFake);

        return $fake;
=======
     * @return void
     */
    public static function fake()
    {
        static::swap(new BusFake);
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return BusDispatcherContract::class;
    }
}
