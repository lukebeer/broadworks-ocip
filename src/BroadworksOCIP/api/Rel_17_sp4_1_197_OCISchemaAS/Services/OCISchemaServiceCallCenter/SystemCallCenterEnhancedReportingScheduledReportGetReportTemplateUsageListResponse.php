<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest.
 *         Contains a table with column headings: "Schedule Name", "Organization Type", "Service Provider Id", 
 *         "Group Id", "Created By", "Created By Supervisor", and "Is Active".
 *          The "Organization Type" is either "Service Provider" or "Enterprise".
 *          The "Created By" can be either "Administrator" or user id if created by supervisor.
 *          The possible values for "Created By Supervisor" are "true" and "false".
 */
class SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse';
    protected $scheduleReportTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse $response
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
        $this->scheduleReportTable = $scheduleReportTable;
        $this->scheduleReportTable->setElementName('scheduleReportTable');
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
