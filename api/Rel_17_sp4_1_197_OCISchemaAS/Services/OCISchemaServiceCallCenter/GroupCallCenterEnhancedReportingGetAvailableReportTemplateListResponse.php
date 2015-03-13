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
    public    $name                = 'GroupCallCenterEnhancedReportingGetAvailableReportTemplateListResponse';
    protected $reportTemplateTable = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterEnhancedReportingGetAvailableReportTemplateListResponse $response
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
        if (!$reportTemplateTable) return $this;
        $this->reportTemplateTable = $reportTemplateTable;
        $this->reportTemplateTable->setName('reportTemplateTable');
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
