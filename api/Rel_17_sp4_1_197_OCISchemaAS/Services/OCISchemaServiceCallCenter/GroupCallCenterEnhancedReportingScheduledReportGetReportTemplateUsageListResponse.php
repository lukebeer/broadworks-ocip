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
     * Response to GroupCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest.
 *         Contains a table with column headings: "Schedule Name", "Created By", "Created By Supervisor",
 *         and "Is Active".
 *         The "Created By" can be either "Administrator" or user id if created by supervisor.
 */
class GroupCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $scheduleReportTable = null;


    /**
     * 
     */
    public function setScheduleReportTable(core:OCITable $scheduleReportTable = null)
    {
        $this->scheduleReportTable =  $scheduleReportTable;
    }

    /**
     * 
     */
    public function getScheduleReportTable()
    {
        return (!$this->scheduleReportTable) ?: $this->scheduleReportTable->getValue();
    }
}
