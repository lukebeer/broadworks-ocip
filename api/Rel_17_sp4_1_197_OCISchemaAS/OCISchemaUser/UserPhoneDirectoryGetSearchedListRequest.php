<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\PhoneDirectoryNameSearchString;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request a table containing the phone directory for a user.
 *         If the specified user is part of an enterprise, the directory includes all users in the enterprise
 *         and all entries in the enterprise common phone list and the common phone list of the specified user's group.
 *         If the specified user is part of a service provider, the directory includes all users in the user's group
 *         and all entries in the common phone list of the specified user's group.
 *         It is possible to search the directory for names containing a specified search string. The search includes
 *         matches on first name or last name or common phone list names.
 *         The response is either UserPhoneDirectoryGetSearchedListResponse or ErrorResponse.
 */
class UserPhoneDirectoryGetSearchedListRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $userId            = null;
    protected $nameSearchString  = null;

    public function __construct(
         $userId,
         $nameSearchString = null
    ) {
        $this->setUserId($userId);
        $this->setNameSearchString($nameSearchString);
    }

    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setNameSearchString($nameSearchString = null)
    {
        $this->nameSearchString = ($nameSearchString InstanceOf PhoneDirectoryNameSearchString)
             ? $nameSearchString
             : new PhoneDirectoryNameSearchString($nameSearchString);
    }

    public function getNameSearchString()
    {
        return (!$this->nameSearchString) ?: $this->nameSearchString->value();
    }
}
