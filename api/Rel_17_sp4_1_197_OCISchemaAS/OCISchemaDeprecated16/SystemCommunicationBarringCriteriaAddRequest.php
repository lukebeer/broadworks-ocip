<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringCriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringCriteriaDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringCallType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringAlternateCallIndicator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VirtualOnNetCallTypeName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeScheduleName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HolidayScheduleName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a new Communication Barring Criteria.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced by: SystemCommunicationBarringCriteriaAddRequest17
 */
class SystemCommunicationBarringCriteriaAddRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $name,
             $description=null,
             $matchCallType=null,
             $matchAlternateCallIndicator=null,
             $matchVirtualOnNetCallType=null,
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
             $timeSchedule=null,
             $holidaySchedule=null
    ) {
        $this->name                        = new CommunicationBarringCriteriaName($name);
        $this->description                 = $description;
        $this->matchCallType               = new CommunicationBarringCallType($matchCallType);
        $this->matchAlternateCallIndicator = new CommunicationBarringAlternateCallIndicator($matchAlternateCallIndicator);
        $this->matchVirtualOnNetCallType   = new VirtualOnNetCallTypeName($matchVirtualOnNetCallType);
        $this->matchPublicNetwork          = $matchPublicNetwork;
        $this->matchPrivateNetwork         = $matchPrivateNetwork;
        $this->matchLocalCategory          = $matchLocalCategory;
        $this->matchNationalCategory       = $matchNationalCategory;
        $this->matchInterlataCategory      = $matchInterlataCategory;
        $this->matchIntralataCategory      = $matchIntralataCategory;
        $this->matchInternationalCategory  = $matchInternationalCategory;
        $this->matchPrivateCategory        = $matchPrivateCategory;
        $this->matchEmergencyCategory      = $matchEmergencyCategory;
        $this->matchOtherCategory          = $matchOtherCategory;
        $this->matchInterNetwork           = $matchInterNetwork;
        $this->matchInterHostingNE         = $matchInterHostingNE;
        $this->matchInterAS                = $matchInterAS;
        $this->matchIntraAS                = $matchIntraAS;
        $this->matchChargeCalls            = $matchChargeCalls;
        $this->matchNoChargeCalls          = $matchNoChargeCalls;
        $this->matchGroupCalls             = $matchGroupCalls;
        $this->matchEnterpriseCalls        = $matchEnterpriseCalls;
        $this->matchNetworkCalls           = $matchNetworkCalls;
        $this->matchNetworkURLCalls        = $matchNetworkURLCalls;
        $this->matchRepairCalls            = $matchRepairCalls;
        $this->matchEmergencyCalls         = $matchEmergencyCalls;
        $this->matchInternalCalls          = $matchInternalCalls;
        $this->timeSchedule                = $timeSchedule;
        $this->holidaySchedule             = $holidaySchedule;
        $this->args                        = func_get_args();
    }

    public function setName($name)
    {
        $name and $this->name = new CommunicationBarringCriteriaName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }

    public function setDescription($description)
    {
        $description and $this->description = new CommunicationBarringCriteriaDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setMatchCallType($matchCallType)
    {
        $matchCallType and $this->matchCallType = new CommunicationBarringCallType($matchCallType);
    }

    public function getMatchCallType()
    {
        return (!$this->matchCallType) ?: $this->matchCallType->value();
    }

    public function setMatchAlternateCallIndicator($matchAlternateCallIndicator)
    {
        $matchAlternateCallIndicator and $this->matchAlternateCallIndicator = new CommunicationBarringAlternateCallIndicator($matchAlternateCallIndicator);
    }

    public function getMatchAlternateCallIndicator()
    {
        return (!$this->matchAlternateCallIndicator) ?: $this->matchAlternateCallIndicator->value();
    }

    public function setMatchVirtualOnNetCallType($matchVirtualOnNetCallType)
    {
        $matchVirtualOnNetCallType and $this->matchVirtualOnNetCallType = new VirtualOnNetCallTypeName($matchVirtualOnNetCallType);
    }

    public function getMatchVirtualOnNetCallType()
    {
        return (!$this->matchVirtualOnNetCallType) ?: $this->matchVirtualOnNetCallType->value();
    }

    public function setMatchPublicNetwork($matchPublicNetwork)
    {
        $matchPublicNetwork and $this->matchPublicNetwork = new xs:boolean($matchPublicNetwork);
    }

    public function getMatchPublicNetwork()
    {
        return (!$this->matchPublicNetwork) ?: $this->matchPublicNetwork->value();
    }

    public function setMatchPrivateNetwork($matchPrivateNetwork)
    {
        $matchPrivateNetwork and $this->matchPrivateNetwork = new xs:boolean($matchPrivateNetwork);
    }

    public function getMatchPrivateNetwork()
    {
        return (!$this->matchPrivateNetwork) ?: $this->matchPrivateNetwork->value();
    }

    public function setMatchLocalCategory($matchLocalCategory)
    {
        $matchLocalCategory and $this->matchLocalCategory = new xs:boolean($matchLocalCategory);
    }

    public function getMatchLocalCategory()
    {
        return (!$this->matchLocalCategory) ?: $this->matchLocalCategory->value();
    }

    public function setMatchNationalCategory($matchNationalCategory)
    {
        $matchNationalCategory and $this->matchNationalCategory = new xs:boolean($matchNationalCategory);
    }

    public function getMatchNationalCategory()
    {
        return (!$this->matchNationalCategory) ?: $this->matchNationalCategory->value();
    }

    public function setMatchInterlataCategory($matchInterlataCategory)
    {
        $matchInterlataCategory and $this->matchInterlataCategory = new xs:boolean($matchInterlataCategory);
    }

    public function getMatchInterlataCategory()
    {
        return (!$this->matchInterlataCategory) ?: $this->matchInterlataCategory->value();
    }

    public function setMatchIntralataCategory($matchIntralataCategory)
    {
        $matchIntralataCategory and $this->matchIntralataCategory = new xs:boolean($matchIntralataCategory);
    }

    public function getMatchIntralataCategory()
    {
        return (!$this->matchIntralataCategory) ?: $this->matchIntralataCategory->value();
    }

    public function setMatchInternationalCategory($matchInternationalCategory)
    {
        $matchInternationalCategory and $this->matchInternationalCategory = new xs:boolean($matchInternationalCategory);
    }

    public function getMatchInternationalCategory()
    {
        return (!$this->matchInternationalCategory) ?: $this->matchInternationalCategory->value();
    }

    public function setMatchPrivateCategory($matchPrivateCategory)
    {
        $matchPrivateCategory and $this->matchPrivateCategory = new xs:boolean($matchPrivateCategory);
    }

    public function getMatchPrivateCategory()
    {
        return (!$this->matchPrivateCategory) ?: $this->matchPrivateCategory->value();
    }

    public function setMatchEmergencyCategory($matchEmergencyCategory)
    {
        $matchEmergencyCategory and $this->matchEmergencyCategory = new xs:boolean($matchEmergencyCategory);
    }

    public function getMatchEmergencyCategory()
    {
        return (!$this->matchEmergencyCategory) ?: $this->matchEmergencyCategory->value();
    }

    public function setMatchOtherCategory($matchOtherCategory)
    {
        $matchOtherCategory and $this->matchOtherCategory = new xs:boolean($matchOtherCategory);
    }

    public function getMatchOtherCategory()
    {
        return (!$this->matchOtherCategory) ?: $this->matchOtherCategory->value();
    }

    public function setMatchInterNetwork($matchInterNetwork)
    {
        $matchInterNetwork and $this->matchInterNetwork = new xs:boolean($matchInterNetwork);
    }

    public function getMatchInterNetwork()
    {
        return (!$this->matchInterNetwork) ?: $this->matchInterNetwork->value();
    }

    public function setMatchInterHostingNE($matchInterHostingNE)
    {
        $matchInterHostingNE and $this->matchInterHostingNE = new xs:boolean($matchInterHostingNE);
    }

    public function getMatchInterHostingNE()
    {
        return (!$this->matchInterHostingNE) ?: $this->matchInterHostingNE->value();
    }

    public function setMatchInterAS($matchInterAS)
    {
        $matchInterAS and $this->matchInterAS = new xs:boolean($matchInterAS);
    }

    public function getMatchInterAS()
    {
        return (!$this->matchInterAS) ?: $this->matchInterAS->value();
    }

    public function setMatchIntraAS($matchIntraAS)
    {
        $matchIntraAS and $this->matchIntraAS = new xs:boolean($matchIntraAS);
    }

    public function getMatchIntraAS()
    {
        return (!$this->matchIntraAS) ?: $this->matchIntraAS->value();
    }

    public function setMatchChargeCalls($matchChargeCalls)
    {
        $matchChargeCalls and $this->matchChargeCalls = new xs:boolean($matchChargeCalls);
    }

    public function getMatchChargeCalls()
    {
        return (!$this->matchChargeCalls) ?: $this->matchChargeCalls->value();
    }

    public function setMatchNoChargeCalls($matchNoChargeCalls)
    {
        $matchNoChargeCalls and $this->matchNoChargeCalls = new xs:boolean($matchNoChargeCalls);
    }

    public function getMatchNoChargeCalls()
    {
        return (!$this->matchNoChargeCalls) ?: $this->matchNoChargeCalls->value();
    }

    public function setMatchGroupCalls($matchGroupCalls)
    {
        $matchGroupCalls and $this->matchGroupCalls = new xs:boolean($matchGroupCalls);
    }

    public function getMatchGroupCalls()
    {
        return (!$this->matchGroupCalls) ?: $this->matchGroupCalls->value();
    }

    public function setMatchEnterpriseCalls($matchEnterpriseCalls)
    {
        $matchEnterpriseCalls and $this->matchEnterpriseCalls = new xs:boolean($matchEnterpriseCalls);
    }

    public function getMatchEnterpriseCalls()
    {
        return (!$this->matchEnterpriseCalls) ?: $this->matchEnterpriseCalls->value();
    }

    public function setMatchNetworkCalls($matchNetworkCalls)
    {
        $matchNetworkCalls and $this->matchNetworkCalls = new xs:boolean($matchNetworkCalls);
    }

    public function getMatchNetworkCalls()
    {
        return (!$this->matchNetworkCalls) ?: $this->matchNetworkCalls->value();
    }

    public function setMatchNetworkURLCalls($matchNetworkURLCalls)
    {
        $matchNetworkURLCalls and $this->matchNetworkURLCalls = new xs:boolean($matchNetworkURLCalls);
    }

    public function getMatchNetworkURLCalls()
    {
        return (!$this->matchNetworkURLCalls) ?: $this->matchNetworkURLCalls->value();
    }

    public function setMatchRepairCalls($matchRepairCalls)
    {
        $matchRepairCalls and $this->matchRepairCalls = new xs:boolean($matchRepairCalls);
    }

    public function getMatchRepairCalls()
    {
        return (!$this->matchRepairCalls) ?: $this->matchRepairCalls->value();
    }

    public function setMatchEmergencyCalls($matchEmergencyCalls)
    {
        $matchEmergencyCalls and $this->matchEmergencyCalls = new xs:boolean($matchEmergencyCalls);
    }

    public function getMatchEmergencyCalls()
    {
        return (!$this->matchEmergencyCalls) ?: $this->matchEmergencyCalls->value();
    }

    public function setMatchInternalCalls($matchInternalCalls)
    {
        $matchInternalCalls and $this->matchInternalCalls = new xs:boolean($matchInternalCalls);
    }

    public function getMatchInternalCalls()
    {
        return (!$this->matchInternalCalls) ?: $this->matchInternalCalls->value();
    }

    public function setTimeSchedule($timeSchedule)
    {
        $timeSchedule and $this->timeSchedule = new TimeScheduleName($timeSchedule);
    }

    public function getTimeSchedule()
    {
        return (!$this->timeSchedule) ?: $this->timeSchedule->value();
    }

    public function setHolidaySchedule($holidaySchedule)
    {
        $holidaySchedule and $this->holidaySchedule = new HolidayScheduleName($holidaySchedule);
    }

    public function getHolidaySchedule()
    {
        return (!$this->holidaySchedule) ?: $this->holidaySchedule->value();
    }
}
