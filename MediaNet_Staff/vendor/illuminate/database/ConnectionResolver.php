<?php

namespace Illuminate\Database;

class ConnectionResolver implements ConnectionResolverInterface
{
    /**
     * All of the registered connections.
     *
     * @var array
     */
    protected $connections = [];

    /**
     * The default connection name.
     *
     * @var string
     */
    protected $default;

    /**
     * Create a new connection resolver instance.
     *
     * @param  array  $connections
     * @return void
     */
    public function __construct(array $connections = [])
    {
        foreach ($connections as $name => $connection) {
            $this->addConnection($name, $connection);
        }
    }

    /**
     * Get a database connection instance.
     *
<<<<<<< HEAD
     * @param  string|null  $name
=======
     * @param  string  $name
>>>>>>> e276af7ca3a444b9bfd2610046fdcc1660f60d10
     * @return \Illuminate\Database\ConnectionInterface
     */
    public function connection($name = null)
    {
        if (is_null($name)) {
            $name = $this->getDefaultConnection();
        }

        return $this->connections[$name];
    }

    /**
     * Add a connection to the resolver.
     *
     * @param  string  $name
     * @param  \Illuminate\Database\ConnectionInterface  $connection
     * @return void
     */
    public function addConnection($name, ConnectionInterface $connection)
    {
        $this->connections[$name] = $connection;
    }

    /**
     * Check if a connection has been registered.
     *
     * @param  string  $name
     * @return bool
     */
    public function hasConnection($name)
    {
        return isset($this->connections[$name]);
    }

    /**
     * Get the default connection name.
     *
     * @return string
     */
    public function getDefaultConnection()
    {
        return $this->default;
    }

    /**
     * Set the default connection name.
     *
     * @param  string  $name
     * @return void
     */
    public function setDefaultConnection($name)
    {
        $this->default = $name;
    }
}
