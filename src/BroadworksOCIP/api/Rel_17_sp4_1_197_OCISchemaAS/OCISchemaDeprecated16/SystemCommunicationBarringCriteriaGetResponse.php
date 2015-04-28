<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringAlternateCallIndicator;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CommunicationBarringCriteriaDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringCallType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the SystemCommunicationBarringCriteriaGetRequest.
 *         The response contains the Communication Barring Criteria information.
 * 
 *         Replaced by: SystemCommunicationBarringCriteriaGetResponse17
 */
class SystemCommunicationBarringCriteriaGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCommunicationBarringCriteriaGetResponse';
    protected $description;
    protected $matchCallType;
    protected $matchAlternateCallIndicator;
    protected $matchPublicNetwork;
    protected $matchPrivateNetwork;
    protected $matchLocalCategory;
    protected $matchNationalCategory;
    protected $matchInterlataCategory;
    protected $matchIntralataCategory;
    protected $matchInternationalCategory;
    protected $matchPrivateCategory;
    protected $matchEmergencyCategory;
    protected $matchOtherCategory;
    protected $matchInterNetwork;
    protected $matchInterHostingNE;
    protected $matchInterAS;
    protected $matchIntraAS;
    protected $matchChargeCalls;
    protected $matchNoChargeCalls;
    protected $matchGroupCalls;
    protected $matchEnterpriseCalls;
    protected $matchNetworkCalls;
    protected $matchNetworkURLCalls;
    protected $matchRepairCalls;
    protected $matchEmergencyCalls;
    protected $matchInternalCalls;
    protected $timeSchedule;
    protected $holidaySchedule;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemCommunicationBarringCriteriaGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf CommunicationBarringCriteriaDescription)
             ? $description
             : new CommunicationBarringCriteriaDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringCriteriaDescription $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMatchCallType($matchCallType = null)
    {
        $this->matchCallType = ($matchCallType InstanceOf CommunicationBarringCallType)
             ? $matchCallType
             : new CommunicationBarringCallType($matchCallType);
        $this->matchCallType->setElementName('matchCallType');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringCallType $matchCallType
     */
    public function getMatchCallType()
    {
        return ($this->matchCallType)
            ? $this->matchCallType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMatchAlternateCallIndicator($matchAlternateCallIndicator = null)
    {
        $this->matchAlternateCallIndicator = ($matchAlternateCallIndicator InstanceOf CommunicationBarringAlternateCallIndicator)
             ? $matchAlternateCallIndicator
             : new CommunicationBarringAlternateCallIndicator($matchAlternateCallIndicator);
        $this->matchAlternateCallIndicator->setElementName('matchAlternateCallIndicator');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringAlternateCallIndicator $matchAlternateCallIndicator
     */
    public function getMatchAlternateCallIndicator()
    {
        return ($this->matchAlternateCallIndicator)
            ? $this->matchAlternateCallIndicator->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMatchPublicNetwork($matchPublicNetwork = null)
    {
        $this->matchPublicNetwork = new PrimitiveType($matchPublicNetwork);
        $this->matchPublicNetwork->setElementName('matchPublicNetwork');
        return $this;
    }

    /**
     * 
     * @return boolean $matchPublicNetwork
     */
    public function getMatchPublicNetwork()
    {
        return ($this->matchPublicNetwork)
            ? $this->matchPublicNetwork->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMatchPrivateNetwork($matchPrivateNetwork = null)
    {
        $this->matchPrivateNetwork = new PrimitiveType($matchPrivateNetwork);
        $this->matchPrivateNetwork->setElementName('matchPrivateNetwork');
        return $this;
    }

    /**
     * 
     * @return boolean $matchPrivateNetwork
     */
    public function getMatchPrivateNetwork()
    {
        return ($this->matchPrivateNetwork)
            ? $this->matchPrivateNetwork->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMatchLocalCategory($matchLocalCategory = null)
    {
        $this->matchLocalCategory = new PrimitiveType($matchLocalCategory);
        $this->matchLocalCategory->setElementName('matchLocalCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $matchLocalCategory
     */
    public function getMatchLocalCategory()
    {
        return ($this->matchLocalCategory)
            ? $this->matchLocalCategory->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMatchNationalCategory($matchNationalCategory = null)
    {
        $this->matchNationalCategory = new PrimitiveType($matchNationalCategory);
        $this->matchNationalCategory->setElementName('matchNationalCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $matchNationalCategory
     */
    public function getMatchNationalCategory()
    {
        return ($this->matchNationalCategory)
            ? $this->matchNationalCategory->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMatchInterlataCategory($matchInterlataCategory = null)
    {
        $this->matchInterlataCategory = new PrimitiveType($matchInterlataCategory);
        $this->matchInterlataCategory->setElementName('matchInterlataCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $matchInterlataCategory
     */
    public function getMatchInterlataCategory()
    {
        return ($this->matchInterlataCategory)
            ? $this->matchInterlataCategory->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMatchIntralataCategory($matchIntralataCategory = null)
    {
        $this->matchIntralataCategory = new PrimitiveType($matchIntralataCategory);
        $this->matchIntralataCategory->setElementName('matchIntralataCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $matchIntralataCategory
     */
    public function getMatchIntralataCategory()
    {
        return ($this->matchIntralataCategory)
            ? $this->matchIntralataCategory->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMatchInternationalCategory($matchInternationalCategory = null)
    {
        $this->matchInternationalCategory = new PrimitiveType($matchInternationalCategory);
        $this->matchInternationalCategory->setElementName('matchInternationalCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $matchInternationalCategory
     */
    public function getMatchInternationalCategory()
    {
        return ($this->matchInternationalCategory)
            ? $this->matchInternationalCategory->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMatchPrivateCategory($matchPrivateCategory = null)
    {
        $this->matchPrivateCategory = new PrimitiveType($matchPrivateCategory);
        $this->matchPrivateCategory->setElementName('matchPrivateCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $matchPrivateCategory
     */
    public function getMatchPrivateCategory()
    {
        return ($this->matchPrivateCategory)
            ? $this->matchPrivateCategory->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMatchEmergencyCategory($matchEmergencyCategory = null)
    {
        $this->matchEmergencyCategory = new PrimitiveType($matchEmergencyCategory);
        $this->matchEmergencyCategory->setElementName('matchEmergencyCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $matchEmergencyCategory
     */
    public function getMatchEmergencyCategory()
    {
        return ($this->matchEmergencyCategory)
            ? $this->matchEmergencyCategory->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMatchOtherCategory($matchOtherCategory = null)
    {
        $this->matchOtherCategory = new PrimitiveType($matchOtherCategory);
        $this->matchOtherCategory->setElementName('matchOtherCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $matchOtherCategory
     */
    public function getMatchOtherCategory()
    {
        return ($this->matchOtherCategory)
            ? $this->matchOtherCategory->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMatchInterNetwork($matchInterNetwork = null)
    {
        $this->matchInterNetwork = new PrimitiveType($matchInterNetwork);
        $this->matchInterNetwork->setElementName('matchInterNetwork');
        return $this;
    }

    /**
     * 
     * @return boolean $matchInterNetwork
     */
    public function getMatchInterNetwork()
    {
        return ($this->matchInterNetwork)
            ? $this->matchInterNetwork->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMatchInterHostingNE($matchInterHostingNE = null)
    {
        $this->matchInterHostingNE = new PrimitiveType($matchInterHostingNE);
        $this->matchInterHostingNE->setElementName('matchInterHostingNE');
        return $this;
    }

    /**
     * 
     * @return boolean $matchInterHostingNE
     */
    public function getMatchInterHostingNE()
    {
        return ($this->matchInterHostingNE)
            ? $this->matchInterHostingNE->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMatchInterAS($matchInterAS = null)
    {
        $this->matchInterAS = new PrimitiveType($matchInterAS);
        $this->matchInterAS->setElementName('matchInterAS');
        return $this;
    }

    /**
     * 
     * @return boolean $matchInterAS
     */
    public function getMatchInterAS()
    {
        return ($this->matchInterAS)
            ? $this->matchInterAS->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMatchIntraAS($matchIntraAS = null)
    {
        $this->matchIntraAS = new PrimitiveType($matchIntraAS);
        $this->matchIntraAS->setElementName('matchIntraAS');
        return $this;
    }

    /**
     * 
     * @return boolean $matchIntraAS
     */
    public function getMatchIntraAS()
    {
        return ($this->matchIntraAS)
            ? $this->matchIntraAS->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMatchChargeCalls($matchChargeCalls = null)
    {
        $this->matchChargeCalls = new PrimitiveType($matchChargeCalls);
        $this->matchChargeCalls->setElementName('matchChargeCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $matchChargeCalls
     */
    public function getMatchChargeCalls()
    {
        return ($this->matchChargeCalls)
            ? $this->matchChargeCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMatchNoChargeCalls($matchNoChargeCalls = null)
    {
        $this->matchNoChargeCalls = new PrimitiveType($matchNoChargeCalls);
        $this->matchNoChargeCalls->setElementName('matchNoChargeCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $matchNoChargeCalls
     */
    public function getMatchNoChargeCalls()
    {
        return ($this->matchNoChargeCalls)
            ? $this->matchNoChargeCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMatchGroupCalls($matchGroupCalls = null)
    {
        $this->matchGroupCalls = new PrimitiveType($matchGroupCalls);
        $this->matchGroupCalls->setElementName('matchGroupCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $matchGroupCalls
     */
    public function getMatchGroupCalls()
    {
        return ($this->matchGroupCalls)
            ? $this->matchGroupCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMatchEnterpriseCalls($matchEnterpriseCalls = null)
    {
        $this->matchEnterpriseCalls = new PrimitiveType($matchEnterpriseCalls);
        $this->matchEnterpriseCalls->setElementName('matchEnterpriseCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $matchEnterpriseCalls
     */
    public function getMatchEnterpriseCalls()
    {
        return ($this->matchEnterpriseCalls)
            ? $this->matchEnterpriseCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMatchNetworkCalls($matchNetworkCalls = null)
    {
        $this->matchNetworkCalls = new PrimitiveType($matchNetworkCalls);
        $this->matchNetworkCalls->setElementName('matchNetworkCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $matchNetworkCalls
     */
    public function getMatchNetworkCalls()
    {
        return ($this->matchNetworkCalls)
            ? $this->matchNetworkCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMatchNetworkURLCalls($matchNetworkURLCalls = null)
    {
        $this->matchNetworkURLCalls = new PrimitiveType($matchNetworkURLCalls);
        $this->matchNetworkURLCalls->setElementName('matchNetworkURLCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $matchNetworkURLCalls
     */
    public function getMatchNetworkURLCalls()
    {
        return ($this->matchNetworkURLCalls)
            ? $this->matchNetworkURLCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMatchRepairCalls($matchRepairCalls = null)
    {
        $this->matchRepairCalls = new PrimitiveType($matchRepairCalls);
        $this->matchRepairCalls->setElementName('matchRepairCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $matchRepairCalls
     */
    public function getMatchRepairCalls()
    {
        return ($this->matchRepairCalls)
            ? $this->matchRepairCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMatchEmergencyCalls($matchEmergencyCalls = null)
    {
        $this->matchEmergencyCalls = new PrimitiveType($matchEmergencyCalls);
        $this->matchEmergencyCalls->setElementName('matchEmergencyCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $matchEmergencyCalls
     */
    public function getMatchEmergencyCalls()
    {
        return ($this->matchEmergencyCalls)
            ? $this->matchEmergencyCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMatchInternalCalls($matchInternalCalls = null)
    {
        $this->matchInternalCalls = new PrimitiveType($matchInternalCalls);
        $this->matchInternalCalls->setElementName('matchInternalCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $matchInternalCalls
     */
    public function getMatchInternalCalls()
    {
        return ($this->matchInternalCalls)
            ? $this->matchInternalCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTimeSchedule($timeSchedule = null)
    {
        $this->timeSchedule = ($timeSchedule InstanceOf ScheduleName)
             ? $timeSchedule
             : new ScheduleName($timeSchedule);
        $this->timeSchedule->setElementName('timeSchedule');
        return $this;
    }

    /**
     * 
     * @return ScheduleName $timeSchedule
     */
    public function getTimeSchedule()
    {
        return ($this->timeSchedule)
            ? $this->timeSchedule->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHolidaySchedule($holidaySchedule = null)
    {
        $this->holidaySchedule = ($holidaySchedule InstanceOf ScheduleName)
             ? $holidaySchedule
             : new ScheduleName($holidaySchedule);
        $this->holidaySchedule->setElementName('holidaySchedule');
        return $this;
    }

    /**
     * 
     * @return ScheduleName $holidaySchedule
     */
    public function getHolidaySchedule()
    {
        return ($this->holidaySchedule)
            ? $this->holidaySchedule->getElementValue()
            : null;
    }
}
