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
     * Contains Call Center queue status and a table with column headings: "User Id", "First Name", "Last Name"
 */
class GroupCallCenterGetInstanceQueueStatusResponse extends ComplexType implements ComplexInterface
{
    public    $name                   = __CLASS__;
    protected $numberOfCallsQueuedNow = null;
    protected $agentsCurrentlyStaffed = null;


    /**
     * 
     */
    public function setNumberOfCallsQueuedNow($numberOfCallsQueuedNow = null)
    {
        $this->numberOfCallsQueuedNow = (int) $numberOfCallsQueuedNow;
    }

    /**
     * 
     */
    public function getNumberOfCallsQueuedNow()
    {
        return (!$this->numberOfCallsQueuedNow) ?: $this->numberOfCallsQueuedNow->getValue();
    }

    /**
     * 
     */
    public function setAgentsCurrentlyStaffed(core:OCITable $agentsCurrentlyStaffed = null)
    {
        $this->agentsCurrentlyStaffed =  $agentsCurrentlyStaffed;
    }

    /**
     * 
     */
    public function getAgentsCurrentlyStaffed()
    {
        return (!$this->agentsCurrentlyStaffed) ?: $this->agentsCurrentlyStaffed->getValue();
    }
}
