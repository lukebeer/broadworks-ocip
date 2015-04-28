<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallPark; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupCallParkGetAvailableAlternateRecallUserListResponse.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupCallParkGetAvailableAlternateRecallUserListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallParkGetAvailableAlternateRecallUserListResponse';
    protected $availableHuntGroupTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallPark\GroupCallParkGetAvailableAlternateRecallUserListResponse $response
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
        $this->availableHuntGroupTable = $availableHuntGroupTable;
        $this->availableHuntGroupTable->setElementName('availableHuntGroupTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getAvailableHuntGroupTable()
    {
        return $this->availableHuntGroupTable;
    }
}
