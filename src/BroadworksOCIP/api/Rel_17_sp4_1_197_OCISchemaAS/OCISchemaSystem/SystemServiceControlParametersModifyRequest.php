<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ServiceControlMaxClientConnections;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify Service Control system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemServiceControlParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemServiceControlParametersModifyRequest';
    protected $serverPort;
    protected $maxClientConnections;

    public function __construct(
         $serverPort = null,
         $maxClientConnections = null
    ) {
        $this->setServerPort($serverPort);
        $this->setMaxClientConnections($maxClientConnections);
    }

    /**
     * @return mixed $response
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
        $this->serverPort = ($serverPort InstanceOf Port1025)
             ? $serverPort
             : new Port1025($serverPort);
        $this->serverPort->setElementName('serverPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $serverPort
     */
    public function getServerPort()
    {
        return ($this->serverPort)
            ? $this->serverPort->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxClientConnections($maxClientConnections = null)
    {
        $this->maxClientConnections = ($maxClientConnections InstanceOf ServiceControlMaxClientConnections)
             ? $maxClientConnections
             : new ServiceControlMaxClientConnections($maxClientConnections);
        $this->maxClientConnections->setElementName('maxClientConnections');
        return $this;
    }

    /**
     * 
     * @return ServiceControlMaxClientConnections $maxClientConnections
     */
    public function getMaxClientConnections()
    {
        return ($this->maxClientConnections)
            ? $this->maxClientConnections->getElementValue()
            : null;
    }
}
