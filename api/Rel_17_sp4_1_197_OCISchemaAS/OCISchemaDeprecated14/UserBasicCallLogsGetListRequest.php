<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\BasicCallLogsType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request user's call logs.
 *         If the callLogType is not specified, all types of calls are returned.
 *         The response is either a UserBasicCallLogsGetListResponse or an ErrorResponse.
 *         Replaced By: UserBasicCallLogsGetListRequest14sp4
 */
class UserBasicCallLogsGetListRequest extends ComplexType implements ComplexInterface
{
    public    $name         = __CLASS__;
    protected $userId       = null;
    protected $callLogType  = null;

    public function __construct(
         $userId,
         $callLogType = null
    ) {
        $this->setUserId($userId);
        $this->setCallLogType($callLogType);
    }

    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setCallLogType($callLogType = null)
    {
        $this->callLogType = ($callLogType InstanceOf BasicCallLogsType)
             ? $callLogType
             : new BasicCallLogsType($callLogType);
    }

    public function getCallLogType()
    {
        return (!$this->callLogType) ?: $this->callLogType->value();
    }
}
