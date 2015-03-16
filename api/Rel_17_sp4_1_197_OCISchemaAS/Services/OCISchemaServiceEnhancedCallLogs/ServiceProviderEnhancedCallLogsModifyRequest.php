<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsMaxLoggedCalls17sp4;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsCallExpirationDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the Service Provider level data associated with Enhanced Call Logs.
 *         Configures the maximum number of logged calls and maximum age of your user's call logs.
 *         Log entries are deleted when either of the two limits is reached.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderEnhancedCallLogsModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'ServiceProviderEnhancedCallLogsModifyRequest';
    protected $serviceProviderId;
    protected $maxLoggedCalls;
    protected $callExpirationDays;

    public function __construct(
         $serviceProviderId = '',
         $maxLoggedCalls = null,
         $callExpirationDays = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setMaxLoggedCalls($maxLoggedCalls);
        $this->setCallExpirationDays($callExpirationDays);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxLoggedCalls($maxLoggedCalls = null)
    {
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
