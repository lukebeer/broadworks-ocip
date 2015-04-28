<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsMaxLoggedCalls17sp4;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsCallExpirationDays;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the Service Provider level data associated with Enhanced Call Logs.
 *         Configures the maximum number of logged calls and maximum age of your user's call logs.
 *         Log entries are deleted when either of the two limits is reached.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderEnhancedCallLogsModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderEnhancedCallLogsModifyRequest';
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
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxLoggedCalls($maxLoggedCalls = null)
    {
        $this->maxLoggedCalls = ($maxLoggedCalls InstanceOf EnhancedCallLogsMaxLoggedCalls17sp4)
             ? $maxLoggedCalls
             : new EnhancedCallLogsMaxLoggedCalls17sp4($maxLoggedCalls);
        $this->maxLoggedCalls->setElementName('maxLoggedCalls');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsMaxLoggedCalls17sp4 $maxLoggedCalls
     */
    public function getMaxLoggedCalls()
    {
        return ($this->maxLoggedCalls)
            ? $this->maxLoggedCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallExpirationDays($callExpirationDays = null)
    {
        $this->callExpirationDays = ($callExpirationDays InstanceOf EnhancedCallLogsCallExpirationDays)
             ? $callExpirationDays
             : new EnhancedCallLogsCallExpirationDays($callExpirationDays);
        $this->callExpirationDays->setElementName('callExpirationDays');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsCallExpirationDays $callExpirationDays
     */
    public function getCallExpirationDays()
    {
        return ($this->callExpirationDays)
            ? $this->callExpirationDays->getElementValue()
            : null;
    }
}
