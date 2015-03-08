<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * One time conference schedule used in the context of a conference add.
 */
class InstantConferencingScheduleOneTime extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing\InstantConferencingScheduleOneTime';
    public    $name      = __CLASS__;
    protected $startTime = null;
    protected $duration  = null;

    public function __construct(
         $startTime,
         $duration
    ) {
        $this->setStartTime($startTime);
        $this->setDuration($duration);
    }

    /**
     * 
     */
    public function setStartTime(xs:time $startTime = null)
    {
        $this->startTime = xs:time $startTime;
    }

    /**
     * 
     */
    public function getStartTime()
    {
        return (!$this->startTime) ?: $this->startTime->getValue();
    }

    /**
     * 
     */
    public function setDuration(xs:duration $duration = null)
    {
        $this->duration = xs:duration $duration;
    }

    /**
     * 
     */
    public function getDuration()
    {
        return (!$this->duration) ?: $this->duration->getValue();
    }
}
