<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPEntryName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request one LDAP entry for a user.
 *         The response is either a UserLDAPIntegrationGetDirectoryEntryResponse or an ErrorResponse.
 */
class UserLDAPIntegrationGetDirectoryEntryRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\UserLDAPIntegrationGetDirectoryEntryResponse';
    public    $elementName = 'UserLDAPIntegrationGetDirectoryEntryRequest';
    protected $userId;
    protected $entryName;

    public function __construct(
         $userId = '',
         $entryName = ''
    ) {
        $this->setUserId($userId);
        $this->setEntryName($entryName);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\UserLDAPIntegrationGetDirectoryEntryResponse $response
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
    public function setEntryName($entryName = null)
    {
        $this->entryName = ($entryName InstanceOf LDAPEntryName)
             ? $entryName
             : new LDAPEntryName($entryName);
        $this->entryName->setElementName('entryName');
        return $this;
    }

    /**
     * 
     * @return LDAPEntryName $entryName
     */
    public function getEntryName()
    {
        return ($this->entryName)
            ? $this->entryName->getElementValue()
            : null;
    }
}
