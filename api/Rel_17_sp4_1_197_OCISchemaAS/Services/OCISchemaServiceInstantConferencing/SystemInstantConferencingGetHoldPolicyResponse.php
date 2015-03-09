<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecordedConferenceHoldPeriodDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingExpiredConferenceHoldPeriodDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing\SystemInstantConferencingGetHoldPolicyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemInstantConferencingGetHoldPolicyRequest.
 */
class SystemInstantConferencingGetHoldPolicyResponse extends ComplexType implements ComplexInterface
{
    public    $name                             = __CLASS__;
    protected $deleteExpiredConferences         = null;
    protected $expiredConferenceHoldPeriodDays  = null;
    protected $deleteRecordedConferences        = null;
    protected $recordedConferenceHoldPeriodDays = null;

    /**
     * @return SystemInstantConferencingGetHoldPolicyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDeleteExpiredConferences($deleteExpiredConferences = null)
    {
        $this->deleteExpiredConferences = (boolean) $deleteExpiredConferences;
    }

    /**
     * 
     */
    public function getDeleteExpiredConferences()
    {
        return (!$this->deleteExpiredConferences) ?: $this->deleteExpiredConferences;
    }

    /**
     * Hold period for expired conferences, in days.
     */
    public function setExpiredConferenceHoldPeriodDays($expiredConferenceHoldPeriodDays = null)
    {
        $this->expiredConferenceHoldPeriodDays = ($expiredConferenceHoldPeriodDays InstanceOf InstantConferencingExpiredConferenceHoldPeriodDays)
             ? $expiredConferenceHoldPeriodDays
             : new InstantConferencingExpiredConferenceHoldPeriodDays($expiredConferenceHoldPeriodDays);
    }

    /**
     * Hold period for expired conferences, in days.
     */
    public function getExpiredConferenceHoldPeriodDays()
    {
        return (!$this->expiredConferenceHoldPeriodDays) ?: $this->expiredConferenceHoldPeriodDays->getValue();
    }

    /**
     * 
     */
    public function setDeleteRecordedConferences($deleteRecordedConferences = null)
    {
        $this->deleteRecordedConferences = (boolean) $deleteRecordedConferences;
    }

    /**
     * 
     */
    public function getDeleteRecordedConferences()
    {
        return (!$this->deleteRecordedConferences) ?: $this->deleteRecordedConferences;
    }

    /**
     * Hold period for recorded conferences, in days.
     */
    public function setRecordedConferenceHoldPeriodDays($recordedConferenceHoldPeriodDays = null)
    {
        $this->recordedConferenceHoldPeriodDays = ($recordedConferenceHoldPeriodDays InstanceOf InstantConferencingRecordedConferenceHoldPeriodDays)
             ? $recordedConferenceHoldPeriodDays
             : new InstantConferencingRecordedConferenceHoldPeriodDays($recordedConferenceHoldPeriodDays);
    }

    /**
     * Hold period for recorded conferences, in days.
     */
    public function getRecordedConferenceHoldPeriodDays()
    {
        return (!$this->recordedConferenceHoldPeriodDays) ?: $this->recordedConferenceHoldPeriodDays->getValue();
    }
}
