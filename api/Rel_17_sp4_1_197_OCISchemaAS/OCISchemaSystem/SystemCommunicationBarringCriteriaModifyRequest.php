<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementCommunicationBarringAlternateCallIndicatorList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementCommunicationBarringCallTypeList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementVirtualOnNetCallTypeNameList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CommunicationBarringCriteriaDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringCriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\LocationCriteria;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RoamingCriteria;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify an existing Communication Barring Criteria.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCommunicationBarringCriteriaModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCommunicationBarringCriteriaModifyRequest';
    protected $name;
    protected $newName;
    protected $description;
    protected $matchCallType;
    protected $matchAlternateCallIndicator;
    protected $matchVirtualOnNetCallType;
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
    protected $matchLocation;
    protected $matchRoaming;
    protected $timeSchedule;
    protected $holidaySchedule;

    public function __construct(
         $name = '',
         $newName = null,
         $description = null,
         $matchCallType = null,
         $matchAlternateCallIndicator = null,
         $matchVirtualOnNetCallType = null,
         $matchPublicNetwork = null,
         $matchPrivateNetwork = null,
         $matchLocalCategory = null,
         $matchNationalCategory = null,
         $matchInterlataCategory = null,
         $matchIntralataCategory = null,
         $matchInternationalCategory = null,
         $matchPrivateCategory = null,
         $matchEmergencyCategory = null,
         $matchOtherCategory = null,
         $matchInterNetwork = null,
         $matchInterHostingNE = null,
         $matchInterAS = null,
         $matchIntraAS = null,
         $matchChargeCalls = null,
         $matchNoChargeCalls = null,
         $matchGroupCalls = null,
         $matchEnterpriseCalls = null,
         $matchNetworkCalls = null,
         $matchNetworkURLCalls = null,
         $matchRepairCalls = null,
         $matchEmergencyCalls = null,
         $matchInternalCalls = null,
         $matchLocation = null,
         $matchRoaming = null,
         $timeSchedule = null,
         $holidaySchedule = null
    ) {
        $this->setName($name);
        $this->setNewName($newName);
        $this->setDescription($description);
        $this->setMatchCallType($matchCallType);
        $this->setMatchAlternateCallIndicator($matchAlternateCallIndicator);
        $this->setMatchVirtualOnNetCallType($matchVirtualOnNetCallType);
        $this->setMatchPublicNetwork($matchPublicNetwork);
        $this->setMatchPrivateNetwork($matchPrivateNetwork);
        $this->setMatchLocalCategory($matchLocalCategory);
        $this->setMatchNationalCategory($matchNationalCategory);
        $this->setMatchInterlataCategory($matchInterlataCategory);
        $this->setMatchIntralataCategory($matchIntralataCategory);
        $this->setMatchInternationalCategory($matchInternationalCategory);
        $this->setMatchPrivateCategory($matchPrivateCategory);
        $this->setMatchEmergencyCategory($matchEmergencyCategory);
        $this->setMatchOtherCategory($matchOtherCategory);
        $this->setMatchInterNetwork($matchInterNetwork);
        $this->setMatchInterHostingNE($matchInterHostingNE);
        $this->setMatchInterAS($matchInterAS);
        $this->setMatchIntraAS($matchIntraAS);
        $this->setMatchChargeCalls($matchChargeCalls);
        $this->setMatchNoChargeCalls($matchNoChargeCalls);
        $this->setMatchGroupCalls($matchGroupCalls);
        $this->setMatchEnterpriseCalls($matchEnterpriseCalls);
        $this->setMatchNetworkCalls($matchNetworkCalls);
        $this->setMatchNetworkURLCalls($matchNetworkURLCalls);
        $this->setMatchRepairCalls($matchRepairCalls);
        $this->setMatchEmergencyCalls($matchEmergencyCalls);
        $this->setMatchInternalCalls($matchInternalCalls);
        $this->setMatchLocation($matchLocation);
        $this->setMatchRoaming($matchRoaming);
        $this->setTimeSchedule($timeSchedule);
        $this->setHolidaySchedule($holidaySchedule);
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
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf CommunicationBarringCriteriaName)
             ? $name
             : new CommunicationBarringCriteriaName($name);
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringCriteriaName $name
     */
    public function getName()
    {
        return ($this->name)
            ? $this->name->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNewName($newName = null)
    {
        $this->newName = ($newName InstanceOf CommunicationBarringCriteriaName)
             ? $newName
             : new CommunicationBarringCriteriaName($newName);
        $this->newName->setElementName('newName');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringCriteriaName $newName
     */
    public function getNewName()
    {
        return ($this->newName)
            ? $this->newName->getElementValue()
            : null;
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
    public function setMatchCallType(ReplacementCommunicationBarringCallTypeList $matchCallType = null)
    {
        $this->matchCallType = ($matchCallType InstanceOf ReplacementCommunicationBarringCallTypeList)
             ? $matchCallType
             : new ReplacementCommunicationBarringCallTypeList($matchCallType);
        $this->matchCallType->setElementName('matchCallType');
        return $this;
    }

    /**
     * 
     * @return ReplacementCommunicationBarringCallTypeList $matchCallType
     */
    public function getMatchCallType()
    {
        return $this->matchCallType;
    }

    /**
     * 
     */
    public function setMatchAlternateCallIndicator(ReplacementCommunicationBarringAlternateCallIndicatorList $matchAlternateCallIndicator = null)
    {
        $this->matchAlternateCallIndicator = ($matchAlternateCallIndicator InstanceOf ReplacementCommunicationBarringAlternateCallIndicatorList)
             ? $matchAlternateCallIndicator
             : new ReplacementCommunicationBarringAlternateCallIndicatorList($matchAlternateCallIndicator);
        $this->matchAlternateCallIndicator->setElementName('matchAlternateCallIndicator');
        return $this;
    }

    /**
     * 
     * @return ReplacementCommunicationBarringAlternateCallIndicatorList $matchAlternateCallIndicator
     */
    public function getMatchAlternateCallIndicator()
    {
        return $this->matchAlternateCallIndicator;
    }

    /**
     * 
     */
    public function setMatchVirtualOnNetCallType(ReplacementVirtualOnNetCallTypeNameList $matchVirtualOnNetCallType = null)
    {
        $this->matchVirtualOnNetCallType = ($matchVirtualOnNetCallType InstanceOf ReplacementVirtualOnNetCallTypeNameList)
             ? $matchVirtualOnNetCallType
             : new ReplacementVirtualOnNetCallTypeNameList($matchVirtualOnNetCallType);
        $this->matchVirtualOnNetCallType->setElementName('matchVirtualOnNetCallType');
        return $this;
    }

    /**
     * 
     * @return ReplacementVirtualOnNetCallTypeNameList $matchVirtualOnNetCallType
     */
    public function getMatchVirtualOnNetCallType()
    {
        return $this->matchVirtualOnNetCallType;
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
    public function setMatchLocation($matchLocation = null)
    {
        $this->matchLocation = ($matchLocation InstanceOf LocationCriteria)
             ? $matchLocation
             : new LocationCriteria($matchLocation);
        $this->matchLocation->setElementName('matchLocation');
        return $this;
    }

    /**
     * 
     * @return LocationCriteria $matchLocation
     */
    public function getMatchLocation()
    {
        return ($this->matchLocation)
            ? $this->matchLocation->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMatchRoaming($matchRoaming = null)
    {
        $this->matchRoaming = ($matchRoaming InstanceOf RoamingCriteria)
             ? $matchRoaming
             : new RoamingCriteria($matchRoaming);
        $this->matchRoaming->setElementName('matchRoaming');
        return $this;
    }

    /**
     * 
     * @return RoamingCriteria $matchRoaming
     */
    public function getMatchRoaming()
    {
        return ($this->matchRoaming)
            ? $this->matchRoaming->getElementValue()
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
