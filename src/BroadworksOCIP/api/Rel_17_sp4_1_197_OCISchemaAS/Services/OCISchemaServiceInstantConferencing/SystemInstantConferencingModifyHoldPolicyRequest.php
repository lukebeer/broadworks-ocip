<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecordedConferenceHoldPeriodDays;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingExpiredConferenceHoldPeriodDays;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the system level data associated with Instant Conferencing hold functions.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemInstantConferencingModifyHoldPolicyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemInstantConferencingModifyHoldPolicyRequest';
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
        $this->deleteExpiredConferences->setElementName('deleteExpiredConferences');
        return $this;
    }

    /**
     * 
     * @return boolean $deleteExpiredConferences
     */
    public function getDeleteExpiredConferences()
    {
        return ($this->deleteExpiredConferences)
            ? $this->deleteExpiredConferences->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setExpiredConferenceHoldPeriodDays($expiredConferenceHoldPeriodDays = null)
    {
        $this->expiredConferenceHoldPeriodDays = ($expiredConferenceHoldPeriodDays InstanceOf InstantConferencingExpiredConferenceHoldPeriodDays)
             ? $expiredConferenceHoldPeriodDays
             : new InstantConferencingExpiredConferenceHoldPeriodDays($expiredConferenceHoldPeriodDays);
        $this->expiredConferenceHoldPeriodDays->setElementName('expiredConferenceHoldPeriodDays');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingExpiredConferenceHoldPeriodDays $expiredConferenceHoldPeriodDays
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
    public function setDeleteRecordedConferences($deleteRecordedConferences = null)
    {
        $this->deleteRecordedConferences = new PrimitiveType($deleteRecordedConferences);
        $this->deleteRecordedConferences->setElementName('deleteRecordedConferences');
        return $this;
    }

    /**
     * 
     * @return boolean $deleteRecordedConferences
     */
    public function getDeleteRecordedConferences()
    {
        return ($this->deleteRecordedConferences)
            ? $this->deleteRecordedConferences->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRecordedConferenceHoldPeriodDays($recordedConferenceHoldPeriodDays = null)
    {
        $this->recordedConferenceHoldPeriodDays = ($recordedConferenceHoldPeriodDays InstanceOf InstantConferencingRecordedConferenceHoldPeriodDays)
             ? $recordedConferenceHoldPeriodDays
             : new InstantConferencingRecordedConferenceHoldPeriodDays($recordedConferenceHoldPeriodDays);
        $this->recordedConferenceHoldPeriodDays->setElementName('recordedConferenceHoldPeriodDays');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingRecordedConferenceHoldPeriodDays $recordedConferenceHoldPeriodDays
     */
    public function getRecordedConferenceHoldPeriodDays()
    {
        return ($this->recordedConferenceHoldPeriodDays)
            ? $this->recordedConferenceHoldPeriodDays->getElementValue()
            : null;
    }
}
