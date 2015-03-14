<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCustomContactDirectoryGetAvailableUserListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", 
 *         "Hiragana Last Name", "Hiragana First Name".
 * 
 *         Replace by: GroupCustomContactDirectoryGetAvailableUserListResponse17
 */
class GroupCustomContactDirectoryGetAvailableUserListResponse extends ComplexType implements ComplexInterface
{
    public    $name      = 'GroupCustomContactDirectoryGetAvailableUserListResponse';
    protected $userTable = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\GroupCustomContactDirectoryGetAvailableUserListResponse $response
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
        if (!$userTable) return $this;
        $this->userTable = $userTable;
        $this->userTable->setName('userTable');
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
