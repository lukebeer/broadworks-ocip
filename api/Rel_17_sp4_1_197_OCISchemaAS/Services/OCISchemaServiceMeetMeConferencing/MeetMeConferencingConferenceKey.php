<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferenceKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Identifier for conference.
 */
class MeetMeConferencingConferenceKey extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferenceKey';
    public    $name         = 'MeetMeConferencingConferenceKey';
    protected $bridgeId     = null;
    protected $conferenceId = null;

    public function __construct(
         $bridgeId,
         $conferenceId
    ) {
        $this->setBridgeId($bridgeId);
        $this->setConferenceId($conferenceId);
    }

    /**
     * @return MeetMeConferencingConferenceKey
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
}
