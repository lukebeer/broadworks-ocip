<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHotelingGuest; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserHotelingGuestGetAvailableUserListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name", "Association Limit Hours", "Enable Association Limit".
 */
class UserHotelingGuestGetAvailableUserListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserHotelingGuestGetAvailableUserListResponse';
    protected $hostUserTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHotelingGuest\UserHotelingGuestGetAvailableUserListResponse $response
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
        $this->hostUserTable = $hostUserTable;
        $this->hostUserTable->setElementName('hostUserTable');
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
