<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupGetUserServiceAssignedUserListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Return a table containing the list of users assigned the user service
 *         or service pack.  The table contains columns: "User Id", "Last Name",
 *         "First Name", "Department", "Phone Number", "Email Address", "Hiragana Last Name";
 *         "Hiragana First Name"
 *         This is a response to the GroupGetUserServiceAssignedUserListRequest.
 */
class GroupGetUserServiceAssignedUserListResponse extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $userListTable = null;

    /**
     * @return GroupGetUserServiceAssignedUserListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserListTable(core:OCITable $userListTable = null)
    {
        $this->userListTable =  $userListTable;
    }

    /**
     * 
     */
    public function getUserListTable()
    {
        return (!$this->userListTable) ?: $this->userListTable->getValue();
    }
}
