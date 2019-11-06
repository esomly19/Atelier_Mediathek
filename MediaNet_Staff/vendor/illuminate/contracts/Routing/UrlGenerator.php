<?php

namespace Illuminate\Contracts\Routing;

interface UrlGenerator
{
    /**
     * Get the current URL for the request.
     *
     * @return string
     */
    public function current();

    /**
<<<<<<< HEAD
     * Get the URL for the previous request.
     *
     * @param  mixed  $fallback
     * @return string
     */
    public function previous($fallback = false);

    /**
=======
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * Generate an absolute URL to the given path.
     *
     * @param  string  $path
     * @param  mixed  $extra
<<<<<<< HEAD
     * @param  bool|null  $secure
=======
     * @param  bool  $secure
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @return string
     */
    public function to($path, $extra = [], $secure = null);

    /**
     * Generate a secure, absolute URL to the given path.
     *
     * @param  string  $path
     * @param  array   $parameters
     * @return string
     */
    public function secure($path, $parameters = []);

    /**
     * Generate the URL to an application asset.
     *
     * @param  string  $path
<<<<<<< HEAD
     * @param  bool|null  $secure
=======
     * @param  bool    $secure
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @return string
     */
    public function asset($path, $secure = null);

    /**
     * Get the URL to a named route.
     *
     * @param  string  $name
     * @param  mixed   $parameters
     * @param  bool  $absolute
     * @return string
     *
     * @throws \InvalidArgumentException
     */
    public function route($name, $parameters = [], $absolute = true);

    /**
     * Get the URL to a controller action.
     *
<<<<<<< HEAD
     * @param  string|array  $action
=======
     * @param  string  $action
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @param  mixed $parameters
     * @param  bool $absolute
     * @return string
     */
    public function action($action, $parameters = [], $absolute = true);

    /**
     * Set the root controller namespace.
     *
     * @param  string  $rootNamespace
     * @return $this
     */
    public function setRootControllerNamespace($rootNamespace);
}
