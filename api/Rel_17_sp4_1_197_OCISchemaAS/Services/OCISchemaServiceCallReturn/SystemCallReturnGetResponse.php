<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallReturn; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitAny;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemCallReturnGetRequest.
 */
class SystemCallReturnGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                 = __CLASS__;
    protected $twoLevelActivation                   = null;
    protected $provideDate                          = null;
    protected $lastUnansweredCallOnly               = null;
    protected $confirmationKey                      = null;
    protected $allowRestrictedNumber                = null;
    protected $deleteNumberAfterAnsweredCallReturn  = null;


    public function setTwoLevelActivation(xs:boolean $twoLevelActivation = null)
    {
    }

    public function getTwoLevelActivation()
    {
        return (!$this->twoLevelActivation) ?: $this->twoLevelActivation->value();
    }

    public function setProvideDate(xs:boolean $provideDate = null)
    {
    }

    public function getProvideDate()
    {
        return (!$this->provideDate) ?: $this->provideDate->value();
    }

    public function setLastUnansweredCallOnly(xs:boolean $lastUnansweredCallOnly = null)
    {
    }

    public function getLastUnansweredCallOnly()
    {
        return (!$this->lastUnansweredCallOnly) ?: $this->lastUnansweredCallOnly->value();
    }

    public function setConfirmationKey($confirmationKey = null)
    {
        $this->confirmationKey = ($confirmationKey InstanceOf DigitAny)
             ? $confirmationKey
             : new DigitAny($confirmationKey);
    }

    public function getConfirmationKey()
    {
        return (!$this->confirmationKey) ?: $this->confirmationKey->value();
    }

    public function setAllowRestrictedNumber(xs:boolean $allowRestrictedNumber = null)
    {
    }

    public function getAllowRestrictedNumber()
    {
        return (!$this->allowRestrictedNumber) ?: $this->allowRestrictedNumber->value();
    }

    public function setDeleteNumberAfterAnsweredCallReturn(xs:boolean $deleteNumberAfterAnsweredCallReturn = null)
    {
    }

    public function getDeleteNumberAfterAnsweredCallReturn()
    {
        return (!$this->deleteNumberAfterAnsweredCallReturn) ?: $this->deleteNumberAfterAnsweredCallReturn->value();
    }
}
