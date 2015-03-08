<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ASRRetransmissionDelayMilliSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ASRMaxTransmissions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to modify Application Server Registration system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemASRParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
    protected $maxTransmissions                = null;
    protected $retransmissionDelayMilliSeconds = null;
    protected $listeningPort                   = null;
    protected $sourceAddress                   = null;

    public function __construct(
         $maxTransmissions = null,
         $retransmissionDelayMilliSeconds = null,
         $listeningPort = null,
         $sourceAddress = null
    ) {
        $this->setMaxTransmissions($maxTransmissions);
        $this->setRetransmissionDelayMilliSeconds($retransmissionDelayMilliSeconds);
        $this->setListeningPort($listeningPort);
        $this->setSourceAddress($sourceAddress);
    }

    /**
     * Maximum number of transmissions.
     */
    public function setMaxTransmissions($maxTransmissions = null)
    {
        $this->maxTransmissions = ($maxTransmissions InstanceOf ASRMaxTransmissions)
             ? $maxTransmissions
             : new ASRMaxTransmissions($maxTransmissions);
    }

    /**
     * Maximum number of transmissions.
     */
    public function getMaxTransmissions()
    {
        return (!$this->maxTransmissions) ?: $this->maxTransmissions->getValue();
    }

    /**
     * Retransmission timer
     */
    public function setRetransmissionDelayMilliSeconds($retransmissionDelayMilliSeconds = null)
    {
        $this->retransmissionDelayMilliSeconds = ($retransmissionDelayMilliSeconds InstanceOf ASRRetransmissionDelayMilliSeconds)
             ? $retransmissionDelayMilliSeconds
             : new ASRRetransmissionDelayMilliSeconds($retransmissionDelayMilliSeconds);
    }

    /**
     * Retransmission timer
     */
    public function getRetransmissionDelayMilliSeconds()
    {
        return (!$this->retransmissionDelayMilliSeconds) ?: $this->retransmissionDelayMilliSeconds->getValue();
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function setListeningPort($listeningPort = null)
    {
        $this->listeningPort = ($listeningPort InstanceOf Port1025)
             ? $listeningPort
             : new Port1025($listeningPort);
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function getListeningPort()
    {
        return (!$this->listeningPort) ?: $this->listeningPort->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setSourceAddress($sourceAddress = null)
    {
        $this->sourceAddress = ($sourceAddress InstanceOf NetAddress)
             ? $sourceAddress
             : new NetAddress($sourceAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getSourceAddress()
    {
        return (!$this->sourceAddress) ?: $this->sourceAddress->getValue();
    }
}