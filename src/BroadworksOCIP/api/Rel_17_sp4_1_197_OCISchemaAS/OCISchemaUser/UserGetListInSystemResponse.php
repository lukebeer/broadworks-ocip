<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserGetListInSystemRequest.
 *         Contains a table with column headings : "User Id", "Group Id", "Service Provider Id"
 *         "Last Name", "First Name", "Department", "Phone Number", "Phone Number Activated", "Email Address",  "Hiragana Last Name", "Hiragana First Name", "In Trunk Group"
 *         in a row for each user.
 */
class UserGetListInSystemResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserGetListInSystemResponse';
    protected $userTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserGetListInSystemResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserTable(TableType $userTable = null)
    {
        $this->userTable = $userTable;
        $this->userTable->setElementName('userTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getUserTable()
    {
        return $this->userTable;
    }
}
