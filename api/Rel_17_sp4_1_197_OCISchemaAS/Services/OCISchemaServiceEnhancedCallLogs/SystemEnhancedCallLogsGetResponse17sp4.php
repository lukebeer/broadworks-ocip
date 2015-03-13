<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsRetransmissionDelayMilliSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsNonPagedResponseSize;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsSoapTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsMaxTransmissions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsSharedSecret;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemEnhancedCallLogsGetRequest17sp4.
 */
class SystemEnhancedCallLogsGetResponse17sp4 extends ComplexType implements ComplexInterface
{
    public    $name                            = 'SystemEnhancedCallLogsGetResponse17sp4';
    protected $isSendEnabled                   = null;
    protected $server1NetAddress               = null;
    protected $server1SendPort                 = null;
    protected $server1RetrievePort             = null;
    protected $server2NetAddress               = null;
    protected $server2SendPort                 = null;
    protected $server2RetrievePort             = null;
    protected $sharedSecret                    = null;
    protected $retransmissionDelayMilliSeconds = null;
    protected $maxTransmissions                = null;
    protected $soapTimeoutSeconds              = null;
    protected $useDBS                          = null;
    protected $maxNonPagedResponseSize         = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\SystemEnhancedCallLogsGetResponse17sp4 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsSendEnabled($isSendEnabled = null)
    {
        if (!$isSendEnabled) return $this;
        $this->isSendEnabled = new PrimitiveType($isSendEnabled);
        $this->isSendEnabled->setName('isSendEnabled');
        return $this;
    }

    /**
     * 
     * @return boolean $isSendEnabled
     */
    public function getIsSendEnabled()
    {
        return $this->isSendEnabled->getValue();
    }

