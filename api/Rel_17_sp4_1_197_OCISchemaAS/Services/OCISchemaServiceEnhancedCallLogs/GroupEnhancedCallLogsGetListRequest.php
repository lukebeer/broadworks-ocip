<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEnhancedCallLogs; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsAccountAuthorizationCodeFilter;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsRedirectedNumberFilter;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsResponsePagingControl;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsCallLogsRequestType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsSubscriberType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsNumberFilter;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsTimeRange;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


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
    const     RESPONSE_TYPE                   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEnhancedCallLogs\GroupEnhancedCallLogsGetListResponse';
    public    $name                           = __CLASS__;
    protected $serviceProviderId              = null;
    protected $groupId                        = null;
    protected $callLogType                    = null;
    protected $dateTimeRange                  = null;
    protected $numberFilter                   = null;
    protected $redirectedNumberFilter         = null;
    protected $accountAuthorizationCodeFilter = null;
    protected $subscriberType                 = null;
    protected $responsePagingControl          = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $callLogType = null,
         EnhancedCallLogsTimeRange $dateTimeRange,
         EnhancedCallLogsNumberFilter $numberFilter = null,
         EnhancedCallLogsRedirectedNumberFilter $redirectedNumberFilter = null,
         EnhancedCallLogsAccountAuthorizationCodeFilter $accountAuthorizationCodeFilter = null,
         $subscriberType = null,
         EnhancedCallLogsResponsePagingControl $responsePagingControl = null
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
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * Call Log type used by enhanced call logs requests
     */
    public function setCallLogType($callLogType = null)
    {
        $this->callLogType = ($callLogType InstanceOf EnhancedCallLogsCallLogsRequestType)
             ? $callLogType
             : new EnhancedCallLogsCallLogsRequestType($callLogType);
    }

    /**
     * Call Log type used by enhanced call logs requests
     */
    public function getCallLogType()
    {
        return (!$this->callLogType) ?: $this->callLogType->getValue();
    }

    /**
     * Time range used to filter call logs.
     */
    public function setDateTimeRange(EnhancedCallLogsTimeRange $dateTimeRange = null)
    {
        $this->dateTimeRange = EnhancedCallLogsTimeRange $dateTimeRange;
    }

    /**
     * Time range used to filter call logs.
     */
    public function getDateTimeRange()
    {
        return (!$this->dateTimeRange) ?: $this->dateTimeRange->getValue();
    }

    /**
     * Filter criteria based on the called number or number called.
     */
    public function setNumberFilter(EnhancedCallLogsNumberFilter $numberFilter = null)
    {
        $this->numberFilter = EnhancedCallLogsNumberFilter $numberFilter;
    }

    /**
     * Filter criteria based on the called number or number called.
     */
    public function getNumberFilter()
    {
        return (!$this->numberFilter) ?: $this->numberFilter->getValue();
    }

    /**
     * Filter criteria based on the transferred/forwarded number.
     */
    public function setRedirectedNumberFilter(EnhancedCallLogsRedirectedNumberFilter $redirectedNumberFilter = null)
    {
        $this->redirectedNumberFilter = EnhancedCallLogsRedirectedNumberFilter $redirectedNumberFilter;
    }

    /**
     * Filter criteria based on the transferred/forwarded number.
     */
    public function getRedirectedNumberFilter()
    {
        return (!$this->redirectedNumberFilter) ?: $this->redirectedNumberFilter->getValue();
    }

    /**
     * Filter criteria based on the account code.
     *         When "callsWithCodes" is set to true, all call logs with account/authorization codes are returned. 
     *         When it set to false, all call logs without account/authorization codes are returned.
     */
    public function setAccountAuthorizationCodeFilter(EnhancedCallLogsAccountAuthorizationCodeFilter $accountAuthorizationCodeFilter = null)
    {
        $this->accountAuthorizationCodeFilter = EnhancedCallLogsAccountAuthorizationCodeFilter $accountAuthorizationCodeFilter;
    }

    /**
     * Filter criteria based on the account code.
     *         When "callsWithCodes" is set to true, all call logs with account/authorization codes are returned. 
     *         When it set to false, all call logs without account/authorization codes are returned.
     */
    public function getAccountAuthorizationCodeFilter()
    {
        return (!$this->accountAuthorizationCodeFilter) ?: $this->accountAuthorizationCodeFilter->getValue();
    }

    /**
     * Subscriber type
     */
    public function setSubscriberType($subscriberType = null)
    {
        $this->subscriberType = ($subscriberType InstanceOf EnhancedCallLogsSubscriberType)
             ? $subscriberType
             : new EnhancedCallLogsSubscriberType($subscriberType);
    }

    /**
     * Subscriber type
     */
    public function getSubscriberType()
    {
        return (!$this->subscriberType) ?: $this->subscriberType->getValue();
    }

    /**
     * Used in enhanced call logs group and enterprise queries to restrict the set of result
     *         rows when making a request that can result in a large dataset. The client specifies the
     *         starting row and the number of rows requested. 
     *         The server only provides those rows in results, if available.
     */
    public function setResponsePagingControl(EnhancedCallLogsResponsePagingControl $responsePagingControl = null)
    {
        $this->responsePagingControl = EnhancedCallLogsResponsePagingControl $responsePagingControl;
    }

    /**
     * Used in enhanced call logs group and enterprise queries to restrict the set of result
     *         rows when making a request that can result in a large dataset. The client specifies the
     *         starting row and the number of rows requested. 
     *         The server only provides those rows in results, if available.
     */
    public function getResponsePagingControl()
    {
        return (!$this->responsePagingControl) ?: $this->responsePagingControl->getValue();
    }
}
