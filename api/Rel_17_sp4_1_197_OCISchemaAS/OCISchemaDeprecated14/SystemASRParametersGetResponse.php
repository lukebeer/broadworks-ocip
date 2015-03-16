<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ASRRetransmissionDelayMilliSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ASRMaxTransmissions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemASRParametersGetRequest.
 *         Contains a list of system Application Server Registration parameters.
 *         Replaced By: SystemASRParametersGetResponse14sp5
 */
class SystemASRParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemASRParametersGetResponse';
    protected $maxTransmissions;
    protected $retransmissionDelayMilliSeconds;
    protected $listeningPort;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemASRParametersGetResponse $response
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
        $this->maxTransmissions->setName('maxTransmissions');
        return $this;
    }

    /**
     * 
     * @return ASRMaxTransmissions $maxTransmissions
     */
    public function getMaxTransmissions()
    {
        return ($this->maxTransmissions) ? $this->maxTransmissions->getValue() : null;
    }

    /**
     * 
     */
    public function setRetransmissionDelayMilliSeconds($retransmissionDelayMilliSeconds = null)
    {
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
        return ($this->retransmissionDelayMilliSeconds) ? $this->retransmissionDelayMilliSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setListeningPort($listeningPort = null)
    {
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
        return ($this->listeningPort) ? $this->listeningPort->getValue() : null;
    }
}
