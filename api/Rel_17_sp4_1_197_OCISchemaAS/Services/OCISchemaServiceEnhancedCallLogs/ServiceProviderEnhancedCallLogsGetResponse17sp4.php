<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEnhancedCallLogs; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsMaxLoggedCalls17sp4;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsCallExpirationDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEnhancedCallLogs\ServiceProviderEnhancedCallLogsGetResponse17sp4;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderEnhancedCallLogsGetRequest17sp4.
 */
class ServiceProviderEnhancedCallLogsGetResponse17sp4 extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $maxLoggedCalls     = null;
    protected $callExpirationDays = null;

    /**
     * @return ServiceProviderEnhancedCallLogsGetResponse17sp4
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Sets the maximum number of logged calls that can be stored.
     */
    public function setMaxLoggedCalls($maxLoggedCalls = null)
    {
        $this->maxLoggedCalls = ($maxLoggedCalls InstanceOf EnhancedCallLogsMaxLoggedCalls17sp4)
             ? $maxLoggedCalls
             : new EnhancedCallLogsMaxLoggedCalls17sp4($maxLoggedCalls);
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
