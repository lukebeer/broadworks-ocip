<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLDAPIntegration; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\GroupLDAPIntegrationLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPAuthenticatedPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPColumnAttributeName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPAuthenticatedDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPSearchColumn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPSearchFilter;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPColumnLabel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPSearchBase;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupLDAPIntegrationGetDirectoryRequest.
 */
class GroupLDAPIntegrationGetDirectoryResponse extends ComplexType implements ComplexInterface
{
    public    $name                                  = __CLASS__;
    protected $useLevel                              = null;
    protected $serverNetAddress                      = null;
    protected $serverPort                            = null;
    protected $searchBase                            = null;
    protected $useSSL                                = null;
    protected $requireAuthentication                 = null;
    protected $authenticatedDN                       = null;
    protected $authenticatedPassword                 = null;
    protected $isSortEnabled                         = null;
    protected $isPagedResultEnabled                  = null;
    protected $searchFilter                          = null;
    protected $includeSearchAttributeInSearchFilter  = null;
    protected $column1AttributeName                  = null;
    protected $column2AttributeName                  = null;
    protected $column3AttributeName                  = null;
    protected $column4AttributeName                  = null;
    protected $column1Label                          = null;
    protected $column2Label                          = null;
    protected $column3Label                          = null;
    protected $column4Label                          = null;
    protected $searchColumn                          = null;


    public function setUseLevel($useLevel = null)
    {
        $this->useLevel = ($useLevel InstanceOf GroupLDAPIntegrationLevel)
             ? $useLevel
             : new GroupLDAPIntegrationLevel($useLevel);
    }

    public function getUseLevel()
    {
        return (!$this->useLevel) ?: $this->useLevel->value();
    }

    public function setServerNetAddress($serverNetAddress = null)
    {
        $this->serverNetAddress = ($serverNetAddress InstanceOf NetAddress)
             ? $serverNetAddress
             : new NetAddress($serverNetAddress);
    }

    public function getServerNetAddress()
    {
        return (!$this->serverNetAddress) ?: $this->serverNetAddress->value();
    }

    public function setServerPort($serverPort = null)
    {
        $this->serverPort = ($serverPort InstanceOf Port)
             ? $serverPort
             : new Port($serverPort);
    }

    public function getServerPort()
    {
        return (!$this->serverPort) ?: $this->serverPort->value();
    }

    public function setSearchBase($searchBase = null)
    {
        $this->searchBase = ($searchBase InstanceOf LDAPSearchBase)
             ? $searchBase
             : new LDAPSearchBase($searchBase);
    }

    public function getSearchBase()
    {
        return (!$this->searchBase) ?: $this->searchBase->value();
    }

    public function setUseSSL(xs:boolean $useSSL = null)
    {
    }

    public function getUseSSL()
    {
        return (!$this->useSSL) ?: $this->useSSL->value();
    }

    public function setRequireAuthentication(xs:boolean $requireAuthentication = null)
    {
    }

    public function getRequireAuthentication()
    {
        return (!$this->requireAuthentication) ?: $this->requireAuthentication->value();
    }

    public function setAuthenticatedDN($authenticatedDN = null)
    {
        $this->authenticatedDN = ($authenticatedDN InstanceOf LDAPAuthenticatedDN)
             ? $authenticatedDN
             : new LDAPAuthenticatedDN($authenticatedDN);
    }

    public function getAuthenticatedDN()
    {
        return (!$this->authenticatedDN) ?: $this->authenticatedDN->value();
    }

    public function setAuthenticatedPassword($authenticatedPassword = null)
    {
        $this->authenticatedPassword = ($authenticatedPassword InstanceOf LDAPAuthenticatedPassword)
             ? $authenticatedPassword
             : new LDAPAuthenticatedPassword($authenticatedPassword);
    }

    public function getAuthenticatedPassword()
    {
        return (!$this->authenticatedPassword) ?: $this->authenticatedPassword->value();
    }

    public function setIsSortEnabled(xs:boolean $isSortEnabled = null)
    {
    }

    public function getIsSortEnabled()
    {
        return (!$this->isSortEnabled) ?: $this->isSortEnabled->value();
    }

    public function setIsPagedResultEnabled(xs:boolean $isPagedResultEnabled = null)
    {
    }

