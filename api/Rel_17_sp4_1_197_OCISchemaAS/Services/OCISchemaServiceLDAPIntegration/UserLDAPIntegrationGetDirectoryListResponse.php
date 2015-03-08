<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLDAPIntegration; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPColumnLabel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration\LDAPPageNumber;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserLDAPIntegrationGetDirectoryListRequest. The table is a 4 column table.
 *         The column headings are defined by the group's LDAP settings.
 */
class UserLDAPIntegrationGetDirectoryListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLDAPIntegration\UserLDAPIntegrationGetDirectoryListResponse';
    public    $name           = __CLASS__;
    protected $ldapEntryTable = null;
    protected $searchLabel    = null;
    protected $hasMoreEntries = null;
    protected $lastPageNumber = null;


    /**
     * 
     */
    public function setLdapEntryTable(core:OCITable $ldapEntryTable = null)
    {
        $this->ldapEntryTable = core:OCITable $ldapEntryTable;
    }

    /**
     * 
     */
    public function getLdapEntryTable()
    {
        return (!$this->ldapEntryTable) ?: $this->ldapEntryTable->getValue();
    }

    /**
     * LDAP column label.
     */
    public function setSearchLabel($searchLabel = null)
    {
        $this->searchLabel = ($searchLabel InstanceOf LDAPColumnLabel)
             ? $searchLabel
             : new LDAPColumnLabel($searchLabel);
    }

    /**
     * LDAP column label.
     */
    public function getSearchLabel()
    {
        return (!$this->searchLabel) ?: $this->searchLabel->getValue();
    }

    /**
     * 
     */
    public function setHasMoreEntries($hasMoreEntries = null)
    {
        $this->hasMoreEntries = (boolean) $hasMoreEntries;
    }

    /**
     * 
     */
    public function getHasMoreEntries()
    {
        return (!$this->hasMoreEntries) ?: $this->hasMoreEntries->getValue();
    }

    /**
     * LDAP Page Number
     */
    public function setLastPageNumber($lastPageNumber = null)
    {
        $this->lastPageNumber = ($lastPageNumber InstanceOf LDAPPageNumber)
             ? $lastPageNumber
             : new LDAPPageNumber($lastPageNumber);
    }

    /**
     * LDAP Page Number
     */
    public function getLastPageNumber()
    {
        return (!$this->lastPageNumber) ?: $this->lastPageNumber->getValue();
    }
}