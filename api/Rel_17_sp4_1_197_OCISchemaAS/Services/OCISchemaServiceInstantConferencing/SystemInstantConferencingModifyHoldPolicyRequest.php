<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecordedConferenceHoldPeriodDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingExpiredConferenceHoldPeriodDays;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the system level data associated with Instant Conferencing hold functions.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemInstantConferencingModifyHoldPolicyRequest extends ComplexType implements ComplexInterface
{
    public    $name                              = __CLASS__;
    protected $deleteExpiredConferences          = null;
    protected $expiredConferenceHoldPeriodDays   = null;
    protected $deleteRecordedConferences         = null;
    protected $recordedConferenceHoldPeriodDays  = null;

    public function __construct(
         $deleteExpiredConferences = null,
         $expiredConferenceHoldPeriodDays = null,
         $deleteRecordedConferences = null,
         $recordedConferenceHoldPeriodDays = null
    ) {
        $this->setDeleteExpiredConferences($deleteExpiredConferences);
        $this->setExpiredConferenceHoldPeriodDays($expiredConferenceHoldPeriodDays);
        $this->setDeleteRecordedConferences($deleteRecordedConferences);
        $this->setRecordedConferenceHoldPeriodDays($recordedConferenceHoldPeriodDays);
    }

    public function setDeleteExpiredConferences(xs:boolean $deleteExpiredConferences = null)
    {
    }

    public function getDeleteExpiredConferences()
    {
        return (!$this->deleteExpiredConferences) ?: $this->deleteExpiredConferences->value();
    }

    public function setExpiredConferenceHoldPeriodDays($expiredConferenceHoldPeriodDays = null)
    {
        $this->expiredConferenceHoldPeriodDays = ($expiredConferenceHoldPeriodDays InstanceOf InstantConferencingExpiredConferenceHoldPeriodDays)
             ? $expiredConferenceHoldPeriodDays
             : new InstantConferencingExpiredConferenceHoldPeriodDays($expiredConferenceHoldPeriodDays);
    }

    public function getExpiredConferenceHoldPeriodDays()
    {
        return (!$this->expiredConferenceHoldPeriodDays) ?: $this->expiredConferenceHoldPeriodDays->value();
    }

    public function setDeleteRecordedConferences(xs:boolean $deleteRecordedConferences = null)
    {
    }

    public function getDeleteRecordedConferences()
    {
        return (!$this->deleteRecordedConferences) ?: $this->deleteRecordedConferences->value();
    }

    public function setRecordedConferenceHoldPeriodDays($recordedConferenceHoldPeriodDays = null)
    {
        $this->recordedConferenceHoldPeriodDays = ($recordedConferenceHoldPeriodDays InstanceOf InstantConferencingRecordedConferenceHoldPeriodDays)
             ? $recordedConferenceHoldPeriodDays
             : new InstantConferencingRecordedConferenceHoldPeriodDays($recordedConferenceHoldPeriodDays);
    }

    public function getRecordedConferenceHoldPeriodDays()
    {
        return (!$this->recordedConferenceHoldPeriodDays) ?: $this->recordedConferenceHoldPeriodDays->value();
    }
}
