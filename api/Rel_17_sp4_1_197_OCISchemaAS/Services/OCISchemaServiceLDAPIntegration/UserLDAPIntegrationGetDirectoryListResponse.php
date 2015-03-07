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
    public    $name            = __CLASS__;
    protected $ldapEntryTable  = null;
    protected $searchLabel     = null;
    protected $hasMoreEntries  = null;
    protected $lastPageNumber  = null;


    public function setLdapEntryTable(core:OCITable $ldapEntryTable = null)
    {
    }

    public function getLdapEntryTable()
    {
        return (!$this->ldapEntryTable) ?: $this->ldapEntryTable->value();
    }

    public function setSearchLabel($searchLabel = null)
    {
        $this->searchLabel = ($searchLabel InstanceOf LDAPColumnLabel)
             ? $searchLabel
             : new LDAPColumnLabel($searchLabel);
    }

    public function getSearchLabel()
    {
        return (!$this->searchLabel) ?: $this->searchLabel->value();
    }

    public function setHasMoreEntries(xs:boolean $hasMoreEntries = null)
    {
    }

    public function getHasMoreEntries()
    {
        return (!$this->hasMoreEntries) ?: $this->hasMoreEntries->value();
    }

    public function setLastPageNumber($lastPageNumber = null)
    {
        $this->lastPageNumber = ($lastPageNumber InstanceOf LDAPPageNumber)
             ? $lastPageNumber
             : new LDAPPageNumber($lastPageNumber);
    }

    public function getLastPageNumber()
    {
        return (!$this->lastPageNumber) ?: $this->lastPageNumber->value();
    }
}
