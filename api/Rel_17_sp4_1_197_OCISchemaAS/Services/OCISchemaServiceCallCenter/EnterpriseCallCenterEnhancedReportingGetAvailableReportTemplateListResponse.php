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
 * Response to EnterpriseCallCenterEnhancedReportingGetAvailableReportTemplateListRequest. 
 *         Contains a table with column headings: "Name", "Description" and "Level", "Is Agent Required", 
 *         "Is Call Center Required", "Is Call Center Dnis Required", "Is Real Time Report", "Is Sampling Period Required", 
 *         "Call Completion Threshold Parameter", "Short Duration Threshold Parameter", 
 *         "Service Level Threshold Parameter", "Service Level Inclusions Parameter", "Service Level Objective Threshold Parameter",
 *         "Abandoned Call Threshold Parameter", "Service Level Threshold Parameter Number", 
 *         "Abandoned Call Threshold Parameter Number" and "Scope".
 *         The possible values for "Level" are "System" and "Enterprise".
 *         The possible values for "Is Agent Required", "Is Call Center Required", "Is Call Center Dnis Required", "Is Real Time Report" and
 *         "Is Sampling Period Required" are "true" and "false".
 *         The possible values for "Call Completion Threshold Parameter", "Short Duration Threshold Parameter", 
 *         "Service Level Threshold Parameter", "Service Level Inclusions Parameter", "Service Level Objective Threshold Parameter"
 *         and "Abandoned Call Threshold Parameter" are "Required", "Hidden" and "Does Not Apply".
 *         The possible values for "Scope" are "Supervisor Only" and "Supervisor and Agent".
 */
class EnterpriseCallCenterEnhancedReportingGetAvailableReportTemplateListResponse extends ComplexType implements ComplexInterface
{
    public    $name                = 'EnterpriseCallCenterEnhancedReportingGetAvailableReportTemplateListResponse';
    protected $reportTemplateTable = null;

    /**
     * @return EnterpriseCallCenterEnhancedReportingGetAvailableReportTemplateListResponse
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
        return $this->reportTemplateTable->getValue();
    }
}
