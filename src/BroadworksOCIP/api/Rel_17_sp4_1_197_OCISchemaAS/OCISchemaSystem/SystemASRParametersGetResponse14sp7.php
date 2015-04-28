<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ASRRetransmissionDelayMilliSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ASRMaxTransmissions;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemASRParametersGetRequest14sp7.
 *         Contains a list of system Application Server Registration parameters.
 */
class SystemASRParametersGetResponse14sp7 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemASRParametersGetResponse14sp7';
    protected $maxTransmissions;
    protected $retransmissionDelayMilliSeconds;
    protected $listeningPort;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemASRParametersGetResponse14sp7 $response
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
        $this->maxTransmissions = ($maxTransmissions InstanceOf ASRMaxTransmissions)
             ? $maxTransmissions
             : new ASRMaxTransmissions($maxTransmissions);
        $this->maxTransmissions->setElementName('maxTransmissions');
        return $this;
    }

    /**
     * 
     * @return ASRMaxTransmissions $maxTransmissions
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
    public function setRetransmissionDelayMilliSeconds($retransmissionDelayMilliSeconds = null)
    {
        $this->retransmissionDelayMilliSeconds = ($retransmissionDelayMilliSeconds InstanceOf ASRRetransmissionDelayMilliSeconds)
             ? $retransmissionDelayMilliSeconds
             : new ASRRetransmissionDelayMilliSeconds($retransmissionDelayMilliSeconds);
        $this->retransmissionDelayMilliSeconds->setElementName('retransmissionDelayMilliSeconds');
        return $this;
    }

    /**
     * 
     * @return ASRRetransmissionDelayMilliSeconds $retransmissionDelayMilliSeconds
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
    public function setListeningPort($listeningPort = null)
    {
        $this->listeningPort = ($listeningPort InstanceOf Port1025)
             ? $listeningPort
             : new Port1025($listeningPort);
        $this->listeningPort->setElementName('listeningPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $listeningPort
     */
    public function getListeningPort()
    {
        return ($this->listeningPort)
            ? $this->listeningPort->getElementValue()
            : null;
    }
}
