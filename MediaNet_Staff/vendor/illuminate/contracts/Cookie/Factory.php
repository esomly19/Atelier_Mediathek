<?php

namespace Illuminate\Contracts\Cookie;

interface Factory
{
    /**
     * Create a new cookie instance.
     *
     * @param  string  $name
     * @param  string  $value
     * @param  int     $minutes
<<<<<<< HEAD
     * @param  string|null  $path
     * @param  string|null  $domain
     * @param  bool|null    $secure
     * @param  bool    $httpOnly
     * @param  bool         $raw
     * @param  string|null  $sameSite
     * @return \Symfony\Component\HttpFoundation\Cookie
     */
    public function make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = null, $httpOnly = true, $raw = false, $sameSite = null);
=======
     * @param  string  $path
     * @param  string  $domain
     * @param  bool    $secure
     * @param  bool    $httpOnly
     * @return \Symfony\Component\HttpFoundation\Cookie
     */
    public function make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = false, $httpOnly = true);
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10

    /**
     * Create a cookie that lasts "forever" (five years).
     *
     * @param  string  $name
     * @param  string  $value
<<<<<<< HEAD
     * @param  string|null  $path
     * @param  string|null  $domain
     * @param  bool|null    $secure
     * @param  bool    $httpOnly
     * @param  bool         $raw
     * @param  string|null  $sameSite
     * @return \Symfony\Component\HttpFoundation\Cookie
     */
    public function forever($name, $value, $path = null, $domain = null, $secure = null, $httpOnly = true, $raw = false, $sameSite = null);
=======
     * @param  string  $path
     * @param  string  $domain
     * @param  bool    $secure
     * @param  bool    $httpOnly
     * @return \Symfony\Component\HttpFoundation\Cookie
     */
    public function forever($name, $value, $path = null, $domain = null, $secure = false, $httpOnly = true);
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10

    /**
     * Expire the given cookie.
     *
     * @param  string  $name
<<<<<<< HEAD
     * @param  string|null  $path
     * @param  string|null  $domain
=======
     * @param  string  $path
     * @param  string  $domain
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @return \Symfony\Component\HttpFoundation\Cookie
     */
    public function forget($name, $path = null, $domain = null);
}
