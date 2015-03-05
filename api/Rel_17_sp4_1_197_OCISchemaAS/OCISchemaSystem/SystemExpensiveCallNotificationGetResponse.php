<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExpensiveCallNotificationPostAnnouncementDelaySeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemExpensiveCallNotificationGetRequest.
 */
class SystemExpensiveCallNotificationGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $enablePostAnnouncementDelayTimer,
             $postAnnouncementDelaySeconds
    ) {
        $this->enablePostAnnouncementDelayTimer = $enablePostAnnouncementDelayTimer;
        $this->postAnnouncementDelaySeconds     = $postAnnouncementDelaySeconds;
        $this->args                             = func_get_args();
    }

    public function setEnablePostAnnouncementDelayTimer($enablePostAnnouncementDelayTimer)
    {
        $enablePostAnnouncementDelayTimer and $this->enablePostAnnouncementDelayTimer = new xs:boolean($enablePostAnnouncementDelayTimer);
    }

    public function getEnablePostAnnouncementDelayTimer()
    {
        return (!$this->enablePostAnnouncementDelayTimer) ?: $this->enablePostAnnouncementDelayTimer->value();
    }

    public function setPostAnnouncementDelaySeconds($postAnnouncementDelaySeconds)
    {
        $postAnnouncementDelaySeconds and $this->postAnnouncementDelaySeconds = new ExpensiveCallNotificationPostAnnouncementDelaySeconds($postAnnouncementDelaySeconds);
    }

    public function getPostAnnouncementDelaySeconds()
    {
        return (!$this->postAnnouncementDelaySeconds) ?: $this->postAnnouncementDelaySeconds->value();
    }
}
