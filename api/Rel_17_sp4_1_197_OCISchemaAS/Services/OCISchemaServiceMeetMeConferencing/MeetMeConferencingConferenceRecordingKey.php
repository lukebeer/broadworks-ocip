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
 * Identifier for conference recording. startTime is the recording start timestamp.
 */
class MeetMeConferencingConferenceRecordingKey extends ComplexType implements ComplexInterface
{
    public    $elementName = 'MeetMeConferencingConferenceRecordingKey';
    protected $bridgeId;
    protected $conferenceId;
    protected $startTime;

    public function __construct(
         $bridgeId = '',
         $conferenceId = '',
         $startTime = ''
    ) {
        $this->setBridgeId($bridgeId);
        $this->setConferenceId($conferenceId);
        $this->setStartTime($startTime);
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
    public function setBridgeId($bridgeId = null)
    {
        $this->bridgeId = new SimpleContent($bridgeId);
        $this->bridgeId->setElementName('bridgeId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $bridgeId
     */
    public function getBridgeId()
    {
        return ($this->bridgeId)
            ? $this->bridgeId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConferenceId($conferenceId = null)
    {
        $this->conferenceId = new SimpleContent($conferenceId);
        $this->conferenceId->setElementName('conferenceId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $conferenceId
     */
    public function getConferenceId()
    {
        return ($this->conferenceId)
            ? $this->conferenceId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setStartTime($startTime = null)
    {
        $this->startTime = new SimpleContent($startTime);
        $this->startTime->setElementName('startTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $startTime
     */
    public function getStartTime()
    {
        return ($this->startTime)
            ? $this->startTime->getElementValue()
            : null;
    }
}
