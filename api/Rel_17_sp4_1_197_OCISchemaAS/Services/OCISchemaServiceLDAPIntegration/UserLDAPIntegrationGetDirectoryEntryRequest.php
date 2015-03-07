<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLDAPIntegration; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPEntryName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request one LDAP entry for a user.
 *         The response is either a UserLDAPIntegrationGetDirectoryEntryResponse or an ErrorResponse.
 */
class UserLDAPIntegrationGetDirectoryEntryRequest extends ComplexType implements ComplexInterface
{
    public    $name       = __CLASS__;
    protected $userId     = null;
    protected $entryName  = null;

    public function __construct(
         $userId,
         $entryName
    ) {
        $this->setUserId($userId);
        $this->setEntryName($entryName);
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

    public function setEntryName($entryName = null)
    {
        $this->entryName = ($entryName InstanceOf LDAPEntryName)
             ? $entryName
             : new LDAPEntryName($entryName);
    }

    public function getEntryName()
    {
        return (!$this->entryName) ?: $this->entryName->value();
    }
}
