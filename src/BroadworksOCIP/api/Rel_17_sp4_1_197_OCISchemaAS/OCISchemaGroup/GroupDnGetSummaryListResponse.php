<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupDnGetSummaryListRequest.
 *         The response contains a table with columns: "Phone Numbers", "Assigned".
 *         The "Phone Numbers" column contains either a single DN or a range of DNs.
 *         The "Assigned" column contains a boolean flag indicating if the DN(s) are
 *         currently assigned to a user or service instance.
 *         The "Activated" column indicates if the DN or DN range has been activated.  Only has a value if the DN(s) is assigned to a user.
 */
class GroupDnGetSummaryListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupDnGetSummaryListResponse';
    protected $dnTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupDnGetSummaryListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDnTable(TableType $dnTable = null)
    {
        $this->dnTable = $dnTable;
        $this->dnTable->setElementName('dnTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getDnTable()
    {
        return $this->dnTable;
    }
}
