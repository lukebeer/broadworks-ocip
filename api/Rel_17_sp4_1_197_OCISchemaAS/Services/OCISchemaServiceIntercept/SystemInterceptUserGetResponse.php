<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceIntercept; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the SystemInterceptUserGetRequest.
 */
class SystemInterceptUserGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $emergencyAndRepairIntercept
    ) {
        $this->emergencyAndRepairIntercept = $emergencyAndRepairIntercept;
        $this->args                        = func_get_args();
    }

    public function setEmergencyAndRepairIntercept($emergencyAndRepairIntercept)
    {
        $emergencyAndRepairIntercept and $this->emergencyAndRepairIntercept = new xs:boolean($emergencyAndRepairIntercept);
    }

    public function getEmergencyAndRepairIntercept()
    {
        return (!$this->emergencyAndRepairIntercept) ?: $this->emergencyAndRepairIntercept->value();
    }
}
