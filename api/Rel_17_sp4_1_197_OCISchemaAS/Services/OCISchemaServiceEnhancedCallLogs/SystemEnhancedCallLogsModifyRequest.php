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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEnhancedCallLogs\SystemEnhancedCallLogsModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the system level data associated with Enhanced Call Logs.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemEnhancedCallLogsModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
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
     * @return SystemEnhancedCallLogsModifyResponse
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
        $this->isSendEnabled = (boolean) $isSendEnabled;
    }

    /**
     * 
     */
    public function getIsSendEnabled()
    {
        return (!$this->isSendEnabled) ?: $this->isSendEnabled;
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setServer1NetAddress($server1NetAddress = null)
    {
        $this->server1NetAddress = ($server1NetAddress InstanceOf NetAddress)
             ? $server1NetAddress
             : new NetAddress($server1NetAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getServer1NetAddress()
    {
        return (!$this->server1NetAddress) ?: $this->server1NetAddress->getValue();
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function setServer1SendPort($server1SendPort = null)
    {
        $this->server1SendPort = ($server1SendPort InstanceOf Port1025)
             ? $server1SendPort
             : new Port1025($server1SendPort);
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function getServer1SendPort()
    {
        return (!$this->server1SendPort) ?: $this->server1SendPort->getValue();
    }

    /**
     * TCP/IP Port.
     */
    public function setServer1RetrievePort($server1RetrievePort = null)
    {
        $this->server1RetrievePort = ($server1RetrievePort InstanceOf Port)
             ? $server1RetrievePort
             : new Port($server1RetrievePort);
    }

    /**
     * TCP/IP Port.
     */
    public function getServer1RetrievePort()
    {
        return (!$this->server1RetrievePort) ?: $this->server1RetrievePort->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setServer2NetAddress($server2NetAddress = null)
    {
        $this->server2NetAddress = ($server2NetAddress InstanceOf NetAddress)
             ? $server2NetAddress
             : new NetAddress($server2NetAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getServer2NetAddress()
    {
        return (!$this->server2NetAddress) ?: $this->server2NetAddress->getValue();
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function setServer2SendPort($server2SendPort = null)
    {
        $this->server2SendPort = ($server2SendPort InstanceOf Port1025)
             ? $server2SendPort
             : new Port1025($server2SendPort);
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function getServer2SendPort()
    {
        return (!$this->server2SendPort) ?: $this->server2SendPort->getValue();
    }

    /**
     * TCP/IP Port.
     */
    public function setServer2RetrievePort($server2RetrievePort = null)
    {
        $this->server2RetrievePort = ($server2RetrievePort InstanceOf Port)
             ? $server2RetrievePort
             : new Port($server2RetrievePort);
    }

    /**
     * TCP/IP Port.
     */
    public function getServer2RetrievePort()
    {
        return (!$this->server2RetrievePort) ?: $this->server2RetrievePort->getValue();
    }

    /**
     * Shared Secret.
     */
    public function setSharedSecret($sharedSecret = null)
    {
        $this->sharedSecret = ($sharedSecret InstanceOf EnhancedCallLogsSharedSecret)
             ? $sharedSecret
             : new EnhancedCallLogsSharedSecret($sharedSecret);
    }

    /**
     * Shared Secret.
     */
    public function getSharedSecret()
    {
        return (!$this->sharedSecret) ?: $this->sharedSecret->getValue();
    }

    /**
     * Retransmission delay in milli-seconds.
     */
    public function setRetransmissionDelayMilliSeconds($retransmissionDelayMilliSeconds = null)
    {
        $this->retransmissionDelayMilliSeconds = ($retransmissionDelayMilliSeconds InstanceOf EnhancedCallLogsRetransmissionDelayMilliSeconds)
             ? $retransmissionDelayMilliSeconds
             : new EnhancedCallLogsRetransmissionDelayMilliSeconds($retransmissionDelayMilliSeconds);
    }

    /**
     * Retransmission delay in milli-seconds.
     */
    public function getRetransmissionDelayMilliSeconds()
    {
        return (!$this->retransmissionDelayMilliSeconds) ?: $this->retransmissionDelayMilliSeconds->getValue();
    }

    /**
     * Maximum transmissions.
     */
    public function setMaxTransmissions($maxTransmissions = null)
    {
        $this->maxTransmissions = ($maxTransmissions InstanceOf EnhancedCallLogsMaxTransmissions)
             ? $maxTransmissions
             : new EnhancedCallLogsMaxTransmissions($maxTransmissions);
    }

    /**
     * Maximum transmissions.
     */
    public function getMaxTransmissions()
    {
        return (!$this->maxTransmissions) ?: $this->maxTransmissions->getValue();
    }

    /**
     * Timeout when retrieving enhanced call logs through the SOAP interface.
     */
    public function setSoapTimeoutSeconds($soapTimeoutSeconds = null)
    {
        $this->soapTimeoutSeconds = ($soapTimeoutSeconds InstanceOf EnhancedCallLogsSoapTimeoutSeconds)
             ? $soapTimeoutSeconds
             : new EnhancedCallLogsSoapTimeoutSeconds($soapTimeoutSeconds);
    }

    /**
     * Timeout when retrieving enhanced call logs through the SOAP interface.
     */
    public function getSoapTimeoutSeconds()
    {
        return (!$this->soapTimeoutSeconds) ?: $this->soapTimeoutSeconds->getValue();
    }

    /**
     * 
     */
    public function setUseDBS($useDBS = null)
    {
        $this->useDBS = (boolean) $useDBS;
    }

    /**
     * 
     */
    public function getUseDBS()
    {
        return (!$this->useDBS) ?: $this->useDBS;
    }

    /**
     * The maximum number of call log entries to return when paging information is
     *         not specified in the request.
     */
    public function setMaxNonPagedResponseSize($maxNonPagedResponseSize = null)
    {
        $this->maxNonPagedResponseSize = ($maxNonPagedResponseSize InstanceOf EnhancedCallLogsNonPagedResponseSize)
             ? $maxNonPagedResponseSize
             : new EnhancedCallLogsNonPagedResponseSize($maxNonPagedResponseSize);
    }

    /**
     * The maximum number of call log entries to return when paging information is
     *         not specified in the request.
     */
    public function getMaxNonPagedResponseSize()
    {
        return (!$this->maxNonPagedResponseSize) ?: $this->maxNonPagedResponseSize->getValue();
    }
}
