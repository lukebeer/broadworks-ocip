<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEnhancedCallLogs; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsAccountAuthorizationCodeFilter;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsRedirectedNumberFilter;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsCallLogsRequestType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsSubscriberType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsNumberFilter;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnhancedCallLogsTimeRange;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponsePagingControl;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request user's call logs.
 *         If the callLogType is not specified, all types of calls logs (placed, received, missed) are returned.
 *         The filters "dateTimeRange", "numberFilter", "redirectedNumberFilter", accountAuthorizationCodeFilter"
 *         and ""subscriberType" are ignored if call logs are stored in CDS. When "ReceivedOrMissed" is specified
 *         as "callLogType" and call logs are stored in CDS, all call logs including placed will be returned.
 *         It is possible to restrict the number of rows returned using responsePagingControl. If responsePagingControl
 *         is not specified, the value of Enhanced Call Logs system parameter maxNonPagedResponseSize will control
 *         the maximum number of call logs can be returned. 
 *         The response is either a UserEnhancedCallLogsGetListResponse17sp4 or an ErrorResponse.
 */
class UserEnhancedCallLogsGetListRequest17sp4 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEnhancedCallLogs\UserEnhancedCallLogsGetListResponse17sp4';
    public    $name                           = __CLASS__;
    protected $userId                         = null;
    protected $callLogType                    = null;
    protected $dateTimeRange                  = null;
    protected $numberFilter                   = null;
    protected $redirectedNumberFilter         = null;
    protected $accountAuthorizationCodeFilter = null;
    protected $subscriberType                 = null;
    protected $responsePagingControl          = null;

    public function __construct(
         $userId,
         $callLogType = null,
          $dateTimeRange,
          $numberFilter = null,
          $redirectedNumberFilter = null,
          $accountAuthorizationCodeFilter = null,
         $subscriberType = null,
          $responsePagingControl = null
    ) {
        $this->setUserId($userId);
        $this->setCallLogType($callLogType);
        $this->setDateTimeRange($dateTimeRange);
        $this->setNumberFilter($numberFilter);
        $this->setRedirectedNumberFilter($redirectedNumberFilter);
        $this->setAccountAuthorizationCodeFilter($accountAuthorizationCodeFilter);
        $this->setSubscriberType($subscriberType);
        $this->setResponsePagingControl($responsePagingControl);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
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
        $this->dateTimeRange =  $dateTimeRange;
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
        $this->numberFilter =  $numberFilter;
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
        $this->redirectedNumberFilter =  $redirectedNumberFilter;
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
        $this->accountAuthorizationCodeFilter =  $accountAuthorizationCodeFilter;
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
     * Used in queries to restrict the set of result rows when making a request that can result in
     *         a large dataset. The client specifies the starting row and the number of rows requested. 
     *         The server only provides those rows in results, if available.
     */
    public function setResponsePagingControl(ResponsePagingControl $responsePagingControl = null)
    {
        $this->responsePagingControl =  $responsePagingControl;
    }

    /**
     * Used in queries to restrict the set of result rows when making a request that can result in
     *         a large dataset. The client specifies the starting row and the number of rows requested. 
     *         The server only provides those rows in results, if available.
     */
    public function getResponsePagingControl()
    {
        return (!$this->responsePagingControl) ?: $this->responsePagingControl->getValue();
    }
}
