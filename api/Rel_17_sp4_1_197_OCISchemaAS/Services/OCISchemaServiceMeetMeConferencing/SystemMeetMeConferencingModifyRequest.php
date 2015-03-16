<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferenceEndDateRestrictionMonths;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingExpiredConferenceHoldPeriodDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferencePassCodeLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingRecordingFileFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the system level data associated with Meet-Me Conferencing.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemMeetMeConferencingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemMeetMeConferencingModifyRequest';
    protected $conferenceIdLength;
    protected $moderatorPinLength;
    protected $enableConferenceEndDateRestriction;
    protected $conferenceEndDateRestrictionMonths;
    protected $deleteExpiredConferencesAfterHoldPeriod;
    protected $expiredConferenceHoldPeriodDays;
    protected $recordingWebAppURL;
    protected $recordingFileFormat;

    public function __construct(
         $conferenceIdLength = null,
         $moderatorPinLength = null,
         $enableConferenceEndDateRestriction = null,
         $conferenceEndDateRestrictionMonths = null,
         $deleteExpiredConferencesAfterHoldPeriod = null,
         $expiredConferenceHoldPeriodDays = null,
         $recordingWebAppURL = null,
         $recordingFileFormat = null
    ) {
        $this->setConferenceIdLength($conferenceIdLength);
        $this->setModeratorPinLength($moderatorPinLength);
        $this->setEnableConferenceEndDateRestriction($enableConferenceEndDateRestriction);
        $this->setConferenceEndDateRestrictionMonths($conferenceEndDateRestrictionMonths);
        $this->setDeleteExpiredConferencesAfterHoldPeriod($deleteExpiredConferencesAfterHoldPeriod);
        $this->setExpiredConferenceHoldPeriodDays($expiredConferenceHoldPeriodDays);
        $this->setRecordingWebAppURL($recordingWebAppURL);
        $this->setRecordingFileFormat($recordingFileFormat);
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
    public function setConferenceIdLength($conferenceIdLength = null)
    {
        $this->conferenceIdLength = ($conferenceIdLength InstanceOf MeetMeConferencingConferencePassCodeLength)
             ? $conferenceIdLength
             : new MeetMeConferencingConferencePassCodeLength($conferenceIdLength);
        $this->conferenceIdLength->setName('conferenceIdLength');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferencePassCodeLength $conferenceIdLength
     */
    public function getConferenceIdLength()
    {
        return ($this->conferenceIdLength) ? $this->conferenceIdLength->getValue() : null;
    }

    /**
     * 
     */
    public function setModeratorPinLength($moderatorPinLength = null)
    {
        $this->moderatorPinLength = ($moderatorPinLength InstanceOf MeetMeConferencingConferencePassCodeLength)
             ? $moderatorPinLength
             : new MeetMeConferencingConferencePassCodeLength($moderatorPinLength);
        $this->moderatorPinLength->setName('moderatorPinLength');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferencePassCodeLength $moderatorPinLength
     */
    public function getModeratorPinLength()
    {
        return ($this->moderatorPinLength) ? $this->moderatorPinLength->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableConferenceEndDateRestriction($enableConferenceEndDateRestriction = null)
    {
        $this->enableConferenceEndDateRestriction = new PrimitiveType($enableConferenceEndDateRestriction);
        $this->enableConferenceEndDateRestriction->setName('enableConferenceEndDateRestriction');
        return $this;
    }

    /**
     * 
     * @return boolean $enableConferenceEndDateRestriction
     */
    public function getEnableConferenceEndDateRestriction()
    {
        return ($this->enableConferenceEndDateRestriction) ? $this->enableConferenceEndDateRestriction->getValue() : null;
    }

    /**
     * 
     */
    public function setConferenceEndDateRestrictionMonths($conferenceEndDateRestrictionMonths = null)
    {
        $this->conferenceEndDateRestrictionMonths = ($conferenceEndDateRestrictionMonths InstanceOf MeetMeConferencingConferenceEndDateRestrictionMonths)
             ? $conferenceEndDateRestrictionMonths
             : new MeetMeConferencingConferenceEndDateRestrictionMonths($conferenceEndDateRestrictionMonths);
        $this->conferenceEndDateRestrictionMonths->setName('conferenceEndDateRestrictionMonths');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferenceEndDateRestrictionMonths $conferenceEndDateRestrictionMonths
     */
    public function getConferenceEndDateRestrictionMonths()
    {
        return ($this->conferenceEndDateRestrictionMonths) ? $this->conferenceEndDateRestrictionMonths->getValue() : null;
    }

    /**
     * 
     */
    public function setDeleteExpiredConferencesAfterHoldPeriod($deleteExpiredConferencesAfterHoldPeriod = null)
    {
        $this->deleteExpiredConferencesAfterHoldPeriod = new PrimitiveType($deleteExpiredConferencesAfterHoldPeriod);
        $this->deleteExpiredConferencesAfterHoldPeriod->setName('deleteExpiredConferencesAfterHoldPeriod');
        return $this;
    }

    /**
     * 
     * @return boolean $deleteExpiredConferencesAfterHoldPeriod
     */
    public function getDeleteExpiredConferencesAfterHoldPeriod()
    {
        return ($this->deleteExpiredConferencesAfterHoldPeriod) ? $this->deleteExpiredConferencesAfterHoldPeriod->getValue() : null;
    }

    /**
     * 
     */
    public function setExpiredConferenceHoldPeriodDays($expiredConferenceHoldPeriodDays = null)
    {
        $this->expiredConferenceHoldPeriodDays = ($expiredConferenceHoldPeriodDays InstanceOf MeetMeConferencingExpiredConferenceHoldPeriodDays)
             ? $expiredConferenceHoldPeriodDays
             : new MeetMeConferencingExpiredConferenceHoldPeriodDays($expiredConferenceHoldPeriodDays);
        $this->expiredConferenceHoldPeriodDays->setName('expiredConferenceHoldPeriodDays');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingExpiredConferenceHoldPeriodDays $expiredConferenceHoldPeriodDays
     */
    public function getExpiredConferenceHoldPeriodDays()
    {
        return ($this->expiredConferenceHoldPeriodDays) ? $this->expiredConferenceHoldPeriodDays->getValue() : null;
    }

    /**
     * 
     */
    public function setRecordingWebAppURL($recordingWebAppURL = null)
    {
        $this->recordingWebAppURL = ($recordingWebAppURL InstanceOf URL)
             ? $recordingWebAppURL
             : new URL($recordingWebAppURL);
        $this->recordingWebAppURL->setName('recordingWebAppURL');
        return $this;
    }

    /**
     * 
     * @return URL $recordingWebAppURL
     */
    public function getRecordingWebAppURL()
    {
        return ($this->recordingWebAppURL) ? $this->recordingWebAppURL->getValue() : null;
    }

    /**
     * 
     */
    public function setRecordingFileFormat($recordingFileFormat = null)
    {
        $this->recordingFileFormat = ($recordingFileFormat InstanceOf MeetMeConferencingRecordingFileFormat)
             ? $recordingFileFormat
             : new MeetMeConferencingRecordingFileFormat($recordingFileFormat);
        $this->recordingFileFormat->setName('recordingFileFormat');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingRecordingFileFormat $recordingFileFormat
     */
    public function getRecordingFileFormat()
    {
        return ($this->recordingFileFormat) ? $this->recordingFileFormat->getValue() : null;
    }
}
