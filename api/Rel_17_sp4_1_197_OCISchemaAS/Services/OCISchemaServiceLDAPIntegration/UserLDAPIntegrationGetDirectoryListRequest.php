<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLDAPIntegration; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPSearchKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPPage;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLDAPIntegration\UserLDAPIntegrationGetDirectoryListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request the LDAP entry lists for a user.
 *         The response is either a UserLDAPIntegrationGetDirectoryListResponse or an ErrorResponse.
 */
class UserLDAPIntegrationGetDirectoryListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLDAPIntegration\UserLDAPIntegrationGetDirectoryListResponse';
    public    $name      = __CLASS__;
    protected $userId    = null;
    protected $searchKey = null;
    protected $page      = null;

    public function __construct(
         $userId,
         $searchKey = null,
          $page = null
    ) {
        $this->setUserId($userId);
        $this->setSearchKey($searchKey);
        $this->setPage($page);
    }

    /**
     * @return UserLDAPIntegrationGetDirectoryListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

    /**
     * LDAP Search Key.
     */
    public function setSearchKey($searchKey = null)
    {
        $this->searchKey = ($searchKey InstanceOf LDAPSearchKey)
             ? $searchKey
             : new LDAPSearchKey($searchKey);
    }

    /**
     * LDAP Search Key.
     */
    public function getSearchKey()
    {
        return (!$this->searchKey) ?: $this->searchKey->getValue();
    }

    /**
     * Type to retrieve a particular page or the last page.
     */
    public function setPage(LDAPPage $page = null)
    {
        $this->page =  $page;
    }

    /**
     * Type to retrieve a particular page or the last page.
     */
    public function getPage()
    {
        return (!$this->page) ?: $this->page->getValue();
    }
}
