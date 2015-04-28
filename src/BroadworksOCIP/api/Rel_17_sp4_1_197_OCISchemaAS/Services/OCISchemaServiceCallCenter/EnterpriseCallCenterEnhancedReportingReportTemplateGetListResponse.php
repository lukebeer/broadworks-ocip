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
 * Response to EnterpriseCallCenterEnhancedReportingReportTemplateGetListRequest.
 *         Contains a table with column headings: "Name", "Description", "Type" and "Enabled".
 */
class EnterpriseCallCenterEnhancedReportingReportTemplateGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseCallCenterEnhancedReportingReportTemplateGetListResponse';
    protected $reportTemplateTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\EnterpriseCallCenterEnhancedReportingReportTemplateGetListResponse $response
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
