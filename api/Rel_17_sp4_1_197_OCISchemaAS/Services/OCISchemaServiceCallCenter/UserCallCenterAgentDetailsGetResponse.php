<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the UserCallCenterAgentDetailsGetRequest. 
 *         Contains the detail information for a Call Center Agent.
 */
class UserCallCenterAgentDetailsGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                         = __CLASS__;
    protected $isCallCenterBasicAssigned    = null;
    protected $isCallCenterStandardAssigned = null;
    protected $isCallCenterPremiumAssigned  = null;


    /**
     * 
     */
    public function setIsCallCenterBasicAssigned($isCallCenterBasicAssigned = null)
    {
        $this->isCallCenterBasicAssigned = (boolean) $isCallCenterBasicAssigned;
    }

    /**
     * 
     */
    public function getIsCallCenterBasicAssigned()
    {
        return (!$this->isCallCenterBasicAssigned) ?: $this->isCallCenterBasicAssigned->getValue();
    }

    /**
     * 
     */
    public function setIsCallCenterStandardAssigned($isCallCenterStandardAssigned = null)
    {
        $this->isCallCenterStandardAssigned = (boolean) $isCallCenterStandardAssigned;
    }

    /**
     * 
     */
    public function getIsCallCenterStandardAssigned()
    {
        return (!$this->isCallCenterStandardAssigned) ?: $this->isCallCenterStandardAssigned->getValue();
    }

    /**
     * 
     */
    public function setIsCallCenterPremiumAssigned($isCallCenterPremiumAssigned = null)
    {
        $this->isCallCenterPremiumAssigned = (boolean) $isCallCenterPremiumAssigned;
    }

    /**
     * 
     */
    public function getIsCallCenterPremiumAssigned()
    {
        return (!$this->isCallCenterPremiumAssigned) ?: $this->isCallCenterPremiumAssigned->getValue();
    }
}
