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
 * Return a table containing the list of users assigned the user service
 *         or service pack.  The table contains columns: "User Id", "Last Name",
 *         "First Name", "Department", "Phone Number", "Email Address", "Hiragana Last Name";
 *         "Hiragana First Name"
 *         This is a response to the GroupGetUserServiceAssignedUserListRequest.
 */
class GroupGetUserServiceAssignedUserListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupGetUserServiceAssignedUserListResponse';
    protected $userListTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupGetUserServiceAssignedUserListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserListTable(TableType $userListTable = null)
    {
        $this->userListTable = $userListTable;
        $this->userListTable->setElementName('userListTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getUserListTable()
    {
        return $this->userListTable;
    }
}
