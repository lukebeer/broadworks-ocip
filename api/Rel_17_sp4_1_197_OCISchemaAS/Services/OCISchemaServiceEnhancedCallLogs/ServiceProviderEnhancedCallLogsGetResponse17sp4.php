<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEnhancedCallLogs; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnhancedCallLogsMaxLoggedCalls17sp4;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnhancedCallLogsCallExpirationDays;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to ServiceProviderEnhancedCallLogsGetRequest17sp4.
 */
class ServiceProviderEnhancedCallLogsGetResponse17sp4 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $maxLoggedCalls,
             $callExpirationDays
    ) {
        $this->maxLoggedCalls     = $maxLoggedCalls;
        $this->callExpirationDays = $callExpirationDays;
        $this->args               = func_get_args();
    }

    public function setMaxLoggedCalls($maxLoggedCalls)
    {
        $maxLoggedCalls and $this->maxLoggedCalls = new EnhancedCallLogsMaxLoggedCalls17sp4($maxLoggedCalls);
    }

    public function getMaxLoggedCalls()
    {
        return (!$this->maxLoggedCalls) ?: $this->maxLoggedCalls->value();
    }

    public function setCallExpirationDays($callExpirationDays)
    {
        $callExpirationDays and $this->callExpirationDays = new EnhancedCallLogsCallExpirationDays($callExpirationDays);
    }

    public function getCallExpirationDays()
    {
        return (!$this->callExpirationDays) ?: $this->callExpirationDays->value();
    }
}
