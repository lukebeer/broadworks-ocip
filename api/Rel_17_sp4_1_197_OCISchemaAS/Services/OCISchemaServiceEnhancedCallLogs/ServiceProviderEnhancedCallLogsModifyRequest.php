<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEnhancedCallLogs; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsMaxLoggedCalls17sp4;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsCallExpirationDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEnhancedCallLogs\ServiceProviderEnhancedCallLogsModifyResponse;
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
    public    $name               = __CLASS__;
    protected $serviceProviderId  = null;
    protected $maxLoggedCalls     = null;
    protected $callExpirationDays = null;

    public function __construct(
         $serviceProviderId,
         $maxLoggedCalls = null,
         $callExpirationDays = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setMaxLoggedCalls($maxLoggedCalls);
        $this->setCallExpirationDays($callExpirationDays);
    }

    /**
     * @return ServiceProviderEnhancedCallLogsModifyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
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
