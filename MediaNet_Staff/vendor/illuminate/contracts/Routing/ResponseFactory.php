<?php

namespace Illuminate\Contracts\Routing;

interface ResponseFactory
{
    /**
<<<<<<< HEAD
     * Create a new response instance.
=======
     * Return a new response from the application.
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     *
     * @param  string  $content
     * @param  int  $status
     * @param  array  $headers
     * @return \Illuminate\Http\Response
     */
    public function make($content = '', $status = 200, array $headers = []);

    /**
<<<<<<< HEAD
     * Create a new "no content" response.
     *
     * @param  int  $status
     * @param  array  $headers
     * @return \Illuminate\Http\Response
     */
    public function noContent($status = 204, array $headers = []);

    /**
     * Create a new response for a given view.
=======
     * Return a new view response from the application.
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     *
     * @param  string  $view
     * @param  array  $data
     * @param  int  $status
     * @param  array  $headers
     * @return \Illuminate\Http\Response
     */
    public function view($view, $data = [], $status = 200, array $headers = []);

    /**
<<<<<<< HEAD
     * Create a new JSON response instance.
     *
     * @param  string|array|object  $data
=======
     * Return a new JSON response from the application.
     *
     * @param  string|array  $data
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @param  int  $status
     * @param  array  $headers
     * @param  int  $options
     * @return \Illuminate\Http\JsonResponse
     */
    public function json($data = [], $status = 200, array $headers = [], $options = 0);

    /**
<<<<<<< HEAD
     * Create a new JSONP response instance.
     *
     * @param  string  $callback
     * @param  string|array|object  $data
=======
     * Return a new JSONP response from the application.
     *
     * @param  string  $callback
     * @param  string|array  $data
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @param  int  $status
     * @param  array  $headers
     * @param  int  $options
     * @return \Illuminate\Http\JsonResponse
     */
    public function jsonp($callback, $data = [], $status = 200, array $headers = [], $options = 0);

    /**
<<<<<<< HEAD
     * Create a new streamed response instance.
=======
     * Return a new streamed response from the application.
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     *
     * @param  \Closure  $callback
     * @param  int  $status
     * @param  array  $headers
     * @return \Symfony\Component\HttpFoundation\StreamedResponse
     */
    public function stream($callback, $status = 200, array $headers = []);

    /**
<<<<<<< HEAD
     * Create a new streamed response instance as a file download.
     *
     * @param  \Closure  $callback
     * @param  string|null  $name
     * @param  array  $headers
     * @param  string|null  $disposition
     * @return \Symfony\Component\HttpFoundation\StreamedResponse
     */
    public function streamDownload($callback, $name = null, array $headers = [], $disposition = 'attachment');

    /**
     * Create a new file download response.
     *
     * @param  \SplFileInfo|string  $file
     * @param  string|null  $name
=======
     * Create a new file download response.
     *
     * @param  \SplFileInfo|string  $file
     * @param  string  $name
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @param  array  $headers
     * @param  string|null  $disposition
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function download($file, $name = null, array $headers = [], $disposition = 'attachment');

    /**
<<<<<<< HEAD
     * Return the raw contents of a binary file.
     *
     * @param  \SplFileInfo|string  $file
     * @param  array  $headers
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function file($file, array $headers = []);

    /**
=======
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * Create a new redirect response to the given path.
     *
     * @param  string  $path
     * @param  int  $status
     * @param  array  $headers
     * @param  bool|null  $secure
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectTo($path, $status = 302, $headers = [], $secure = null);

    /**
     * Create a new redirect response to a named route.
     *
     * @param  string  $route
     * @param  array  $parameters
     * @param  int  $status
     * @param  array  $headers
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectToRoute($route, $parameters = [], $status = 302, $headers = []);

    /**
     * Create a new redirect response to a controller action.
     *
     * @param  string  $action
     * @param  array  $parameters
     * @param  int  $status
     * @param  array  $headers
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectToAction($action, $parameters = [], $status = 302, $headers = []);

    /**
     * Create a new redirect response, while putting the current URL in the session.
     *
     * @param  string  $path
     * @param  int  $status
     * @param  array  $headers
     * @param  bool|null  $secure
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectGuest($path, $status = 302, $headers = [], $secure = null);

    /**
     * Create a new redirect response to the previously intended location.
     *
     * @param  string  $default
     * @param  int  $status
     * @param  array  $headers
     * @param  bool|null  $secure
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectToIntended($default = '/', $status = 302, $headers = [], $secure = null);
}
