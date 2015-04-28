<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Conference duration.
 */
class MeetMeConferencingConferenceDuration extends ComplexType implements ComplexInterface
{
    public    $elementName = 'MeetMeConferencingConferenceDuration';
    protected $hours;
    protected $minutes;

    public function __construct(
         $hours = '',
         $minutes = ''
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
        $this->hours = new SimpleContent($hours);
        $this->hours->setElementName('hours');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $hours
     */
    public function getHours()
    {
        return ($this->hours)
            ? $this->hours->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMinutes($minutes = null)
    {
        $this->minutes = new SimpleContent($minutes);
        $this->minutes->setElementName('minutes');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $minutes
     */
    public function getMinutes()
    {
        return ($this->minutes)
            ? $this->minutes->getElementValue()
            : null;
    }
}
