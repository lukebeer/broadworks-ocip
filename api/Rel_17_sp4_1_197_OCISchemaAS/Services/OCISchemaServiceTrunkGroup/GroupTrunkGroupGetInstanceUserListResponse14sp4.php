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
 * Response to GroupTrunkGroupGetInstanceUserListRequest14sp4.
 *         The response contains a 7 column table with column headings "User Id", "Last Name",
 *         "First Name", "Department", "Phone Number", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupTrunkGroupGetInstanceUserListResponse14sp4 extends ComplexType implements ComplexInterface
{
    public    $name                = 'GroupTrunkGroupGetInstanceUserListResponse14sp4';
    protected $trunkGroupUserTable = null;

    /**
     * @return GroupTrunkGroupGetInstanceUserListResponse14sp4
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTrunkGroupUserTable(core:OCITable $trunkGroupUserTable = null)
    {
        if (!$trunkGroupUserTable) return $this;
        $this->trunkGroupUserTable->setName('trunkGroupUserTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getTrunkGroupUserTable()
    {
        return $this->trunkGroupUserTable->getValue();
    }
}
