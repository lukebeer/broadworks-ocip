<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsRetransmissionDelayMilliSeconds;
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
 * Response to SystemEnhancedCallLogsGetRequest.
 */
class SystemEnhancedCallLogsGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemEnhancedCallLogsGetResponse';
    protected $isSendEnabled;
    protected $server1NetAddress;
    protected $server1SendPort;
    protected $server1RetrievePort;
    protected $server2NetAddress;
    protected $server2SendPort;
    protected $server2RetrievePort;
    protected $sharedSecret;
    protected $retransmissionDelayMilliSeconds;
    protected $maxTransmissions;
    protected $soapTimeoutSeconds;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\SystemEnhancedCallLogsGetResponse $response
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
        return ($this->isSendEnabled) ? $this->isSendEnabled->getValue() : null;
    }

    /**
     * 
     */
    public function setServer1NetAddress($server1NetAddress = null)
    {
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
        return ($this->server1NetAddress) ? $this->server1NetAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setServer1SendPort($server1SendPort = null)
    {
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
        return ($this->server1SendPort) ? $this->server1SendPort->getValue() : null;
    }

    /**
     * 
     */
    public function setServer1RetrievePort($server1RetrievePort = null)
    {
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
        return ($this->server1RetrievePort) ? $this->server1RetrievePort->getValue() : null;
    }

    /**
     * 
     */
    public function setServer2NetAddress($server2NetAddress = null)
    {
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
        return ($this->server2NetAddress) ? $this->server2NetAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setServer2SendPort($server2SendPort = null)
    {
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
        return ($this->server2SendPort) ? $this->server2SendPort->getValue() : null;
    }

    /**
     * 
     */
    public function setServer2RetrievePort($server2RetrievePort = null)
    {
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
        return ($this->server2RetrievePort) ? $this->server2RetrievePort->getValue() : null;
    }

    /**
     * 
     */
    public function setSharedSecret($sharedSecret = null)
    {
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
        return ($this->sharedSecret) ? $this->sharedSecret->getValue() : null;
    }

    /**
     * 
     */
    public function setRetransmissionDelayMilliSeconds($retransmissionDelayMilliSeconds = null)
    {
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
        return ($this->retransmissionDelayMilliSeconds) ? $this->retransmissionDelayMilliSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxTransmissions($maxTransmissions = null)
    {
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
        return ($this->maxTransmissions) ? $this->maxTransmissions->getValue() : null;
    }

    /**
     * 
     */
    public function setSoapTimeoutSeconds($soapTimeoutSeconds = null)
    {
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
        return ($this->soapTimeoutSeconds) ? $this->soapTimeoutSeconds->getValue() : null;
    }
}
