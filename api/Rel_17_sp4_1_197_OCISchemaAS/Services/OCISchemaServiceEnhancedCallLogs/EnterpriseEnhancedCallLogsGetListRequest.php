<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsAccountAuthorizationCodeFilter;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsRedirectedNumberFilter;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsResponsePagingControl;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsCallLogsRequestType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsSubscriberType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsNumberFilter;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsTimeRange;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request users' call logs within an enterprise
 *         If the callLogType is not specified, all types of calls logs (placed, received, missed) are returned.
 *         It is possible to restrict the number of rows returned using responsePagingControl. If responsePagingControl
 *         is not specified, the value of Enhanced Call Logs system parameter maxNonPagedResponseSize will control
 *         the maximum number of call logs can be returned. 
 *         The response is either an EnterpriseEnhancedCallLogsGetListResponse or an ErrorResponse.
 */
class EnterpriseEnhancedCallLogsGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnterpriseEnhancedCallLogsGetListResponse';
    public    $name = 'EnterpriseEnhancedCallLogsGetListRequest';
    protected $serviceProviderId;
    protected $callLogType;
    protected $dateTimeRange;
    protected $numberFilter;
    protected $redirectedNumberFilter;
    protected $accountAuthorizationCodeFilter;
    protected $subscriberType;
    protected $responsePagingControl;

    public function __construct(
         $serviceProviderId = '',
         $callLogType = null,
         EnhancedCallLogsTimeRange $dateTimeRange = '',
         EnhancedCallLogsNumberFilter $numberFilter = null,
         EnhancedCallLogsRedirectedNumberFilter $redirectedNumberFilter = null,
         EnhancedCallLogsAccountAuthorizationCodeFilter $accountAuthorizationCodeFilter = null,
         $subscriberType = null,
         EnhancedCallLogsResponsePagingControl $responsePagingControl = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setCallLogType($callLogType);
        $this->setDateTimeRange($dateTimeRange);
        $this->setNumberFilter($numberFilter);
        $this->setRedirectedNumberFilter($redirectedNumberFilter);
        $this->setAccountAuthorizationCodeFilter($accountAuthorizationCodeFilter);
        $this->setSubscriberType($subscriberType);
        $this->setResponsePagingControl($responsePagingControl);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnterpriseEnhancedCallLogsGetListResponse $response
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
    public function setCallLogType($callLogType = null)
    {
        $this->callLogType = ($callLogType InstanceOf EnhancedCallLogsCallLogsRequestType)
             ? $callLogType
             : new EnhancedCallLogsCallLogsRequestType($callLogType);
        $this->callLogType->setName('callLogType');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsCallLogsRequestType $callLogType
     */
    public function getCallLogType()
    {
        return ($this->callLogType) ? $this->callLogType->getValue() : null;
    }

    /**
     * 
     */
    public function setDateTimeRange(EnhancedCallLogsTimeRange $dateTimeRange = null)
    {
        $this->dateTimeRange = ($dateTimeRange InstanceOf EnhancedCallLogsTimeRange)
             ? $dateTimeRange
             : new EnhancedCallLogsTimeRange($dateTimeRange);
        $this->dateTimeRange->setName('dateTimeRange');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsTimeRange $dateTimeRange
     */
    public function getDateTimeRange()
    {
        return $this->dateTimeRange;
    }

    /**
     * 
     */
    public function setNumberFilter(EnhancedCallLogsNumberFilter $numberFilter = null)
    {
        $this->numberFilter = ($numberFilter InstanceOf EnhancedCallLogsNumberFilter)
             ? $numberFilter
             : new EnhancedCallLogsNumberFilter($numberFilter);
        $this->numberFilter->setName('numberFilter');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsNumberFilter $numberFilter
     */
    public function getNumberFilter()
    {
        return $this->numberFilter;
    }

    /**
     * 
     */
    public function setRedirectedNumberFilter(EnhancedCallLogsRedirectedNumberFilter $redirectedNumberFilter = null)
    {
        $this->redirectedNumberFilter = ($redirectedNumberFilter InstanceOf EnhancedCallLogsRedirectedNumberFilter)
             ? $redirectedNumberFilter
             : new EnhancedCallLogsRedirectedNumberFilter($redirectedNumberFilter);
        $this->redirectedNumberFilter->setName('redirectedNumberFilter');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsRedirectedNumberFilter $redirectedNumberFilter
     */
    public function getRedirectedNumberFilter()
    {
        return $this->redirectedNumberFilter;
    }

    /**
     * 
     */
    public function setAccountAuthorizationCodeFilter(EnhancedCallLogsAccountAuthorizationCodeFilter $accountAuthorizationCodeFilter = null)
    {
        $this->accountAuthorizationCodeFilter = ($accountAuthorizationCodeFilter InstanceOf EnhancedCallLogsAccountAuthorizationCodeFilter)
             ? $accountAuthorizationCodeFilter
             : new EnhancedCallLogsAccountAuthorizationCodeFilter($accountAuthorizationCodeFilter);
        $this->accountAuthorizationCodeFilter->setName('accountAuthorizationCodeFilter');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsAccountAuthorizationCodeFilter $accountAuthorizationCodeFilter
     */
    public function getAccountAuthorizationCodeFilter()
    {
        return $this->accountAuthorizationCodeFilter;
    }

    /**
     * 
     */
    public function setSubscriberType($subscriberType = null)
    {
        $this->subscriberType = ($subscriberType InstanceOf EnhancedCallLogsSubscriberType)
             ? $subscriberType
             : new EnhancedCallLogsSubscriberType($subscriberType);
        $this->subscriberType->setName('subscriberType');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsSubscriberType $subscriberType
     */
    public function getSubscriberType()
    {
        return ($this->subscriberType) ? $this->subscriberType->getValue() : null;
    }

    /**
     * 
     */
    public function setResponsePagingControl(EnhancedCallLogsResponsePagingControl $responsePagingControl = null)
    {
        $this->responsePagingControl = ($responsePagingControl InstanceOf EnhancedCallLogsResponsePagingControl)
             ? $responsePagingControl
             : new EnhancedCallLogsResponsePagingControl($responsePagingControl);
        $this->responsePagingControl->setName('responsePagingControl');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsResponsePagingControl $responsePagingControl
     */
    public function getResponsePagingControl()
    {
        return $this->responsePagingControl;
    }
}
