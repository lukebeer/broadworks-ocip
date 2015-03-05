<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLDAPIntegration; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LDAPSearchKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LDAPPage;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request the LDAP entry lists for a user.
 *         The response is either a UserLDAPIntegrationGetDirectoryListResponse or an ErrorResponse.
 */
class UserLDAPIntegrationGetDirectoryListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $searchKey=null,
             $page=null
    ) {
        $this->userId    = new UserId($userId);
        $this->searchKey = $searchKey;
        $this->page      = $page;
        $this->args      = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setSearchKey($searchKey)
    {
        $searchKey and $this->searchKey = new LDAPSearchKey($searchKey);
    }

    public function getSearchKey()
    {
        return (!$this->searchKey) ?: $this->searchKey->value();
    }

    public function setPage($page)
    {
        $page and $this->page = new LDAPPage($page);
    }

    public function getPage()
    {
        return (!$this->page) ?: $this->page->value();
    }
}