    public function getIsPagedResultEnabled()
    {
        return (!$this->isPagedResultEnabled) ?: $this->isPagedResultEnabled->value();
    }

    public function setSearchFilter($searchFilter = null)
    {
        $this->searchFilter = ($searchFilter InstanceOf LDAPSearchFilter)
             ? $searchFilter
             : new LDAPSearchFilter($searchFilter);
    }

    public function getSearchFilter()
    {
        return (!$this->searchFilter) ?: $this->searchFilter->value();
    }

    public function setIncludeSearchAttributeInSearchFilter(xs:boolean $includeSearchAttributeInSearchFilter = null)
    {
    }

    public function getIncludeSearchAttributeInSearchFilter()
    {
        return (!$this->includeSearchAttributeInSearchFilter) ?: $this->includeSearchAttributeInSearchFilter->value();
    }

    public function setColumn1AttributeName($column1AttributeName = null)
    {
        $this->column1AttributeName = ($column1AttributeName InstanceOf LDAPColumnAttributeName)
             ? $column1AttributeName
             : new LDAPColumnAttributeName($column1AttributeName);
    }

    public function getColumn1AttributeName()
    {
        return (!$this->column1AttributeName) ?: $this->column1AttributeName->value();
    }

    public function setColumn2AttributeName($column2AttributeName = null)
    {
        $this->column2AttributeName = ($column2AttributeName InstanceOf LDAPColumnAttributeName)
             ? $column2AttributeName
             : new LDAPColumnAttributeName($column2AttributeName);
    }

    public function getColumn2AttributeName()
    {
        return (!$this->column2AttributeName) ?: $this->column2AttributeName->value();
    }

    public function setColumn3AttributeName($column3AttributeName = null)
    {
        $this->column3AttributeName = ($column3AttributeName InstanceOf LDAPColumnAttributeName)
             ? $column3AttributeName
             : new LDAPColumnAttributeName($column3AttributeName);
    }

    public function getColumn3AttributeName()
    {
        return (!$this->column3AttributeName) ?: $this->column3AttributeName->value();
    }

    public function setColumn4AttributeName($column4AttributeName = null)
    {
        $this->column4AttributeName = ($column4AttributeName InstanceOf LDAPColumnAttributeName)
             ? $column4AttributeName
             : new LDAPColumnAttributeName($column4AttributeName);
    }

    public function getColumn4AttributeName()
    {
        return (!$this->column4AttributeName) ?: $this->column4AttributeName->value();
    }

    public function setColumn1Label($column1Label = null)
    {
        $this->column1Label = ($column1Label InstanceOf LDAPColumnLabel)
             ? $column1Label
             : new LDAPColumnLabel($column1Label);
    }

    public function getColumn1Label()
    {
        return (!$this->column1Label) ?: $this->column1Label->value();
    }

    public function setColumn2Label($column2Label = null)
    {
        $this->column2Label = ($column2Label InstanceOf LDAPColumnLabel)
             ? $column2Label
             : new LDAPColumnLabel($column2Label);
    }

    public function getColumn2Label()
    {
        return (!$this->column2Label) ?: $this->column2Label->value();
    }

    public function setColumn3Label($column3Label = null)
    {
        $this->column3Label = ($column3Label InstanceOf LDAPColumnLabel)
             ? $column3Label
             : new LDAPColumnLabel($column3Label);
    }

    public function getColumn3Label()
    {
        return (!$this->column3Label) ?: $this->column3Label->value();
    }

    public function setColumn4Label($column4Label = null)
    {
        $this->column4Label = ($column4Label InstanceOf LDAPColumnLabel)
             ? $column4Label
             : new LDAPColumnLabel($column4Label);
    }

    public function getColumn4Label()
    {
        return (!$this->column4Label) ?: $this->column4Label->value();
    }

    public function setSearchColumn($searchColumn = null)
    {
        $this->searchColumn = ($searchColumn InstanceOf LDAPSearchColumn)
             ? $searchColumn
             : new LDAPSearchColumn($searchColumn);
    }

    public function getSearchColumn()
    {
        return (!$this->searchColumn) ?: $this->searchColumn->value();
    }
}
