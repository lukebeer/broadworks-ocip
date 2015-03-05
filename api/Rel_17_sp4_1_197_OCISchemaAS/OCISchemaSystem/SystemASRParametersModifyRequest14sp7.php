<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ASRMaxTransmissions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ASRRetransmissionDelayMilliSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify Application Server Registration system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemASRParametersModifyRequest14sp7 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $maxTransmissions=null,
             $retransmissionDelayMilliSeconds=null,
             $listeningPort=null
    ) {
        $this->maxTransmissions                = $maxTransmissions;
        $this->retransmissionDelayMilliSeconds = $retransmissionDelayMilliSeconds;
        $this->listeningPort                   = new Port1025($listeningPort);
        $this->args                            = func_get_args();
    }

    public function setMaxTransmissions($maxTransmissions)
    {
        $maxTransmissions and $this->maxTransmissions = new ASRMaxTransmissions($maxTransmissions);
    }

    public function getMaxTransmissions()
    {
        return (!$this->maxTransmissions) ?: $this->maxTransmissions->value();
    }

    public function setRetransmissionDelayMilliSeconds($retransmissionDelayMilliSeconds)
    {
        $retransmissionDelayMilliSeconds and $this->retransmissionDelayMilliSeconds = new ASRRetransmissionDelayMilliSeconds($retransmissionDelayMilliSeconds);
    }

    public function getRetransmissionDelayMilliSeconds()
    {
        return (!$this->retransmissionDelayMilliSeconds) ?: $this->retransmissionDelayMilliSeconds->value();
    }

    public function setListeningPort($listeningPort)
    {
        $listeningPort and $this->listeningPort = new Port1025($listeningPort);
    }

    public function getListeningPort()
    {
        return (!$this->listeningPort) ?: $this->listeningPort->value();
    }
}
