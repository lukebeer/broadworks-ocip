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
     * Response to the SystemInterceptUserGetRequest.
 */
class SystemInterceptUserGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceIntercept\SystemInterceptUserGetResponse';
    public    $name                        = __CLASS__;
    protected $emergencyAndRepairIntercept = null;


    /**
     * 
     */
    public function setEmergencyAndRepairIntercept($emergencyAndRepairIntercept = null)
    {
        $this->emergencyAndRepairIntercept = (boolean) $emergencyAndRepairIntercept;
    }

    /**
     * 
     */
    public function getEmergencyAndRepairIntercept()
    {
        return (!$this->emergencyAndRepairIntercept) ?: $this->emergencyAndRepairIntercept->getValue();
    }
}
