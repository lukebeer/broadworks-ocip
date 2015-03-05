<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnhancedCallLogsType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnhancedCallLogsOffset;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnhancedCallLogsMaxLoggedCalls;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request user's call logs. It is possible to get a subset of the total list of calls
 *         by specifying a starting offset and the number of calls to get.
 *         If the callLogType is not specified, all types of calls are returned.
 *         The response is either a UserEnhancedCallLogsGetListResponse or an ErrorResponse.
 *         Replaced By: UserEnhancedCallLogsGetListRequest14sp4
 */
class UserEnhancedCallLogsGetListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $callLogType=null,
             $startingOffset,
             $numCalls
    ) {
        $this->userId         = new UserId($userId);
        $this->callLogType    = $callLogType;
        $this->startingOffset = $startingOffset;
        $this->numCalls       = $numCalls;
        $this->args           = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setCallLogType($callLogType)
    {
        $callLogType and $this->callLogType = new EnhancedCallLogsType($callLogType);
    }

    public function getCallLogType()
    {
        return (!$this->callLogType) ?: $this->callLogType->value();
    }

    public function setStartingOffset($startingOffset)
    {
        $startingOffset and $this->startingOffset = new EnhancedCallLogsOffset($startingOffset);
    }

    public function getStartingOffset()
    {
        return (!$this->startingOffset) ?: $this->startingOffset->value();
    }

    public function setNumCalls($numCalls)
    {
        $numCalls and $this->numCalls = new EnhancedCallLogsMaxLoggedCalls($numCalls);
    }

    public function getNumCalls()
    {
        return (!$this->numCalls) ?: $this->numCalls->value();
    }
}
