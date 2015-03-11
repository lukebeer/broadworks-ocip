<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringAlternateCallIndicator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CommunicationBarringCriteriaDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringCriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringCallType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VirtualOnNetCallTypeName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\LocationCriteria;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RoamingCriteria;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a new Communication Barring Criteria.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCommunicationBarringCriteriaAddRequest17 extends ComplexType implements ComplexInterface
{
    public    $name                        = 'SystemCommunicationBarringCriteriaAddRequest17';
    protected $name                        = null;
    protected $description                 = null;
    protected $matchCallType               = null;
    protected $matchAlternateCallIndicator = null;
    protected $matchVirtualOnNetCallType   = null;
    protected $matchPublicNetwork          = null;
    protected $matchPrivateNetwork         = null;
    protected $matchLocalCategory          = null;
    protected $matchNationalCategory       = null;
    protected $matchInterlataCategory      = null;
    protected $matchIntralataCategory      = null;
    protected $matchInternationalCategory  = null;
    protected $matchPrivateCategory        = null;
    protected $matchEmergencyCategory      = null;
    protected $matchOtherCategory          = null;
    protected $matchInterNetwork           = null;
    protected $matchInterHostingNE         = null;
    protected $matchInterAS                = null;
    protected $matchIntraAS                = null;
    protected $matchChargeCalls            = null;
    protected $matchNoChargeCalls          = null;
    protected $matchGroupCalls             = null;
    protected $matchEnterpriseCalls        = null;
    protected $matchNetworkCalls           = null;
    protected $matchNetworkURLCalls        = null;
    protected $matchRepairCalls            = null;
    protected $matchEmergencyCalls         = null;
    protected $matchInternalCalls          = null;
    protected $matchLocation               = null;
    protected $matchRoaming                = null;
    protected $timeSchedule                = null;
    protected $holidaySchedule             = null;

    public function __construct(
         $name,
         $description = null,
         $matchCallType = null,
         $matchAlternateCallIndicator = null,
         $matchVirtualOnNetCallType = null,
         $matchPublicNetwork,
         $matchPrivateNetwork,
         $matchLocalCategory,
         $matchNationalCategory,
         $matchInterlataCategory,
         $matchIntralataCategory,
         $matchInternationalCategory,
         $matchPrivateCategory,
         $matchEmergencyCategory,
         $matchOtherCategory,
         $matchInterNetwork,
         $matchInterHostingNE,
         $matchInterAS,
         $matchIntraAS,
         $matchChargeCalls,
         $matchNoChargeCalls,
         $matchGroupCalls,
         $matchEnterpriseCalls,
         $matchNetworkCalls,
         $matchNetworkURLCalls,
         $matchRepairCalls,
         $matchEmergencyCalls,
         $matchInternalCalls,
         $matchLocation,
         $matchRoaming,
         $timeSchedule = null,
         $holidaySchedule = null
    ) {
        $this->setName($name);
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
     * @return 
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
        if (!$name) return $this;
        $this->name = ($name InstanceOf CommunicationBarringCriteriaName)
             ? $name
             : new CommunicationBarringCriteriaName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringCriteriaName
     */
    public function getName()
    {
        return $this->name->getValue();
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        if (!$description) return $this;
        $this->description = ($description InstanceOf CommunicationBarringCriteriaDescription)
             ? $description
             : new CommunicationBarringCriteriaDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringCriteriaDescription
     */
    public function getDescription()
    {
        return $this->description->getValue();
    }

    /**
     * 
     */
    public function setMatchCallType($matchCallType = null)
    {
        if (!$matchCallType) return $this;
        $this->matchCallType = ($matchCallType InstanceOf CommunicationBarringCallType)
             ? $matchCallType
             : new CommunicationBarringCallType($matchCallType);
        $this->matchCallType->setName('matchCallType');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringCallType
     */
    public function getMatchCallType()
    {
        return $this->matchCallType->getValue();
    }

    /**
     * 
     */
    public function setMatchAlternateCallIndicator($matchAlternateCallIndicator = null)
    {
        if (!$matchAlternateCallIndicator) return $this;
        $this->matchAlternateCallIndicator = ($matchAlternateCallIndicator InstanceOf CommunicationBarringAlternateCallIndicator)
             ? $matchAlternateCallIndicator
             : new CommunicationBarringAlternateCallIndicator($matchAlternateCallIndicator);
        $this->matchAlternateCallIndicator->setName('matchAlternateCallIndicator');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringAlternateCallIndicator
     */
    public function getMatchAlternateCallIndicator()
    {
        return $this->matchAlternateCallIndicator->getValue();
    }

    /**
     * 
     */
    public function setMatchVirtualOnNetCallType($matchVirtualOnNetCallType = null)
    {
        if (!$matchVirtualOnNetCallType) return $this;
        $this->matchVirtualOnNetCallType = ($matchVirtualOnNetCallType InstanceOf VirtualOnNetCallTypeName)
             ? $matchVirtualOnNetCallType
             : new VirtualOnNetCallTypeName($matchVirtualOnNetCallType);
        $this->matchVirtualOnNetCallType->setName('matchVirtualOnNetCallType');
        return $this;
    }

    /**
     * 
     * @return VirtualOnNetCallTypeName
     */
    public function getMatchVirtualOnNetCallType()
    {
        return $this->matchVirtualOnNetCallType->getValue();
    }

    /**
     * 
     */
    public function setMatchPublicNetwork($matchPublicNetwork = null)
    {
        if (!$matchPublicNetwork) return $this;
        $this->matchPublicNetwork = new PrimitiveType($matchPublicNetwork);
        $this->matchPublicNetwork->setName('matchPublicNetwork');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchPublicNetwork()
    {
        return $this->matchPublicNetwork->getValue();
    }

    /**
     * 
     */
    public function setMatchPrivateNetwork($matchPrivateNetwork = null)
    {
        if (!$matchPrivateNetwork) return $this;
        $this->matchPrivateNetwork = new PrimitiveType($matchPrivateNetwork);
        $this->matchPrivateNetwork->setName('matchPrivateNetwork');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchPrivateNetwork()
    {
        return $this->matchPrivateNetwork->getValue();
    }

    /**
     * 
     */
    public function setMatchLocalCategory($matchLocalCategory = null)
    {
        if (!$matchLocalCategory) return $this;
        $this->matchLocalCategory = new PrimitiveType($matchLocalCategory);
        $this->matchLocalCategory->setName('matchLocalCategory');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchLocalCategory()
    {
        return $this->matchLocalCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchNationalCategory($matchNationalCategory = null)
    {
        if (!$matchNationalCategory) return $this;
        $this->matchNationalCategory = new PrimitiveType($matchNationalCategory);
        $this->matchNationalCategory->setName('matchNationalCategory');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchNationalCategory()
    {
        return $this->matchNationalCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchInterlataCategory($matchInterlataCategory = null)
    {
        if (!$matchInterlataCategory) return $this;
        $this->matchInterlataCategory = new PrimitiveType($matchInterlataCategory);
        $this->matchInterlataCategory->setName('matchInterlataCategory');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchInterlataCategory()
    {
        return $this->matchInterlataCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchIntralataCategory($matchIntralataCategory = null)
    {
        if (!$matchIntralataCategory) return $this;
        $this->matchIntralataCategory = new PrimitiveType($matchIntralataCategory);
        $this->matchIntralataCategory->setName('matchIntralataCategory');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchIntralataCategory()
    {
        return $this->matchIntralataCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchInternationalCategory($matchInternationalCategory = null)
    {
        if (!$matchInternationalCategory) return $this;
        $this->matchInternationalCategory = new PrimitiveType($matchInternationalCategory);
        $this->matchInternationalCategory->setName('matchInternationalCategory');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchInternationalCategory()
    {
        return $this->matchInternationalCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchPrivateCategory($matchPrivateCategory = null)
    {
        if (!$matchPrivateCategory) return $this;
        $this->matchPrivateCategory = new PrimitiveType($matchPrivateCategory);
        $this->matchPrivateCategory->setName('matchPrivateCategory');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchPrivateCategory()
    {
        return $this->matchPrivateCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchEmergencyCategory($matchEmergencyCategory = null)
    {
        if (!$matchEmergencyCategory) return $this;
        $this->matchEmergencyCategory = new PrimitiveType($matchEmergencyCategory);
        $this->matchEmergencyCategory->setName('matchEmergencyCategory');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchEmergencyCategory()
    {
        return $this->matchEmergencyCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchOtherCategory($matchOtherCategory = null)
    {
        if (!$matchOtherCategory) return $this;
        $this->matchOtherCategory = new PrimitiveType($matchOtherCategory);
        $this->matchOtherCategory->setName('matchOtherCategory');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchOtherCategory()
    {
        return $this->matchOtherCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchInterNetwork($matchInterNetwork = null)
    {
        if (!$matchInterNetwork) return $this;
        $this->matchInterNetwork = new PrimitiveType($matchInterNetwork);
        $this->matchInterNetwork->setName('matchInterNetwork');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchInterNetwork()
    {
        return $this->matchInterNetwork->getValue();
    }

    /**
     * 
     */
    public function setMatchInterHostingNE($matchInterHostingNE = null)
    {
        if (!$matchInterHostingNE) return $this;
        $this->matchInterHostingNE = new PrimitiveType($matchInterHostingNE);
        $this->matchInterHostingNE->setName('matchInterHostingNE');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchInterHostingNE()
    {
        return $this->matchInterHostingNE->getValue();
    }

    /**
     * 
     */
    public function setMatchInterAS($matchInterAS = null)
    {
        if (!$matchInterAS) return $this;
        $this->matchInterAS = new PrimitiveType($matchInterAS);
        $this->matchInterAS->setName('matchInterAS');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchInterAS()
    {
        return $this->matchInterAS->getValue();
    }

    /**
     * 
     */
    public function setMatchIntraAS($matchIntraAS = null)
    {
        if (!$matchIntraAS) return $this;
        $this->matchIntraAS = new PrimitiveType($matchIntraAS);
        $this->matchIntraAS->setName('matchIntraAS');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchIntraAS()
    {
        return $this->matchIntraAS->getValue();
    }

    /**
     * 
     */
    public function setMatchChargeCalls($matchChargeCalls = null)
    {
        if (!$matchChargeCalls) return $this;
        $this->matchChargeCalls = new PrimitiveType($matchChargeCalls);
        $this->matchChargeCalls->setName('matchChargeCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchChargeCalls()
    {
        return $this->matchChargeCalls->getValue();
    }

    /**
     * 
     */
    public function setMatchNoChargeCalls($matchNoChargeCalls = null)
    {
        if (!$matchNoChargeCalls) return $this;
        $this->matchNoChargeCalls = new PrimitiveType($matchNoChargeCalls);
        $this->matchNoChargeCalls->setName('matchNoChargeCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchNoChargeCalls()
    {
        return $this->matchNoChargeCalls->getValue();
    }

    /**
     * 
     */
    public function setMatchGroupCalls($matchGroupCalls = null)
    {
        if (!$matchGroupCalls) return $this;
        $this->matchGroupCalls = new PrimitiveType($matchGroupCalls);
        $this->matchGroupCalls->setName('matchGroupCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchGroupCalls()
    {
        return $this->matchGroupCalls->getValue();
    }

    /**
     * 
     */
    public function setMatchEnterpriseCalls($matchEnterpriseCalls = null)
    {
        if (!$matchEnterpriseCalls) return $this;
        $this->matchEnterpriseCalls = new PrimitiveType($matchEnterpriseCalls);
        $this->matchEnterpriseCalls->setName('matchEnterpriseCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchEnterpriseCalls()
    {
        return $this->matchEnterpriseCalls->getValue();
    }

    /**
     * 
     */
    public function setMatchNetworkCalls($matchNetworkCalls = null)
    {
        if (!$matchNetworkCalls) return $this;
        $this->matchNetworkCalls = new PrimitiveType($matchNetworkCalls);
        $this->matchNetworkCalls->setName('matchNetworkCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchNetworkCalls()
    {
        return $this->matchNetworkCalls->getValue();
    }

    /**
     * 
     */
    public function setMatchNetworkURLCalls($matchNetworkURLCalls = null)
    {
        if (!$matchNetworkURLCalls) return $this;
        $this->matchNetworkURLCalls = new PrimitiveType($matchNetworkURLCalls);
        $this->matchNetworkURLCalls->setName('matchNetworkURLCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchNetworkURLCalls()
    {
        return $this->matchNetworkURLCalls->getValue();
    }

    /**
     * 
     */
    public function setMatchRepairCalls($matchRepairCalls = null)
    {
        if (!$matchRepairCalls) return $this;
        $this->matchRepairCalls = new PrimitiveType($matchRepairCalls);
        $this->matchRepairCalls->setName('matchRepairCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchRepairCalls()
    {
        return $this->matchRepairCalls->getValue();
    }

    /**
     * 
     */
    public function setMatchEmergencyCalls($matchEmergencyCalls = null)
    {
        if (!$matchEmergencyCalls) return $this;
        $this->matchEmergencyCalls = new PrimitiveType($matchEmergencyCalls);
        $this->matchEmergencyCalls->setName('matchEmergencyCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchEmergencyCalls()
    {
        return $this->matchEmergencyCalls->getValue();
    }

    /**
     * 
     */
    public function setMatchInternalCalls($matchInternalCalls = null)
    {
        if (!$matchInternalCalls) return $this;
        $this->matchInternalCalls = new PrimitiveType($matchInternalCalls);
        $this->matchInternalCalls->setName('matchInternalCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMatchInternalCalls()
    {
        return $this->matchInternalCalls->getValue();
    }

    /**
     * 
     */
    public function setMatchLocation($matchLocation = null)
    {
        if (!$matchLocation) return $this;
        $this->matchLocation = ($matchLocation InstanceOf LocationCriteria)
             ? $matchLocation
             : new LocationCriteria($matchLocation);
        $this->matchLocation->setName('matchLocation');
        return $this;
    }

    /**
     * 
     * @return LocationCriteria
     */
    public function getMatchLocation()
    {
        return $this->matchLocation->getValue();
    }

    /**
     * 
     */
    public function setMatchRoaming($matchRoaming = null)
    {
        if (!$matchRoaming) return $this;
        $this->matchRoaming = ($matchRoaming InstanceOf RoamingCriteria)
             ? $matchRoaming
             : new RoamingCriteria($matchRoaming);
        $this->matchRoaming->setName('matchRoaming');
        return $this;
    }

    /**
     * 
     * @return RoamingCriteria
     */
    public function getMatchRoaming()
    {
        return $this->matchRoaming->getValue();
    }

    /**
     * 
     */
    public function setTimeSchedule($timeSchedule = null)
    {
        if (!$timeSchedule) return $this;
        $this->timeSchedule = ($timeSchedule InstanceOf ScheduleName)
             ? $timeSchedule
             : new ScheduleName($timeSchedule);
        $this->timeSchedule->setName('timeSchedule');
        return $this;
    }

    /**
     * 
     * @return ScheduleName
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule->getValue();
    }

    /**
     * 
     */
    public function setHolidaySchedule($holidaySchedule = null)
    {
        if (!$holidaySchedule) return $this;
        $this->holidaySchedule = ($holidaySchedule InstanceOf ScheduleName)
             ? $holidaySchedule
             : new ScheduleName($holidaySchedule);
        $this->holidaySchedule->setName('holidaySchedule');
        return $this;
    }

    /**
     * 
     * @return ScheduleName
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule->getValue();
    }
}
