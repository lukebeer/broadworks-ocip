<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSMDIMessageDesk; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk\SMDIMessageDeskNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user's SMDI Message Desk service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserSMDIMessageDeskModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $userId             = null;
    protected $isActive           = null;
    protected $messageDeskNumber  = null;

    public function __construct(
         $userId,
         $isActive = null,
         $messageDeskNumber = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setMessageDeskNumber($messageDeskNumber);
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

    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setMessageDeskNumber($messageDeskNumber = null)
    {
        $this->messageDeskNumber = ($messageDeskNumber InstanceOf SMDIMessageDeskNumber)
             ? $messageDeskNumber
             : new SMDIMessageDeskNumber($messageDeskNumber);
    }

    public function getMessageDeskNumber()
    {
        return (!$this->messageDeskNumber) ?: $this->messageDeskNumber->value();
    }
}
