<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPColumnLabel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPPageNumber;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserLDAPIntegrationGetDirectoryListRequest. The table is a 4 column table.
 *         The column headings are defined by the group's LDAP settings.
 */
class UserLDAPIntegrationGetDirectoryListResponse extends ComplexType implements ComplexInterface
{
    public    $name           = 'UserLDAPIntegrationGetDirectoryListResponse';
    protected $ldapEntryTable = null;
    protected $searchLabel    = null;
    protected $hasMoreEntries = null;
    protected $lastPageNumber = null;

    /**
     * @return UserLDAPIntegrationGetDirectoryListResponse
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
        if (!$ldapEntryTable) return $this;
        $this->ldapEntryTable = $ldapEntryTable;
        $this->ldapEntryTable->setName('ldapEntryTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getLdapEntryTable()
    {
        return $this->ldapEntryTable->getValue();
    }

    /**
     * 
     */
    public function setSearchLabel($searchLabel = null)
    {
        if (!$searchLabel) return $this;
        $this->searchLabel = ($searchLabel InstanceOf LDAPColumnLabel)
             ? $searchLabel
             : new LDAPColumnLabel($searchLabel);
        $this->searchLabel->setName('searchLabel');
        return $this;
    }

    /**
     * 
     * @return LDAPColumnLabel
     */
    public function getSearchLabel()
    {
        return $this->searchLabel->getValue();
    }

    /**
     * 
     */
    public function setHasMoreEntries($hasMoreEntries = null)
    {
        if (!$hasMoreEntries) return $this;
        $this->hasMoreEntries = new PrimitiveType($hasMoreEntries);
        $this->hasMoreEntries->setName('hasMoreEntries');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getHasMoreEntries()
    {
        return $this->hasMoreEntries->getValue();
    }

    /**
     * 
     */
    public function setLastPageNumber($lastPageNumber = null)
    {
        if (!$lastPageNumber) return $this;
        $this->lastPageNumber = ($lastPageNumber InstanceOf LDAPPageNumber)
             ? $lastPageNumber
             : new LDAPPageNumber($lastPageNumber);
        $this->lastPageNumber->setName('lastPageNumber');
        return $this;
    }

    /**
     * 
     * @return LDAPPageNumber
     */
    public function getLastPageNumber()
    {
        return $this->lastPageNumber->getValue();
    }
}
