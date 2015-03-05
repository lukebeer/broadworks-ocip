<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringCallType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkServerCallType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a Communication Barring Call Type.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCommunicationBarringCallTypeAddRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $callType,
             $networkServerCallType
    ) {
        $this->callType              = new CommunicationBarringCallType($callType);
        $this->networkServerCallType = $networkServerCallType;
        $this->args                  = func_get_args();
    }

    public function setCallType($callType)
    {
        $callType and $this->callType = new CommunicationBarringCallType($callType);
    }

    public function getCallType()
    {
        return (!$this->callType) ?: $this->callType->value();
    }

    public function setNetworkServerCallType($networkServerCallType)
    {
        $networkServerCallType and $this->networkServerCallType = new NetworkServerCallType($networkServerCallType);
    }

    public function getNetworkServerCallType()
    {
        return (!$this->networkServerCallType) ?: $this->networkServerCallType->value();
    }
}
