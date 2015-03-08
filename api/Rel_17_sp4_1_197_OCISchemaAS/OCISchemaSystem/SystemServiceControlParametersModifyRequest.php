<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ServiceControlMaxClientConnections;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to modify Service Control system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemServiceControlParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $serverPort           = null;
    protected $maxClientConnections = null;

    public function __construct(
         $serverPort = null,
         $maxClientConnections = null
    ) {
        $this->setServerPort($serverPort);
        $this->setMaxClientConnections($maxClientConnections);
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function setServerPort($serverPort = null)
    {
        $this->serverPort = ($serverPort InstanceOf Port1025)
             ? $serverPort
             : new Port1025($serverPort);
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function getServerPort()
    {
        return (!$this->serverPort) ?: $this->serverPort->getValue();
    }

    /**
     * Maximum allowed number of service control client connections.
     */
    public function setMaxClientConnections($maxClientConnections = null)
    {
        $this->maxClientConnections = ($maxClientConnections InstanceOf ServiceControlMaxClientConnections)
             ? $maxClientConnections
             : new ServiceControlMaxClientConnections($maxClientConnections);
    }

    /**
     * Maximum allowed number of service control client connections.
     */
    public function getMaxClientConnections()
    {
        return (!$this->maxClientConnections) ?: $this->maxClientConnections->getValue();
    }
}
