<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to EnterprisePhoneDirectoryGetListRequest.
 *          Contains a table with  a row for each phone number and column headings :
 *          "Name", "Number", "Extension", "Mobile", "Email Address", "Department", "Hiragana Name", "Group Id", "Yahoo Id".
 *          If extended directory information is requested, the following columns are also included:
 *          "First Name", "Last Name", "User Id", "Pager", "Title", "Time Zone", "Location", "Address Line 1", "Address Line 2",
 *          "City", "State", "Zip", "Country".
 * 
 *          Replace by: EnterprisePhoneDirectoryGetListResponse17
 */
class EnterprisePhoneDirectoryGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name           = __CLASS__;
    protected $directoryTable = null;


    /**
     * 
     */
    public function setDirectoryTable(core:OCITable $directoryTable = null)
    {
        $this->directoryTable =  $directoryTable;
    }

    /**
     * 
     */
    public function getDirectoryTable()
    {
        return (!$this->directoryTable) ?: $this->directoryTable->getValue();
    }
}
