<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemDnGetSummaryListRequest.
 *         The column headings are "Phone Numbers, "Service Provider Id" and "Is Enterprise"
 */
class SystemDnGetSummaryListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemDnGetSummaryListResponse';
    protected $dnSummaryTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemDnGetSummaryListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDnSummaryTable(TableType $dnSummaryTable = null)
    {
        $this->dnSummaryTable = $dnSummaryTable;
        $this->dnSummaryTable->setElementName('dnSummaryTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getDnSummaryTable()
    {
        return $this->dnSummaryTable;
    }
}
