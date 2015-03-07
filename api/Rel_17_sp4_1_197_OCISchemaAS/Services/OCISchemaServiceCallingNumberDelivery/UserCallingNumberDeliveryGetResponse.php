<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallingNumberDelivery; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserCallingNumberDeliveryGetRequest.
 */
class UserCallingNumberDeliveryGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $isActiveForExternalCalls  = null;
    protected $isActiveForInternalCalls  = null;


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
