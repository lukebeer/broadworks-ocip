<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing\InstantConferencingScheduleOneTime;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * One time conference schedule used in the context of a conference add.
 */
class InstantConferencingScheduleOneTime extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing\InstantConferencingScheduleOneTime';
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
     * @return InstantConferencingScheduleOneTime
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setStartTime(xs:time $startTime = null)
    {
        $this->startTime =  $startTime;
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
        $this->duration =  $duration;
    }

    /**
     * 
     */
    public function getDuration()
    {
        return (!$this->duration) ?: $this->duration->getValue();
    }
}
