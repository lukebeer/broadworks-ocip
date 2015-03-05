<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallParkRecallTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallParkDisplayTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallParkGetRequest.
 *           Contains the settings that apply to the whole group for Call Park.
 */
class GroupCallParkGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $recallTimerSeconds,
             $displayTimerSeconds,
             $enableDestinationAnnouncement
    ) {
        $this->recallTimerSeconds            = $recallTimerSeconds;
        $this->displayTimerSeconds           = $displayTimerSeconds;
        $this->enableDestinationAnnouncement = $enableDestinationAnnouncement;
        $this->args                          = func_get_args();
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
}
