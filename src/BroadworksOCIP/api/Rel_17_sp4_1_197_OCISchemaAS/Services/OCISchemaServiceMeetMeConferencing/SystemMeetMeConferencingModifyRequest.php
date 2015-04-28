<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferenceEndDateRestrictionMonths;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingExpiredConferenceHoldPeriodDays;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferencePassCodeLength;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingRecordingFileFormat;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the system level data associated with Meet-Me Conferencing.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemMeetMeConferencingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemMeetMeConferencingModifyRequest';
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
        $this->conferenceIdLength->setElementName('conferenceIdLength');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferencePassCodeLength $conferenceIdLength
     */
    public function getConferenceIdLength()
    {
        return ($this->conferenceIdLength)
            ? $this->conferenceIdLength->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setModeratorPinLength($moderatorPinLength = null)
    {
        $this->moderatorPinLength = ($moderatorPinLength InstanceOf MeetMeConferencingConferencePassCodeLength)
             ? $moderatorPinLength
             : new MeetMeConferencingConferencePassCodeLength($moderatorPinLength);
        $this->moderatorPinLength->setElementName('moderatorPinLength');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferencePassCodeLength $moderatorPinLength
     */
    public function getModeratorPinLength()
    {
        return ($this->moderatorPinLength)
            ? $this->moderatorPinLength->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableConferenceEndDateRestriction($enableConferenceEndDateRestriction = null)
    {
        $this->enableConferenceEndDateRestriction = new PrimitiveType($enableConferenceEndDateRestriction);
        $this->enableConferenceEndDateRestriction->setElementName('enableConferenceEndDateRestriction');
        return $this;
    }

    /**
     * 
     * @return boolean $enableConferenceEndDateRestriction
     */
    public function getEnableConferenceEndDateRestriction()
    {
        return ($this->enableConferenceEndDateRestriction)
            ? $this->enableConferenceEndDateRestriction->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConferenceEndDateRestrictionMonths($conferenceEndDateRestrictionMonths = null)
    {
        $this->conferenceEndDateRestrictionMonths = ($conferenceEndDateRestrictionMonths InstanceOf MeetMeConferencingConferenceEndDateRestrictionMonths)
             ? $conferenceEndDateRestrictionMonths
             : new MeetMeConferencingConferenceEndDateRestrictionMonths($conferenceEndDateRestrictionMonths);
        $this->conferenceEndDateRestrictionMonths->setElementName('conferenceEndDateRestrictionMonths');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferenceEndDateRestrictionMonths $conferenceEndDateRestrictionMonths
     */
    public function getConferenceEndDateRestrictionMonths()
    {
        return ($this->conferenceEndDateRestrictionMonths)
            ? $this->conferenceEndDateRestrictionMonths->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDeleteExpiredConferencesAfterHoldPeriod($deleteExpiredConferencesAfterHoldPeriod = null)
    {
        $this->deleteExpiredConferencesAfterHoldPeriod = new PrimitiveType($deleteExpiredConferencesAfterHoldPeriod);
        $this->deleteExpiredConferencesAfterHoldPeriod->setElementName('deleteExpiredConferencesAfterHoldPeriod');
        return $this;
    }

    /**
     * 
     * @return boolean $deleteExpiredConferencesAfterHoldPeriod
     */
    public function getDeleteExpiredConferencesAfterHoldPeriod()
    {
        return ($this->deleteExpiredConferencesAfterHoldPeriod)
            ? $this->deleteExpiredConferencesAfterHoldPeriod->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setExpiredConferenceHoldPeriodDays($expiredConferenceHoldPeriodDays = null)
    {
        $this->expiredConferenceHoldPeriodDays = ($expiredConferenceHoldPeriodDays InstanceOf MeetMeConferencingExpiredConferenceHoldPeriodDays)
             ? $expiredConferenceHoldPeriodDays
             : new MeetMeConferencingExpiredConferenceHoldPeriodDays($expiredConferenceHoldPeriodDays);
        $this->expiredConferenceHoldPeriodDays->setElementName('expiredConferenceHoldPeriodDays');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingExpiredConferenceHoldPeriodDays $expiredConferenceHoldPeriodDays
     */
    public function getExpiredConferenceHoldPeriodDays()
    {
        return ($this->expiredConferenceHoldPeriodDays)
            ? $this->expiredConferenceHoldPeriodDays->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRecordingWebAppURL($recordingWebAppURL = null)
    {
        $this->recordingWebAppURL = ($recordingWebAppURL InstanceOf URL)
             ? $recordingWebAppURL
             : new URL($recordingWebAppURL);
        $this->recordingWebAppURL->setElementName('recordingWebAppURL');
        return $this;
    }

    /**
     * 
     * @return URL $recordingWebAppURL
     */
    public function getRecordingWebAppURL()
    {
        return ($this->recordingWebAppURL)
            ? $this->recordingWebAppURL->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRecordingFileFormat($recordingFileFormat = null)
    {
        $this->recordingFileFormat = ($recordingFileFormat InstanceOf MeetMeConferencingRecordingFileFormat)
             ? $recordingFileFormat
             : new MeetMeConferencingRecordingFileFormat($recordingFileFormat);
        $this->recordingFileFormat->setElementName('recordingFileFormat');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingRecordingFileFormat $recordingFileFormat
     */
    public function getRecordingFileFormat()
    {
        return ($this->recordingFileFormat)
            ? $this->recordingFileFormat->getElementValue()
            : null;
    }
}
