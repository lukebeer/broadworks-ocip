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
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemASRParametersGetRequest14sp5.
 *         Contains a list of system Application Server Registration parameters.
 */
class SystemASRParametersGetResponse14sp5 extends ComplexType implements ComplexInterface
{
    public    $name                            = 'SystemASRParametersGetResponse14sp5';
    protected $maxTransmissions                = null;
    protected $retransmissionDelayMilliSeconds = null;
    protected $listeningPort                   = null;
    protected $sourceAddress                   = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemASRParametersGetResponse14sp5 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setMaxTransmissions($maxTransmissions = null)
    {
        if (!$maxTransmissions) return $this;
        $this->maxTransmissions = ($maxTransmissions InstanceOf ASRMaxTransmissions)
             ? $maxTransmissions
             : new ASRMaxTransmissions($maxTransmissions);
        $this->maxTransmissions->setName('maxTransmissions');
        return $this;
    }

    /**
     * 
     * @return ASRMaxTransmissions $maxTransmissions
     */
    public function getMaxTransmissions()
    {
        return $this->maxTransmissions->getValue();
    }

    /**
     * 
     */
    public function setRetransmissionDelayMilliSeconds($retransmissionDelayMilliSeconds = null)
    {
        if (!$retransmissionDelayMilliSeconds) return $this;
        $this->retransmissionDelayMilliSeconds = ($retransmissionDelayMilliSeconds InstanceOf ASRRetransmissionDelayMilliSeconds)
             ? $retransmissionDelayMilliSeconds
             : new ASRRetransmissionDelayMilliSeconds($retransmissionDelayMilliSeconds);
        $this->retransmissionDelayMilliSeconds->setName('retransmissionDelayMilliSeconds');
        return $this;
    }

    /**
     * 
     * @return ASRRetransmissionDelayMilliSeconds $retransmissionDelayMilliSeconds
     */
    public function getRetransmissionDelayMilliSeconds()
    {
        return $this->retransmissionDelayMilliSeconds->getValue();
    }

    /**
     * 
     */
    public function setListeningPort($listeningPort = null)
    {
        if (!$listeningPort) return $this;
        $this->listeningPort = ($listeningPort InstanceOf Port1025)
             ? $listeningPort
             : new Port1025($listeningPort);
        $this->listeningPort->setName('listeningPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $listeningPort
     */
    public function getListeningPort()
    {
        return $this->listeningPort->getValue();
    }

    /**
     * 
     */
    public function setSourceAddress($sourceAddress = null)
    {
        if (!$sourceAddress) return $this;
        $this->sourceAddress = ($sourceAddress InstanceOf NetAddress)
             ? $sourceAddress
             : new NetAddress($sourceAddress);
        $this->sourceAddress->setName('sourceAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $sourceAddress
     */
    public function getSourceAddress()
    {
        return $this->sourceAddress->getValue();
    }
}
