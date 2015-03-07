<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEnhancedCallLogs; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsRetransmissionDelayMilliSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsNonPagedResponseSize;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsSoapTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsMaxTransmissions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsSharedSecret;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemEnhancedCallLogsGetRequest17sp4.
 */
class SystemEnhancedCallLogsGetResponse17sp4 extends ComplexType implements ComplexInterface
{
    public    $name                             = __CLASS__;
    protected $isSendEnabled                    = null;
    protected $server1NetAddress                = null;
    protected $server1SendPort                  = null;
    protected $server1RetrievePort              = null;
    protected $server2NetAddress                = null;
    protected $server2SendPort                  = null;
    protected $server2RetrievePort              = null;
    protected $sharedSecret                     = null;
    protected $retransmissionDelayMilliSeconds  = null;
    protected $maxTransmissions                 = null;
    protected $soapTimeoutSeconds               = null;
    protected $useDBS                           = null;
    protected $maxNonPagedResponseSize          = null;


    public function setIsSendEnabled(xs:boolean $isSendEnabled = null)
    {
    }

    public function getIsSendEnabled()
    {
        return (!$this->isSendEnabled) ?: $this->isSendEnabled->value();
    }

    public function setServer1NetAddress($server1NetAddress = null)
    {
        $this->server1NetAddress = ($server1NetAddress InstanceOf NetAddress)
             ? $server1NetAddress
             : new NetAddress($server1NetAddress);
    }

    public function getServer1NetAddress()
    {
        return (!$this->server1NetAddress) ?: $this->server1NetAddress->value();
    }

    public function setServer1SendPort($server1SendPort = null)
    {
        $this->server1SendPort = ($server1SendPort InstanceOf Port1025)
             ? $server1SendPort
             : new Port1025($server1SendPort);
    }

    public function getServer1SendPort()
    {
        return (!$this->server1SendPort) ?: $this->server1SendPort->value();
    }

    public function setServer1RetrievePort($server1RetrievePort = null)
    {
        $this->server1RetrievePort = ($server1RetrievePort InstanceOf Port)
             ? $server1RetrievePort
             : new Port($server1RetrievePort);
    }

    public function getServer1RetrievePort()
    {
        return (!$this->server1RetrievePort) ?: $this->server1RetrievePort->value();
    }

    public function setServer2NetAddress($server2NetAddress = null)
    {
        $this->server2NetAddress = ($server2NetAddress InstanceOf NetAddress)
             ? $server2NetAddress
             : new NetAddress($server2NetAddress);
    }

    public function getServer2NetAddress()
    {
        return (!$this->server2NetAddress) ?: $this->server2NetAddress->value();
    }

    public function setServer2SendPort($server2SendPort = null)
    {
        $this->server2SendPort = ($server2SendPort InstanceOf Port1025)
             ? $server2SendPort
             : new Port1025($server2SendPort);
    }

    public function getServer2SendPort()
    {
        return (!$this->server2SendPort) ?: $this->server2SendPort->value();
    }

    public function setServer2RetrievePort($server2RetrievePort = null)
    {
        $this->server2RetrievePort = ($server2RetrievePort InstanceOf Port)
             ? $server2RetrievePort
             : new Port($server2RetrievePort);
    }

    public function getServer2RetrievePort()
    {
        return (!$this->server2RetrievePort) ?: $this->server2RetrievePort->value();
    }

    public function setSharedSecret($sharedSecret = null)
    {
        $this->sharedSecret = ($sharedSecret InstanceOf EnhancedCallLogsSharedSecret)
             ? $sharedSecret
             : new EnhancedCallLogsSharedSecret($sharedSecret);
    }

    public function getSharedSecret()
    {
        return (!$this->sharedSecret) ?: $this->sharedSecret->value();
    }

    public function setRetransmissionDelayMilliSeconds($retransmissionDelayMilliSeconds = null)
    {
        $this->retransmissionDelayMilliSeconds = ($retransmissionDelayMilliSeconds InstanceOf EnhancedCallLogsRetransmissionDelayMilliSeconds)
             ? $retransmissionDelayMilliSeconds
             : new EnhancedCallLogsRetransmissionDelayMilliSeconds($retransmissionDelayMilliSeconds);
    }

    public function getRetransmissionDelayMilliSeconds()
    {
        return (!$this->retransmissionDelayMilliSeconds) ?: $this->retransmissionDelayMilliSeconds->value();
    }

    public function setMaxTransmissions($maxTransmissions = null)
    {
        $this->maxTransmissions = ($maxTransmissions InstanceOf EnhancedCallLogsMaxTransmissions)
             ? $maxTransmissions
             : new EnhancedCallLogsMaxTransmissions($maxTransmissions);
    }

    public function getMaxTransmissions()
    {
        return (!$this->maxTransmissions) ?: $this->maxTransmissions->value();
    }

    public function setSoapTimeoutSeconds($soapTimeoutSeconds = null)
    {
        $this->soapTimeoutSeconds = ($soapTimeoutSeconds InstanceOf EnhancedCallLogsSoapTimeoutSeconds)
             ? $soapTimeoutSeconds
             : new EnhancedCallLogsSoapTimeoutSeconds($soapTimeoutSeconds);
    }

    public function getSoapTimeoutSeconds()
    {
        return (!$this->soapTimeoutSeconds) ?: $this->soapTimeoutSeconds->value();
    }

    public function setUseDBS(xs:boolean $useDBS = null)
    {
    }

    public function getUseDBS()
    {
        return (!$this->useDBS) ?: $this->useDBS->value();
    }

    public function setMaxNonPagedResponseSize($maxNonPagedResponseSize = null)
    {
        $this->maxNonPagedResponseSize = ($maxNonPagedResponseSize InstanceOf EnhancedCallLogsNonPagedResponseSize)
             ? $maxNonPagedResponseSize
             : new EnhancedCallLogsNonPagedResponseSize($maxNonPagedResponseSize);
    }

    public function getMaxNonPagedResponseSize()
    {
        return (!$this->maxNonPagedResponseSize) ?: $this->maxNonPagedResponseSize->value();
    }
}
