<?php

/**
 * Created by Hatim Jacquir
 * @author : Hatim Jacquir <jacquirhatim@gmail.com>
 */

namespace Hj;

class Connection
{
    /**
     * @var integer
     */
    private $port;

    /**
     * @var string
     */
    private $hostname;

    /**
     * @param int $port
     * @param null|string $hostname
     */
    public function __construct($port = 389, $hostname = null)
    {
        Guardian::guardAgainstInvalidInteger($port);

        $this->port = $port;
        $this->hostname = (string) $hostname;
    }

    /**
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }
}