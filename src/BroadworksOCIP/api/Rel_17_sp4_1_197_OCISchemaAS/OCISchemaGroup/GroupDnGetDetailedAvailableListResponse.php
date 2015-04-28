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
 * Response to the GroupDnGetDetailedAvailableListRequest.
 *         The response contains a table with columns: "Phone Number", "Department".
 *         The "Phone Numbers" column contains a single DN.
 *         The "Department" column contains the department of the DN if the DN is part of the department.
 */
class GroupDnGetDetailedAvailableListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupDnGetDetailedAvailableListResponse';
    protected $dnTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupDnGetDetailedAvailableListResponse $response
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
