<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallPark; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallPark\GroupCallParkGetAvailableAlternateRecallUserListResponse;
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
    public    $name                    = __CLASS__;
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
    public function setAvailableHuntGroupTable(core:OCITable $availableHuntGroupTable = null)
    {
        $this->availableHuntGroupTable =  $availableHuntGroupTable;
    }

    /**
     * 
     */
    public function getAvailableHuntGroupTable()
    {
        return (!$this->availableHuntGroupTable) ?: $this->availableHuntGroupTable->getValue();
    }
}
