<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:int;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Contains Call Center queue status and a table with column headings: "User Id", "First Name", "Last Name"
 */
class GroupCallCenterGetInstanceQueueStatusResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $numberOfCallsQueuedNow,
             $agentsCurrentlyStaffed
    ) {
        $this->numberOfCallsQueuedNow = $numberOfCallsQueuedNow;
        $this->agentsCurrentlyStaffed = $agentsCurrentlyStaffed;
        $this->args                   = func_get_args();
    }

    public function setNumberOfCallsQueuedNow($numberOfCallsQueuedNow)
    {
        $numberOfCallsQueuedNow and $this->numberOfCallsQueuedNow = new xs:int($numberOfCallsQueuedNow);
    }

    public function getNumberOfCallsQueuedNow()
    {
        return (!$this->numberOfCallsQueuedNow) ?: $this->numberOfCallsQueuedNow->value();
    }

    public function setAgentsCurrentlyStaffed($agentsCurrentlyStaffed)
    {
        $agentsCurrentlyStaffed and $this->agentsCurrentlyStaffed = new core:OCITable($agentsCurrentlyStaffed);
    }

    public function getAgentsCurrentlyStaffed()
    {
        return (!$this->agentsCurrentlyStaffed) ?: $this->agentsCurrentlyStaffed->value();
    }
}
