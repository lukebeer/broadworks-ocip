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
 * Request to modify Service Control system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemServiceControlParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemServiceControlParametersModifyRequest';
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
        $this->serverPort->setName('serverPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $serverPort
     */
    public function getServerPort()
    {
        return ($this->serverPort) ? $this->serverPort->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxClientConnections($maxClientConnections = null)
    {
        $this->maxClientConnections = ($maxClientConnections InstanceOf ServiceControlMaxClientConnections)
             ? $maxClientConnections
             : new ServiceControlMaxClientConnections($maxClientConnections);
        $this->maxClientConnections->setName('maxClientConnections');
        return $this;
    }

    /**
     * 
     * @return ServiceControlMaxClientConnections $maxClientConnections
     */
    public function getMaxClientConnections()
    {
        return ($this->maxClientConnections) ? $this->maxClientConnections->getValue() : null;
    }
}
