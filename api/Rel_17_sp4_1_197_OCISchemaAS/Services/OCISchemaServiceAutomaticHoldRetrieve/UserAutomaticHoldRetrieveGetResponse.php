<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAutomaticHoldRetrieve; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticHoldRetrieve\AutomaticHoldRetrieveRecallTimerSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserAutomaticHoldRetrieveGetRequest.
 */
class UserAutomaticHoldRetrieveGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $isActive            = null;
    protected $recallTimerSeconds  = null;


    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setRecallTimerSeconds($recallTimerSeconds = null)
    {
        $this->recallTimerSeconds = ($recallTimerSeconds InstanceOf AutomaticHoldRetrieveRecallTimerSeconds)
             ? $recallTimerSeconds
             : new AutomaticHoldRetrieveRecallTimerSeconds($recallTimerSeconds);
    }

    public function getRecallTimerSeconds()
    {
        return (!$this->recallTimerSeconds) ?: $this->recallTimerSeconds->value();
    }
}
