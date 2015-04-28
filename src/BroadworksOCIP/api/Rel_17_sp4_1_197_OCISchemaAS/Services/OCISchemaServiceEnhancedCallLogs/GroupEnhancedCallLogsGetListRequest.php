<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsAccountAuthorizationCodeFilter;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsRedirectedNumberFilter;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsResponsePagingControl;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsCallLogsRequestType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsSubscriberType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsNumberFilter;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsTimeRange;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request users' call logs within a group
 *         If the callLogType is not specified, all types of calls logs (placed, received, missed) are returned.
 *         It is possible to restrict the number of rows returned using responsePagingControl.If responsePagingControl
 *         is not specified, the value of Enhanced Call Logs system parameter maxNonPagedResponseSize will control
 *         the maximum number of call logs can be returned. 
 *         The response is either a GroupEnhancedCallLogsGetListResponse or an ErrorResponse.
 */
class GroupEnhancedCallLogsGetListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\GroupEnhancedCallLogsGetListResponse';
    public    $elementName = 'GroupEnhancedCallLogsGetListRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $callLogType;
    protected $dateTimeRange;
    protected $numberFilter;
    protected $redirectedNumberFilter;
    protected $accountAuthorizationCodeFilter;
    protected $subscriberType;
    protected $responsePagingControl;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $callLogType = null,
         $dateTimeRange = '',
         $numberFilter = null,
         $redirectedNumberFilter = null,
         $accountAuthorizationCodeFilter = null,
         $subscriberType = null,
         $responsePagingControl = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setCallLogType($callLogType);
        $this->setDateTimeRange($dateTimeRange);
        $this->setNumberFilter($numberFilter);
        $this->setRedirectedNumberFilter($redirectedNumberFilter);
        $this->setAccountAuthorizationCodeFilter($accountAuthorizationCodeFilter);
        $this->setSubscriberType($subscriberType);
        $this->setResponsePagingControl($responsePagingControl);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\GroupEnhancedCallLogsGetListResponse $response
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
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallLogType($callLogType = null)
    {
        $this->callLogType = ($callLogType InstanceOf EnhancedCallLogsCallLogsRequestType)
             ? $callLogType
             : new EnhancedCallLogsCallLogsRequestType($callLogType);
        $this->callLogType->setElementName('callLogType');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsCallLogsRequestType $callLogType
     */
    public function getCallLogType()
    {
        return ($this->callLogType)
            ? $this->callLogType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDateTimeRange(EnhancedCallLogsTimeRange $dateTimeRange = null)
    {
        $this->dateTimeRange = ($dateTimeRange InstanceOf EnhancedCallLogsTimeRange)
             ? $dateTimeRange
             : new EnhancedCallLogsTimeRange($dateTimeRange);
        $this->dateTimeRange->setElementName('dateTimeRange');
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
        $this->numberFilter->setElementName('numberFilter');
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
        $this->redirectedNumberFilter->setElementName('redirectedNumberFilter');
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
        $this->accountAuthorizationCodeFilter->setElementName('accountAuthorizationCodeFilter');
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
        $this->subscriberType->setElementName('subscriberType');
        return $this;
    }

    /**
     * 
     * @return EnhancedCallLogsSubscriberType $subscriberType
     */
    public function getSubscriberType()
    {
        return ($this->subscriberType)
            ? $this->subscriberType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setResponsePagingControl(EnhancedCallLogsResponsePagingControl $responsePagingControl = null)
    {
        $this->responsePagingControl = ($responsePagingControl InstanceOf EnhancedCallLogsResponsePagingControl)
             ? $responsePagingControl
             : new EnhancedCallLogsResponsePagingControl($responsePagingControl);
        $this->responsePagingControl->setElementName('responsePagingControl');
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
