<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLDAPIntegration; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupLDAPIntegrationLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LDAPSearchBase;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LDAPAuthenticatedDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LDAPAuthenticatedPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LDAPSearchFilter;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LDAPColumnAttributeName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LDAPColumnLabel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LDAPSearchColumn;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the LDAP directory attributes for a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupLDAPIntegrationModifyDirectoryRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $useLevel=null,
             $serverNetAddress=null,
             $serverPort=null,
             $searchBase=null,
             $useSSL=null,
             $requireAuthentication=null,
             $authenticatedDN=null,
             $authenticatedPassword=null,
             $isSortEnabled=null,
             $isPagedResultEnabled=null,
             $searchFilter=null,
             $includeSearchAttributeInSearchFilter=null,
             $column1AttributeName=null,
             $column2AttributeName=null,
             $column3AttributeName=null,
             $column4AttributeName=null,
             $column1Label=null,
             $column2Label=null,
             $column3Label=null,
             $column4Label=null,
             $searchColumn=null
    ) {
        $this->serviceProviderId                    = new ServiceProviderId($serviceProviderId);
        $this->groupId                              = new GroupId($groupId);
        $this->useLevel                             = $useLevel;
        $this->serverNetAddress                     = new NetAddress($serverNetAddress);
        $this->serverPort                           = new Port($serverPort);
        $this->searchBase                           = $searchBase;
        $this->useSSL                               = $useSSL;
        $this->requireAuthentication                = $requireAuthentication;
        $this->authenticatedDN                      = $authenticatedDN;
        $this->authenticatedPassword                = $authenticatedPassword;
        $this->isSortEnabled                        = $isSortEnabled;
        $this->isPagedResultEnabled                 = $isPagedResultEnabled;
        $this->searchFilter                         = $searchFilter;
        $this->includeSearchAttributeInSearchFilter = $includeSearchAttributeInSearchFilter;
        $this->column1AttributeName                 = $column1AttributeName;
        $this->column2AttributeName                 = $column2AttributeName;
        $this->column3AttributeName                 = $column3AttributeName;
        $this->column4AttributeName                 = $column4AttributeName;
        $this->column1Label                         = $column1Label;
        $this->column2Label                         = $column2Label;
        $this->column3Label                         = $column3Label;
        $this->column4Label                         = $column4Label;
        $this->searchColumn                         = $searchColumn;
        $this->args                                 = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setUseLevel($useLevel)
    {
        $useLevel and $this->useLevel = new GroupLDAPIntegrationLevel($useLevel);
    }

    public function getUseLevel()
    {
        return (!$this->useLevel) ?: $this->useLevel->value();
    }

    public function setServerNetAddress($serverNetAddress)
    {
        $serverNetAddress and $this->serverNetAddress = new NetAddress($serverNetAddress);
    }

    public function getServerNetAddress()
    {
        return (!$this->serverNetAddress) ?: $this->serverNetAddress->value();
    }

    public function setServerPort($serverPort)
    {
        $serverPort and $this->serverPort = new Port($serverPort);
    }

    public function getServerPort()
    {
        return (!$this->serverPort) ?: $this->serverPort->value();
    }

    public function setSearchBase($searchBase)
    {
        $searchBase and $this->searchBase = new LDAPSearchBase($searchBase);
    }

    public function getSearchBase()
    {
        return (!$this->searchBase) ?: $this->searchBase->value();
    }

    public function setUseSSL($useSSL)
    {
        $useSSL and $this->useSSL = new xs:boolean($useSSL);
    }

    public function getUseSSL()
    {
        return (!$this->useSSL) ?: $this->useSSL->value();
    }

    public function setRequireAuthentication($requireAuthentication)
    {
        $requireAuthentication and $this->requireAuthentication = new xs:boolean($requireAuthentication);
    }

    public function getRequireAuthentication()
    {
        return (!$this->requireAuthentication) ?: $this->requireAuthentication->value();
    }

    public function setAuthenticatedDN($authenticatedDN)
    {
        $authenticatedDN and $this->authenticatedDN = new LDAPAuthenticatedDN($authenticatedDN);
    }

    public function getAuthenticatedDN()
    {
        return (!$this->authenticatedDN) ?: $this->authenticatedDN->value();
    }

    public function setAuthenticatedPassword($authenticatedPassword)
    {
        $authenticatedPassword and $this->authenticatedPassword = new LDAPAuthenticatedPassword($authenticatedPassword);
    }

    public function getAuthenticatedPassword()
    {
        return (!$this->authenticatedPassword) ?: $this->authenticatedPassword->value();
    }

    public function setIsSortEnabled($isSortEnabled)
    {
        $isSortEnabled and $this->isSortEnabled = new xs:boolean($isSortEnabled);
    }

    public function getIsSortEnabled()
    {
        return (!$this->isSortEnabled) ?: $this->isSortEnabled->value();
    }

    public function setIsPagedResultEnabled($isPagedResultEnabled)
    {
        $isPagedResultEnabled and $this->isPagedResultEnabled = new xs:boolean($isPagedResultEnabled);
    }

    public function getIsPagedResultEnabled()
    {
        return (!$this->isPagedResultEnabled) ?: $this->isPagedResultEnabled->value();
    }

    public function setSearchFilter($searchFilter)
    {
        $searchFilter and $this->searchFilter = new LDAPSearchFilter($searchFilter);
    }

    public function getSearchFilter()
    {
        return (!$this->searchFilter) ?: $this->searchFilter->value();
    }

    public function setIncludeSearchAttributeInSearchFilter($includeSearchAttributeInSearchFilter)
    {
        $includeSearchAttributeInSearchFilter and $this->includeSearchAttributeInSearchFilter = new xs:boolean($includeSearchAttributeInSearchFilter);
    }

    public function getIncludeSearchAttributeInSearchFilter()
    {
        return (!$this->includeSearchAttributeInSearchFilter) ?: $this->includeSearchAttributeInSearchFilter->value();
    }

    public function setColumn1AttributeName($column1AttributeName)
    {
        $column1AttributeName and $this->column1AttributeName = new LDAPColumnAttributeName($column1AttributeName);
    }

    public function getColumn1AttributeName()
    {
        return (!$this->column1AttributeName) ?: $this->column1AttributeName->value();
    }

    public function setColumn2AttributeName($column2AttributeName)
    {
        $column2AttributeName and $this->column2AttributeName = new LDAPColumnAttributeName($column2AttributeName);
    }

    public function getColumn2AttributeName()
    {
        return (!$this->column2AttributeName) ?: $this->column2AttributeName->value();
    }

    public function setColumn3AttributeName($column3AttributeName)
    {
        $column3AttributeName and $this->column3AttributeName = new LDAPColumnAttributeName($column3AttributeName);
    }

    public function getColumn3AttributeName()
    {
        return (!$this->column3AttributeName) ?: $this->column3AttributeName->value();
    }

    public function setColumn4AttributeName($column4AttributeName)
    {
        $column4AttributeName and $this->column4AttributeName = new LDAPColumnAttributeName($column4AttributeName);
    }

    public function getColumn4AttributeName()
    {
        return (!$this->column4AttributeName) ?: $this->column4AttributeName->value();
    }

    public function setColumn1Label($column1Label)
    {
        $column1Label and $this->column1Label = new LDAPColumnLabel($column1Label);
    }

    public function getColumn1Label()
    {
        return (!$this->column1Label) ?: $this->column1Label->value();
    }

    public function setColumn2Label($column2Label)
    {
        $column2Label and $this->column2Label = new LDAPColumnLabel($column2Label);
    }

    public function getColumn2Label()
    {
        return (!$this->column2Label) ?: $this->column2Label->value();
    }

    public function setColumn3Label($column3Label)
    {
        $column3Label and $this->column3Label = new LDAPColumnLabel($column3Label);
    }

    public function getColumn3Label()
    {
        return (!$this->column3Label) ?: $this->column3Label->value();
    }

    public function setColumn4Label($column4Label)
    {
        $column4Label and $this->column4Label = new LDAPColumnLabel($column4Label);
    }

    public function getColumn4Label()
    {
        return (!$this->column4Label) ?: $this->column4Label->value();
    }

    public function setSearchColumn($searchColumn)
    {
        $searchColumn and $this->searchColumn = new LDAPSearchColumn($searchColumn);
    }

    public function getSearchColumn()
    {
        return (!$this->searchColumn) ?: $this->searchColumn->value();
    }
}
