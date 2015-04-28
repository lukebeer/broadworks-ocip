<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPColumnLabel;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPPageNumber;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserLDAPIntegrationGetDirectoryListRequest. The table is a 4 column table.
 *         The column headings are defined by the group's LDAP settings.
 */
class UserLDAPIntegrationGetDirectoryListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserLDAPIntegrationGetDirectoryListResponse';
    protected $ldapEntryTable;
    protected $searchLabel;
    protected $hasMoreEntries;
    protected $lastPageNumber;

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
    public function setLdapEntryTable(TableType $ldapEntryTable = null)
    {
        $this->ldapEntryTable = $ldapEntryTable;
        $this->ldapEntryTable->setElementName('ldapEntryTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getLdapEntryTable()
    {
        return $this->ldapEntryTable;
    }

    /**
     * 
     */
    public function setSearchLabel($searchLabel = null)
    {
        $this->searchLabel = ($searchLabel InstanceOf LDAPColumnLabel)
             ? $searchLabel
             : new LDAPColumnLabel($searchLabel);
        $this->searchLabel->setElementName('searchLabel');
        return $this;
    }

    /**
     * 
     * @return LDAPColumnLabel $searchLabel
     */
    public function getSearchLabel()
    {
        return ($this->searchLabel)
            ? $this->searchLabel->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHasMoreEntries($hasMoreEntries = null)
    {
        $this->hasMoreEntries = new PrimitiveType($hasMoreEntries);
        $this->hasMoreEntries->setElementName('hasMoreEntries');
        return $this;
    }

    /**
     * 
     * @return boolean $hasMoreEntries
     */
    public function getHasMoreEntries()
    {
        return ($this->hasMoreEntries)
            ? $this->hasMoreEntries->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLastPageNumber($lastPageNumber = null)
    {
        $this->lastPageNumber = ($lastPageNumber InstanceOf LDAPPageNumber)
             ? $lastPageNumber
             : new LDAPPageNumber($lastPageNumber);
        $this->lastPageNumber->setElementName('lastPageNumber');
        return $this;
    }

    /**
     * 
     * @return LDAPPageNumber $lastPageNumber
     */
    public function getLastPageNumber()
    {
        return ($this->lastPageNumber)
            ? $this->lastPageNumber->getElementValue()
            : null;
    }
}
