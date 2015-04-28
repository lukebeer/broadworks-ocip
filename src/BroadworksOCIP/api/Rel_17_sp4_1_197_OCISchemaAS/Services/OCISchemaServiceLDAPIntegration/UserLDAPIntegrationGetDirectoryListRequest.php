<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPSearchKey;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPPage;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request the LDAP entry lists for a user.
 *         The response is either a UserLDAPIntegrationGetDirectoryListResponse or an ErrorResponse.
 */
class UserLDAPIntegrationGetDirectoryListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\UserLDAPIntegrationGetDirectoryListResponse';
    public    $elementName = 'UserLDAPIntegrationGetDirectoryListRequest';
    protected $userId;
    protected $searchKey;
    protected $page;

    public function __construct(
         $userId = '',
         $searchKey = null,
         $page = null
    ) {
        $this->setUserId($userId);
        $this->setSearchKey($searchKey);
        $this->setPage($page);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\UserLDAPIntegrationGetDirectoryListResponse $response
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
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSearchKey($searchKey = null)
    {
        $this->searchKey = ($searchKey InstanceOf LDAPSearchKey)
             ? $searchKey
             : new LDAPSearchKey($searchKey);
        $this->searchKey->setElementName('searchKey');
        return $this;
    }

    /**
     * 
     * @return LDAPSearchKey $searchKey
     */
    public function getSearchKey()
    {
        return ($this->searchKey)
            ? $this->searchKey->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPage(LDAPPage $page = null)
    {
        $this->page = ($page InstanceOf LDAPPage)
             ? $page
             : new LDAPPage($page);
        $this->page->setElementName('page');
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
