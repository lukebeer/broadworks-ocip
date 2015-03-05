<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAnonymousCallRejection; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a system Anonymous Call Rejection parameter.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemAnonymousCallRejectionModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $paiRequired=null,
             $screenOnlyLocalCalls=null
    ) {
        $this->paiRequired          = $paiRequired;
        $this->screenOnlyLocalCalls = $screenOnlyLocalCalls;
        $this->args                 = func_get_args();
    }

    public function setPaiRequired($paiRequired)
    {
        $paiRequired and $this->paiRequired = new xs:boolean($paiRequired);
    }

    public function getPaiRequired()
    {
        return (!$this->paiRequired) ?: $this->paiRequired->value();
    }

    public function setScreenOnlyLocalCalls($screenOnlyLocalCalls)
    {
        $screenOnlyLocalCalls and $this->screenOnlyLocalCalls = new xs:boolean($screenOnlyLocalCalls);
    }

    public function getScreenOnlyLocalCalls()
    {
        return (!$this->screenOnlyLocalCalls) ?: $this->screenOnlyLocalCalls->value();
    }
}