    /**
     * 
     */
    public function setServer1NetAddress($server1NetAddress = null)
    {
        if (!$server1NetAddress) return $this;
        $this->server1NetAddress = ($server1NetAddress InstanceOf NetAddress)
             ? $server1NetAddress
             : new NetAddress($server1NetAddress);
        $this->server1NetAddress->setName('server1NetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $server1NetAddress
     */
    public function getServer1NetAddress()
    {
        return $this->server1NetAddress->getValue();
    }

    /**
     * 
     */
    public function setServer1SendPort($server1SendPort = null)
    {
        if (!$server1SendPort) return $this;
        $this->server1SendPort = ($server1SendPort InstanceOf Port1025)
             ? $server1SendPort
             : new Port1025($server1SendPort);
        $this->server1SendPort->setName('server1SendPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $server1SendPort
     */
    public function getServer1SendPort()
    {
        return $this->server1SendPort->getValue();
    }

    /**
     * 
     */
    public function setServer1RetrievePort($server1RetrievePort = null)
    {
        if (!$server1RetrievePort) return $this;
        $this->server1RetrievePort = ($server1RetrievePort InstanceOf Port)
             ? $server1RetrievePort
             : new Port($server1RetrievePort);
        $this->server1RetrievePort->setName('server1RetrievePort');
        return $this;
    }

    /**
     * 
     * @return Port $server1RetrievePort
     */
    public function getServer1RetrievePort()
    {
        return $this->server1RetrievePort->getValue();
    }

    /**
     * 
     */
    public function setServer2NetAddress($server2NetAddress = null)
    {
        if (!$server2NetAddress) return $this;
        $this->server2NetAddress = ($server2NetAddress InstanceOf NetAddress)
             ? $server2NetAddress
             : new NetAddress($server2NetAddress);
        $this->server2NetAddress->setName('server2NetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $server2NetAddress
     */
    public function getServer2NetAddress()
    {
        return $this->server2NetAddress->getValue();
    }

    /**
     * 
     */
    public function setServer2SendPort($server2SendPort = null)
    {
        if (!$server2SendPort) return $this;
        $this->server2SendPort = ($server2SendPort InstanceOf Port1025)
             ? $server2SendPort
             : new Port1025($server2SendPort);
        $this->server2SendPort->setName('server2SendPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $server2SendPort
     */
    public function getServer2SendPort()
    {
        return $this->server2SendPort->getValue();
    }

    /**
     * 
     */
    public function setServer2RetrievePort($server2RetrievePort = null)
    {
        if (!$server2RetrievePort) return $this;
        $this->server2RetrievePort = ($server2RetrievePort InstanceOf Port)
             ? $server2RetrievePort
             : new Port($server2RetrievePort);
        $this->server2RetrievePort->setName('server2RetrievePort');
        return $this;
    }

    /**
     * 
     * @return Port $server2RetrievePort
     */
    public function getServer2RetrievePort()
    {
        return $this->server2RetrievePort->getValue();
    }

    /**
     * 
     */
    public function setSharedSecret($sharedSecret = null)
    {
        if (!$sharedSecret) return $this;
        $this->sharedSecret = ($sharedSecret InstanceOf EnhancedCallLogsSharedSecret)
             ? $sharedSecret
             : new EnhancedCallLogsSharedSecret($sharedSecret);
        $this->sharedSecret->setName('sharedSecret');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsSharedSecret $sharedSecret
     */
    public function getSharedSecret()
    {
        return $this->sharedSecret->getValue();
    }

    /**
     * 
     */
    public function setRetransmissionDelayMilliSeconds($retransmissionDelayMilliSeconds = null)
    {
        if (!$retransmissionDelayMilliSeconds) return $this;
        $this->retransmissionDelayMilliSeconds = ($retransmissionDelayMilliSeconds InstanceOf EnhancedCallLogsRetransmissionDelayMilliSeconds)
             ? $retransmissionDelayMilliSeconds
             : new EnhancedCallLogsRetransmissionDelayMilliSeconds($retransmissionDelayMilliSeconds);
        $this->retransmissionDelayMilliSeconds->setName('retransmissionDelayMilliSeconds');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsRetransmissionDelayMilliSeconds $retransmissionDelayMilliSeconds
     */
    public function getRetransmissionDelayMilliSeconds()
    {
        return $this->retransmissionDelayMilliSeconds->getValue();
    }

    /**
     * 
     */
    public function setMaxTransmissions($maxTransmissions = null)
    {
        if (!$maxTransmissions) return $this;
        $this->maxTransmissions = ($maxTransmissions InstanceOf EnhancedCallLogsMaxTransmissions)
             ? $maxTransmissions
             : new EnhancedCallLogsMaxTransmissions($maxTransmissions);
        $this->maxTransmissions->setName('maxTransmissions');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsMaxTransmissions $maxTransmissions
     */
    public function getMaxTransmissions()
    {
        return $this->maxTransmissions->getValue();
    }

    /**
     * 
     */
    public function setSoapTimeoutSeconds($soapTimeoutSeconds = null)
    {
        if (!$soapTimeoutSeconds) return $this;
        $this->soapTimeoutSeconds = ($soapTimeoutSeconds InstanceOf EnhancedCallLogsSoapTimeoutSeconds)
             ? $soapTimeoutSeconds
             : new EnhancedCallLogsSoapTimeoutSeconds($soapTimeoutSeconds);
        $this->soapTimeoutSeconds->setName('soapTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsSoapTimeoutSeconds $soapTimeoutSeconds
     */
    public function getSoapTimeoutSeconds()
    {
        return $this->soapTimeoutSeconds->getValue();
    }

    /**
     * 
     */
    public function setUseDBS($useDBS = null)
    {
        if (!$useDBS) return $this;
        $this->useDBS = new PrimitiveType($useDBS);
        $this->useDBS->setName('useDBS');
        return $this;
    }

    /**
     * 
     * @return boolean $useDBS
     */
    public function getUseDBS()
    {
        return $this->useDBS->getValue();
    }

    /**
     * 
     */
    public function setMaxNonPagedResponseSize($maxNonPagedResponseSize = null)
    {
        if (!$maxNonPagedResponseSize) return $this;
        $this->maxNonPagedResponseSize = ($maxNonPagedResponseSize InstanceOf EnhancedCallLogsNonPagedResponseSize)
             ? $maxNonPagedResponseSize
             : new EnhancedCallLogsNonPagedResponseSize($maxNonPagedResponseSize);
        $this->maxNonPagedResponseSize->setName('maxNonPagedResponseSize');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsNonPagedResponseSize $maxNonPagedResponseSize
     */
    public function getMaxNonPagedResponseSize()
    {
        return $this->maxNonPagedResponseSize->getValue();
    }
}
