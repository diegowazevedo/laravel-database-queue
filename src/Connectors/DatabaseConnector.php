<?php namespace Davelip\Queue\Connectors;

use Illuminate\Queue\Connectors\ConnectorInterface;
use Barryvdh\Queue\AsyncQueue;

class DatabaseConnector implements ConnectorInterface {

    /**
     * Establish a queue connection.
     *
     * @param  array  $config
     * @return \Illuminate\Queue\QueueInterface
     */
    public function connect(array $config)
    {
        return new DatabaseQueue;
    }

}