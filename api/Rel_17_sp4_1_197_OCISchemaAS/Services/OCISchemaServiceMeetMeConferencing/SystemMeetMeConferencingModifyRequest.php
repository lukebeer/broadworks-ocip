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
    public    $name                                    = 'SystemMeetMeConferencingModifyRequest';
    protected $conferenceIdLength                      = null;
    protected $moderatorPinLength                      = null;
    protected $enableConferenceEndDateRestriction      = null;
    protected $conferenceEndDateRestrictionMonths      = null;
    protected $deleteExpiredConferencesAfterHoldPeriod = null;
    protected $expiredConferenceHoldPeriodDays         = null;
    protected $recordingWebAppURL                      = null;
    protected $recordingFileFormat                     = null;

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
     * @return 
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
        if (!$conferenceIdLength) return $this;
        $this->conferenceIdLength = ($conferenceIdLength InstanceOf MeetMeConferencingConferencePassCodeLength)
             ? $conferenceIdLength
             : new MeetMeConferencingConferencePassCodeLength($conferenceIdLength);
        $this->conferenceIdLength->setName('conferenceIdLength');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferencePassCodeLength
     */
    public function getConferenceIdLength()
    {
        return $this->conferenceIdLength->getValue();
    }

    /**
     * 
     */
    public function setModeratorPinLength($moderatorPinLength = null)
    {
        if (!$moderatorPinLength) return $this;
        $this->moderatorPinLength = ($moderatorPinLength InstanceOf MeetMeConferencingConferencePassCodeLength)
             ? $moderatorPinLength
             : new MeetMeConferencingConferencePassCodeLength($moderatorPinLength);
        $this->moderatorPinLength->setName('moderatorPinLength');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferencePassCodeLength
     */
    public function getModeratorPinLength()
    {
        return $this->moderatorPinLength->getValue();
    }

    /**
     * 
     */
    public function setEnableConferenceEndDateRestriction($enableConferenceEndDateRestriction = null)
    {
        if (!$enableConferenceEndDateRestriction) return $this;
        $this->enableConferenceEndDateRestriction = new PrimitiveType($enableConferenceEndDateRestriction);
        $this->enableConferenceEndDateRestriction->setName('enableConferenceEndDateRestriction');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableConferenceEndDateRestriction()
    {
        return $this->enableConferenceEndDateRestriction->getValue();
    }

    /**
     * 
     */
    public function setConferenceEndDateRestrictionMonths($conferenceEndDateRestrictionMonths = null)
    {
        if (!$conferenceEndDateRestrictionMonths) return $this;
        $this->conferenceEndDateRestrictionMonths = ($conferenceEndDateRestrictionMonths InstanceOf MeetMeConferencingConferenceEndDateRestrictionMonths)
             ? $conferenceEndDateRestrictionMonths
             : new MeetMeConferencingConferenceEndDateRestrictionMonths($conferenceEndDateRestrictionMonths);
        $this->conferenceEndDateRestrictionMonths->setName('conferenceEndDateRestrictionMonths');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferenceEndDateRestrictionMonths
     */
    public function getConferenceEndDateRestrictionMonths()
    {
        return $this->conferenceEndDateRestrictionMonths->getValue();
    }

    /**
     * 
     */
    public function setDeleteExpiredConferencesAfterHoldPeriod($deleteExpiredConferencesAfterHoldPeriod = null)
    {
        if (!$deleteExpiredConferencesAfterHoldPeriod) return $this;
        $this->deleteExpiredConferencesAfterHoldPeriod = new PrimitiveType($deleteExpiredConferencesAfterHoldPeriod);
        $this->deleteExpiredConferencesAfterHoldPeriod->setName('deleteExpiredConferencesAfterHoldPeriod');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDeleteExpiredConferencesAfterHoldPeriod()
    {
        return $this->deleteExpiredConferencesAfterHoldPeriod->getValue();
    }

    /**
     * 
     */
    public function setExpiredConferenceHoldPeriodDays($expiredConferenceHoldPeriodDays = null)
    {
        if (!$expiredConferenceHoldPeriodDays) return $this;
        $this->expiredConferenceHoldPeriodDays = ($expiredConferenceHoldPeriodDays InstanceOf MeetMeConferencingExpiredConferenceHoldPeriodDays)
             ? $expiredConferenceHoldPeriodDays
             : new MeetMeConferencingExpiredConferenceHoldPeriodDays($expiredConferenceHoldPeriodDays);
        $this->expiredConferenceHoldPeriodDays->setName('expiredConferenceHoldPeriodDays');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingExpiredConferenceHoldPeriodDays
     */
    public function getExpiredConferenceHoldPeriodDays()
    {
        return $this->expiredConferenceHoldPeriodDays->getValue();
    }

    /**
     * 
     */
    public function setRecordingWebAppURL($recordingWebAppURL = null)
    {
        if (!$recordingWebAppURL) return $this;
        $this->recordingWebAppURL = ($recordingWebAppURL InstanceOf URL)
             ? $recordingWebAppURL
             : new URL($recordingWebAppURL);
        $this->recordingWebAppURL->setName('recordingWebAppURL');
        return $this;
    }

    /**
     * 
     * @return URL
     */
    public function getRecordingWebAppURL()
    {
        return $this->recordingWebAppURL->getValue();
    }

    /**
     * 
     */
    public function setRecordingFileFormat($recordingFileFormat = null)
    {
        if (!$recordingFileFormat) return $this;
        $this->recordingFileFormat = ($recordingFileFormat InstanceOf MeetMeConferencingRecordingFileFormat)
             ? $recordingFileFormat
             : new MeetMeConferencingRecordingFileFormat($recordingFileFormat);
        $this->recordingFileFormat->setName('recordingFileFormat');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingRecordingFileFormat
     */
    public function getRecordingFileFormat()
    {
        return $this->recordingFileFormat->getValue();
    }
}
