<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DTMFTransmissionMethod;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DtmfTransmissionSignalingContentType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the DTMF transmission settings.
 *       The response is either SuccessResponse or an ErrorResponse.
 */
class SystemDTMFTransmissionModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $transmissionMethod=null,
             $signalingContentType=null
    ) {
        $this->transmissionMethod   = $transmissionMethod;
        $this->signalingContentType = $signalingContentType;
        $this->args                 = func_get_args();
    }

    public function setTransmissionMethod($transmissionMethod)
    {
        $transmissionMethod and $this->transmissionMethod = new DTMFTransmissionMethod($transmissionMethod);
    }

    public function getTransmissionMethod()
    {
        return (!$this->transmissionMethod) ?: $this->transmissionMethod->value();
    }

    public function setSignalingContentType($signalingContentType)
    {
        $signalingContentType and $this->signalingContentType = new DtmfTransmissionSignalingContentType($signalingContentType);
    }

    public function getSignalingContentType()
    {
        return (!$this->signalingContentType) ?: $this->signalingContentType->value();
    }
}
