<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest.
 *         Contains a table with column headings: "Schedule Name", "Created By", "Created By Supervisor",
 *         and "Is Active".
 *         The "Created By" can be either "Administrator" or user id if created by supervisor.
 */
class GroupCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse extends ComplexType implements ComplexInterface
{
    public    $name                = 'GroupCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse';
    protected $scheduleReportTable = null;

    /**
     * @return GroupCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setScheduleReportTable(TableType $scheduleReportTable = null)
    {
        if (!$scheduleReportTable) return $this;
        $this->scheduleReportTable = $scheduleReportTable;
        $this->scheduleReportTable->setName('scheduleReportTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getScheduleReportTable()
    {
        return $this->scheduleReportTable;
    }
}
