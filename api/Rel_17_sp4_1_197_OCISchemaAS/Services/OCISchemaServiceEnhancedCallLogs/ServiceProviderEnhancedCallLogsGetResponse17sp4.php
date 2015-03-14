<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsMaxLoggedCalls17sp4;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsCallExpirationDays;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderEnhancedCallLogsGetRequest17sp4.
 */
class ServiceProviderEnhancedCallLogsGetResponse17sp4 extends ComplexType implements ComplexInterface
{
    public    $name               = 'ServiceProviderEnhancedCallLogsGetResponse17sp4';
    protected $maxLoggedCalls     = null;
    protected $callExpirationDays = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\ServiceProviderEnhancedCallLogsGetResponse17sp4 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setMaxLoggedCalls($maxLoggedCalls = null)
    {
        if (!$maxLoggedCalls) return $this;
        $this->maxLoggedCalls = ($maxLoggedCalls InstanceOf EnhancedCallLogsMaxLoggedCalls17sp4)
             ? $maxLoggedCalls
             : new EnhancedCallLogsMaxLoggedCalls17sp4($maxLoggedCalls);
        $this->maxLoggedCalls->setName('maxLoggedCalls');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsMaxLoggedCalls17sp4 $maxLoggedCalls
     */
    public function getMaxLoggedCalls()
    {
        return $this->maxLoggedCalls->getValue();
    }

    /**
     * 
     */
    public function setCallExpirationDays($callExpirationDays = null)
    {
        if (!$callExpirationDays) return $this;
        $this->callExpirationDays = ($callExpirationDays InstanceOf EnhancedCallLogsCallExpirationDays)
             ? $callExpirationDays
             : new EnhancedCallLogsCallExpirationDays($callExpirationDays);
        $this->callExpirationDays->setName('callExpirationDays');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsCallExpirationDays $callExpirationDays
     */
    public function getCallExpirationDays()
    {
        return $this->callExpirationDays->getValue();
    }
}
