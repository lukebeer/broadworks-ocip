<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallingNumberDelivery; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user level data associated with Calling Number Delivery.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallingNumberDeliveryModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $userId                    = null;
    protected $isActiveForExternalCalls  = null;
    protected $isActiveForInternalCalls  = null;

    public function __construct(
         $userId,
         $isActiveForExternalCalls = null,
         $isActiveForInternalCalls = null
    ) {
        $this->setUserId($userId);
        $this->setIsActiveForExternalCalls($isActiveForExternalCalls);
        $this->setIsActiveForInternalCalls($isActiveForInternalCalls);
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

    public function setIsActiveForExternalCalls(xs:boolean $isActiveForExternalCalls = null)
    {
    }

    public function getIsActiveForExternalCalls()
    {
        return (!$this->isActiveForExternalCalls) ?: $this->isActiveForExternalCalls->value();
    }

    public function setIsActiveForInternalCalls(xs:boolean $isActiveForInternalCalls = null)
    {
    }

    public function getIsActiveForInternalCalls()
    {
        return (!$this->isActiveForInternalCalls) ?: $this->isActiveForInternalCalls->value();
    }
}
