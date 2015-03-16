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
    public    $name = 'UserLDAPIntegrationGetDirectoryListResponse';
    protected $ldapEntryTable;
    protected $searchLabel;
    protected $hasMoreEntries;
    protected $lastPageNumber;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\UserLDAPIntegrationGetDirectoryListResponse $response
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
        $this->ldapEntryTable->setName('ldapEntryTable');
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
        $this->searchLabel->setName('searchLabel');
        return $this;
    }

    /**
     * 
     * @return LDAPColumnLabel $searchLabel
     */
    public function getSearchLabel()
    {
        return ($this->searchLabel) ? $this->searchLabel->getValue() : null;
    }

    /**
     * 
     */
    public function setHasMoreEntries($hasMoreEntries = null)
    {
        $this->hasMoreEntries = new PrimitiveType($hasMoreEntries);
        $this->hasMoreEntries->setName('hasMoreEntries');
        return $this;
    }

    /**
     * 
     * @return boolean $hasMoreEntries
     */
    public function getHasMoreEntries()
    {
        return ($this->hasMoreEntries) ? $this->hasMoreEntries->getValue() : null;
    }

    /**
     * 
     */
    public function setLastPageNumber($lastPageNumber = null)
    {
        $this->lastPageNumber = ($lastPageNumber InstanceOf LDAPPageNumber)
             ? $lastPageNumber
             : new LDAPPageNumber($lastPageNumber);
        $this->lastPageNumber->setName('lastPageNumber');
        return $this;
    }

    /**
     * 
     * @return LDAPPageNumber $lastPageNumber
     */
    public function getLastPageNumber()
    {
        return ($this->lastPageNumber) ? $this->lastPageNumber->getValue() : null;
    }
}
