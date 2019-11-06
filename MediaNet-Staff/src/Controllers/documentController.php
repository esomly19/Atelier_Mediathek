<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 05/11/2019
 * Time: 14:24
 */

namespace app\controllers;


class documentController
{
    public function __construct($container)
    {
        $this->container = $container;
    }

    public function Index($request, $response) {
        return $this->container->view->render($response, "test.html.twig");
    }
}