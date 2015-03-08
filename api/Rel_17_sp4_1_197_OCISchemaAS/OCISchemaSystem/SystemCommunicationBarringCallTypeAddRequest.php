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
     * Add a Communication Barring Call Type.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCommunicationBarringCallTypeAddRequest extends ComplexType implements ComplexInterface
{
    public    $name                  = __CLASS__;
    protected $callType              = null;
    protected $networkServerCallType = null;

    public function __construct(
         $callType,
         $networkServerCallType
    ) {
        $this->setCallType($callType);
        $this->setNetworkServerCallType($networkServerCallType);
    }

    /**
     * Communication Barring Call Type.
     */
    public function setCallType($callType = null)
    {
        $this->callType = ($callType InstanceOf CommunicationBarringCallType)
             ? $callType
             : new CommunicationBarringCallType($callType);
    }

    /**
     * Communication Barring Call Type.
     */
    public function getCallType()
    {
        return (!$this->callType) ?: $this->callType->getValue();
    }

    /**
     * Network Server Call Type.
     */
    public function setNetworkServerCallType($networkServerCallType = null)
    {
        $this->networkServerCallType = ($networkServerCallType InstanceOf NetworkServerCallType)
             ? $networkServerCallType
             : new NetworkServerCallType($networkServerCallType);
    }

    /**
     * Network Server Call Type.
     */
    public function getNetworkServerCallType()
    {
        return (!$this->networkServerCallType) ?: $this->networkServerCallType->getValue();
    }
}
