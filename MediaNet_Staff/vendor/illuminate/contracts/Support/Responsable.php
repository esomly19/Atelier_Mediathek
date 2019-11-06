<?php

namespace Illuminate\Contracts\Support;

interface Responsable
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
<<<<<<< HEAD
     * @return \Symfony\Component\HttpFoundation\Response
=======
     * @return \Illuminate\Http\Response
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     */
    public function toResponse($request);
}
