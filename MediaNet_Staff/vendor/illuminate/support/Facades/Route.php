<?php

namespace Illuminate\Support\Facades;

/**
<<<<<<< HEAD
 * @method static \Illuminate\Routing\Route get(string $uri, \Closure|array|string|callable|null $action = null)
 * @method static \Illuminate\Routing\Route post(string $uri, \Closure|array|string|callable|null $action = null)
 * @method static \Illuminate\Routing\Route put(string $uri, \Closure|array|string|callable|null $action = null)
 * @method static \Illuminate\Routing\Route delete(string $uri, \Closure|array|string|callable|null $action = null)
 * @method static \Illuminate\Routing\Route patch(string $uri, \Closure|array|string|callable|null $action = null)
 * @method static \Illuminate\Routing\Route options(string $uri, \Closure|array|string|callable|null $action = null)
 * @method static \Illuminate\Routing\Route any(string $uri, \Closure|array|string|callable|null $action = null)
 * @method static \Illuminate\Routing\Route match(array|string $methods, string $uri, \Closure|array|string|callable|null $action = null)
 * @method static \Illuminate\Routing\RouteRegistrar prefix(string  $prefix)
 * @method static \Illuminate\Routing\RouteRegistrar where(array  $where)
 * @method static \Illuminate\Routing\PendingResourceRegistration resource(string $name, string $controller, array $options = [])
 * @method static \Illuminate\Routing\PendingResourceRegistration apiResource(string $name, string $controller, array $options = [])
 * @method static void apiResources(array $resources)
 * @method static \Illuminate\Routing\RouteRegistrar middleware(array|string|null $middleware)
 * @method static \Illuminate\Routing\Route substituteBindings(\Illuminate\Support\Facades\Route $route)
 * @method static void substituteImplicitBindings(\Illuminate\Support\Facades\Route $route)
 * @method static \Illuminate\Routing\RouteRegistrar as(string $value)
 * @method static \Illuminate\Routing\RouteRegistrar domain(string $value)
 * @method static \Illuminate\Routing\RouteRegistrar name(string $value)
 * @method static \Illuminate\Routing\RouteRegistrar namespace(string $value)
 * @method static \Illuminate\Routing\Router|\Illuminate\Routing\RouteRegistrar group(array|\Closure|string $attributes, \Closure|string $routes)
 * @method static \Illuminate\Routing\Route redirect(string $uri, string $destination, int $status = 302)
 * @method static \Illuminate\Routing\Route permanentRedirect(string $uri, string $destination)
 * @method static \Illuminate\Routing\Route view(string $uri, string $view, array $data = [])
 * @method static void bind(string $key, string|callable $binder)
 * @method static void model(string $key, string $class, \Closure|null $callback = null)
 * @method static \Illuminate\Routing\Route current()
 * @method static string|null currentRouteName()
 * @method static string|null currentRouteAction()
=======
 * @method static \Illuminate\Support\Facades\Route get(string $uri, \Closure|array|string|null $action = null)
 * @method static \Illuminate\Support\Facades\Route post(string $uri, \Closure|array|string|null $action = null)
 * @method static \Illuminate\Support\Facades\Route put(string $uri, \Closure|array|string|null $action = null)
 * @method static \Illuminate\Support\Facades\Route delete(string $uri, \Closure|array|string|null $action = null)
 * @method static \Illuminate\Support\Facades\Route patch(string $uri, \Closure|array|string|null $action = null)
 * @method static \Illuminate\Support\Facades\Route options(string $uri, \Closure|array|string|null $action = null)
 * @method static \Illuminate\Support\Facades\Route any(string $uri, \Closure|array|string|null $action = null)
 * @method static \Illuminate\Support\Facades\Route match(array|string $methods, string $uri, \Closure|array|string|null $action = null)
 * @method static \Illuminate\Support\Facades\Route prefix(string  $prefix)
 * @method static \Illuminate\Routing\PendingResourceRegistration resource(string $name, string $controller, array $options = [])
 * @method static \Illuminate\Routing\PendingResourceRegistration apiResource(string $name, string $controller, array $options = [])
 * @method static \Illuminate\Support\Facades\Route middleware(array|string|null $middleware)
 * @method static \Illuminate\Support\Facades\Route substituteBindings(\Illuminate\Support\Facades\Route $route)
 * @method static void substituteImplicitBindings(\Illuminate\Support\Facades\Route $route)
 * @method static \Illuminate\Support\Facades\Route as(string $value)
 * @method static \Illuminate\Support\Facades\Route domain(string $value)
 * @method static \Illuminate\Support\Facades\Route name(string $value)
 * @method static \Illuminate\Support\Facades\Route namespace(string $value)
 * @method static \Illuminate\Support\Facades\Route where(array|string $name, string $expression = null)
 * @method static \Illuminate\Routing\Router group(\Closure|string|array $value, \Closure|string $routes)
 * @method static \Illuminate\Support\Facades\Route redirect(string $uri, string $destination, int $status = 301)
 * @method static \Illuminate\Support\Facades\Route view(string $uri, string $view, array $data = [])
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
 *
 * @see \Illuminate\Routing\Router
 */
class Route extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'router';
    }
}
