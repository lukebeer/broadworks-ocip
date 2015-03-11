<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecordedConferenceHoldPeriodDays;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingExpiredConferenceHoldPeriodDays;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemInstantConferencingGetHoldPolicyRequest.
 */
class SystemInstantConferencingGetHoldPolicyResponse extends ComplexType implements ComplexInterface
{
    public    $name                             = 'SystemInstantConferencingGetHoldPolicyResponse';
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
        if (!$deleteExpiredConferences) return $this;
        $this->deleteExpiredConferences = new PrimitiveType($deleteExpiredConferences);
        $this->deleteExpiredConferences->setName('deleteExpiredConferences');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDeleteExpiredConferences()
    {
        return $this->deleteExpiredConferences->getValue();
    }

    /**
     * 
     */
    public function setExpiredConferenceHoldPeriodDays($expiredConferenceHoldPeriodDays = null)
    {
        if (!$expiredConferenceHoldPeriodDays) return $this;
        $this->expiredConferenceHoldPeriodDays = ($expiredConferenceHoldPeriodDays InstanceOf InstantConferencingExpiredConferenceHoldPeriodDays)
             ? $expiredConferenceHoldPeriodDays
             : new InstantConferencingExpiredConferenceHoldPeriodDays($expiredConferenceHoldPeriodDays);
        $this->expiredConferenceHoldPeriodDays->setName('expiredConferenceHoldPeriodDays');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingExpiredConferenceHoldPeriodDays
     */
    public function getExpiredConferenceHoldPeriodDays()
    {
        return $this->expiredConferenceHoldPeriodDays->getValue();
    }

    /**
     * 
     */
    public function setDeleteRecordedConferences($deleteRecordedConferences = null)
    {
        if (!$deleteRecordedConferences) return $this;
        $this->deleteRecordedConferences = new PrimitiveType($deleteRecordedConferences);
        $this->deleteRecordedConferences->setName('deleteRecordedConferences');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDeleteRecordedConferences()
    {
        return $this->deleteRecordedConferences->getValue();
    }

    /**
     * 
     */
    public function setRecordedConferenceHoldPeriodDays($recordedConferenceHoldPeriodDays = null)
    {
        if (!$recordedConferenceHoldPeriodDays) return $this;
        $this->recordedConferenceHoldPeriodDays = ($recordedConferenceHoldPeriodDays InstanceOf InstantConferencingRecordedConferenceHoldPeriodDays)
             ? $recordedConferenceHoldPeriodDays
             : new InstantConferencingRecordedConferenceHoldPeriodDays($recordedConferenceHoldPeriodDays);
        $this->recordedConferenceHoldPeriodDays->setName('recordedConferenceHoldPeriodDays');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingRecordedConferenceHoldPeriodDays
     */
    public function getRecordedConferenceHoldPeriodDays()
    {
        return $this->recordedConferenceHoldPeriodDays->getValue();
    }
}
