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
 * Response to EnterpriseCallCenterEnhancedReportingScheduledReportGetActiveListRequest. 
 *         Contains a table with column headings : "Schedule Name", "Description", "Created By",
 *         "Is Supervisor Report", "Report Template Name", "Report Template Level" and "Recurring".
 *         The "Created By" can be either "Administrator" or user id if created by supervisor.
 *         The possible values for "Recurring" are "None", "Daily", "Weekly", "Monthly" and "Yearly". 
 *         The possible values for "Report Level" are "System" and "Enterprise".
 */
class EnterpriseCallCenterEnhancedReportingScheduledReportGetActiveListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseCallCenterEnhancedReportingScheduledReportGetActiveListResponse';
    protected $scheduledReportTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\EnterpriseCallCenterEnhancedReportingScheduledReportGetActiveListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setScheduledReportTable(TableType $scheduledReportTable = null)
    {
        $this->scheduledReportTable = $scheduledReportTable;
        $this->scheduledReportTable->setElementName('scheduledReportTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getScheduledReportTable()
    {
        return $this->scheduledReportTable;
    }
}
