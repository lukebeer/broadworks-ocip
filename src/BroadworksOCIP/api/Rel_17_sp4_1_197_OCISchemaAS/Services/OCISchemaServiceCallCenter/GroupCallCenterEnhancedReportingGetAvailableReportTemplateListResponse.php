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
 * Response to GroupCallCenterEnhancedReportingGetAvailableReportTemplateListRequest.
 *         Contains a table with column headings: "Name", "Description" and "Level", "Is Agent Required", 
 *         "Is Call Center Required", "Is Call Center Dnis Required","Is Real Time Report", "Is Sampling Period Required", 
 *         "Call Completion Threshold Parameter", "Short Duration Threshold Parameter", 
 *         "Service Level Threshold Parameter", "Service Level Inclusions Parameter", "Service Level Objective Threshold Parameter", 
 *         "Abandoned Call Threshold Parameter", "Service Level Threshold Parameter Number", 
 *         and "Abandoned Call Threshold Parameter Number".
 *         The possible values for "Level" are "System" and "Group".
 *         The possible values for "Is Agent Required", "Is Call Center Required", "Is Call Center Dnis Required", 
 *         "Is Real Time Report" and "Is Sampling Period Required" are "true" and "false".
 *         The possible values for "Call Completion Threshold Parameter", "Short Duration Threshold Parameter", 
 *         "Service Level Threshold Parameter", "Service Level Inclusions Parameter","Service Level Objective Threshold Parameter" 
 *         and "Abandoned Call Threshold Parameter" are "Required", "Hidden" and "Does Not Apply".
 */
class GroupCallCenterEnhancedReportingGetAvailableReportTemplateListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterEnhancedReportingGetAvailableReportTemplateListResponse';
    protected $reportTemplateTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterEnhancedReportingGetAvailableReportTemplateListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setReportTemplateTable(TableType $reportTemplateTable = null)
    {
        $this->reportTemplateTable = $reportTemplateTable;
        $this->reportTemplateTable->setElementName('reportTemplateTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getReportTemplateTable()
    {
        return $this->reportTemplateTable;
    }
}
