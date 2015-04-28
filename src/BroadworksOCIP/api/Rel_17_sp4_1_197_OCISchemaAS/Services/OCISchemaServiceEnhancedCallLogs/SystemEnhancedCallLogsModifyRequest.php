<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsRetransmissionDelayMilliSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsNonPagedResponseSize;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsSoapTimeoutSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsMaxTransmissions;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsSharedSecret;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the system level data associated with Enhanced Call Logs.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemEnhancedCallLogsModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemEnhancedCallLogsModifyRequest';
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
    protected $useDBS;
    protected $maxNonPagedResponseSize;

    public function __construct(
         $isSendEnabled = null,
         $server1NetAddress = null,
         $server1SendPort = null,
         $server1RetrievePort = null,
         $server2NetAddress = null,
         $server2SendPort = null,
         $server2RetrievePort = null,
         $sharedSecret = null,
         $retransmissionDelayMilliSeconds = null,
         $maxTransmissions = null,
         $soapTimeoutSeconds = null,
         $useDBS = null,
         $maxNonPagedResponseSize = null
    ) {
        $this->setIsSendEnabled($isSendEnabled);
        $this->setServer1NetAddress($server1NetAddress);
        $this->setServer1SendPort($server1SendPort);
        $this->setServer1RetrievePort($server1RetrievePort);
        $this->setServer2NetAddress($server2NetAddress);
        $this->setServer2SendPort($server2SendPort);
        $this->setServer2RetrievePort($server2RetrievePort);
        $this->setSharedSecret($sharedSecret);
        $this->setRetransmissionDelayMilliSeconds($retransmissionDelayMilliSeconds);
        $this->setMaxTransmissions($maxTransmissions);
        $this->setSoapTimeoutSeconds($soapTimeoutSeconds);
        $this->setUseDBS($useDBS);
        $this->setMaxNonPagedResponseSize($maxNonPagedResponseSize);
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
    public function setIsSendEnabled($isSendEnabled = null)
    {
        $this->isSendEnabled = new PrimitiveType($isSendEnabled);
        $this->isSendEnabled->setElementName('isSendEnabled');
        return $this;
    }

    /**
     * 
     * @return boolean $isSendEnabled
     */
    public function getIsSendEnabled()
    {
        return ($this->isSendEnabled)
            ? $this->isSendEnabled->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServer1NetAddress($server1NetAddress = null)
    {
        $this->server1NetAddress = ($server1NetAddress InstanceOf NetAddress)
             ? $server1NetAddress
             : new NetAddress($server1NetAddress);
        $this->server1NetAddress->setElementName('server1NetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $server1NetAddress
     */
    public function getServer1NetAddress()
    {
        return ($this->server1NetAddress)
            ? $this->server1NetAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServer1SendPort($server1SendPort = null)
    {
        $this->server1SendPort = ($server1SendPort InstanceOf Port1025)
             ? $server1SendPort
             : new Port1025($server1SendPort);
        $this->server1SendPort->setElementName('server1SendPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $server1SendPort
     */
    public function getServer1SendPort()
    {
        return ($this->server1SendPort)
            ? $this->server1SendPort->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServer1RetrievePort($server1RetrievePort = null)
    {
        $this->server1RetrievePort = ($server1RetrievePort InstanceOf Port)
             ? $server1RetrievePort
             : new Port($server1RetrievePort);
        $this->server1RetrievePort->setElementName('server1RetrievePort');
        return $this;
    }

    /**
     * 
     * @return Port $server1RetrievePort
     */
    public function getServer1RetrievePort()
    {
        return ($this->server1RetrievePort)
            ? $this->server1RetrievePort->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServer2NetAddress($server2NetAddress = null)
    {
        $this->server2NetAddress = ($server2NetAddress InstanceOf NetAddress)
             ? $server2NetAddress
             : new NetAddress($server2NetAddress);
        $this->server2NetAddress->setElementName('server2NetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $server2NetAddress
     */
    public function getServer2NetAddress()
    {
        return ($this->server2NetAddress)
            ? $this->server2NetAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServer2SendPort($server2SendPort = null)
    {
        $this->server2SendPort = ($server2SendPort InstanceOf Port1025)
             ? $server2SendPort
             : new Port1025($server2SendPort);
        $this->server2SendPort->setElementName('server2SendPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $server2SendPort
     */
    public function getServer2SendPort()
    {
        return ($this->server2SendPort)
            ? $this->server2SendPort->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServer2RetrievePort($server2RetrievePort = null)
    {
        $this->server2RetrievePort = ($server2RetrievePort InstanceOf Port)
             ? $server2RetrievePort
             : new Port($server2RetrievePort);
        $this->server2RetrievePort->setElementName('server2RetrievePort');
        return $this;
    }

    /**
     * 
     * @return Port $server2RetrievePort
     */
    public function getServer2RetrievePort()
    {
        return ($this->server2RetrievePort)
            ? $this->server2RetrievePort->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSharedSecret($sharedSecret = null)
    {
        $this->sharedSecret = ($sharedSecret InstanceOf EnhancedCallLogsSharedSecret)
             ? $sharedSecret
             : new EnhancedCallLogsSharedSecret($sharedSecret);
        $this->sharedSecret->setElementName('sharedSecret');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsSharedSecret $sharedSecret
     */
    public function getSharedSecret()
    {
        return ($this->sharedSecret)
            ? $this->sharedSecret->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRetransmissionDelayMilliSeconds($retransmissionDelayMilliSeconds = null)
    {
        $this->retransmissionDelayMilliSeconds = ($retransmissionDelayMilliSeconds InstanceOf EnhancedCallLogsRetransmissionDelayMilliSeconds)
             ? $retransmissionDelayMilliSeconds
             : new EnhancedCallLogsRetransmissionDelayMilliSeconds($retransmissionDelayMilliSeconds);
        $this->retransmissionDelayMilliSeconds->setElementName('retransmissionDelayMilliSeconds');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsRetransmissionDelayMilliSeconds $retransmissionDelayMilliSeconds
     */
    public function getRetransmissionDelayMilliSeconds()
    {
        return ($this->retransmissionDelayMilliSeconds)
            ? $this->retransmissionDelayMilliSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxTransmissions($maxTransmissions = null)
    {
        $this->maxTransmissions = ($maxTransmissions InstanceOf EnhancedCallLogsMaxTransmissions)
             ? $maxTransmissions
             : new EnhancedCallLogsMaxTransmissions($maxTransmissions);
        $this->maxTransmissions->setElementName('maxTransmissions');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsMaxTransmissions $maxTransmissions
     */
    public function getMaxTransmissions()
    {
        return ($this->maxTransmissions)
            ? $this->maxTransmissions->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSoapTimeoutSeconds($soapTimeoutSeconds = null)
    {
        $this->soapTimeoutSeconds = ($soapTimeoutSeconds InstanceOf EnhancedCallLogsSoapTimeoutSeconds)
             ? $soapTimeoutSeconds
             : new EnhancedCallLogsSoapTimeoutSeconds($soapTimeoutSeconds);
        $this->soapTimeoutSeconds->setElementName('soapTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsSoapTimeoutSeconds $soapTimeoutSeconds
     */
    public function getSoapTimeoutSeconds()
    {
        return ($this->soapTimeoutSeconds)
            ? $this->soapTimeoutSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseDBS($useDBS = null)
    {
        $this->useDBS = new PrimitiveType($useDBS);
        $this->useDBS->setElementName('useDBS');
        return $this;
    }

    /**
     * 
     * @return boolean $useDBS
     */
    public function getUseDBS()
    {
        return ($this->useDBS)
            ? $this->useDBS->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxNonPagedResponseSize($maxNonPagedResponseSize = null)
    {
        $this->maxNonPagedResponseSize = ($maxNonPagedResponseSize InstanceOf EnhancedCallLogsNonPagedResponseSize)
             ? $maxNonPagedResponseSize
             : new EnhancedCallLogsNonPagedResponseSize($maxNonPagedResponseSize);
        $this->maxNonPagedResponseSize->setElementName('maxNonPagedResponseSize');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsNonPagedResponseSize $maxNonPagedResponseSize
     */
    public function getMaxNonPagedResponseSize()
    {
        return ($this->maxNonPagedResponseSize)
            ? $this->maxNonPagedResponseSize->getElementValue()
            : null;
    }
}
