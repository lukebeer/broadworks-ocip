<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * One time conference schedule used in the context of a conference add.
 */
class InstantConferencingScheduleOneTime extends ComplexType implements ComplexInterface
{
    public    $name      = 'InstantConferencingScheduleOneTime';
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
     * @return mixed $response
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
        if (!$startTime) return $this;
        $this->startTime->setName('startTime');
        return $this;
    }

    /**
     * 
     * @return xs:time $startTime
     */
    public function getStartTime()
    {
        return $this->startTime->getValue();
    }

    /**
     * 
     */
    public function setDuration(xs:duration $duration = null)
    {
        if (!$duration) return $this;
        $this->duration->setName('duration');
        return $this;
    }

    /**
     * 
     * @return xs:duration $duration
     */
    public function getDuration()
    {
        return $this->duration->getValue();
    }
}
