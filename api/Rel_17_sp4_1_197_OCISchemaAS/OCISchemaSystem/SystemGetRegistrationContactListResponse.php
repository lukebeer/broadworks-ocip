<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemGetRegistrationContactListRequest. The table columns are: Service Provider Id, Group Id, User Id, Line/Port, Endpoint Type, Order, URI, Expiration, Contact, Device Level, Device Name.
 */
class SystemGetRegistrationContactListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $registrationTable
    ) {
        $this->registrationTable = $registrationTable;
        $this->args              = func_get_args();
    }

    public function setRegistrationTable($registrationTable)
    {
        $registrationTable and $this->registrationTable = new core:OCITable($registrationTable);
    }

    public function getRegistrationTable()
    {
        return (!$this->registrationTable) ?: $this->registrationTable->value();
    }
}
