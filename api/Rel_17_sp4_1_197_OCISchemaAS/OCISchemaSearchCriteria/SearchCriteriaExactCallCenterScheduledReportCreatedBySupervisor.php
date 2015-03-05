<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Criteria for searching for call center scheduled report created by a
 *         supervisor or administrator.
 */
class SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $createdBySupervisor
    ) {
        $this->createdBySupervisor = $createdBySupervisor;
        $this->args                = func_get_args();
    }

    public function setCreatedBySupervisor($createdBySupervisor)
    {
        $createdBySupervisor and $this->createdBySupervisor = new xs:boolean($createdBySupervisor);
    }

    public function getCreatedBySupervisor()
    {
        return (!$this->createdBySupervisor) ?: $this->createdBySupervisor->value();
    }
}
