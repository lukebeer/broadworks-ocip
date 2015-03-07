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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RoamingCriteria;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify an existing Communication Barring Criteria.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCommunicationBarringCriteriaModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                         = __CLASS__;
    protected $name                         = null;
    protected $newName                      = null;
    protected $description                  = null;
    protected $matchCallType                = null;
    protected $matchAlternateCallIndicator  = null;
    protected $matchVirtualOnNetCallType    = null;
    protected $matchPublicNetwork           = null;
    protected $matchPrivateNetwork          = null;
    protected $matchLocalCategory           = null;
    protected $matchNationalCategory        = null;
    protected $matchInterlataCategory       = null;
    protected $matchIntralataCategory       = null;
    protected $matchInternationalCategory   = null;
    protected $matchPrivateCategory         = null;
    protected $matchEmergencyCategory       = null;
    protected $matchOtherCategory           = null;
    protected $matchInterNetwork            = null;
    protected $matchInterHostingNE          = null;
    protected $matchInterAS                 = null;
    protected $matchIntraAS                 = null;
    protected $matchChargeCalls             = null;
    protected $matchNoChargeCalls           = null;
    protected $matchGroupCalls              = null;
    protected $matchEnterpriseCalls         = null;
    protected $matchNetworkCalls            = null;
    protected $matchNetworkURLCalls         = null;
    protected $matchRepairCalls             = null;
    protected $matchEmergencyCalls          = null;
    protected $matchInternalCalls           = null;
    protected $matchLocation                = null;
    protected $matchRoaming                 = null;
    protected $timeSchedule                 = null;
    protected $holidaySchedule              = null;

    public function __construct(
         $name,
         $newName = null,
         $description = null,
         ReplacementCommunicationBarringCallTypeList $matchCallType = null,
         ReplacementCommunicationBarringAlternateCallIndicatorList $matchAlternateCallIndicator = null,
         ReplacementVirtualOnNetCallTypeNameList $matchVirtualOnNetCallType = null,
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

    public function setName($name = null)
    {
        $this->name = ($name InstanceOf CommunicationBarringCriteriaName)
             ? $name
             : new CommunicationBarringCriteriaName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }

    public function setNewName($newName = null)
    {
        $this->newName = ($newName InstanceOf CommunicationBarringCriteriaName)
             ? $newName
             : new CommunicationBarringCriteriaName($newName);
    }

    public function getNewName()
    {
        return (!$this->newName) ?: $this->newName->value();
    }

    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf CommunicationBarringCriteriaDescription)
             ? $description
             : new CommunicationBarringCriteriaDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setMatchCallType(ReplacementCommunicationBarringCallTypeList $matchCallType = null)
    {
    }

    public function getMatchCallType()
    {
        return (!$this->matchCallType) ?: $this->matchCallType->value();
    }

    public function setMatchAlternateCallIndicator(ReplacementCommunicationBarringAlternateCallIndicatorList $matchAlternateCallIndicator = null)
    {
    }

    public function getMatchAlternateCallIndicator()
    {
        return (!$this->matchAlternateCallIndicator) ?: $this->matchAlternateCallIndicator->value();
    }

    public function setMatchVirtualOnNetCallType(ReplacementVirtualOnNetCallTypeNameList $matchVirtualOnNetCallType = null)
    {
    }

    public function getMatchVirtualOnNetCallType()
    {
        return (!$this->matchVirtualOnNetCallType) ?: $this->matchVirtualOnNetCallType->value();
    }

    public function setMatchPublicNetwork(xs:boolean $matchPublicNetwork = null)
    {
    }

    public function getMatchPublicNetwork()
    {
        return (!$this->matchPublicNetwork) ?: $this->matchPublicNetwork->value();
    }

    public function setMatchPrivateNetwork(xs:boolean $matchPrivateNetwork = null)
    {
    }

    public function getMatchPrivateNetwork()
    {
        return (!$this->matchPrivateNetwork) ?: $this->matchPrivateNetwork->value();
    }

    public function setMatchLocalCategory(xs:boolean $matchLocalCategory = null)
    {
    }

    public function getMatchLocalCategory()
    {
        return (!$this->matchLocalCategory) ?: $this->matchLocalCategory->value();
    }

    public function setMatchNationalCategory(xs:boolean $matchNationalCategory = null)
    {
    }

    public function getMatchNationalCategory()
    {
        return (!$this->matchNationalCategory) ?: $this->matchNationalCategory->value();
    }

    public function setMatchInterlataCategory(xs:boolean $matchInterlataCategory = null)
    {
    }

    public function getMatchInterlataCategory()
    {
        return (!$this->matchInterlataCategory) ?: $this->matchInterlataCategory->value();
    }

    public function setMatchIntralataCategory(xs:boolean $matchIntralataCategory = null)
    {
    }

    public function getMatchIntralataCategory()
    {
        return (!$this->matchIntralataCategory) ?: $this->matchIntralataCategory->value();
    }

    public function setMatchInternationalCategory(xs:boolean $matchInternationalCategory = null)
    {
    }

    public function getMatchInternationalCategory()
    {
        return (!$this->matchInternationalCategory) ?: $this->matchInternationalCategory->value();
    }

    public function setMatchPrivateCategory(xs:boolean $matchPrivateCategory = null)
    {
    }

    public function getMatchPrivateCategory()
    {
        return (!$this->matchPrivateCategory) ?: $this->matchPrivateCategory->value();
    }

    public function setMatchEmergencyCategory(xs:boolean $matchEmergencyCategory = null)
    {
    }

    public function getMatchEmergencyCategory()
    {
        return (!$this->matchEmergencyCategory) ?: $this->matchEmergencyCategory->value();
    }

    public function setMatchOtherCategory(xs:boolean $matchOtherCategory = null)
    {
    }

    public function getMatchOtherCategory()
    {
        return (!$this->matchOtherCategory) ?: $this->matchOtherCategory->value();
    }

    public function setMatchInterNetwork(xs:boolean $matchInterNetwork = null)
    {
    }

    public function getMatchInterNetwork()
    {
        return (!$this->matchInterNetwork) ?: $this->matchInterNetwork->value();
    }

    public function setMatchInterHostingNE(xs:boolean $matchInterHostingNE = null)
    {
    }

    public function getMatchInterHostingNE()
    {
        return (!$this->matchInterHostingNE) ?: $this->matchInterHostingNE->value();
    }

    public function setMatchInterAS(xs:boolean $matchInterAS = null)
    {
    }

    public function getMatchInterAS()
    {
        return (!$this->matchInterAS) ?: $this->matchInterAS->value();
    }

    public function setMatchIntraAS(xs:boolean $matchIntraAS = null)
    {
    }

    public function getMatchIntraAS()
    {
        return (!$this->matchIntraAS) ?: $this->matchIntraAS->value();
    }

    public function setMatchChargeCalls(xs:boolean $matchChargeCalls = null)
    {
    }

    public function getMatchChargeCalls()
    {
        return (!$this->matchChargeCalls) ?: $this->matchChargeCalls->value();
    }

    public function setMatchNoChargeCalls(xs:boolean $matchNoChargeCalls = null)
    {
    }

    public function getMatchNoChargeCalls()
    {
        return (!$this->matchNoChargeCalls) ?: $this->matchNoChargeCalls->value();
    }

    public function setMatchGroupCalls(xs:boolean $matchGroupCalls = null)
    {
    }

    public function getMatchGroupCalls()
    {
        return (!$this->matchGroupCalls) ?: $this->matchGroupCalls->value();
    }

    public function setMatchEnterpriseCalls(xs:boolean $matchEnterpriseCalls = null)
    {
    }

    public function getMatchEnterpriseCalls()
    {
        return (!$this->matchEnterpriseCalls) ?: $this->matchEnterpriseCalls->value();
    }

    public function setMatchNetworkCalls(xs:boolean $matchNetworkCalls = null)
    {
    }

    public function getMatchNetworkCalls()
    {
        return (!$this->matchNetworkCalls) ?: $this->matchNetworkCalls->value();
    }

    public function setMatchNetworkURLCalls(xs:boolean $matchNetworkURLCalls = null)
    {
    }

    public function getMatchNetworkURLCalls()
    {
        return (!$this->matchNetworkURLCalls) ?: $this->matchNetworkURLCalls->value();
    }

    public function setMatchRepairCalls(xs:boolean $matchRepairCalls = null)
    {
    }

    public function getMatchRepairCalls()
    {
        return (!$this->matchRepairCalls) ?: $this->matchRepairCalls->value();
    }

    public function setMatchEmergencyCalls(xs:boolean $matchEmergencyCalls = null)
    {
    }

    public function getMatchEmergencyCalls()
    {
        return (!$this->matchEmergencyCalls) ?: $this->matchEmergencyCalls->value();
    }

    public function setMatchInternalCalls(xs:boolean $matchInternalCalls = null)
    {
    }

    public function getMatchInternalCalls()
    {
        return (!$this->matchInternalCalls) ?: $this->matchInternalCalls->value();
    }

    public function setMatchLocation($matchLocation = null)
    {
        $this->matchLocation = ($matchLocation InstanceOf LocationCriteria)
             ? $matchLocation
             : new LocationCriteria($matchLocation);
    }

    public function getMatchLocation()
    {
        return (!$this->matchLocation) ?: $this->matchLocation->value();
    }

    public function setMatchRoaming($matchRoaming = null)
    {
        $this->matchRoaming = ($matchRoaming InstanceOf RoamingCriteria)
             ? $matchRoaming
             : new RoamingCriteria($matchRoaming);
    }

    public function getMatchRoaming()
    {
        return (!$this->matchRoaming) ?: $this->matchRoaming->value();
    }

    public function setTimeSchedule($timeSchedule = null)
    {
        $this->timeSchedule = ($timeSchedule InstanceOf ScheduleName)
             ? $timeSchedule
             : new ScheduleName($timeSchedule);
    }

    public function getTimeSchedule()
    {
        return (!$this->timeSchedule) ?: $this->timeSchedule->value();
    }

    public function setHolidaySchedule($holidaySchedule = null)
    {
        $this->holidaySchedule = ($holidaySchedule InstanceOf ScheduleName)
             ? $holidaySchedule
             : new ScheduleName($holidaySchedule);
    }

    public function getHolidaySchedule()
    {
        return (!$this->holidaySchedule) ?: $this->holidaySchedule->value();
    }
}
