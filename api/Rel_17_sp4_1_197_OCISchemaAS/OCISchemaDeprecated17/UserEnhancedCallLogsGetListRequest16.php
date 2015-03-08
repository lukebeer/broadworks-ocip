<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ResponsePagingControl;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallLogsType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request user's call logs.
 *         If the callLogType is not specified, all types of calls logs (placed, received, missed) are returned.
 *         It is possible to restrict the number of rows returned using responsePagingControl.
 *         The response is either a UserEnhancedCallLogsGetListResponse16 or an ErrorResponse.
 */
class UserEnhancedCallLogsGetListRequest16 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\UserEnhancedCallLogsGetListResponse16';
    public    $name                  = __CLASS__;
    protected $userId                = null;
    protected $callLogType           = null;
    protected $responsePagingControl = null;

    public function __construct(
         $userId,
         $callLogType = null,
         ResponsePagingControl $responsePagingControl = null
    ) {
        $this->setUserId($userId);
        $this->setCallLogType($callLogType);
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
     * Call Log type.
     */
    public function setCallLogType($callLogType = null)
    {
        $this->callLogType = ($callLogType InstanceOf CallLogsType)
             ? $callLogType
             : new CallLogsType($callLogType);
    }

    /**
     * Call Log type.
     */
    public function getCallLogType()
    {
        return (!$this->callLogType) ?: $this->callLogType->getValue();
    }

    /**
     * Used in queries to restrict the set of result rows when making a request that can result in
     *         a large dataset. The client specifies the starting row and the number of rows requested. 
     *         The server only provides those rows in results, if available.
     */
    public function setResponsePagingControl(ResponsePagingControl $responsePagingControl = null)
    {
        $this->responsePagingControl = ResponsePagingControl $responsePagingControl;
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
