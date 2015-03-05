<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallReturn; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitAny;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemCallReturnGetRequest.
 */
class SystemCallReturnGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $twoLevelActivation,
             $provideDate,
             $lastUnansweredCallOnly,
             $confirmationKey=null,
             $allowRestrictedNumber,
             $deleteNumberAfterAnsweredCallReturn
    ) {
        $this->twoLevelActivation                  = $twoLevelActivation;
        $this->provideDate                         = $provideDate;
        $this->lastUnansweredCallOnly              = $lastUnansweredCallOnly;
        $this->confirmationKey                     = new DigitAny($confirmationKey);
        $this->allowRestrictedNumber               = $allowRestrictedNumber;
        $this->deleteNumberAfterAnsweredCallReturn = $deleteNumberAfterAnsweredCallReturn;
        $this->args                                = func_get_args();
    }

    public function setTwoLevelActivation($twoLevelActivation)
    {
        $twoLevelActivation and $this->twoLevelActivation = new xs:boolean($twoLevelActivation);
    }

    public function getTwoLevelActivation()
    {
        return (!$this->twoLevelActivation) ?: $this->twoLevelActivation->value();
    }

    public function setProvideDate($provideDate)
    {
        $provideDate and $this->provideDate = new xs:boolean($provideDate);
    }

    public function getProvideDate()
    {
        return (!$this->provideDate) ?: $this->provideDate->value();
    }

    public function setLastUnansweredCallOnly($lastUnansweredCallOnly)
    {
        $lastUnansweredCallOnly and $this->lastUnansweredCallOnly = new xs:boolean($lastUnansweredCallOnly);
    }

    public function getLastUnansweredCallOnly()
    {
        return (!$this->lastUnansweredCallOnly) ?: $this->lastUnansweredCallOnly->value();
    }

    public function setConfirmationKey($confirmationKey)
    {
        $confirmationKey and $this->confirmationKey = new DigitAny($confirmationKey);
    }

    public function getConfirmationKey()
    {
        return (!$this->confirmationKey) ?: $this->confirmationKey->value();
    }

    public function setAllowRestrictedNumber($allowRestrictedNumber)
    {
        $allowRestrictedNumber and $this->allowRestrictedNumber = new xs:boolean($allowRestrictedNumber);
    }

    public function getAllowRestrictedNumber()
    {
        return (!$this->allowRestrictedNumber) ?: $this->allowRestrictedNumber->value();
    }

    public function setDeleteNumberAfterAnsweredCallReturn($deleteNumberAfterAnsweredCallReturn)
    {
        $deleteNumberAfterAnsweredCallReturn and $this->deleteNumberAfterAnsweredCallReturn = new xs:boolean($deleteNumberAfterAnsweredCallReturn);
    }

    public function getDeleteNumberAfterAnsweredCallReturn()
    {
        return (!$this->deleteNumberAfterAnsweredCallReturn) ?: $this->deleteNumberAfterAnsweredCallReturn->value();
    }
}
