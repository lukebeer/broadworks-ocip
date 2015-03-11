<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupTrunkGroupGetInstanceListRequest14sp4.
 *         Contains a table with column headings "Name", "Department", "Device Name", "Device Level",
 *         "Group Id".
 *         The "Device Level" column contains one of the AccessDeviceLevel enumerated constants.
 */
class GroupTrunkGroupGetInstanceListResponse14sp4 extends ComplexType implements ComplexInterface
{
    public    $name            = 'GroupTrunkGroupGetInstanceListResponse14sp4';
    protected $trunkGroupTable = null;

    /**
     * @return GroupTrunkGroupGetInstanceListResponse14sp4
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTrunkGroupTable(core:OCITable $trunkGroupTable = null)
    {
        if (!$trunkGroupTable) return $this;
        $this->trunkGroupTable->setName('trunkGroupTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getTrunkGroupTable()
    {
        return $this->trunkGroupTable->getValue();
    }
}
