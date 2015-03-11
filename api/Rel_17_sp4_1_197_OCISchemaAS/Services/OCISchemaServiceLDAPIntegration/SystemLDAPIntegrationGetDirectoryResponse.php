<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPAuthenticatedPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPColumnAttributeName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPAuthenticatedDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPSearchColumn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPSearchFilter;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPColumnLabel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPSearchBase;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemLDAPIntegrationGetDirectoryRequest.
 */
class SystemLDAPIntegrationGetDirectoryResponse extends ComplexType implements ComplexInterface
{
    public    $name                                 = 'SystemLDAPIntegrationGetDirectoryResponse';
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
     * @return SystemLDAPIntegrationGetDirectoryResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServerNetAddress($serverNetAddress = null)
    {
        if (!$serverNetAddress) return $this;
        $this->serverNetAddress = ($serverNetAddress InstanceOf NetAddress)
             ? $serverNetAddress
             : new NetAddress($serverNetAddress);
        $this->serverNetAddress->setName('serverNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress
     */
    public function getServerNetAddress()
    {
        return $this->serverNetAddress->getValue();
    }

    /**
     * 
     */
    public function setServerPort($serverPort = null)
    {
        if (!$serverPort) return $this;
        $this->serverPort = ($serverPort InstanceOf Port)
             ? $serverPort
             : new Port($serverPort);
        $this->serverPort->setName('serverPort');
        return $this;
    }

    /**
     * 
     * @return Port
     */
    public function getServerPort()
    {
        return $this->serverPort->getValue();
    }

    /**
     * 
     */
    public function setSearchBase($searchBase = null)
    {
        if (!$searchBase) return $this;
        $this->searchBase = ($searchBase InstanceOf LDAPSearchBase)
             ? $searchBase
             : new LDAPSearchBase($searchBase);
        $this->searchBase->setName('searchBase');
        return $this;
    }

    /**
     * 
     * @return LDAPSearchBase
     */
    public function getSearchBase()
    {
        return $this->searchBase->getValue();
    }

    /**
     * 
     */
    public function setUseSSL($useSSL = null)
    {
        if (!$useSSL) return $this;
        $this->useSSL = new PrimitiveType($useSSL);
        $this->useSSL->setName('useSSL');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseSSL()
    {
        return $this->useSSL->getValue();
    }

    /**
     * 
     */
    public function setRequireAuthentication($requireAuthentication = null)
    {
        if (!$requireAuthentication) return $this;
        $this->requireAuthentication = new PrimitiveType($requireAuthentication);
        $this->requireAuthentication->setName('requireAuthentication');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getRequireAuthentication()
    {
        return $this->requireAuthentication->getValue();
    }

    /**
     * 
     */
    public function setAuthenticatedDN($authenticatedDN = null)
    {
        if (!$authenticatedDN) return $this;
        $this->authenticatedDN = ($authenticatedDN InstanceOf LDAPAuthenticatedDN)
             ? $authenticatedDN
             : new LDAPAuthenticatedDN($authenticatedDN);
        $this->authenticatedDN->setName('authenticatedDN');
        return $this;
    }

    /**
     * 
     * @return LDAPAuthenticatedDN
     */
    public function getAuthenticatedDN()
    {
        return $this->authenticatedDN->getValue();
    }

    /**
     * 
     */
    public function setAuthenticatedPassword($authenticatedPassword = null)
    {
        if (!$authenticatedPassword) return $this;
        $this->authenticatedPassword = ($authenticatedPassword InstanceOf LDAPAuthenticatedPassword)
             ? $authenticatedPassword
             : new LDAPAuthenticatedPassword($authenticatedPassword);
        $this->authenticatedPassword->setName('authenticatedPassword');
        return $this;
    }

    /**
     * 
     * @return LDAPAuthenticatedPassword
     */
    public function getAuthenticatedPassword()
    {
        return $this->authenticatedPassword->getValue();
    }

    /**
     * 
     */
    public function setIsSortEnabled($isSortEnabled = null)
    {
        if (!$isSortEnabled) return $this;
        $this->isSortEnabled = new PrimitiveType($isSortEnabled);
        $this->isSortEnabled->setName('isSortEnabled');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsSortEnabled()
    {
        return $this->isSortEnabled->getValue();
    }

    /**
     * 
     */
    public function setIsPagedResultEnabled($isPagedResultEnabled = null)
    {
        if (!$isPagedResultEnabled) return $this;
        $this->isPagedResultEnabled = new PrimitiveType($isPagedResultEnabled);
        $this->isPagedResultEnabled->setName('isPagedResultEnabled');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsPagedResultEnabled()
    {
        return $this->isPagedResultEnabled->getValue();
    }

    /**
     * 
     */
    public function setSearchFilter($searchFilter = null)
    {
        if (!$searchFilter) return $this;
        $this->searchFilter = ($searchFilter InstanceOf LDAPSearchFilter)
             ? $searchFilter
             : new LDAPSearchFilter($searchFilter);
        $this->searchFilter->setName('searchFilter');
        return $this;
    }

    /**
     * 
     * @return LDAPSearchFilter
     */
    public function getSearchFilter()
    {
        return $this->searchFilter->getValue();
    }

    /**
     * 
     */
    public function setIncludeSearchAttributeInSearchFilter($includeSearchAttributeInSearchFilter = null)
    {
        if (!$includeSearchAttributeInSearchFilter) return $this;
        $this->includeSearchAttributeInSearchFilter = new PrimitiveType($includeSearchAttributeInSearchFilter);
        $this->includeSearchAttributeInSearchFilter->setName('includeSearchAttributeInSearchFilter');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIncludeSearchAttributeInSearchFilter()
    {
        return $this->includeSearchAttributeInSearchFilter->getValue();
    }

    /**
     * 
     */
    public function setColumn1AttributeName($column1AttributeName = null)
    {
        if (!$column1AttributeName) return $this;
        $this->column1AttributeName = ($column1AttributeName InstanceOf LDAPColumnAttributeName)
             ? $column1AttributeName
             : new LDAPColumnAttributeName($column1AttributeName);
        $this->column1AttributeName->setName('column1AttributeName');
        return $this;
    }

    /**
     * 
     * @return LDAPColumnAttributeName
     */
    public function getColumn1AttributeName()
    {
        return $this->column1AttributeName->getValue();
    }

    /**
     * 
     */
    public function setColumn2AttributeName($column2AttributeName = null)
    {
        if (!$column2AttributeName) return $this;
        $this->column2AttributeName = ($column2AttributeName InstanceOf LDAPColumnAttributeName)
             ? $column2AttributeName
             : new LDAPColumnAttributeName($column2AttributeName);
        $this->column2AttributeName->setName('column2AttributeName');
        return $this;
    }

    /**
     * 
     * @return LDAPColumnAttributeName
     */
    public function getColumn2AttributeName()
    {
        return $this->column2AttributeName->getValue();
    }

    /**
     * 
     */
    public function setColumn3AttributeName($column3AttributeName = null)
    {
        if (!$column3AttributeName) return $this;
        $this->column3AttributeName = ($column3AttributeName InstanceOf LDAPColumnAttributeName)
             ? $column3AttributeName
             : new LDAPColumnAttributeName($column3AttributeName);
        $this->column3AttributeName->setName('column3AttributeName');
        return $this;
    }

    /**
     * 
     * @return LDAPColumnAttributeName
     */
    public function getColumn3AttributeName()
    {
        return $this->column3AttributeName->getValue();
    }

    /**
     * 
     */
    public function setColumn4AttributeName($column4AttributeName = null)
    {
        if (!$column4AttributeName) return $this;
        $this->column4AttributeName = ($column4AttributeName InstanceOf LDAPColumnAttributeName)
             ? $column4AttributeName
             : new LDAPColumnAttributeName($column4AttributeName);
        $this->column4AttributeName->setName('column4AttributeName');
        return $this;
    }

    /**
     * 
     * @return LDAPColumnAttributeName
     */
    public function getColumn4AttributeName()
    {
        return $this->column4AttributeName->getValue();
    }

    /**
     * 
     */
    public function setColumn1Label($column1Label = null)
    {
        if (!$column1Label) return $this;
        $this->column1Label = ($column1Label InstanceOf LDAPColumnLabel)
             ? $column1Label
             : new LDAPColumnLabel($column1Label);
        $this->column1Label->setName('column1Label');
        return $this;
    }

    /**
     * 
     * @return LDAPColumnLabel
     */
    public function getColumn1Label()
    {
        return $this->column1Label->getValue();
    }

    /**
     * 
     */
    public function setColumn2Label($column2Label = null)
    {
        if (!$column2Label) return $this;
        $this->column2Label = ($column2Label InstanceOf LDAPColumnLabel)
             ? $column2Label
             : new LDAPColumnLabel($column2Label);
        $this->column2Label->setName('column2Label');
        return $this;
    }

    /**
     * 
     * @return LDAPColumnLabel
     */
    public function getColumn2Label()
    {
        return $this->column2Label->getValue();
    }

    /**
     * 
     */
    public function setColumn3Label($column3Label = null)
    {
        if (!$column3Label) return $this;
        $this->column3Label = ($column3Label InstanceOf LDAPColumnLabel)
             ? $column3Label
             : new LDAPColumnLabel($column3Label);
        $this->column3Label->setName('column3Label');
        return $this;
    }

    /**
     * 
     * @return LDAPColumnLabel
     */
    public function getColumn3Label()
    {
        return $this->column3Label->getValue();
    }

    /**
     * 
     */
    public function setColumn4Label($column4Label = null)
    {
        if (!$column4Label) return $this;
        $this->column4Label = ($column4Label InstanceOf LDAPColumnLabel)
             ? $column4Label
             : new LDAPColumnLabel($column4Label);
        $this->column4Label->setName('column4Label');
        return $this;
    }

    /**
     * 
     * @return LDAPColumnLabel
     */
    public function getColumn4Label()
    {
        return $this->column4Label->getValue();
    }

    /**
     * 
     */
    public function setSearchColumn($searchColumn = null)
    {
        if (!$searchColumn) return $this;
        $this->searchColumn = ($searchColumn InstanceOf LDAPSearchColumn)
             ? $searchColumn
             : new LDAPSearchColumn($searchColumn);
        $this->searchColumn->setName('searchColumn');
        return $this;
    }

    /**
     * 
     * @return LDAPSearchColumn
     */
    public function getSearchColumn()
    {
        return $this->searchColumn->getValue();
    }
}
