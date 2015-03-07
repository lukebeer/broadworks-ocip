<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferenceEndDateRestrictionMonths;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingExpiredConferenceHoldPeriodDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferencePassCodeLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingRecordingFileFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemMeetMeConferencingGetRequest17sp3.
 */
class SystemMeetMeConferencingGetResponse17sp3 extends ComplexType implements ComplexInterface
{
    public    $name                                     = __CLASS__;
    protected $conferenceIdLength                       = null;
    protected $moderatorPinLength                       = null;
    protected $enableConferenceEndDateRestriction       = null;
    protected $conferenceEndDateRestrictionMonths       = null;
    protected $deleteExpiredConferencesAfterHoldPeriod  = null;
    protected $expiredConferenceHoldPeriodDays          = null;
    protected $recordingWebAppURL                       = null;
    protected $recordingFileFormat                      = null;


    public function setConferenceIdLength($conferenceIdLength = null)
    {
        $this->conferenceIdLength = ($conferenceIdLength InstanceOf MeetMeConferencingConferencePassCodeLength)
             ? $conferenceIdLength
             : new MeetMeConferencingConferencePassCodeLength($conferenceIdLength);
    }

    public function getConferenceIdLength()
    {
        return (!$this->conferenceIdLength) ?: $this->conferenceIdLength->value();
    }

    public function setModeratorPinLength($moderatorPinLength = null)
    {
        $this->moderatorPinLength = ($moderatorPinLength InstanceOf MeetMeConferencingConferencePassCodeLength)
             ? $moderatorPinLength
             : new MeetMeConferencingConferencePassCodeLength($moderatorPinLength);
    }

    public function getModeratorPinLength()
    {
        return (!$this->moderatorPinLength) ?: $this->moderatorPinLength->value();
    }

    public function setEnableConferenceEndDateRestriction(xs:boolean $enableConferenceEndDateRestriction = null)
    {
    }

    public function getEnableConferenceEndDateRestriction()
    {
        return (!$this->enableConferenceEndDateRestriction) ?: $this->enableConferenceEndDateRestriction->value();
    }

    public function setConferenceEndDateRestrictionMonths($conferenceEndDateRestrictionMonths = null)
    {
        $this->conferenceEndDateRestrictionMonths = ($conferenceEndDateRestrictionMonths InstanceOf MeetMeConferencingConferenceEndDateRestrictionMonths)
             ? $conferenceEndDateRestrictionMonths
             : new MeetMeConferencingConferenceEndDateRestrictionMonths($conferenceEndDateRestrictionMonths);
    }

    public function getConferenceEndDateRestrictionMonths()
    {
        return (!$this->conferenceEndDateRestrictionMonths) ?: $this->conferenceEndDateRestrictionMonths->value();
    }

    public function setDeleteExpiredConferencesAfterHoldPeriod(xs:boolean $deleteExpiredConferencesAfterHoldPeriod = null)
    {
    }

    public function getDeleteExpiredConferencesAfterHoldPeriod()
    {
        return (!$this->deleteExpiredConferencesAfterHoldPeriod) ?: $this->deleteExpiredConferencesAfterHoldPeriod->value();
    }

    public function setExpiredConferenceHoldPeriodDays($expiredConferenceHoldPeriodDays = null)
    {
        $this->expiredConferenceHoldPeriodDays = ($expiredConferenceHoldPeriodDays InstanceOf MeetMeConferencingExpiredConferenceHoldPeriodDays)
             ? $expiredConferenceHoldPeriodDays
             : new MeetMeConferencingExpiredConferenceHoldPeriodDays($expiredConferenceHoldPeriodDays);
    }

    public function getExpiredConferenceHoldPeriodDays()
    {
        return (!$this->expiredConferenceHoldPeriodDays) ?: $this->expiredConferenceHoldPeriodDays->value();
    }

    public function setRecordingWebAppURL($recordingWebAppURL = null)
    {
        $this->recordingWebAppURL = ($recordingWebAppURL InstanceOf URL)
             ? $recordingWebAppURL
             : new URL($recordingWebAppURL);
    }

    public function getRecordingWebAppURL()
    {
        return (!$this->recordingWebAppURL) ?: $this->recordingWebAppURL->value();
    }

    public function setRecordingFileFormat($recordingFileFormat = null)
    {
        $this->recordingFileFormat = ($recordingFileFormat InstanceOf MeetMeConferencingRecordingFileFormat)
             ? $recordingFileFormat
             : new MeetMeConferencingRecordingFileFormat($recordingFileFormat);
    }

    public function getRecordingFileFormat()
    {
        return (!$this->recordingFileFormat) ?: $this->recordingFileFormat->value();
    }
}
