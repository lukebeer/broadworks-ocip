<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCustomerOriginatedTrace; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemCustomerOriginatedTraceGetRequest.
 */
class SystemCustomerOriginatedTraceGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $screenMaliciousCallers
    ) {
        $this->screenMaliciousCallers = $screenMaliciousCallers;
        $this->args                   = func_get_args();
    }

    public function setScreenMaliciousCallers($screenMaliciousCallers)
    {
        $screenMaliciousCallers and $this->screenMaliciousCallers = new xs:boolean($screenMaliciousCallers);
    }

    public function getScreenMaliciousCallers()
    {
        return (!$this->screenMaliciousCallers) ?: $this->screenMaliciousCallers->value();
    }
}
