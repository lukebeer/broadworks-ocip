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
     * Response to UserGetServiceInstanceListInSystemRequest.
 *         Contains a table with column headings : "User Id", "Group Id", "Serive Provider Id", "Service Type", "Name", "Phone Number", 
 *         "Extension" in a row for each Service Instance. Possible values for Service Type column are ServiceType enums.
 */
class UserGetServiceInstanceListInSystemResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE         = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserGetServiceInstanceListInSystemResponse';
    public    $name                 = __CLASS__;
    protected $serviceInstanceTable = null;


    /**
     * 
     */
    public function setServiceInstanceTable(core:OCITable $serviceInstanceTable = null)
    {
        $this->serviceInstanceTable = core:OCITable $serviceInstanceTable;
    }

    /**
     * 
     */
    public function getServiceInstanceTable()
    {
        return (!$this->serviceInstanceTable) ?: $this->serviceInstanceTable->getValue();
    }
}