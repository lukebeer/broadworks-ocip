<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to a SystemPreferredCarrierGetUserListRequest.
 *         Contains a table with one row per user.
 *         The table columns are: "User Id", "Service Provider Id", "Group Id", "Last Name", "First Name", "Phone Number", "Email Address",
 *         "Hiragana Last Name", and "Hiragana First Name".
 */
class SystemPreferredCarrierGetUserListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE           = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier\SystemPreferredCarrierGetUserListResponse';
    public    $name                   = __CLASS__;
    protected $usersUsingCarrierTable = null;


    /**
     * 
     */
    public function setUsersUsingCarrierTable(core:OCITable $usersUsingCarrierTable = null)
    {
        $this->usersUsingCarrierTable = core:OCITable $usersUsingCarrierTable;
    }

    /**
     * 
     */
    public function getUsersUsingCarrierTable()
    {
        return (!$this->usersUsingCarrierTable) ?: $this->usersUsingCarrierTable->getValue();
    }
}