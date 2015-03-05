<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallPark; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallParkRecallTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallParkDisplayTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RingPattern;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallParkRecallTo;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallParkGetRequest16sp2.
 *         Contains the settings that apply to the whole group for Call Park.
 *         
 *         The following elements are only used in AS data mode:
 *          recallAlternateUserId       
 *          recallRingPattern
 *          recallTo
 *          alternateUserRecallTimerSeconds
 */
class GroupCallParkGetResponse16sp2 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $recallTimerSeconds,
             $displayTimerSeconds,
             $enableDestinationAnnouncement,
             $recallAlternateUserId=null,
             $recallRingPattern,
             $recallTo,
             $alternateUserRecallTimerSeconds
    ) {
        $this->recallTimerSeconds              = $recallTimerSeconds;
        $this->displayTimerSeconds             = $displayTimerSeconds;
        $this->enableDestinationAnnouncement   = $enableDestinationAnnouncement;
        $this->recallAlternateUserId           = new UserId($recallAlternateUserId);
        $this->recallRingPattern               = new RingPattern($recallRingPattern);
        $this->recallTo                        = $recallTo;
        $this->alternateUserRecallTimerSeconds = $alternateUserRecallTimerSeconds;
        $this->args                            = func_get_args();
    }

    public function setRecallTimerSeconds($recallTimerSeconds)
    {
        $recallTimerSeconds and $this->recallTimerSeconds = new CallParkRecallTimerSeconds($recallTimerSeconds);
    }

    public function getRecallTimerSeconds()
    {
        return (!$this->recallTimerSeconds) ?: $this->recallTimerSeconds->value();
    }

    public function setDisplayTimerSeconds($displayTimerSeconds)
    {
        $displayTimerSeconds and $this->displayTimerSeconds = new CallParkDisplayTimerSeconds($displayTimerSeconds);
    }

    public function getDisplayTimerSeconds()
    {
        return (!$this->displayTimerSeconds) ?: $this->displayTimerSeconds->value();
    }

    public function setEnableDestinationAnnouncement($enableDestinationAnnouncement)
    {
        $enableDestinationAnnouncement and $this->enableDestinationAnnouncement = new xs:boolean($enableDestinationAnnouncement);
    }

    public function getEnableDestinationAnnouncement()
    {
        return (!$this->enableDestinationAnnouncement) ?: $this->enableDestinationAnnouncement->value();
    }

    public function setRecallAlternateUserId($recallAlternateUserId)
    {
        $recallAlternateUserId and $this->recallAlternateUserId = new UserId($recallAlternateUserId);
    }

    public function getRecallAlternateUserId()
    {
        return (!$this->recallAlternateUserId) ?: $this->recallAlternateUserId->value();
    }

    public function setRecallRingPattern($recallRingPattern)
    {
        $recallRingPattern and $this->recallRingPattern = new RingPattern($recallRingPattern);
    }

    public function getRecallRingPattern()
    {
        return (!$this->recallRingPattern) ?: $this->recallRingPattern->value();
    }

    public function setRecallTo($recallTo)
    {
        $recallTo and $this->recallTo = new CallParkRecallTo($recallTo);
    }

    public function getRecallTo()
    {
        return (!$this->recallTo) ?: $this->recallTo->value();
    }

    public function setAlternateUserRecallTimerSeconds($alternateUserRecallTimerSeconds)
    {
        $alternateUserRecallTimerSeconds and $this->alternateUserRecallTimerSeconds = new CallParkRecallTimerSeconds($alternateUserRecallTimerSeconds);
    }

    public function getAlternateUserRecallTimerSeconds()
    {
        return (!$this->alternateUserRecallTimerSeconds) ?: $this->alternateUserRecallTimerSeconds->value();
    }
}
