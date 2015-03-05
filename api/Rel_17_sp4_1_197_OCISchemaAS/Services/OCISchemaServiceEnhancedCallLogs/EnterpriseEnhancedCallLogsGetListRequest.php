<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceEnhancedCallLogs; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnhancedCallLogsCallLogsRequestType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnhancedCallLogsTimeRange;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnhancedCallLogsNumberFilter;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnhancedCallLogsRedirectedNumberFilter;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnhancedCallLogsAccountAuthorizationCodeFilter;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnhancedCallLogsSubscriberType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnhancedCallLogsResponsePagingControl;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


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
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $callLogType=null,
             $dateTimeRange,
             $numberFilter=null,
             $redirectedNumberFilter=null,
             $accountAuthorizationCodeFilter=null,
             $subscriberType=null,
             $responsePagingControl=null
    ) {
        $this->serviceProviderId              = new ServiceProviderId($serviceProviderId);
        $this->callLogType                    = $callLogType;
        $this->dateTimeRange                  = $dateTimeRange;
        $this->numberFilter                   = $numberFilter;
        $this->redirectedNumberFilter         = $redirectedNumberFilter;
        $this->accountAuthorizationCodeFilter = $accountAuthorizationCodeFilter;
        $this->subscriberType                 = $subscriberType;
        $this->responsePagingControl          = $responsePagingControl;
        $this->args                           = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setCallLogType($callLogType)
    {
        $callLogType and $this->callLogType = new EnhancedCallLogsCallLogsRequestType($callLogType);
    }

    public function getCallLogType()
    {
        return (!$this->callLogType) ?: $this->callLogType->value();
    }

    public function setDateTimeRange($dateTimeRange)
    {
        $dateTimeRange and $this->dateTimeRange = new EnhancedCallLogsTimeRange($dateTimeRange);
    }

    public function getDateTimeRange()
    {
        return (!$this->dateTimeRange) ?: $this->dateTimeRange->value();
    }

    public function setNumberFilter($numberFilter)
    {
        $numberFilter and $this->numberFilter = new EnhancedCallLogsNumberFilter($numberFilter);
    }

    public function getNumberFilter()
    {
        return (!$this->numberFilter) ?: $this->numberFilter->value();
    }

    public function setRedirectedNumberFilter($redirectedNumberFilter)
    {
        $redirectedNumberFilter and $this->redirectedNumberFilter = new EnhancedCallLogsRedirectedNumberFilter($redirectedNumberFilter);
    }

    public function getRedirectedNumberFilter()
    {
        return (!$this->redirectedNumberFilter) ?: $this->redirectedNumberFilter->value();
    }

    public function setAccountAuthorizationCodeFilter($accountAuthorizationCodeFilter)
    {
        $accountAuthorizationCodeFilter and $this->accountAuthorizationCodeFilter = new EnhancedCallLogsAccountAuthorizationCodeFilter($accountAuthorizationCodeFilter);
    }

    public function getAccountAuthorizationCodeFilter()
    {
        return (!$this->accountAuthorizationCodeFilter) ?: $this->accountAuthorizationCodeFilter->value();
    }

    public function setSubscriberType($subscriberType)
    {
        $subscriberType and $this->subscriberType = new EnhancedCallLogsSubscriberType($subscriberType);
    }

    public function getSubscriberType()
    {
        return (!$this->subscriberType) ?: $this->subscriberType->value();
    }

    public function setResponsePagingControl($responsePagingControl)
    {
        $responsePagingControl and $this->responsePagingControl = new EnhancedCallLogsResponsePagingControl($responsePagingControl);
    }

    public function getResponsePagingControl()
    {
        return (!$this->responsePagingControl) ?: $this->responsePagingControl->value();
    }
}
