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
    public    $name                   = __CLASS__;
    protected $userId                 = null;
    protected $callLogType            = null;
    protected $responsePagingControl  = null;

    public function __construct(
         $userId,
         $callLogType = null,
         ResponsePagingControl $responsePagingControl = null
    ) {
        $this->setUserId($userId);
        $this->setCallLogType($callLogType);
        $this->setResponsePagingControl($responsePagingControl);
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
        $this->callLogType = ($callLogType InstanceOf CallLogsType)
             ? $callLogType
             : new CallLogsType($callLogType);
    }

    public function getCallLogType()
    {
        return (!$this->callLogType) ?: $this->callLogType->value();
    }

    public function setResponsePagingControl(ResponsePagingControl $responsePagingControl = null)
    {
    }

    public function getResponsePagingControl()
    {
        return (!$this->responsePagingControl) ?: $this->responsePagingControl->value();
    }
}
