<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPEntryName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request one LDAP entry for a user.
 *         The response is either a UserLDAPIntegrationGetDirectoryEntryResponse or an ErrorResponse.
 */
class UserLDAPIntegrationGetDirectoryEntryRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\UserLDAPIntegrationGetDirectoryEntryResponse';
    public    $name = 'UserLDAPIntegrationGetDirectoryEntryRequest';
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
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\UserLDAPIntegrationGetDirectoryEntryResponse $response
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
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId) ? $this->userId->getValue() : null;
    }

    /**
     * 
     */
    public function setEntryName($entryName = null)
    {
        $this->entryName = ($entryName InstanceOf LDAPEntryName)
             ? $entryName
             : new LDAPEntryName($entryName);
        $this->entryName->setName('entryName');
        return $this;
    }

    /**
     * 
     * @return LDAPEntryName $entryName
     */
    public function getEntryName()
    {
        return ($this->entryName) ? $this->entryName->getValue() : null;
    }
}
