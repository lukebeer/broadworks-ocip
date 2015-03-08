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
     * Response to GroupCallCenterEnhancedReportingScheduledReportGetCompletedListRequest 
 *         Contains a table with column headings : "Schedule Name", "Description", "Created By",
 *         "Is Supervisor Report", "Report Template Name", "Report Template Level" and "Recurring".
 *         The "Created By" can be either "Administrator" or user id if created by supervisor.
 *         The possible values for "Recurring" are "None", "Daily", "Weekly", "Monthly" and "Yearly". 
 *         The possible values for "Report Template Level" are "System" and "Group".
 */
class GroupCallCenterEnhancedReportingScheduledReportGetCompletedListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE         = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\GroupCallCenterEnhancedReportingScheduledReportGetCompletedListResponse';
    public    $name                 = __CLASS__;
    protected $scheduledReportTable = null;


    /**
     * 
     */
    public function setScheduledReportTable(core:OCITable $scheduledReportTable = null)
    {
        $this->scheduledReportTable = core:OCITable $scheduledReportTable;
    }

    /**
     * 
     */
    public function getScheduledReportTable()
    {
        return (!$this->scheduledReportTable) ?: $this->scheduledReportTable->getValue();
    }
}
