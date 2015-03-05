<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to EnterpriseCallCenterEnhancedReportingScheduledReportGetActiveListRequest. 
 *         Contains a table with column headings : "Schedule Name", "Description", "Created By",
 *         "Is Supervisor Report", "Report Template Name", "Report Template Level" and "Recurring".
 *         The "Created By" can be either "Administrator" or user id if created by supervisor.
 *         The possible values for "Recurring" are "None", "Daily", "Weekly", "Monthly" and "Yearly". 
 *         The possible values for "Report Level" are "System" and "Enterprise".
 */
class EnterpriseCallCenterEnhancedReportingScheduledReportGetActiveListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $scheduledReportTable
    ) {
        $this->scheduledReportTable = $scheduledReportTable;
        $this->args                 = func_get_args();
    }

    public function setScheduledReportTable($scheduledReportTable)
    {
        $scheduledReportTable and $this->scheduledReportTable = new core:OCITable($scheduledReportTable);
    }

    public function getScheduledReportTable()
    {
        return (!$this->scheduledReportTable) ?: $this->scheduledReportTable->value();
    }
}
