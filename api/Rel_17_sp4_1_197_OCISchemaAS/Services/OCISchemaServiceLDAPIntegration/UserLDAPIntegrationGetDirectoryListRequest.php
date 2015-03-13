<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPSearchKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPPage;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
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
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\UserLDAPIntegrationGetDirectoryListResponse';
    public    $name      = 'UserLDAPIntegrationGetDirectoryListRequest';
    protected $userId    = null;
    protected $searchKey = null;
    protected $page      = null;

    public function __construct(
         $userId,
         $searchKey = null,
         LDAPPage $page = null
    ) {
        $this->setUserId($userId);
        $this->setSearchKey($searchKey);
        $this->setPage($page);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\UserLDAPIntegrationGetDirectoryListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserId($userId = null)
    {
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setSearchKey($searchKey = null)
    {
        if (!$searchKey) return $this;
        $this->searchKey = ($searchKey InstanceOf LDAPSearchKey)
             ? $searchKey
             : new LDAPSearchKey($searchKey);
        $this->searchKey->setName('searchKey');
        return $this;
    }

    /**
     * 
     * @return LDAPSearchKey $searchKey
     */
    public function getSearchKey()
    {
        return $this->searchKey->getValue();
    }

    /**
     * 
     */
    public function setPage(LDAPPage $page = null)
    {
        if (!$page) return $this;
        $this->page = $page;
        $this->page->setName('page');
        return $this;
    }

    /**
     * 
     * @return LDAPPage $page
     */
    public function getPage()
    {
        return $this->page;
    }
}
