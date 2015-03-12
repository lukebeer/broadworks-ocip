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
 * Response to SystemCallCenterEnhancedReportingReportTemplateGetListRequest. 
 *         Contains a table with column headings: "Name", "Description", "Is Custom", "Type" and "Enabled"
 */
class SystemCallCenterEnhancedReportingReportTemplateGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                = 'SystemCallCenterEnhancedReportingReportTemplateGetListResponse';
    protected $reportTemplateTable = null;

    /**
     * @return SystemCallCenterEnhancedReportingReportTemplateGetListResponse
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
