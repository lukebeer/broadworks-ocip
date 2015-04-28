<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallForwardingSelective; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallForwardingSelective\CallForwardingSelectiveNumberSelection16;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HolidaySchedule;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaFromDn;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserCallForwardingSelectiveGetCriteriaRequest16.
 */
class UserCallForwardingSelectiveGetCriteriaResponse16 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCallForwardingSelectiveGetCriteriaResponse16';
    protected $timeSchedule;
    protected $holidaySchedule;
    protected $forwardToNumberSelection;
    protected $forwardToPhoneNumber;
    protected $fromDnCriteria;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallForwardingSelective\UserCallForwardingSelectiveGetCriteriaResponse16 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTimeSchedule(TimeSchedule $timeSchedule = null)
    {
        $this->timeSchedule = ($timeSchedule InstanceOf TimeSchedule)
             ? $timeSchedule
             : new TimeSchedule($timeSchedule);
        $this->timeSchedule->setElementName('timeSchedule');
        return $this;
    }

    /**
     * 
     * @return TimeSchedule $timeSchedule
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule;
    }

    /**
     * 
     */
    public function setHolidaySchedule(HolidaySchedule $holidaySchedule = null)
    {
        $this->holidaySchedule = ($holidaySchedule InstanceOf HolidaySchedule)
             ? $holidaySchedule
             : new HolidaySchedule($holidaySchedule);
        $this->holidaySchedule->setElementName('holidaySchedule');
        return $this;
    }

    /**
     * 
     * @return HolidaySchedule $holidaySchedule
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule;
    }

    /**
     * 
     */
    public function setForwardToNumberSelection($forwardToNumberSelection = null)
    {
        $this->forwardToNumberSelection = ($forwardToNumberSelection InstanceOf CallForwardingSelectiveNumberSelection16)
             ? $forwardToNumberSelection
             : new CallForwardingSelectiveNumberSelection16($forwardToNumberSelection);
        $this->forwardToNumberSelection->setElementName('forwardToNumberSelection');
        return $this;
    }

    /**
     * 
     * @return CallForwardingSelectiveNumberSelection16 $forwardToNumberSelection
     */
    public function getForwardToNumberSelection()
    {
        return ($this->forwardToNumberSelection)
            ? $this->forwardToNumberSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setForwardToPhoneNumber($forwardToPhoneNumber = null)
    {
        $this->forwardToPhoneNumber = ($forwardToPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $forwardToPhoneNumber
             : new OutgoingDNorSIPURI($forwardToPhoneNumber);
        $this->forwardToPhoneNumber->setElementName('forwardToPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $forwardToPhoneNumber
     */
    public function getForwardToPhoneNumber()
    {
        return ($this->forwardToPhoneNumber)
            ? $this->forwardToPhoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setFromDnCriteria(CriteriaFromDn $fromDnCriteria = null)
    {
        $this->fromDnCriteria = ($fromDnCriteria InstanceOf CriteriaFromDn)
             ? $fromDnCriteria
             : new CriteriaFromDn($fromDnCriteria);
        $this->fromDnCriteria->setElementName('fromDnCriteria');
        return $this;
    }

    /**
     * 
     * @return CriteriaFromDn $fromDnCriteria
     */
    public function getFromDnCriteria()
    {
        return $this->fromDnCriteria;
    }
}
