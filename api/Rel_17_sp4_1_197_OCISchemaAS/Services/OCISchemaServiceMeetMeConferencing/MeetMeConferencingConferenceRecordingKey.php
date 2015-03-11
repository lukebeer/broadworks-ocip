<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferenceRecordingKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Identifier for conference recording. startTime is the recording start timestamp.
 */
class MeetMeConferencingConferenceRecordingKey extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferenceRecordingKey';
    public    $name         = 'MeetMeConferencingConferenceRecordingKey';
    protected $bridgeId     = null;
    protected $conferenceId = null;
    protected $startTime    = null;

    public function __construct(
         $bridgeId,
         $conferenceId,
         $startTime
    ) {
        $this->setBridgeId($bridgeId);
        $this->setConferenceId($conferenceId);
        $this->setStartTime($startTime);
    }

    /**
     * @return MeetMeConferencingConferenceRecordingKey
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
        if (!$bridgeId) return $this;
        $this->bridgeId = new SimpleContent($bridgeId);
        $this->bridgeId->setName('bridgeId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getBridgeId()
    {
        return $this->bridgeId->getValue();
    }

    /**
     * 
     */
    public function setConferenceId($conferenceId = null)
    {
        if (!$conferenceId) return $this;
        $this->conferenceId = new SimpleContent($conferenceId);
        $this->conferenceId->setName('conferenceId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getConferenceId()
    {
        return $this->conferenceId->getValue();
    }

    /**
     * 
     */
    public function setStartTime($startTime = null)
    {
        if (!$startTime) return $this;
        $this->startTime = new SimpleContent($startTime);
        $this->startTime->setName('startTime');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getStartTime()
    {
        return $this->startTime->getValue();
    }
}
