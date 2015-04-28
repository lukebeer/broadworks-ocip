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
 * Response to GroupTrunkGroupGetInstanceListRequest14sp4.
 *         Contains a table with column headings "Name", "Department", "Device Name", "Device Level",
 *         "Group Id".
 *         The "Device Level" column contains one of the AccessDeviceLevel enumerated constants.
 */
class GroupTrunkGroupGetInstanceListResponse14sp4 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupTrunkGroupGetInstanceListResponse14sp4';
    protected $trunkGroupTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\GroupTrunkGroupGetInstanceListResponse14sp4 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTrunkGroupTable(TableType $trunkGroupTable = null)
    {
        $this->trunkGroupTable = $trunkGroupTable;
        $this->trunkGroupTable->setElementName('trunkGroupTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getTrunkGroupTable()
    {
        return $this->trunkGroupTable;
    }
}
