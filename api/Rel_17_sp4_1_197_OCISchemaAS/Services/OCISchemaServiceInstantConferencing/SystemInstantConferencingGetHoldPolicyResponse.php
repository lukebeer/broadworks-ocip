<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingExpiredConferenceHoldPeriodDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingRecordedConferenceHoldPeriodDays;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemInstantConferencingGetHoldPolicyRequest.
 */
class SystemInstantConferencingGetHoldPolicyResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $deleteExpiredConferences,
             $expiredConferenceHoldPeriodDays,
             $deleteRecordedConferences,
             $recordedConferenceHoldPeriodDays
    ) {
        $this->deleteExpiredConferences         = $deleteExpiredConferences;
        $this->expiredConferenceHoldPeriodDays  = $expiredConferenceHoldPeriodDays;
        $this->deleteRecordedConferences        = $deleteRecordedConferences;
        $this->recordedConferenceHoldPeriodDays = $recordedConferenceHoldPeriodDays;
        $this->args                             = func_get_args();
    }

    public function setDeleteExpiredConferences($deleteExpiredConferences)
    {
        $deleteExpiredConferences and $this->deleteExpiredConferences = new xs:boolean($deleteExpiredConferences);
    }

    public function getDeleteExpiredConferences()
    {
        return (!$this->deleteExpiredConferences) ?: $this->deleteExpiredConferences->value();
    }

    public function setExpiredConferenceHoldPeriodDays($expiredConferenceHoldPeriodDays)
    {
        $expiredConferenceHoldPeriodDays and $this->expiredConferenceHoldPeriodDays = new InstantConferencingExpiredConferenceHoldPeriodDays($expiredConferenceHoldPeriodDays);
    }

    public function getExpiredConferenceHoldPeriodDays()
    {
        return (!$this->expiredConferenceHoldPeriodDays) ?: $this->expiredConferenceHoldPeriodDays->value();
    }

    public function setDeleteRecordedConferences($deleteRecordedConferences)
    {
        $deleteRecordedConferences and $this->deleteRecordedConferences = new xs:boolean($deleteRecordedConferences);
    }

    public function getDeleteRecordedConferences()
    {
        return (!$this->deleteRecordedConferences) ?: $this->deleteRecordedConferences->value();
    }

    public function setRecordedConferenceHoldPeriodDays($recordedConferenceHoldPeriodDays)
    {
        $recordedConferenceHoldPeriodDays and $this->recordedConferenceHoldPeriodDays = new InstantConferencingRecordedConferenceHoldPeriodDays($recordedConferenceHoldPeriodDays);
    }

    public function getRecordedConferenceHoldPeriodDays()
    {
        return (!$this->recordedConferenceHoldPeriodDays) ?: $this->recordedConferenceHoldPeriodDays->value();
    }
}
