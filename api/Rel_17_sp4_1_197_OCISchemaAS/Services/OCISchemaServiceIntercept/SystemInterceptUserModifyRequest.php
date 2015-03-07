<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceIntercept; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the system-level intercept user service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemInterceptUserModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                         = __CLASS__;
    protected $emergencyAndRepairIntercept  = null;

    public function __construct(
         $emergencyAndRepairIntercept = null
    ) {
        $this->setEmergencyAndRepairIntercept($emergencyAndRepairIntercept);
    }

    public function setEmergencyAndRepairIntercept(xs:boolean $emergencyAndRepairIntercept = null)
    {
    }

    public function getEmergencyAndRepairIntercept()
    {
        return (!$this->emergencyAndRepairIntercept) ?: $this->emergencyAndRepairIntercept->value();
    }
}
