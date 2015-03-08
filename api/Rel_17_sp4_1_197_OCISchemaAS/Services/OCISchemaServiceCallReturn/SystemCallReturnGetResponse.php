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
    public    $name                                = __CLASS__;
    protected $twoLevelActivation                  = null;
    protected $provideDate                         = null;
    protected $lastUnansweredCallOnly              = null;
    protected $confirmationKey                     = null;
    protected $allowRestrictedNumber               = null;
    protected $deleteNumberAfterAnsweredCallReturn = null;


    /**
     * 
     */
    public function setTwoLevelActivation($twoLevelActivation = null)
    {
        $this->twoLevelActivation = (boolean) $twoLevelActivation;
    }

    /**
     * 
     */
    public function getTwoLevelActivation()
    {
        return (!$this->twoLevelActivation) ?: $this->twoLevelActivation->getValue();
    }

    /**
     * 
     */
    public function setProvideDate($provideDate = null)
    {
        $this->provideDate = (boolean) $provideDate;
    }

    /**
     * 
     */
    public function getProvideDate()
    {
        return (!$this->provideDate) ?: $this->provideDate->getValue();
    }

    /**
     * 
     */
    public function setLastUnansweredCallOnly($lastUnansweredCallOnly = null)
    {
        $this->lastUnansweredCallOnly = (boolean) $lastUnansweredCallOnly;
    }

    /**
     * 
     */
    public function getLastUnansweredCallOnly()
    {
        return (!$this->lastUnansweredCallOnly) ?: $this->lastUnansweredCallOnly->getValue();
    }

    /**
     * A single dialing digit. Valid values are 0-9,*,#.
     */
    public function setConfirmationKey($confirmationKey = null)
    {
        $this->confirmationKey = ($confirmationKey InstanceOf DigitAny)
             ? $confirmationKey
             : new DigitAny($confirmationKey);
    }

    /**
     * A single dialing digit. Valid values are 0-9,*,#.
     */
    public function getConfirmationKey()
    {
        return (!$this->confirmationKey) ?: $this->confirmationKey->getValue();
    }

    /**
     * 
     */
    public function setAllowRestrictedNumber($allowRestrictedNumber = null)
    {
        $this->allowRestrictedNumber = (boolean) $allowRestrictedNumber;
    }

    /**
     * 
     */
    public function getAllowRestrictedNumber()
    {
        return (!$this->allowRestrictedNumber) ?: $this->allowRestrictedNumber->getValue();
    }

    /**
     * 
     */
    public function setDeleteNumberAfterAnsweredCallReturn($deleteNumberAfterAnsweredCallReturn = null)
    {
        $this->deleteNumberAfterAnsweredCallReturn = (boolean) $deleteNumberAfterAnsweredCallReturn;
    }

    /**
     * 
     */
    public function getDeleteNumberAfterAnsweredCallReturn()
    {
        return (!$this->deleteNumberAfterAnsweredCallReturn) ?: $this->deleteNumberAfterAnsweredCallReturn->getValue();
    }
}
