<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsCallExpirationDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\EnhancedCallLogsMaxLoggedCalls;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to ServiceProviderEnhancedCallLogsGetRequest.
 */
class ServiceProviderEnhancedCallLogsGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE       = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\ServiceProviderEnhancedCallLogsGetResponse';
    public    $name               = __CLASS__;
    protected $maxLoggedCalls     = null;
    protected $callExpirationDays = null;


    /**
     * Sets the maximum number of logged calls that can be stored.
     */
    public function setMaxLoggedCalls($maxLoggedCalls = null)
    {
        $this->maxLoggedCalls = ($maxLoggedCalls InstanceOf EnhancedCallLogsMaxLoggedCalls)
             ? $maxLoggedCalls
             : new EnhancedCallLogsMaxLoggedCalls($maxLoggedCalls);
    }

    /**
     * Sets the maximum number of logged calls that can be stored.
     */
    public function getMaxLoggedCalls()
    {
        return (!$this->maxLoggedCalls) ?: $this->maxLoggedCalls->getValue();
    }

    /**
     * The maximum length of time the system will store logged calls.
     */
    public function setCallExpirationDays($callExpirationDays = null)
    {
        $this->callExpirationDays = ($callExpirationDays InstanceOf EnhancedCallLogsCallExpirationDays)
             ? $callExpirationDays
             : new EnhancedCallLogsCallExpirationDays($callExpirationDays);
    }

    /**
     * The maximum length of time the system will store logged calls.
     */
    public function getCallExpirationDays()
    {
        return (!$this->callExpirationDays) ?: $this->callExpirationDays->getValue();
    }
}
