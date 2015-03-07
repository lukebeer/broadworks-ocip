<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringCallType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkServerCallType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a Communication Barring Call Type.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCommunicationBarringCallTypeModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                   = __CLASS__;
    protected $callType               = null;
    protected $networkServerCallType  = null;

    public function __construct(
         $callType,
         $networkServerCallType = null
    ) {
        $this->setCallType($callType);
        $this->setNetworkServerCallType($networkServerCallType);
    }

    public function setCallType($callType = null)
    {
        $this->callType = ($callType InstanceOf CommunicationBarringCallType)
             ? $callType
             : new CommunicationBarringCallType($callType);
    }

    public function getCallType()
    {
        return (!$this->callType) ?: $this->callType->value();
    }

    public function setNetworkServerCallType($networkServerCallType = null)
    {
        $this->networkServerCallType = ($networkServerCallType InstanceOf NetworkServerCallType)
             ? $networkServerCallType
             : new NetworkServerCallType($networkServerCallType);
    }

    public function getNetworkServerCallType()
    {
        return (!$this->networkServerCallType) ?: $this->networkServerCallType->value();
    }
}
