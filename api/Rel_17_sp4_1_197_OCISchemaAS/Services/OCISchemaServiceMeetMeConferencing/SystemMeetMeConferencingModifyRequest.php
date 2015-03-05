<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MeetMeConferencingConferencePassCodeLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MeetMeConferencingConferenceEndDateRestrictionMonths;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MeetMeConferencingExpiredConferenceHoldPeriodDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MeetMeConferencingRecordingFileFormat;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the system level data associated with Meet-Me Conferencing.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemMeetMeConferencingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $conferenceIdLength=null,
             $moderatorPinLength=null,
             $enableConferenceEndDateRestriction=null,
             $conferenceEndDateRestrictionMonths=null,
             $deleteExpiredConferencesAfterHoldPeriod=null,
             $expiredConferenceHoldPeriodDays=null,
             $recordingWebAppURL=null,
             $recordingFileFormat=null
    ) {
        $this->conferenceIdLength                      = $conferenceIdLength;
        $this->moderatorPinLength                      = $moderatorPinLength;
        $this->enableConferenceEndDateRestriction      = $enableConferenceEndDateRestriction;
        $this->conferenceEndDateRestrictionMonths      = $conferenceEndDateRestrictionMonths;
        $this->deleteExpiredConferencesAfterHoldPeriod = $deleteExpiredConferencesAfterHoldPeriod;
        $this->expiredConferenceHoldPeriodDays         = $expiredConferenceHoldPeriodDays;
        $this->recordingWebAppURL                      = new URL($recordingWebAppURL);
        $this->recordingFileFormat                     = $recordingFileFormat;
        $this->args                                    = func_get_args();
    }

    public function setConferenceIdLength($conferenceIdLength)
    {
        $conferenceIdLength and $this->conferenceIdLength = new MeetMeConferencingConferencePassCodeLength($conferenceIdLength);
    }

    public function getConferenceIdLength()
    {
        return (!$this->conferenceIdLength) ?: $this->conferenceIdLength->value();
    }

    public function setModeratorPinLength($moderatorPinLength)
    {
        $moderatorPinLength and $this->moderatorPinLength = new MeetMeConferencingConferencePassCodeLength($moderatorPinLength);
    }

    public function getModeratorPinLength()
    {
        return (!$this->moderatorPinLength) ?: $this->moderatorPinLength->value();
    }

    public function setEnableConferenceEndDateRestriction($enableConferenceEndDateRestriction)
    {
        $enableConferenceEndDateRestriction and $this->enableConferenceEndDateRestriction = new xs:boolean($enableConferenceEndDateRestriction);
    }

    public function getEnableConferenceEndDateRestriction()
    {
        return (!$this->enableConferenceEndDateRestriction) ?: $this->enableConferenceEndDateRestriction->value();
    }

    public function setConferenceEndDateRestrictionMonths($conferenceEndDateRestrictionMonths)
    {
        $conferenceEndDateRestrictionMonths and $this->conferenceEndDateRestrictionMonths = new MeetMeConferencingConferenceEndDateRestrictionMonths($conferenceEndDateRestrictionMonths);
    }

    public function getConferenceEndDateRestrictionMonths()
    {
        return (!$this->conferenceEndDateRestrictionMonths) ?: $this->conferenceEndDateRestrictionMonths->value();
    }

    public function setDeleteExpiredConferencesAfterHoldPeriod($deleteExpiredConferencesAfterHoldPeriod)
    {
        $deleteExpiredConferencesAfterHoldPeriod and $this->deleteExpiredConferencesAfterHoldPeriod = new xs:boolean($deleteExpiredConferencesAfterHoldPeriod);
    }

    public function getDeleteExpiredConferencesAfterHoldPeriod()
    {
        return (!$this->deleteExpiredConferencesAfterHoldPeriod) ?: $this->deleteExpiredConferencesAfterHoldPeriod->value();
    }

    public function setExpiredConferenceHoldPeriodDays($expiredConferenceHoldPeriodDays)
    {
        $expiredConferenceHoldPeriodDays and $this->expiredConferenceHoldPeriodDays = new MeetMeConferencingExpiredConferenceHoldPeriodDays($expiredConferenceHoldPeriodDays);
    }

    public function getExpiredConferenceHoldPeriodDays()
    {
        return (!$this->expiredConferenceHoldPeriodDays) ?: $this->expiredConferenceHoldPeriodDays->value();
    }

    public function setRecordingWebAppURL($recordingWebAppURL)
    {
        $recordingWebAppURL and $this->recordingWebAppURL = new URL($recordingWebAppURL);
    }

    public function getRecordingWebAppURL()
    {
        return (!$this->recordingWebAppURL) ?: $this->recordingWebAppURL->value();
    }

    public function setRecordingFileFormat($recordingFileFormat)
    {
        $recordingFileFormat and $this->recordingFileFormat = new MeetMeConferencingRecordingFileFormat($recordingFileFormat);
    }

    public function getRecordingFileFormat()
    {
        return (!$this->recordingFileFormat) ?: $this->recordingFileFormat->value();
    }
}
