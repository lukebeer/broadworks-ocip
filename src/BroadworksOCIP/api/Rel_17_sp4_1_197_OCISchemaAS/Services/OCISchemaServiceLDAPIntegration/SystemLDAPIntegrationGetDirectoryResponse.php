<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPAuthenticatedPassword;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPColumnAttributeName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPAuthenticatedDN;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPSearchColumn;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPSearchFilter;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPColumnLabel;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPSearchBase;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemLDAPIntegrationGetDirectoryRequest.
 */
class SystemLDAPIntegrationGetDirectoryResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemLDAPIntegrationGetDirectoryResponse';
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
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\SystemLDAPIntegrationGetDirectoryResponse $response
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
        $this->serverNetAddress = ($serverNetAddress InstanceOf NetAddress)
             ? $serverNetAddress
             : new NetAddress($serverNetAddress);
        $this->serverNetAddress->setElementName('serverNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $serverNetAddress
     */
    public function getServerNetAddress()
    {
        return ($this->serverNetAddress)
            ? $this->serverNetAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServerPort($serverPort = null)
    {
        $this->serverPort = ($serverPort InstanceOf Port)
             ? $serverPort
             : new Port($serverPort);
        $this->serverPort->setElementName('serverPort');
        return $this;
    }

    /**
     * 
     * @return Port $serverPort
     */
    public function getServerPort()
    {
        return ($this->serverPort)
            ? $this->serverPort->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSearchBase($searchBase = null)
    {
        $this->searchBase = ($searchBase InstanceOf LDAPSearchBase)
             ? $searchBase
             : new LDAPSearchBase($searchBase);
        $this->searchBase->setElementName('searchBase');
        return $this;
    }

    /**
     * 
     * @return LDAPSearchBase $searchBase
     */
    public function getSearchBase()
    {
        return ($this->searchBase)
            ? $this->searchBase->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseSSL($useSSL = null)
    {
        $this->useSSL = new PrimitiveType($useSSL);
        $this->useSSL->setElementName('useSSL');
        return $this;
    }

    /**
     * 
     * @return boolean $useSSL
     */
    public function getUseSSL()
    {
        return ($this->useSSL)
            ? $this->useSSL->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRequireAuthentication($requireAuthentication = null)
    {
        $this->requireAuthentication = new PrimitiveType($requireAuthentication);
        $this->requireAuthentication->setElementName('requireAuthentication');
        return $this;
    }

    /**
     * 
     * @return boolean $requireAuthentication
     */
    public function getRequireAuthentication()
    {
        return ($this->requireAuthentication)
            ? $this->requireAuthentication->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAuthenticatedDN($authenticatedDN = null)
    {
        $this->authenticatedDN = ($authenticatedDN InstanceOf LDAPAuthenticatedDN)
             ? $authenticatedDN
             : new LDAPAuthenticatedDN($authenticatedDN);
        $this->authenticatedDN->setElementName('authenticatedDN');
        return $this;
    }

    /**
     * 
     * @return LDAPAuthenticatedDN $authenticatedDN
     */
    public function getAuthenticatedDN()
    {
        return ($this->authenticatedDN)
            ? $this->authenticatedDN->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAuthenticatedPassword($authenticatedPassword = null)
    {
        $this->authenticatedPassword = ($authenticatedPassword InstanceOf LDAPAuthenticatedPassword)
             ? $authenticatedPassword
             : new LDAPAuthenticatedPassword($authenticatedPassword);
        $this->authenticatedPassword->setElementName('authenticatedPassword');
        return $this;
    }

    /**
     * 
     * @return LDAPAuthenticatedPassword $authenticatedPassword
     */
    public function getAuthenticatedPassword()
    {
        return ($this->authenticatedPassword)
            ? $this->authenticatedPassword->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsSortEnabled($isSortEnabled = null)
    {
        $this->isSortEnabled = new PrimitiveType($isSortEnabled);
        $this->isSortEnabled->setElementName('isSortEnabled');
        return $this;
    }

    /**
     * 
     * @return boolean $isSortEnabled
     */
    public function getIsSortEnabled()
    {
        return ($this->isSortEnabled)
            ? $this->isSortEnabled->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsPagedResultEnabled($isPagedResultEnabled = null)
    {
        $this->isPagedResultEnabled = new PrimitiveType($isPagedResultEnabled);
        $this->isPagedResultEnabled->setElementName('isPagedResultEnabled');
        return $this;
    }

    /**
     * 
     * @return boolean $isPagedResultEnabled
     */
    public function getIsPagedResultEnabled()
    {
        return ($this->isPagedResultEnabled)
            ? $this->isPagedResultEnabled->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSearchFilter($searchFilter = null)
    {
        $this->searchFilter = ($searchFilter InstanceOf LDAPSearchFilter)
             ? $searchFilter
             : new LDAPSearchFilter($searchFilter);
        $this->searchFilter->setElementName('searchFilter');
        return $this;
    }

    /**
     * 
     * @return LDAPSearchFilter $searchFilter
     */
    public function getSearchFilter()
    {
        return ($this->searchFilter)
            ? $this->searchFilter->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIncludeSearchAttributeInSearchFilter($includeSearchAttributeInSearchFilter = null)
    {
        $this->includeSearchAttributeInSearchFilter = new PrimitiveType($includeSearchAttributeInSearchFilter);
        $this->includeSearchAttributeInSearchFilter->setElementName('includeSearchAttributeInSearchFilter');
        return $this;
    }

    /**
     * 
     * @return boolean $includeSearchAttributeInSearchFilter
     */
    public function getIncludeSearchAttributeInSearchFilter()
    {
        return ($this->includeSearchAttributeInSearchFilter)
            ? $this->includeSearchAttributeInSearchFilter->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setColumn1AttributeName($column1AttributeName = null)
    {
        $this->column1AttributeName = ($column1AttributeName InstanceOf LDAPColumnAttributeName)
             ? $column1AttributeName
             : new LDAPColumnAttributeName($column1AttributeName);
        $this->column1AttributeName->setElementName('column1AttributeName');
        return $this;
    }

    /**
     * 
     * @return LDAPColumnAttributeName $column1AttributeName
     */
    public function getColumn1AttributeName()
    {
        return ($this->column1AttributeName)
            ? $this->column1AttributeName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setColumn2AttributeName($column2AttributeName = null)
    {
        $this->column2AttributeName = ($column2AttributeName InstanceOf LDAPColumnAttributeName)
             ? $column2AttributeName
             : new LDAPColumnAttributeName($column2AttributeName);
        $this->column2AttributeName->setElementName('column2AttributeName');
        return $this;
    }

    /**
     * 
     * @return LDAPColumnAttributeName $column2AttributeName
     */
    public function getColumn2AttributeName()
    {
        return ($this->column2AttributeName)
            ? $this->column2AttributeName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setColumn3AttributeName($column3AttributeName = null)
    {
        $this->column3AttributeName = ($column3AttributeName InstanceOf LDAPColumnAttributeName)
             ? $column3AttributeName
             : new LDAPColumnAttributeName($column3AttributeName);
        $this->column3AttributeName->setElementName('column3AttributeName');
        return $this;
    }

    /**
     * 
     * @return LDAPColumnAttributeName $column3AttributeName
     */
    public function getColumn3AttributeName()
    {
        return ($this->column3AttributeName)
            ? $this->column3AttributeName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setColumn4AttributeName($column4AttributeName = null)
    {
        $this->column4AttributeName = ($column4AttributeName InstanceOf LDAPColumnAttributeName)
             ? $column4AttributeName
             : new LDAPColumnAttributeName($column4AttributeName);
        $this->column4AttributeName->setElementName('column4AttributeName');
        return $this;
    }

    /**
     * 
     * @return LDAPColumnAttributeName $column4AttributeName
     */
    public function getColumn4AttributeName()
    {
        return ($this->column4AttributeName)
            ? $this->column4AttributeName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setColumn1Label($column1Label = null)
    {
        $this->column1Label = ($column1Label InstanceOf LDAPColumnLabel)
             ? $column1Label
             : new LDAPColumnLabel($column1Label);
        $this->column1Label->setElementName('column1Label');
        return $this;
    }

    /**
     * 
     * @return LDAPColumnLabel $column1Label
     */
    public function getColumn1Label()
    {
        return ($this->column1Label)
            ? $this->column1Label->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setColumn2Label($column2Label = null)
    {
        $this->column2Label = ($column2Label InstanceOf LDAPColumnLabel)
             ? $column2Label
             : new LDAPColumnLabel($column2Label);
        $this->column2Label->setElementName('column2Label');
        return $this;
    }

    /**
     * 
     * @return LDAPColumnLabel $column2Label
     */
    public function getColumn2Label()
    {
        return ($this->column2Label)
            ? $this->column2Label->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setColumn3Label($column3Label = null)
    {
        $this->column3Label = ($column3Label InstanceOf LDAPColumnLabel)
             ? $column3Label
             : new LDAPColumnLabel($column3Label);
        $this->column3Label->setElementName('column3Label');
        return $this;
    }

    /**
     * 
     * @return LDAPColumnLabel $column3Label
     */
    public function getColumn3Label()
    {
        return ($this->column3Label)
            ? $this->column3Label->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setColumn4Label($column4Label = null)
    {
        $this->column4Label = ($column4Label InstanceOf LDAPColumnLabel)
             ? $column4Label
             : new LDAPColumnLabel($column4Label);
        $this->column4Label->setElementName('column4Label');
        return $this;
    }

    /**
     * 
     * @return LDAPColumnLabel $column4Label
     */
    public function getColumn4Label()
    {
        return ($this->column4Label)
            ? $this->column4Label->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSearchColumn($searchColumn = null)
    {
        $this->searchColumn = ($searchColumn InstanceOf LDAPSearchColumn)
             ? $searchColumn
             : new LDAPSearchColumn($searchColumn);
        $this->searchColumn->setElementName('searchColumn');
        return $this;
    }

    /**
     * 
     * @return LDAPSearchColumn $searchColumn
     */
    public function getSearchColumn()
    {
        return ($this->searchColumn)
            ? $this->searchColumn->getElementValue()
            : null;
    }
}
