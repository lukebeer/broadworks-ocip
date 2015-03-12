<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupTrunkGroupGetInstanceUserListRequest.
 *         The response contains a 7 column table with column headings "User Id", "Last Name",
 *         "First Name", "Department", "Phone Number", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupTrunkGroupGetInstanceUserListResponse extends ComplexType implements ComplexInterface
{
    public    $name                = 'GroupTrunkGroupGetInstanceUserListResponse';
    protected $trunkGroupUserTable = null;

    /**
     * @return GroupTrunkGroupGetInstanceUserListResponse
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
        if (!$trunkGroupUserTable) return $this;
        $this->trunkGroupUserTable = $trunkGroupUserTable;
        $this->trunkGroupUserTable->setName('trunkGroupUserTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getTrunkGroupUserTable()
    {
        return $this->trunkGroupUserTable->getValue();
    }
}
