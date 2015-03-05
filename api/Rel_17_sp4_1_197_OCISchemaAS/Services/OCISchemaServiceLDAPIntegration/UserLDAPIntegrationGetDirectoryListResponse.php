<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLDAPIntegration; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LDAPColumnLabel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LDAPPageNumber;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserLDAPIntegrationGetDirectoryListRequest. The table is a 4 column table.
 *         The column headings are defined by the group's LDAP settings.
 */
class UserLDAPIntegrationGetDirectoryListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $ldapEntryTable,
             $searchLabel,
             $hasMoreEntries,
             $lastPageNumber=null
    ) {
        $this->ldapEntryTable = $ldapEntryTable;
        $this->searchLabel    = $searchLabel;
        $this->hasMoreEntries = $hasMoreEntries;
        $this->lastPageNumber = $lastPageNumber;
        $this->args           = func_get_args();
    }

    public function setLdapEntryTable($ldapEntryTable)
    {
        $ldapEntryTable and $this->ldapEntryTable = new core:OCITable($ldapEntryTable);
    }

    public function getLdapEntryTable()
    {
        return (!$this->ldapEntryTable) ?: $this->ldapEntryTable->value();
    }

    public function setSearchLabel($searchLabel)
    {
        $searchLabel and $this->searchLabel = new LDAPColumnLabel($searchLabel);
    }

    public function getSearchLabel()
    {
        return (!$this->searchLabel) ?: $this->searchLabel->value();
    }

    public function setHasMoreEntries($hasMoreEntries)
    {
        $hasMoreEntries and $this->hasMoreEntries = new xs:boolean($hasMoreEntries);
    }

    public function getHasMoreEntries()
    {
        return (!$this->hasMoreEntries) ?: $this->hasMoreEntries->value();
    }

    public function setLastPageNumber($lastPageNumber)
    {
        $lastPageNumber and $this->lastPageNumber = new LDAPPageNumber($lastPageNumber);
    }

    public function getLastPageNumber()
    {
        return (!$this->lastPageNumber) ?: $this->lastPageNumber->value();
    }
}
