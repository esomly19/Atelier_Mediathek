<?php

namespace Illuminate\Support\Facades;

use Illuminate\Filesystem\Filesystem;

/**
<<<<<<< HEAD
 * @method static \Illuminate\Contracts\Filesystem\Filesystem disk(string $name = null)
 *
=======
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
 * @see \Illuminate\Filesystem\FilesystemManager
 */
class Storage extends Facade
{
    /**
     * Replace the given disk with a local testing disk.
     *
     * @param  string|null  $disk
     *
<<<<<<< HEAD
     * @return \Illuminate\Filesystem\Filesystem
=======
     * @return void
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     */
    public static function fake($disk = null)
    {
        $disk = $disk ?: self::$app['config']->get('filesystems.default');

        (new Filesystem)->cleanDirectory(
            $root = storage_path('framework/testing/disks/'.$disk)
        );

<<<<<<< HEAD
        static::set($disk, $fake = self::createLocalDriver(['root' => $root]));

        return $fake;
=======
        static::set($disk, self::createLocalDriver(['root' => $root]));
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
    }

    /**
     * Replace the given disk with a persistent local testing disk.
     *
     * @param  string|null  $disk
<<<<<<< HEAD
     * @return \Illuminate\Filesystem\Filesystem
=======
     * @return void
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     */
    public static function persistentFake($disk = null)
    {
        $disk = $disk ?: self::$app['config']->get('filesystems.default');

<<<<<<< HEAD
        static::set($disk, $fake = self::createLocalDriver([
            'root' => storage_path('framework/testing/disks/'.$disk),
        ]));

        return $fake;
=======
        static::set($disk, self::createLocalDriver([
            'root' => storage_path('framework/testing/disks/'.$disk),
        ]));
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'filesystem';
    }
}
