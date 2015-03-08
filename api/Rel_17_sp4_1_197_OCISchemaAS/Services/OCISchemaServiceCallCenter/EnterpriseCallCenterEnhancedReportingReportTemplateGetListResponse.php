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
     * Response to EnterpriseCallCenterEnhancedReportingReportTemplateGetListRequest.
 *         Contains a table with column headings: "Name", "Description", "Type" and "Enabled".
 */
class EnterpriseCallCenterEnhancedReportingReportTemplateGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $reportTemplateTable = null;


    /**
     * 
     */
    public function setReportTemplateTable(core:OCITable $reportTemplateTable = null)
    {
        $this->reportTemplateTable =  $reportTemplateTable;
    }

    /**
     * 
     */
    public function getReportTemplateTable()
    {
        return (!$this->reportTemplateTable) ?: $this->reportTemplateTable->getValue();
    }
}
