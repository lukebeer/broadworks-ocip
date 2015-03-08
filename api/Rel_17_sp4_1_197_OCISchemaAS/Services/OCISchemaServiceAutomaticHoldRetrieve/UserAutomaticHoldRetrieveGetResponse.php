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
    const     RESPONSE_TYPE       = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAutomaticHoldRetrieve\UserAutomaticHoldRetrieveGetResponse';
    public    $name               = __CLASS__;
    protected $isActive           = null;
    protected $recallTimerSeconds = null;


    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->getValue();
    }

    /**
     * Call Timer
     */
    public function setRecallTimerSeconds($recallTimerSeconds = null)
    {
        $this->recallTimerSeconds = ($recallTimerSeconds InstanceOf AutomaticHoldRetrieveRecallTimerSeconds)
             ? $recallTimerSeconds
             : new AutomaticHoldRetrieveRecallTimerSeconds($recallTimerSeconds);
    }

    /**
     * Call Timer
     */
    public function getRecallTimerSeconds()
    {
        return (!$this->recallTimerSeconds) ?: $this->recallTimerSeconds->getValue();
    }
}
