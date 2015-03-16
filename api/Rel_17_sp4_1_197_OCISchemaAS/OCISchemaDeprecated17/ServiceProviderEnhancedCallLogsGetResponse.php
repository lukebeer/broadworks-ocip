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
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderEnhancedCallLogsGetRequest.
 */
class ServiceProviderEnhancedCallLogsGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'ServiceProviderEnhancedCallLogsGetResponse';
    protected $maxLoggedCalls;
    protected $callExpirationDays;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\ServiceProviderEnhancedCallLogsGetResponse $response
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
        $this->maxLoggedCalls = ($maxLoggedCalls InstanceOf EnhancedCallLogsMaxLoggedCalls)
             ? $maxLoggedCalls
             : new EnhancedCallLogsMaxLoggedCalls($maxLoggedCalls);
        $this->maxLoggedCalls->setName('maxLoggedCalls');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsMaxLoggedCalls $maxLoggedCalls
     */
    public function getMaxLoggedCalls()
    {
        return ($this->maxLoggedCalls) ? $this->maxLoggedCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setCallExpirationDays($callExpirationDays = null)
    {
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
        return ($this->callExpirationDays) ? $this->callExpirationDays->getValue() : null;
    }
}
