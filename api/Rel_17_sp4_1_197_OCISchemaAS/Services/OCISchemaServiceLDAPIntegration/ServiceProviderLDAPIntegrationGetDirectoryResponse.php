<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLDAPIntegration; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPAuthenticatedPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPColumnAttributeName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPAuthenticatedDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPSearchFilter;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPSearchColumn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPColumnLabel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPSearchBase;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to ServiceProviderLDAPIntegrationGetDirectoryRequest.
 */
class ServiceProviderLDAPIntegrationGetDirectoryResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                         = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLDAPIntegration\ServiceProviderLDAPIntegrationGetDirectoryResponse';
    public    $name                                 = __CLASS__;
    protected $serverNetAddress                     = null;
    protected $serverPort                           = null;
    protected $searchBase                           = null;
    protected $useSSL                               = null;
    protected $requireAuthentication                = null;
    protected $authenticatedDN                      = null;
    protected $authenticatedPassword                = null;
    protected $isSortEnabled                        = null;
    protected $isPagedResultEnabled                 = null;
    protected $searchFilter                         = null;
    protected $includeSearchAttributeInSearchFilter = null;
    protected $column1AttributeName                 = null;
    protected $column2AttributeName                 = null;
    protected $column3AttributeName                 = null;
    protected $column4AttributeName                 = null;
    protected $column1Label                         = null;
    protected $column2Label                         = null;
    protected $column3Label                         = null;
    protected $column4Label                         = null;
    protected $searchColumn                         = null;


    /**
     * IP Address, hostname, or domain.
     */
    public function setServerNetAddress($serverNetAddress = null)
    {
        $this->serverNetAddress = ($serverNetAddress InstanceOf NetAddress)
             ? $serverNetAddress
             : new NetAddress($serverNetAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getServerNetAddress()
    {
        return (!$this->serverNetAddress) ?: $this->serverNetAddress->getValue();
    }

    /**
     * TCP/IP Port.
     */
    public function setServerPort($serverPort = null)
    {
        $this->serverPort = ($serverPort InstanceOf Port)
             ? $serverPort
             : new Port($serverPort);
    }

    /**
     * TCP/IP Port.
     */
    public function getServerPort()
    {
        return (!$this->serverPort) ?: $this->serverPort->getValue();
    }

    /**
     * LDAP Search Base.
     */
    public function setSearchBase($searchBase = null)
    {
        $this->searchBase = ($searchBase InstanceOf LDAPSearchBase)
             ? $searchBase
             : new LDAPSearchBase($searchBase);
    }

    /**
     * LDAP Search Base.
     */
    public function getSearchBase()
    {
        return (!$this->searchBase) ?: $this->searchBase->getValue();
    }

    /**
     * 
     */
    public function setUseSSL($useSSL = null)
    {
        $this->useSSL = (boolean) $useSSL;
    }

    /**
     * 
     */
    public function getUseSSL()
    {
        return (!$this->useSSL) ?: $this->useSSL->getValue();
    }

    /**
     * 
     */
    public function setRequireAuthentication($requireAuthentication = null)
    {
        $this->requireAuthentication = (boolean) $requireAuthentication;
    }

    /**
     * 
     */
    public function getRequireAuthentication()
    {
        return (!$this->requireAuthentication) ?: $this->requireAuthentication->getValue();
    }

    /**
     * LDAP Authenticated DN.
     */
    public function setAuthenticatedDN($authenticatedDN = null)
    {
        $this->authenticatedDN = ($authenticatedDN InstanceOf LDAPAuthenticatedDN)
             ? $authenticatedDN
             : new LDAPAuthenticatedDN($authenticatedDN);
    }

    /**
     * LDAP Authenticated DN.
     */
    public function getAuthenticatedDN()
    {
        return (!$this->authenticatedDN) ?: $this->authenticatedDN->getValue();
    }

    /**
     * LDAP Authenticated Password.
     */
    public function setAuthenticatedPassword($authenticatedPassword = null)
    {
        $this->authenticatedPassword = ($authenticatedPassword InstanceOf LDAPAuthenticatedPassword)
             ? $authenticatedPassword
             : new LDAPAuthenticatedPassword($authenticatedPassword);
    }

    /**
     * LDAP Authenticated Password.
     */
    public function getAuthenticatedPassword()
    {
        return (!$this->authenticatedPassword) ?: $this->authenticatedPassword->getValue();
    }

    /**
     * 
     */
    public function setIsSortEnabled($isSortEnabled = null)
    {
        $this->isSortEnabled = (boolean) $isSortEnabled;
    }

    /**
     * 
     */
    public function getIsSortEnabled()
    {
        return (!$this->isSortEnabled) ?: $this->isSortEnabled->getValue();
    }

    /**
     * 
     */
    public function setIsPagedResultEnabled($isPagedResultEnabled = null)
    {
        $this->isPagedResultEnabled = (boolean) $isPagedResultEnabled;
    }

    /**
     * 
     */
    public function getIsPagedResultEnabled()
    {
        return (!$this->isPagedResultEnabled) ?: $this->isPagedResultEnabled->getValue();
    }

    /**
     * LDAP Search Filter.
     */
    public function setSearchFilter($searchFilter = null)
    {
        $this->searchFilter = ($searchFilter InstanceOf LDAPSearchFilter)
             ? $searchFilter
             : new LDAPSearchFilter($searchFilter);
    }

    /**
     * LDAP Search Filter.
     */
    public function getSearchFilter()
    {
        return (!$this->searchFilter) ?: $this->searchFilter->getValue();
    }

    /**
     * 
     */
    public function setIncludeSearchAttributeInSearchFilter($includeSearchAttributeInSearchFilter = null)
    {
        $this->includeSearchAttributeInSearchFilter = (boolean) $includeSearchAttributeInSearchFilter;
    }

    /**
     * 
     */
    public function getIncludeSearchAttributeInSearchFilter()
    {
        return (!$this->includeSearchAttributeInSearchFilter) ?: $this->includeSearchAttributeInSearchFilter->getValue();
    }

    /**
     * LDAP column attribute name.
     */
    public function setColumn1AttributeName($column1AttributeName = null)
    {
        $this->column1AttributeName = ($column1AttributeName InstanceOf LDAPColumnAttributeName)
             ? $column1AttributeName
             : new LDAPColumnAttributeName($column1AttributeName);
    }

    /**
     * LDAP column attribute name.
     */
    public function getColumn1AttributeName()
    {
        return (!$this->column1AttributeName) ?: $this->column1AttributeName->getValue();
    }

    /**
     * LDAP column attribute name.
     */
    public function setColumn2AttributeName($column2AttributeName = null)
    {
        $this->column2AttributeName = ($column2AttributeName InstanceOf LDAPColumnAttributeName)
             ? $column2AttributeName
             : new LDAPColumnAttributeName($column2AttributeName);
    }

    /**
     * LDAP column attribute name.
     */
    public function getColumn2AttributeName()
    {
        return (!$this->column2AttributeName) ?: $this->column2AttributeName->getValue();
    }

    /**
     * LDAP column attribute name.
     */
    public function setColumn3AttributeName($column3AttributeName = null)
    {
        $this->column3AttributeName = ($column3AttributeName InstanceOf LDAPColumnAttributeName)
             ? $column3AttributeName
             : new LDAPColumnAttributeName($column3AttributeName);
    }

    /**
     * LDAP column attribute name.
     */
    public function getColumn3AttributeName()
    {
        return (!$this->column3AttributeName) ?: $this->column3AttributeName->getValue();
    }

    /**
     * LDAP column attribute name.
     */
    public function setColumn4AttributeName($column4AttributeName = null)
    {
        $this->column4AttributeName = ($column4AttributeName InstanceOf LDAPColumnAttributeName)
             ? $column4AttributeName
             : new LDAPColumnAttributeName($column4AttributeName);
    }

    /**
     * LDAP column attribute name.
     */
    public function getColumn4AttributeName()
    {
        return (!$this->column4AttributeName) ?: $this->column4AttributeName->getValue();
    }

    /**
     * LDAP column label.
     */
    public function setColumn1Label($column1Label = null)
    {
        $this->column1Label = ($column1Label InstanceOf LDAPColumnLabel)
             ? $column1Label
             : new LDAPColumnLabel($column1Label);
    }

    /**
     * LDAP column label.
     */
    public function getColumn1Label()
    {
        return (!$this->column1Label) ?: $this->column1Label->getValue();
    }

    /**
     * LDAP column label.
     */
    public function setColumn2Label($column2Label = null)
    {
        $this->column2Label = ($column2Label InstanceOf LDAPColumnLabel)
             ? $column2Label
             : new LDAPColumnLabel($column2Label);
    }

    /**
     * LDAP column label.
     */
    public function getColumn2Label()
    {
        return (!$this->column2Label) ?: $this->column2Label->getValue();
    }

    /**
     * LDAP column label.
     */
    public function setColumn3Label($column3Label = null)
    {
        $this->column3Label = ($column3Label InstanceOf LDAPColumnLabel)
             ? $column3Label
             : new LDAPColumnLabel($column3Label);
    }

    /**
     * LDAP column label.
     */
    public function getColumn3Label()
    {
        return (!$this->column3Label) ?: $this->column3Label->getValue();
    }

    /**
     * LDAP column label.
     */
    public function setColumn4Label($column4Label = null)
    {
        $this->column4Label = ($column4Label InstanceOf LDAPColumnLabel)
             ? $column4Label
             : new LDAPColumnLabel($column4Label);
    }

    /**
     * LDAP column label.
     */
    public function getColumn4Label()
    {
        return (!$this->column4Label) ?: $this->column4Label->getValue();
    }

    /**
     * Indicates the column whose attribute is chosen to be included in
     *         the search filter.
     */
    public function setSearchColumn($searchColumn = null)
    {
        $this->searchColumn = ($searchColumn InstanceOf LDAPSearchColumn)
             ? $searchColumn
             : new LDAPSearchColumn($searchColumn);
    }

    /**
     * Indicates the column whose attribute is chosen to be included in
     *         the search filter.
     */
    public function getSearchColumn()
    {
        return (!$this->searchColumn) ?: $this->searchColumn->getValue();
    }
}
