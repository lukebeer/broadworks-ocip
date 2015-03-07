<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallWaiting; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user level data associated with Call Waiting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         The following elements are only used in AS data mode:
 *           disableCallingLineIdDelivery
 */
class UserCallWaitingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                          = __CLASS__;
    protected $userId                        = null;
    protected $isActive                      = null;
    protected $disableCallingLineIdDelivery  = null;

    public function __construct(
         $userId,
         $isActive = null,
         $disableCallingLineIdDelivery = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setDisableCallingLineIdDelivery($disableCallingLineIdDelivery);
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

    public function setDisableCallingLineIdDelivery(xs:boolean $disableCallingLineIdDelivery = null)
    {
    }

    public function getDisableCallingLineIdDelivery()
    {
        return (!$this->disableCallingLineIdDelivery) ?: $this->disableCallingLineIdDelivery->value();
    }
}
