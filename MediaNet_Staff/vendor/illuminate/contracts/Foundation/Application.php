<?php

namespace Illuminate\Contracts\Foundation;

<<<<<<< HEAD
use Closure;
=======
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
use Illuminate\Contracts\Container\Container;

interface Application extends Container
{
    /**
     * Get the version number of the application.
     *
     * @return string
     */
    public function version();

    /**
     * Get the base path of the Laravel installation.
     *
     * @return string
     */
    public function basePath();

    /**
<<<<<<< HEAD
     * Get the path to the bootstrap directory.
     *
     * @param  string  $path Optionally, a path to append to the bootstrap path
     * @return string
     */
    public function bootstrapPath($path = '');

    /**
     * Get the path to the application configuration files.
     *
     * @param  string  $path Optionally, a path to append to the config path
     * @return string
     */
    public function configPath($path = '');

    /**
     * Get the path to the database directory.
     *
     * @param  string  $path Optionally, a path to append to the database path
     * @return string
     */
    public function databasePath($path = '');

    /**
     * Get the path to the environment file directory.
     *
     * @return string
     */
    public function environmentPath();

    /**
     * Get the path to the resources directory.
     *
     * @param  string  $path
     * @return string
     */
    public function resourcePath($path = '');

    /**
     * Get the path to the storage directory.
     *
     * @return string
     */
    public function storagePath();

    /**
     * Get or check the current application environment.
     *
     * @param  string|array  $environments
     * @return string|bool
     */
    public function environment(...$environments);

    /**
     * Determine if the application is running in the console.
=======
     * Get or check the current application environment.
     *
     * @return string
     */
    public function environment();

    /**
     * Determine if we are running in the console.
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     *
     * @return bool
     */
    public function runningInConsole();

    /**
<<<<<<< HEAD
     * Determine if the application is running unit tests.
     *
     * @return bool
     */
    public function runningUnitTests();

    /**
=======
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * Determine if the application is currently down for maintenance.
     *
     * @return bool
     */
    public function isDownForMaintenance();

    /**
     * Register all of the configured providers.
     *
     * @return void
     */
    public function registerConfiguredProviders();

    /**
     * Register a service provider with the application.
     *
     * @param  \Illuminate\Support\ServiceProvider|string  $provider
<<<<<<< HEAD
     * @param  bool   $force
     * @return \Illuminate\Support\ServiceProvider
     */
    public function register($provider, $force = false);
=======
     * @param  array  $options
     * @param  bool   $force
     * @return \Illuminate\Support\ServiceProvider
     */
    public function register($provider, $options = [], $force = false);
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10

    /**
     * Register a deferred provider and service.
     *
     * @param  string  $provider
     * @param  string|null  $service
     * @return void
     */
    public function registerDeferredProvider($provider, $service = null);

    /**
<<<<<<< HEAD
     * Resolve a service provider instance from the class name.
     *
     * @param  string  $provider
     * @return \Illuminate\Support\ServiceProvider
     */
    public function resolveProvider($provider);

    /**
=======
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * Boot the application's service providers.
     *
     * @return void
     */
    public function boot();

    /**
     * Register a new boot listener.
     *
<<<<<<< HEAD
     * @param  callable  $callback
=======
     * @param  mixed  $callback
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @return void
     */
    public function booting($callback);

    /**
     * Register a new "booted" listener.
     *
<<<<<<< HEAD
     * @param  callable  $callback
=======
     * @param  mixed  $callback
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @return void
     */
    public function booted($callback);

    /**
<<<<<<< HEAD
     * Run the given array of bootstrap classes.
     *
     * @param  array  $bootstrappers
     * @return void
     */
    public function bootstrapWith(array $bootstrappers);

    /**
     * Determine if the application configuration is cached.
     *
     * @return bool
     */
    public function configurationIsCached();

    /**
     * Detect the application's current environment.
     *
     * @param  \Closure  $callback
     * @return string
     */
    public function detectEnvironment(Closure $callback);

    /**
     * Get the environment file the application is using.
     *
     * @return string
     */
    public function environmentFile();

    /**
     * Get the fully qualified path to the environment file.
     *
     * @return string
     */
    public function environmentFilePath();

    /**
     * Get the path to the configuration cache file.
     *
     * @return string
     */
    public function getCachedConfigPath();

    /**
=======
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * Get the path to the cached services.php file.
     *
     * @return string
     */
    public function getCachedServicesPath();

    /**
     * Get the path to the cached packages.php file.
     *
     * @return string
     */
    public function getCachedPackagesPath();
<<<<<<< HEAD

    /**
     * Get the path to the routes cache file.
     *
     * @return string
     */
    public function getCachedRoutesPath();

    /**
     * Get the current application locale.
     *
     * @return string
     */
    public function getLocale();

    /**
     * Get the application namespace.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    public function getNamespace();

    /**
     * Get the registered service provider instances if any exist.
     *
     * @param  \Illuminate\Support\ServiceProvider|string  $provider
     * @return array
     */
    public function getProviders($provider);

    /**
     * Determine if the application has been bootstrapped before.
     *
     * @return bool
     */
    public function hasBeenBootstrapped();

    /**
     * Load and boot all of the remaining deferred providers.
     *
     * @return void
     */
    public function loadDeferredProviders();

    /**
     * Set the environment file to be loaded during bootstrapping.
     *
     * @param  string  $file
     * @return $this
     */
    public function loadEnvironmentFrom($file);

    /**
     * Determine if the application routes are cached.
     *
     * @return bool
     */
    public function routesAreCached();

    /**
     * Set the current application locale.
     *
     * @param  string  $locale
     * @return void
     */
    public function setLocale($locale);

    /**
     * Determine if middleware has been disabled for the application.
     *
     * @return bool
     */
    public function shouldSkipMiddleware();

    /**
     * Terminate the application.
     *
     * @return void
     */
    public function terminate();
=======
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
}
