<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnhancedCallLogsSharedSecret;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnhancedCallLogsRetransmissionDelayMilliSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnhancedCallLogsMaxTransmissions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnhancedCallLogsSoapTimeoutSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemEnhancedCallLogsGetRequest.
 */
class SystemEnhancedCallLogsGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isSendEnabled,
             $server1NetAddress=null,
             $server1SendPort,
             $server1RetrievePort,
             $server2NetAddress=null,
             $server2SendPort,
             $server2RetrievePort,
             $sharedSecret=null,
             $retransmissionDelayMilliSeconds,
             $maxTransmissions,
             $soapTimeoutSeconds
    ) {
        $this->isSendEnabled                   = $isSendEnabled;
        $this->server1NetAddress               = new NetAddress($server1NetAddress);
        $this->server1SendPort                 = new Port1025($server1SendPort);
        $this->server1RetrievePort             = new Port($server1RetrievePort);
        $this->server2NetAddress               = new NetAddress($server2NetAddress);
        $this->server2SendPort                 = new Port1025($server2SendPort);
        $this->server2RetrievePort             = new Port($server2RetrievePort);
        $this->sharedSecret                    = $sharedSecret;
        $this->retransmissionDelayMilliSeconds = $retransmissionDelayMilliSeconds;
        $this->maxTransmissions                = $maxTransmissions;
        $this->soapTimeoutSeconds              = $soapTimeoutSeconds;
        $this->args                            = func_get_args();
    }

    public function setIsSendEnabled($isSendEnabled)
    {
        $isSendEnabled and $this->isSendEnabled = new xs:boolean($isSendEnabled);
    }

    public function getIsSendEnabled()
    {
        return (!$this->isSendEnabled) ?: $this->isSendEnabled->value();
    }

    public function setServer1NetAddress($server1NetAddress)
    {
        $server1NetAddress and $this->server1NetAddress = new NetAddress($server1NetAddress);
    }

    public function getServer1NetAddress()
    {
        return (!$this->server1NetAddress) ?: $this->server1NetAddress->value();
    }

    public function setServer1SendPort($server1SendPort)
    {
        $server1SendPort and $this->server1SendPort = new Port1025($server1SendPort);
    }

    public function getServer1SendPort()
    {
        return (!$this->server1SendPort) ?: $this->server1SendPort->value();
    }

    public function setServer1RetrievePort($server1RetrievePort)
    {
        $server1RetrievePort and $this->server1RetrievePort = new Port($server1RetrievePort);
    }

    public function getServer1RetrievePort()
    {
        return (!$this->server1RetrievePort) ?: $this->server1RetrievePort->value();
    }

    public function setServer2NetAddress($server2NetAddress)
    {
        $server2NetAddress and $this->server2NetAddress = new NetAddress($server2NetAddress);
    }

    public function getServer2NetAddress()
    {
        return (!$this->server2NetAddress) ?: $this->server2NetAddress->value();
    }

    public function setServer2SendPort($server2SendPort)
    {
        $server2SendPort and $this->server2SendPort = new Port1025($server2SendPort);
    }

    public function getServer2SendPort()
    {
        return (!$this->server2SendPort) ?: $this->server2SendPort->value();
    }

    public function setServer2RetrievePort($server2RetrievePort)
    {
        $server2RetrievePort and $this->server2RetrievePort = new Port($server2RetrievePort);
    }

    public function getServer2RetrievePort()
    {
        return (!$this->server2RetrievePort) ?: $this->server2RetrievePort->value();
    }

    public function setSharedSecret($sharedSecret)
    {
        $sharedSecret and $this->sharedSecret = new EnhancedCallLogsSharedSecret($sharedSecret);
    }

    public function getSharedSecret()
    {
        return (!$this->sharedSecret) ?: $this->sharedSecret->value();
    }

    public function setRetransmissionDelayMilliSeconds($retransmissionDelayMilliSeconds)
    {
        $retransmissionDelayMilliSeconds and $this->retransmissionDelayMilliSeconds = new EnhancedCallLogsRetransmissionDelayMilliSeconds($retransmissionDelayMilliSeconds);
    }

    public function getRetransmissionDelayMilliSeconds()
    {
        return (!$this->retransmissionDelayMilliSeconds) ?: $this->retransmissionDelayMilliSeconds->value();
    }

    public function setMaxTransmissions($maxTransmissions)
    {
        $maxTransmissions and $this->maxTransmissions = new EnhancedCallLogsMaxTransmissions($maxTransmissions);
    }

    public function getMaxTransmissions()
    {
        return (!$this->maxTransmissions) ?: $this->maxTransmissions->value();
    }

    public function setSoapTimeoutSeconds($soapTimeoutSeconds)
    {
        $soapTimeoutSeconds and $this->soapTimeoutSeconds = new EnhancedCallLogsSoapTimeoutSeconds($soapTimeoutSeconds);
    }

    public function getSoapTimeoutSeconds()
    {
        return (!$this->soapTimeoutSeconds) ?: $this->soapTimeoutSeconds->value();
    }
}
