<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Conference duration.
 */
class MeetMeConferencingConferenceDuration extends ComplexType implements ComplexInterface
{
    public    $name    = 'MeetMeConferencingConferenceDuration';
    protected $hours   = null;
    protected $minutes = null;

    public function __construct(
         $hours,
         $minutes
    ) {
        $this->setHours($hours);
        $this->setMinutes($minutes);
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
    public function setHours($hours = null)
    {
        if (!$hours) return $this;
        $this->hours = new SimpleContent($hours);
        $this->hours->setName('hours');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $hours
     */
    public function getHours()
    {
        return $this->hours->getValue();
    }

    /**
     * 
     */
    public function setMinutes($minutes = null)
    {
        if (!$minutes) return $this;
        $this->minutes = new SimpleContent($minutes);
        $this->minutes->setName('minutes');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $minutes
     */
    public function getMinutes()
    {
        return $this->minutes->getValue();
    }
}
