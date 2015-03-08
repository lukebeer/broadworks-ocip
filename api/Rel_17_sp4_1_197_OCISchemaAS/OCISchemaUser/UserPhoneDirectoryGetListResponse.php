<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserPhoneDirectoryGetListRequest.
 *         Contains a table with  a row for each phone number and column headings :
 *         "Name", "Number", "Extension", "Mobile", "Email Address", "Department", "First Name", "Last Name", "User Id", "Title",
 */
class UserPhoneDirectoryGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserPhoneDirectoryGetListResponse';
    public    $name           = __CLASS__;
    protected $directoryTable = null;


    /**
     * 
     */
    public function setDirectoryTable(core:OCITable $directoryTable = null)
    {
        $this->directoryTable = core:OCITable $directoryTable;
    }

    /**
     * 
     */
    public function getDirectoryTable()
    {
        return (!$this->directoryTable) ?: $this->directoryTable->getValue();
    }
}
