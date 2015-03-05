<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallingNameRetrievalQueryTimerMilliSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TransportProtocol;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modifies the system's calling name retrieval attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCallingNameRetrievalModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $queryTimerMilliSeconds=null,
             $serverNetAddress=null,
             $serverPort=null,
             $serverTransportProtocol=null
    ) {
        $this->queryTimerMilliSeconds  = $queryTimerMilliSeconds;
        $this->serverNetAddress        = new NetAddress($serverNetAddress);
        $this->serverPort              = new Port1025($serverPort);
        $this->serverTransportProtocol = new TransportProtocol($serverTransportProtocol);
        $this->args                    = func_get_args();
    }

    public function setQueryTimerMilliSeconds($queryTimerMilliSeconds)
    {
        $queryTimerMilliSeconds and $this->queryTimerMilliSeconds = new CallingNameRetrievalQueryTimerMilliSeconds($queryTimerMilliSeconds);
    }

    public function getQueryTimerMilliSeconds()
    {
        return (!$this->queryTimerMilliSeconds) ?: $this->queryTimerMilliSeconds->value();
    }

    public function setServerNetAddress($serverNetAddress)
    {
        $serverNetAddress and $this->serverNetAddress = new NetAddress($serverNetAddress);
    }

    public function getServerNetAddress()
    {
        return (!$this->serverNetAddress) ?: $this->serverNetAddress->value();
    }

    public function setServerPort($serverPort)
    {
        $serverPort and $this->serverPort = new Port1025($serverPort);
    }

    public function getServerPort()
    {
        return (!$this->serverPort) ?: $this->serverPort->value();
    }

    public function setServerTransportProtocol($serverTransportProtocol)
    {
        $serverTransportProtocol and $this->serverTransportProtocol = new TransportProtocol($serverTransportProtocol);
    }

    public function getServerTransportProtocol()
    {
        return (!$this->serverTransportProtocol) ?: $this->serverTransportProtocol->value();
    }
}
