<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupTrunkGroupGetInstanceUserListRequest14sp4.
 *         The response contains a 7 column table with column headings "User Id", "Last Name",
 *         "First Name", "Department", "Phone Number", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupTrunkGroupGetInstanceUserListResponse14sp4 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupTrunkGroupGetInstanceUserListResponse14sp4';
    protected $trunkGroupUserTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\GroupTrunkGroupGetInstanceUserListResponse14sp4 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTrunkGroupUserTable(TableType $trunkGroupUserTable = null)
    {
        $this->trunkGroupUserTable = $trunkGroupUserTable;
        $this->trunkGroupUserTable->setElementName('trunkGroupUserTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getTrunkGroupUserTable()
    {
        return $this->trunkGroupUserTable;
    }
}
