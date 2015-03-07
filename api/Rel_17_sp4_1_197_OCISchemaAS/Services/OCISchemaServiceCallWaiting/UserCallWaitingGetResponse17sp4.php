<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallWaiting; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserCallWaitingGetRequest17sp4.
 *         
 *         The following elements are only used in AS data mode:
 *           disableCallingLineIdDelivery
 */
class UserCallWaitingGetResponse17sp4 extends ComplexType implements ComplexInterface
{
    public    $name                          = __CLASS__;
    protected $isActive                      = null;
    protected $disableCallingLineIdDelivery  = null;


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
