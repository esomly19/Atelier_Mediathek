<?php

namespace Illuminate\Contracts\View;

use Illuminate\Contracts\Support\Renderable;

interface View extends Renderable
{
    /**
     * Get the name of the view.
     *
     * @return string
     */
    public function name();

    /**
     * Add a piece of data to the view.
     *
     * @param  string|array  $key
     * @param  mixed   $value
     * @return $this
     */
    public function with($key, $value = null);
<<<<<<< HEAD

    /**
     * Get the array of view data.
     *
     * @return array
     */
    public function getData();
=======
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
}
