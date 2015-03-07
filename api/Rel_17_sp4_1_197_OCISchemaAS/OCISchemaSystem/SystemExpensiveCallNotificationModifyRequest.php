<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ExpensiveCallNotificationPostAnnouncementDelaySeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the expensive call notification service parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemExpensiveCallNotificationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                              = __CLASS__;
    protected $enablePostAnnouncementDelayTimer  = null;
    protected $postAnnouncementDelaySeconds      = null;

    public function __construct(
         $enablePostAnnouncementDelayTimer = null,
         $postAnnouncementDelaySeconds = null
    ) {
        $this->setEnablePostAnnouncementDelayTimer($enablePostAnnouncementDelayTimer);
        $this->setPostAnnouncementDelaySeconds($postAnnouncementDelaySeconds);
    }

    public function setEnablePostAnnouncementDelayTimer(xs:boolean $enablePostAnnouncementDelayTimer = null)
    {
    }

    public function getEnablePostAnnouncementDelayTimer()
    {
        return (!$this->enablePostAnnouncementDelayTimer) ?: $this->enablePostAnnouncementDelayTimer->value();
    }

    public function setPostAnnouncementDelaySeconds($postAnnouncementDelaySeconds = null)
    {
        $this->postAnnouncementDelaySeconds = ($postAnnouncementDelaySeconds InstanceOf ExpensiveCallNotificationPostAnnouncementDelaySeconds)
             ? $postAnnouncementDelaySeconds
             : new ExpensiveCallNotificationPostAnnouncementDelaySeconds($postAnnouncementDelaySeconds);
    }

    public function getPostAnnouncementDelaySeconds()
    {
        return (!$this->postAnnouncementDelaySeconds) ?: $this->postAnnouncementDelaySeconds->value();
    }
}
