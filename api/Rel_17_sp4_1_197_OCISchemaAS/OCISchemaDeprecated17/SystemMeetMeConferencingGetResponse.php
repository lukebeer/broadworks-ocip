<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferenceEndDateRestrictionMonths;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingExpiredConferenceHoldPeriodDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferencePassCodeLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\SystemMeetMeConferencingGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemMeetMeConferencingGetRequest.
 */
class SystemMeetMeConferencingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                    = __CLASS__;
    protected $conferenceIdLength                      = null;
    protected $moderatorPinLength                      = null;
    protected $enableConferenceEndDateRestriction      = null;
    protected $conferenceEndDateRestrictionMonths      = null;
    protected $deleteExpiredConferencesAfterHoldPeriod = null;
    protected $expiredConferenceHoldPeriodDays         = null;
    protected $recordingWebAppURL                      = null;

    /**
     * @return SystemMeetMeConferencingGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Length of conference Id and moderator pin.
     */
    public function setConferenceIdLength($conferenceIdLength = null)
    {
        $this->conferenceIdLength = ($conferenceIdLength InstanceOf MeetMeConferencingConferencePassCodeLength)
             ? $conferenceIdLength
             : new MeetMeConferencingConferencePassCodeLength($conferenceIdLength);
    }

    /**
     * Length of conference Id and moderator pin.
     */
    public function getConferenceIdLength()
    {
        return (!$this->conferenceIdLength) ?: $this->conferenceIdLength->getValue();
    }

    /**
     * Length of conference Id and moderator pin.
     */
    public function setModeratorPinLength($moderatorPinLength = null)
    {
        $this->moderatorPinLength = ($moderatorPinLength InstanceOf MeetMeConferencingConferencePassCodeLength)
             ? $moderatorPinLength
             : new MeetMeConferencingConferencePassCodeLength($moderatorPinLength);
    }

    /**
     * Length of conference Id and moderator pin.
     */
    public function getModeratorPinLength()
    {
        return (!$this->moderatorPinLength) ?: $this->moderatorPinLength->getValue();
    }

    /**
     * 
     */
    public function setEnableConferenceEndDateRestriction($enableConferenceEndDateRestriction = null)
    {
        $this->enableConferenceEndDateRestriction = (boolean) $enableConferenceEndDateRestriction;
    }

    /**
     * 
     */
    public function getEnableConferenceEndDateRestriction()
    {
        return (!$this->enableConferenceEndDateRestriction) ?: $this->enableConferenceEndDateRestriction;
    }

    /**
     * Restricts conference end date to the given number of months from the start date.
     */
    public function setConferenceEndDateRestrictionMonths($conferenceEndDateRestrictionMonths = null)
    {
        $this->conferenceEndDateRestrictionMonths = ($conferenceEndDateRestrictionMonths InstanceOf MeetMeConferencingConferenceEndDateRestrictionMonths)
             ? $conferenceEndDateRestrictionMonths
             : new MeetMeConferencingConferenceEndDateRestrictionMonths($conferenceEndDateRestrictionMonths);
    }

    /**
     * Restricts conference end date to the given number of months from the start date.
     */
    public function getConferenceEndDateRestrictionMonths()
    {
        return (!$this->conferenceEndDateRestrictionMonths) ?: $this->conferenceEndDateRestrictionMonths->getValue();
    }

    /**
     * 
     */
    public function setDeleteExpiredConferencesAfterHoldPeriod($deleteExpiredConferencesAfterHoldPeriod = null)
    {
        $this->deleteExpiredConferencesAfterHoldPeriod = (boolean) $deleteExpiredConferencesAfterHoldPeriod;
    }

    /**
     * 
     */
    public function getDeleteExpiredConferencesAfterHoldPeriod()
    {
        return (!$this->deleteExpiredConferencesAfterHoldPeriod) ?: $this->deleteExpiredConferencesAfterHoldPeriod;
    }

    /**
     * Hold period for expired conferences, in days.
     */
    public function setExpiredConferenceHoldPeriodDays($expiredConferenceHoldPeriodDays = null)
    {
        $this->expiredConferenceHoldPeriodDays = ($expiredConferenceHoldPeriodDays InstanceOf MeetMeConferencingExpiredConferenceHoldPeriodDays)
             ? $expiredConferenceHoldPeriodDays
             : new MeetMeConferencingExpiredConferenceHoldPeriodDays($expiredConferenceHoldPeriodDays);
    }

    /**
     * Hold period for expired conferences, in days.
     */
    public function getExpiredConferenceHoldPeriodDays()
    {
        return (!$this->expiredConferenceHoldPeriodDays) ?: $this->expiredConferenceHoldPeriodDays->getValue();
    }

    /**
     * URL.
     */
    public function setRecordingWebAppURL($recordingWebAppURL = null)
    {
        $this->recordingWebAppURL = ($recordingWebAppURL InstanceOf URL)
             ? $recordingWebAppURL
             : new URL($recordingWebAppURL);
    }

    /**
     * URL.
     */
    public function getRecordingWebAppURL()
    {
        return (!$this->recordingWebAppURL) ?: $this->recordingWebAppURL->getValue();
    }
}
