<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to a SystemPreferredCarrierGetUserListRequest.
 *         Contains a table with one row per user.
 *         The table columns are: "User Id", "Service Provider Id", "Group Id", "Last Name", "First Name", "Phone Number", "Email Address",
 *         "Hiragana Last Name", and "Hiragana First Name".
 */
class SystemPreferredCarrierGetUserListResponse extends ComplexType implements ComplexInterface
{
    public    $name                   = 'SystemPreferredCarrierGetUserListResponse';
    protected $usersUsingCarrierTable = null;

    /**
     * @return SystemPreferredCarrierGetUserListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUsersUsingCarrierTable(core:OCITable $usersUsingCarrierTable = null)
    {
        if (!$usersUsingCarrierTable) return $this;
        $this->usersUsingCarrierTable->setName('usersUsingCarrierTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getUsersUsingCarrierTable()
    {
        return $this->usersUsingCarrierTable->getValue();
    }
}
