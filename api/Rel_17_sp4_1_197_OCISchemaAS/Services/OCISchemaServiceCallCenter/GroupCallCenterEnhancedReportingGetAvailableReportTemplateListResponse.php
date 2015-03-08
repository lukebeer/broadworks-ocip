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
    const     RESPONSE_TYPE        = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\GroupCallCenterEnhancedReportingGetAvailableReportTemplateListResponse';
    public    $name                = __CLASS__;
    protected $reportTemplateTable = null;


    /**
     * 
     */
    public function setReportTemplateTable(core:OCITable $reportTemplateTable = null)
    {
        $this->reportTemplateTable = core:OCITable $reportTemplateTable;
    }

    /**
     * 
     */
    public function getReportTemplateTable()
    {
        return (!$this->reportTemplateTable) ?: $this->reportTemplateTable->getValue();
    }
}