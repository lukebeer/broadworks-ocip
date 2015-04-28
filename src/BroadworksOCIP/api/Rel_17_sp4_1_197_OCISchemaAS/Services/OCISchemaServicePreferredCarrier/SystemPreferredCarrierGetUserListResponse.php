<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to a SystemPreferredCarrierGetUserListRequest.
 *         Contains a table with one row per user.
 *         The table columns are: "User Id", "Service Provider Id", "Group Id", "Last Name", "First Name", "Phone Number", "Email Address",
 *         "Hiragana Last Name", and "Hiragana First Name".
 */
class SystemPreferredCarrierGetUserListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemPreferredCarrierGetUserListResponse';
    protected $usersUsingCarrierTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\SystemPreferredCarrierGetUserListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUsersUsingCarrierTable(TableType $usersUsingCarrierTable = null)
    {
        $this->usersUsingCarrierTable = $usersUsingCarrierTable;
        $this->usersUsingCarrierTable->setElementName('usersUsingCarrierTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getUsersUsingCarrierTable()
    {
        return $this->usersUsingCarrierTable;
    }
}
