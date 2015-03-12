<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHotelingGuest; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserHotelingGuestGetAvailableUserListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name", "Association Limit Hours", "Enable Association Limit".
 */
class UserHotelingGuestGetAvailableUserListResponse extends ComplexType implements ComplexInterface
{
    public    $name          = 'UserHotelingGuestGetAvailableUserListResponse';
    protected $hostUserTable = null;

    /**
     * @return UserHotelingGuestGetAvailableUserListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setHostUserTable(TableType $hostUserTable = null)
    {
        if (!$hostUserTable) return $this;
        $this->hostUserTable = $hostUserTable;
        $this->hostUserTable->setName('hostUserTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getHostUserTable()
    {
        return $this->hostUserTable;
    }
}
