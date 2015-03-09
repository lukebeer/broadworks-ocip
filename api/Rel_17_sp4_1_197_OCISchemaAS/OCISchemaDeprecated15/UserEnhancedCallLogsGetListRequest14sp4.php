<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\EnhancedCallLogsMaxLoggedCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\EnhancedCallLogsOffset;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallLogsType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\UserEnhancedCallLogsGetListResponse14sp4;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request user's call logs. It is possible to get a subset of the total list of calls
 *             by specifying a starting offset and the number of calls to get.
 *             If the callLogType is not specified, all types of calls are returned.
 *             The response is either a UserEnhancedCallLogsGetListResponse14sp4 or an ErrorResponse.
 *             Replaced by: 
 *             UserEnhancedCallLogsGetListRequest16
 */
class UserEnhancedCallLogsGetListRequest14sp4 extends ComplexType implements ComplexInterface
{
    public    $responseType   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\UserEnhancedCallLogsGetListResponse14sp4';
    public    $name           = __CLASS__;
    protected $userId         = null;
    protected $callLogType    = null;
    protected $startingOffset = null;
    protected $numCalls       = null;

    public function __construct(
         $userId,
         $callLogType = null,
         $startingOffset,
         $numCalls
    ) {
        $this->setUserId($userId);
        $this->setCallLogType($callLogType);
        $this->setStartingOffset($startingOffset);
        $this->setNumCalls($numCalls);
    }

    /**
     * @return UserEnhancedCallLogsGetListResponse14sp4
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
     * The offset into the list of calls in the call log.
     */
    public function setStartingOffset($startingOffset = null)
    {
        $this->startingOffset = ($startingOffset InstanceOf EnhancedCallLogsOffset)
             ? $startingOffset
             : new EnhancedCallLogsOffset($startingOffset);
    }

    /**
     * The offset into the list of calls in the call log.
     */
    public function getStartingOffset()
    {
        return (!$this->startingOffset) ?: $this->startingOffset->getValue();
    }

    /**
     * Sets the maximum number of logged calls that can be stored.
     */
    public function setNumCalls($numCalls = null)
    {
        $this->numCalls = ($numCalls InstanceOf EnhancedCallLogsMaxLoggedCalls)
             ? $numCalls
             : new EnhancedCallLogsMaxLoggedCalls($numCalls);
    }

    /**
     * Sets the maximum number of logged calls that can be stored.
     */
    public function getNumCalls()
    {
        return (!$this->numCalls) ?: $this->numCalls->getValue();
    }
}
