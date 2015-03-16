<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration; 

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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupLDAPIntegrationGetDirectoryRequest.
 */
class GroupLDAPIntegrationGetDirectoryResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupLDAPIntegrationGetDirectoryResponse';
    protected $useLevel;
    protected $serverNetAddress;
    protected $serverPort;
    protected $searchBase;
    protected $useSSL;
    protected $requireAuthentication;
    protected $authenticatedDN;
    protected $authenticatedPassword;
    protected $isSortEnabled;
    protected $isPagedResultEnabled;
    protected $searchFilter;
    protected $includeSearchAttributeInSearchFilter;
    protected $column1AttributeName;
    protected $column2AttributeName;
    protected $column3AttributeName;
    protected $column4AttributeName;
    protected $column1Label;
    protected $column2Label;
    protected $column3Label;
    protected $column4Label;
    protected $searchColumn;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\GroupLDAPIntegrationGetDirectoryResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUseLevel($useLevel = null)
    {
        $this->useLevel = ($useLevel InstanceOf GroupLDAPIntegrationLevel)
             ? $useLevel
             : new GroupLDAPIntegrationLevel($useLevel);
        $this->useLevel->setName('useLevel');
        return $this;
    }

    /**
     * 
     * @return GroupLDAPIntegrationLevel $useLevel
     */
    public function getUseLevel()
    {
        return ($this->useLevel) ? $this->useLevel->getValue() : null;
    }

    /**
     * 
     */
    public function setServerNetAddress($serverNetAddress = null)
    {
        $this->serverNetAddress = ($serverNetAddress InstanceOf NetAddress)
             ? $serverNetAddress
             : new NetAddress($serverNetAddress);
        $this->serverNetAddress->setName('serverNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $serverNetAddress
     */
    public function getServerNetAddress()
    {
        return ($this->serverNetAddress) ? $this->serverNetAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setServerPort($serverPort = null)
    {
        $this->serverPort = ($serverPort InstanceOf Port)
             ? $serverPort
             : new Port($serverPort);
        $this->serverPort->setName('serverPort');
        return $this;
    }

    /**
     * 
     * @return Port $serverPort
     */
    public function getServerPort()
    {
        return ($this->serverPort) ? $this->serverPort->getValue() : null;
    }

    /**
     * 
     */
    public function setSearchBase($searchBase = null)
    {
        $this->searchBase = ($searchBase InstanceOf LDAPSearchBase)
             ? $searchBase
             : new LDAPSearchBase($searchBase);
        $this->searchBase->setName('searchBase');
        return $this;
    }

    /**
     * 
     * @return LDAPSearchBase $searchBase
     */
    public function getSearchBase()
    {
        return ($this->searchBase) ? $this->searchBase->getValue() : null;
    }

    /**
     * 
     */
    public function setUseSSL($useSSL = null)
    {
        $this->useSSL = new PrimitiveType($useSSL);
        $this->useSSL->setName('useSSL');
        return $this;
    }

    /**
     * 
     * @return boolean $useSSL
     */
    public function getUseSSL()
    {
        return ($this->useSSL) ? $this->useSSL->getValue() : null;
    }

    /**
     * 
     */
    public function setRequireAuthentication($requireAuthentication = null)
    {
        $this->requireAuthentication = new PrimitiveType($requireAuthentication);
        $this->requireAuthentication->setName('requireAuthentication');
        return $this;
    }

    /**
     * 
     * @return boolean $requireAuthentication
     */
    public function getRequireAuthentication()
    {
        return ($this->requireAuthentication) ? $this->requireAuthentication->getValue() : null;
    }

    /**
     * 
     */
    public function setAuthenticatedDN($authenticatedDN = null)
    {
        $this->authenticatedDN = ($authenticatedDN InstanceOf LDAPAuthenticatedDN)
             ? $authenticatedDN
             : new LDAPAuthenticatedDN($authenticatedDN);
        $this->authenticatedDN->setName('authenticatedDN');
        return $this;
    }

    /**
     * 
     * @return LDAPAuthenticatedDN $authenticatedDN
     */
    public function getAuthenticatedDN()
    {
        return ($this->authenticatedDN) ? $this->authenticatedDN->getValue() : null;
    }

    /**
     * 
     */
    public function setAuthenticatedPassword($authenticatedPassword = null)
    {
        $this->authenticatedPassword = ($authenticatedPassword InstanceOf LDAPAuthenticatedPassword)
             ? $authenticatedPassword
             : new LDAPAuthenticatedPassword($authenticatedPassword);
        $this->authenticatedPassword->setName('authenticatedPassword');
        return $this;
    }

    /**
     * 
     * @return LDAPAuthenticatedPassword $authenticatedPassword
     */
    public function getAuthenticatedPassword()
    {
        return ($this->authenticatedPassword) ? $this->authenticatedPassword->getValue() : null;
    }

    /**
     * 
     */
    public function setIsSortEnabled($isSortEnabled = null)
    {
        $this->isSortEnabled = new PrimitiveType($isSortEnabled);
        $this->isSortEnabled->setName('isSortEnabled');
        return $this;
    }

    /**
     * 
     * @return boolean $isSortEnabled
     */
    public function getIsSortEnabled()
    {
        return ($this->isSortEnabled) ? $this->isSortEnabled->getValue() : null;
    }

    /**
     * 
     */
    public function setIsPagedResultEnabled($isPagedResultEnabled = null)
    {
        $this->isPagedResultEnabled = new PrimitiveType($isPagedResultEnabled);
        $this->isPagedResultEnabled->setName('isPagedResultEnabled');
        return $this;
    }

    /**
     * 
     * @return boolean $isPagedResultEnabled
     */
    public function getIsPagedResultEnabled()
    {
        return ($this->isPagedResultEnabled) ? $this->isPagedResultEnabled->getValue() : null;
    }

    /**
     * 
     */
    public function setSearchFilter($searchFilter = null)
    {
        $this->searchFilter = ($searchFilter InstanceOf LDAPSearchFilter)
             ? $searchFilter
             : new LDAPSearchFilter($searchFilter);
        $this->searchFilter->setName('searchFilter');
        return $this;
    }

    /**
     * 
     * @return LDAPSearchFilter $searchFilter
     */
    public function getSearchFilter()
    {
        return ($this->searchFilter) ? $this->searchFilter->getValue() : null;
    }

    /**
     * 
     */
    public function setIncludeSearchAttributeInSearchFilter($includeSearchAttributeInSearchFilter = null)
    {
        $this->includeSearchAttributeInSearchFilter = new PrimitiveType($includeSearchAttributeInSearchFilter);
        $this->includeSearchAttributeInSearchFilter->setName('includeSearchAttributeInSearchFilter');
        return $this;
    }

    /**
     * 
     * @return boolean $includeSearchAttributeInSearchFilter
     */
    public function getIncludeSearchAttributeInSearchFilter()
    {
        return ($this->includeSearchAttributeInSearchFilter) ? $this->includeSearchAttributeInSearchFilter->getValue() : null;
    }

    /**
     * 
     */
    public function setColumn1AttributeName($column1AttributeName = null)
    {
        $this->column1AttributeName = ($column1AttributeName InstanceOf LDAPColumnAttributeName)
             ? $column1AttributeName
             : new LDAPColumnAttributeName($column1AttributeName);
        $this->column1AttributeName->setName('column1AttributeName');
        return $this;
    }

    /**
     * 
     * @return LDAPColumnAttributeName $column1AttributeName
     */
    public function getColumn1AttributeName()
    {
        return ($this->column1AttributeName) ? $this->column1AttributeName->getValue() : null;
    }

    /**
     * 
     */
    public function setColumn2AttributeName($column2AttributeName = null)
    {
        $this->column2AttributeName = ($column2AttributeName InstanceOf LDAPColumnAttributeName)
             ? $column2AttributeName
             : new LDAPColumnAttributeName($column2AttributeName);
        $this->column2AttributeName->setName('column2AttributeName');
        return $this;
    }

    /**
     * 
     * @return LDAPColumnAttributeName $column2AttributeName
     */
    public function getColumn2AttributeName()
    {
        return ($this->column2AttributeName) ? $this->column2AttributeName->getValue() : null;
    }

    /**
     * 
     */
    public function setColumn3AttributeName($column3AttributeName = null)
    {
        $this->column3AttributeName = ($column3AttributeName InstanceOf LDAPColumnAttributeName)
             ? $column3AttributeName
             : new LDAPColumnAttributeName($column3AttributeName);
        $this->column3AttributeName->setName('column3AttributeName');
        return $this;
    }

    /**
     * 
     * @return LDAPColumnAttributeName $column3AttributeName
     */
    public function getColumn3AttributeName()
    {
        return ($this->column3AttributeName) ? $this->column3AttributeName->getValue() : null;
    }

    /**
     * 
     */
    public function setColumn4AttributeName($column4AttributeName = null)
    {
        $this->column4AttributeName = ($column4AttributeName InstanceOf LDAPColumnAttributeName)
             ? $column4AttributeName
             : new LDAPColumnAttributeName($column4AttributeName);
        $this->column4AttributeName->setName('column4AttributeName');
        return $this;
    }

    /**
     * 
     * @return LDAPColumnAttributeName $column4AttributeName
     */
    public function getColumn4AttributeName()
    {
        return ($this->column4AttributeName) ? $this->column4AttributeName->getValue() : null;
    }

    /**
     * 
     */
    public function setColumn1Label($column1Label = null)
    {
        $this->column1Label = ($column1Label InstanceOf LDAPColumnLabel)
             ? $column1Label
             : new LDAPColumnLabel($column1Label);
        $this->column1Label->setName('column1Label');
        return $this;
    }

    /**
     * 
     * @return LDAPColumnLabel $column1Label
     */
    public function getColumn1Label()
    {
        return ($this->column1Label) ? $this->column1Label->getValue() : null;
    }

    /**
     * 
     */
    public function setColumn2Label($column2Label = null)
    {
        $this->column2Label = ($column2Label InstanceOf LDAPColumnLabel)
             ? $column2Label
             : new LDAPColumnLabel($column2Label);
        $this->column2Label->setName('column2Label');
        return $this;
    }

    /**
     * 
     * @return LDAPColumnLabel $column2Label
     */
    public function getColumn2Label()
    {
        return ($this->column2Label) ? $this->column2Label->getValue() : null;
    }

    /**
     * 
     */
    public function setColumn3Label($column3Label = null)
    {
        $this->column3Label = ($column3Label InstanceOf LDAPColumnLabel)
             ? $column3Label
             : new LDAPColumnLabel($column3Label);
        $this->column3Label->setName('column3Label');
        return $this;
    }

    /**
     * 
     * @return LDAPColumnLabel $column3Label
     */
    public function getColumn3Label()
    {
        return ($this->column3Label) ? $this->column3Label->getValue() : null;
    }

    /**
     * 
     */
    public function setColumn4Label($column4Label = null)
    {
        $this->column4Label = ($column4Label InstanceOf LDAPColumnLabel)
             ? $column4Label
             : new LDAPColumnLabel($column4Label);
        $this->column4Label->setName('column4Label');
        return $this;
    }

    /**
     * 
     * @return LDAPColumnLabel $column4Label
     */
    public function getColumn4Label()
    {
        return ($this->column4Label) ? $this->column4Label->getValue() : null;
    }

    /**
     * 
     */
    public function setSearchColumn($searchColumn = null)
    {
        $this->searchColumn = ($searchColumn InstanceOf LDAPSearchColumn)
             ? $searchColumn
             : new LDAPSearchColumn($searchColumn);
        $this->searchColumn->setName('searchColumn');
        return $this;
    }

    /**
     * 
     * @return LDAPSearchColumn $searchColumn
     */
    public function getSearchColumn()
    {
        return ($this->searchColumn) ? $this->searchColumn->getValue() : null;
    }
}
