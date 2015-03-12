<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallPark; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallParkGetAvailableAlternateRecallUserListResponse.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupCallParkGetAvailableAlternateRecallUserListResponse extends ComplexType implements ComplexInterface
{
    public    $name                    = 'GroupCallParkGetAvailableAlternateRecallUserListResponse';
    protected $availableHuntGroupTable = null;

    /**
     * @return GroupCallParkGetAvailableAlternateRecallUserListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAvailableHuntGroupTable(TableType $availableHuntGroupTable = null)
    {
        if (!$availableHuntGroupTable) return $this;
        $this->availableHuntGroupTable = $availableHuntGroupTable;
        $this->availableHuntGroupTable->setName('availableHuntGroupTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getAvailableHuntGroupTable()
    {
        return $this->availableHuntGroupTable->getValue();
    }
}
