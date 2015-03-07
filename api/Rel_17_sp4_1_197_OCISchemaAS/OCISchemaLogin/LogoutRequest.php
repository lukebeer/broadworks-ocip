<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\LogoutRequestReason;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * LogoutRequest is sent when an OCI user logs out or when connection is lost.
 *         This command can be sent either to the server, or to the client from OCS.
 *         Response is either SuccessResponse or ErrorResponse.
 */
class LogoutRequest extends ComplexType implements ComplexInterface
{
    public    $name    = __CLASS__;
    protected $userId  = null;
    protected $reason  = null;

    public function __construct(
         $userId,
         $reason = null
    ) {
        $this->setUserId($userId);
        $this->setReason($reason);
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

    public function setReason($reason = null)
    {
        $this->reason = ($reason InstanceOf LogoutRequestReason)
             ? $reason
             : new LogoutRequestReason($reason);
    }

    public function getReason()
    {
        return (!$this->reason) ?: $this->reason->value();
    }
}
