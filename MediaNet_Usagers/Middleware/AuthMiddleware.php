<?php

namespace dawa\middleware;

class AuthMiddleware{

    protected $container;

    public function __construct($container){
        $this->container = $container;
    }

    public function __invoke($request, $response, $next){
        if (!$this->container->auth->isConnected()){
            return $response->withRedirect($this->container->router->pathFor('connexion'));
        }
        $response = $next($request, $response);
        return $response;
    }
}