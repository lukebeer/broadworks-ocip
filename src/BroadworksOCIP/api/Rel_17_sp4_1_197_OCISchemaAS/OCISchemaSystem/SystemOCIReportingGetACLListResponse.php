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
 * Response to SystemOCIReportingACLListGetRequest.
 *         Contains a table with one row per access control list entry.
 *         The table columns are "Net Address", "Description" and "Restrict Messages".
 */
class SystemOCIReportingGetACLListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemOCIReportingGetACLListResponse';
    protected $ociReportingACLTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemOCIReportingGetACLListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setOciReportingACLTable(TableType $ociReportingACLTable = null)
    {
        $this->ociReportingACLTable = $ociReportingACLTable;
        $this->ociReportingACLTable->setElementName('ociReportingACLTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getOciReportingACLTable()
    {
        return $this->ociReportingACLTable;
    }
}
