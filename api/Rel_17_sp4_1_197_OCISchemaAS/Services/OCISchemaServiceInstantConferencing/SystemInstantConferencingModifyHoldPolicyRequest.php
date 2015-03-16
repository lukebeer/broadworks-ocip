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
 * Modify the system level data associated with Instant Conferencing hold functions.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemInstantConferencingModifyHoldPolicyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemInstantConferencingModifyHoldPolicyRequest';
    protected $deleteExpiredConferences;
    protected $expiredConferenceHoldPeriodDays;
    protected $deleteRecordedConferences;
    protected $recordedConferenceHoldPeriodDays;

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
    public function setDeleteExpiredConferences($deleteExpiredConferences = null)
    {
        $this->deleteExpiredConferences = new PrimitiveType($deleteExpiredConferences);
        $this->deleteExpiredConferences->setName('deleteExpiredConferences');
        return $this;
    }

    /**
     * 
     * @return boolean $deleteExpiredConferences
     */
    public function getDeleteExpiredConferences()
    {
        return ($this->deleteExpiredConferences) ? $this->deleteExpiredConferences->getValue() : null;
    }

    /**
     * 
     */
    public function setExpiredConferenceHoldPeriodDays($expiredConferenceHoldPeriodDays = null)
    {
        $this->expiredConferenceHoldPeriodDays = ($expiredConferenceHoldPeriodDays InstanceOf InstantConferencingExpiredConferenceHoldPeriodDays)
             ? $expiredConferenceHoldPeriodDays
             : new InstantConferencingExpiredConferenceHoldPeriodDays($expiredConferenceHoldPeriodDays);
        $this->expiredConferenceHoldPeriodDays->setName('expiredConferenceHoldPeriodDays');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingExpiredConferenceHoldPeriodDays $expiredConferenceHoldPeriodDays
     */
    public function getExpiredConferenceHoldPeriodDays()
    {
        return ($this->expiredConferenceHoldPeriodDays) ? $this->expiredConferenceHoldPeriodDays->getValue() : null;
    }

    /**
     * 
     */
    public function setDeleteRecordedConferences($deleteRecordedConferences = null)
    {
        $this->deleteRecordedConferences = new PrimitiveType($deleteRecordedConferences);
        $this->deleteRecordedConferences->setName('deleteRecordedConferences');
        return $this;
    }

    /**
     * 
     * @return boolean $deleteRecordedConferences
     */
    public function getDeleteRecordedConferences()
    {
        return ($this->deleteRecordedConferences) ? $this->deleteRecordedConferences->getValue() : null;
    }

    /**
     * 
     */
    public function setRecordedConferenceHoldPeriodDays($recordedConferenceHoldPeriodDays = null)
    {
        $this->recordedConferenceHoldPeriodDays = ($recordedConferenceHoldPeriodDays InstanceOf InstantConferencingRecordedConferenceHoldPeriodDays)
             ? $recordedConferenceHoldPeriodDays
             : new InstantConferencingRecordedConferenceHoldPeriodDays($recordedConferenceHoldPeriodDays);
        $this->recordedConferenceHoldPeriodDays->setName('recordedConferenceHoldPeriodDays');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingRecordedConferenceHoldPeriodDays $recordedConferenceHoldPeriodDays
     */
    public function getRecordedConferenceHoldPeriodDays()
    {
        return ($this->recordedConferenceHoldPeriodDays) ? $this->recordedConferenceHoldPeriodDays->getValue() : null;
    }
}
