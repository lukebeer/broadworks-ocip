<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserCallCenterAgentDetailsGetRequest. 
 *         Contains the detail information for a Call Center Agent.
 */
class UserCallCenterAgentDetailsGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isCallCenterBasicAssigned,
             $isCallCenterStandardAssigned,
             $isCallCenterPremiumAssigned
    ) {
        $this->isCallCenterBasicAssigned    = $isCallCenterBasicAssigned;
        $this->isCallCenterStandardAssigned = $isCallCenterStandardAssigned;
        $this->isCallCenterPremiumAssigned  = $isCallCenterPremiumAssigned;
        $this->args                         = func_get_args();
    }

    public function setIsCallCenterBasicAssigned($isCallCenterBasicAssigned)
    {
        $isCallCenterBasicAssigned and $this->isCallCenterBasicAssigned = new xs:boolean($isCallCenterBasicAssigned);
    }

    public function getIsCallCenterBasicAssigned()
    {
        return (!$this->isCallCenterBasicAssigned) ?: $this->isCallCenterBasicAssigned->value();
    }

    public function setIsCallCenterStandardAssigned($isCallCenterStandardAssigned)
    {
        $isCallCenterStandardAssigned and $this->isCallCenterStandardAssigned = new xs:boolean($isCallCenterStandardAssigned);
    }

    public function getIsCallCenterStandardAssigned()
    {
        return (!$this->isCallCenterStandardAssigned) ?: $this->isCallCenterStandardAssigned->value();
    }

    public function setIsCallCenterPremiumAssigned($isCallCenterPremiumAssigned)
    {
        $isCallCenterPremiumAssigned and $this->isCallCenterPremiumAssigned = new xs:boolean($isCallCenterPremiumAssigned);
    }

    public function getIsCallCenterPremiumAssigned()
    {
        return (!$this->isCallCenterPremiumAssigned) ?: $this->isCallCenterPremiumAssigned->value();
    }
}
