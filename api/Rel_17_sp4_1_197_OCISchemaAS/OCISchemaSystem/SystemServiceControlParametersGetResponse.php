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
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemServiceControlParametersGetListRequest.
 *         Contains a list of system Service Control parameters.
 */
class SystemServiceControlParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = 'SystemServiceControlParametersGetResponse';
    protected $serverPort           = null;
    protected $maxClientConnections = null;

    /**
     * @return SystemServiceControlParametersGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServerPort($serverPort = null)
    {
        if (!$serverPort) return $this;
        $this->serverPort = ($serverPort InstanceOf Port1025)
             ? $serverPort
             : new Port1025($serverPort);
        $this->serverPort->setName('serverPort');
        return $this;
    }

    /**
     * 
     * @return Port1025
     */
    public function getServerPort()
    {
        return $this->serverPort->getValue();
    }

    /**
     * 
     */
    public function setMaxClientConnections($maxClientConnections = null)
    {
        if (!$maxClientConnections) return $this;
        $this->maxClientConnections = ($maxClientConnections InstanceOf ServiceControlMaxClientConnections)
             ? $maxClientConnections
             : new ServiceControlMaxClientConnections($maxClientConnections);
        $this->maxClientConnections->setName('maxClientConnections');
        return $this;
    }

    /**
     * 
     * @return ServiceControlMaxClientConnections
     */
    public function getMaxClientConnections()
    {
        return $this->maxClientConnections->getValue();
    }
}
