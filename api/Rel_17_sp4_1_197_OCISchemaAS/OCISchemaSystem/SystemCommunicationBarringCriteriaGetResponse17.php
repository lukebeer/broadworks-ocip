<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringAlternateCallIndicator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CommunicationBarringCriteriaDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringCallType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VirtualOnNetCallTypeName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\LocationCriteria;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RoamingCriteria;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the SystemCommunicationBarringCriteriaGetRequest17.
 *         The response contains the Communication Barring Criteria information.
 */
class SystemCommunicationBarringCriteriaGetResponse17 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCommunicationBarringCriteriaGetResponse17';
    public    $name                        = __CLASS__;
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


    /**
     * Communication Barring Criteria description
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf CommunicationBarringCriteriaDescription)
             ? $description
             : new CommunicationBarringCriteriaDescription($description);
    }

    /**
     * Communication Barring Criteria description
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
    }

    /**
     * Communication Barring Call Type.
     */
    public function setMatchCallType($matchCallType = null)
    {
        $this->matchCallType = ($matchCallType InstanceOf CommunicationBarringCallType)
             ? $matchCallType
             : new CommunicationBarringCallType($matchCallType);
    }

    /**
     * Communication Barring Call Type.
     */
    public function getMatchCallType()
    {
        return (!$this->matchCallType) ?: $this->matchCallType->getValue();
    }

    /**
     * Communication Barring Alternate Call Indicator.
     */
    public function setMatchAlternateCallIndicator($matchAlternateCallIndicator = null)
    {
        $this->matchAlternateCallIndicator = ($matchAlternateCallIndicator InstanceOf CommunicationBarringAlternateCallIndicator)
             ? $matchAlternateCallIndicator
             : new CommunicationBarringAlternateCallIndicator($matchAlternateCallIndicator);
    }

    /**
     * Communication Barring Alternate Call Indicator.
     */
    public function getMatchAlternateCallIndicator()
    {
        return (!$this->matchAlternateCallIndicator) ?: $this->matchAlternateCallIndicator->getValue();
    }

    /**
     * Virtual On-Net Call Type name.
     */
    public function setMatchVirtualOnNetCallType($matchVirtualOnNetCallType = null)
    {
        $this->matchVirtualOnNetCallType = ($matchVirtualOnNetCallType InstanceOf VirtualOnNetCallTypeName)
             ? $matchVirtualOnNetCallType
             : new VirtualOnNetCallTypeName($matchVirtualOnNetCallType);
    }

    /**
     * Virtual On-Net Call Type name.
     */
    public function getMatchVirtualOnNetCallType()
    {
        return (!$this->matchVirtualOnNetCallType) ?: $this->matchVirtualOnNetCallType->getValue();
    }

    /**
     * 
     */
    public function setMatchPublicNetwork($matchPublicNetwork = null)
    {
        $this->matchPublicNetwork = (boolean) $matchPublicNetwork;
    }

    /**
     * 
     */
    public function getMatchPublicNetwork()
    {
        return (!$this->matchPublicNetwork) ?: $this->matchPublicNetwork->getValue();
    }

    /**
     * 
     */
    public function setMatchPrivateNetwork($matchPrivateNetwork = null)
    {
        $this->matchPrivateNetwork = (boolean) $matchPrivateNetwork;
    }

    /**
     * 
     */
    public function getMatchPrivateNetwork()
    {
        return (!$this->matchPrivateNetwork) ?: $this->matchPrivateNetwork->getValue();
    }

    /**
     * 
     */
    public function setMatchLocalCategory($matchLocalCategory = null)
    {
        $this->matchLocalCategory = (boolean) $matchLocalCategory;
    }

    /**
     * 
     */
    public function getMatchLocalCategory()
    {
        return (!$this->matchLocalCategory) ?: $this->matchLocalCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchNationalCategory($matchNationalCategory = null)
    {
        $this->matchNationalCategory = (boolean) $matchNationalCategory;
    }

    /**
     * 
     */
    public function getMatchNationalCategory()
    {
        return (!$this->matchNationalCategory) ?: $this->matchNationalCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchInterlataCategory($matchInterlataCategory = null)
    {
        $this->matchInterlataCategory = (boolean) $matchInterlataCategory;
    }

    /**
     * 
     */
    public function getMatchInterlataCategory()
    {
        return (!$this->matchInterlataCategory) ?: $this->matchInterlataCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchIntralataCategory($matchIntralataCategory = null)
    {
        $this->matchIntralataCategory = (boolean) $matchIntralataCategory;
    }

    /**
     * 
     */
    public function getMatchIntralataCategory()
    {
        return (!$this->matchIntralataCategory) ?: $this->matchIntralataCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchInternationalCategory($matchInternationalCategory = null)
    {
        $this->matchInternationalCategory = (boolean) $matchInternationalCategory;
    }

    /**
     * 
     */
    public function getMatchInternationalCategory()
    {
        return (!$this->matchInternationalCategory) ?: $this->matchInternationalCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchPrivateCategory($matchPrivateCategory = null)
    {
        $this->matchPrivateCategory = (boolean) $matchPrivateCategory;
    }

    /**
     * 
     */
    public function getMatchPrivateCategory()
    {
        return (!$this->matchPrivateCategory) ?: $this->matchPrivateCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchEmergencyCategory($matchEmergencyCategory = null)
    {
        $this->matchEmergencyCategory = (boolean) $matchEmergencyCategory;
    }

    /**
     * 
     */
    public function getMatchEmergencyCategory()
    {
        return (!$this->matchEmergencyCategory) ?: $this->matchEmergencyCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchOtherCategory($matchOtherCategory = null)
    {
        $this->matchOtherCategory = (boolean) $matchOtherCategory;
    }

    /**
     * 
     */
    public function getMatchOtherCategory()
    {
        return (!$this->matchOtherCategory) ?: $this->matchOtherCategory->getValue();
    }

    /**
     * 
     */
    public function setMatchInterNetwork($matchInterNetwork = null)
    {
        $this->matchInterNetwork = (boolean) $matchInterNetwork;
    }

    /**
     * 
     */
    public function getMatchInterNetwork()
    {
        return (!$this->matchInterNetwork) ?: $this->matchInterNetwork->getValue();
    }

    /**
     * 
     */
    public function setMatchInterHostingNE($matchInterHostingNE = null)
    {
        $this->matchInterHostingNE = (boolean) $matchInterHostingNE;
    }

    /**
     * 
     */
    public function getMatchInterHostingNE()
    {
        return (!$this->matchInterHostingNE) ?: $this->matchInterHostingNE->getValue();
    }

    /**
     * 
     */
    public function setMatchInterAS($matchInterAS = null)
    {
        $this->matchInterAS = (boolean) $matchInterAS;
    }

    /**
     * 
     */
    public function getMatchInterAS()
    {
        return (!$this->matchInterAS) ?: $this->matchInterAS->getValue();
    }

    /**
     * 
     */
    public function setMatchIntraAS($matchIntraAS = null)
    {
        $this->matchIntraAS = (boolean) $matchIntraAS;
    }

    /**
     * 
     */
    public function getMatchIntraAS()
    {
        return (!$this->matchIntraAS) ?: $this->matchIntraAS->getValue();
    }

    /**
     * 
     */
    public function setMatchChargeCalls($matchChargeCalls = null)
    {
        $this->matchChargeCalls = (boolean) $matchChargeCalls;
    }

    /**
     * 
     */
    public function getMatchChargeCalls()
    {
        return (!$this->matchChargeCalls) ?: $this->matchChargeCalls->getValue();
    }

    /**
     * 
     */
    public function setMatchNoChargeCalls($matchNoChargeCalls = null)
    {
        $this->matchNoChargeCalls = (boolean) $matchNoChargeCalls;
    }

    /**
     * 
     */
    public function getMatchNoChargeCalls()
    {
        return (!$this->matchNoChargeCalls) ?: $this->matchNoChargeCalls->getValue();
    }

    /**
     * 
     */
    public function setMatchGroupCalls($matchGroupCalls = null)
    {
        $this->matchGroupCalls = (boolean) $matchGroupCalls;
    }

    /**
     * 
     */
    public function getMatchGroupCalls()
    {
        return (!$this->matchGroupCalls) ?: $this->matchGroupCalls->getValue();
    }

    /**
     * 
     */
    public function setMatchEnterpriseCalls($matchEnterpriseCalls = null)
    {
        $this->matchEnterpriseCalls = (boolean) $matchEnterpriseCalls;
    }

    /**
     * 
     */
    public function getMatchEnterpriseCalls()
    {
        return (!$this->matchEnterpriseCalls) ?: $this->matchEnterpriseCalls->getValue();
    }

    /**
     * 
     */
    public function setMatchNetworkCalls($matchNetworkCalls = null)
    {
        $this->matchNetworkCalls = (boolean) $matchNetworkCalls;
    }

    /**
     * 
     */
    public function getMatchNetworkCalls()
    {
        return (!$this->matchNetworkCalls) ?: $this->matchNetworkCalls->getValue();
    }

    /**
     * 
     */
    public function setMatchNetworkURLCalls($matchNetworkURLCalls = null)
    {
        $this->matchNetworkURLCalls = (boolean) $matchNetworkURLCalls;
    }

    /**
     * 
     */
    public function getMatchNetworkURLCalls()
    {
        return (!$this->matchNetworkURLCalls) ?: $this->matchNetworkURLCalls->getValue();
    }

    /**
     * 
     */
    public function setMatchRepairCalls($matchRepairCalls = null)
    {
        $this->matchRepairCalls = (boolean) $matchRepairCalls;
    }

    /**
     * 
     */
    public function getMatchRepairCalls()
    {
        return (!$this->matchRepairCalls) ?: $this->matchRepairCalls->getValue();
    }

    /**
     * 
     */
    public function setMatchEmergencyCalls($matchEmergencyCalls = null)
    {
        $this->matchEmergencyCalls = (boolean) $matchEmergencyCalls;
    }

    /**
     * 
     */
    public function getMatchEmergencyCalls()
    {
        return (!$this->matchEmergencyCalls) ?: $this->matchEmergencyCalls->getValue();
    }

    /**
     * 
     */
    public function setMatchInternalCalls($matchInternalCalls = null)
    {
        $this->matchInternalCalls = (boolean) $matchInternalCalls;
    }

    /**
     * 
     */
    public function getMatchInternalCalls()
    {
        return (!$this->matchInternalCalls) ?: $this->matchInternalCalls->getValue();
    }

    /**
     * Identifies the location zone criteria to be matched.
     */
    public function setMatchLocation($matchLocation = null)
    {
        $this->matchLocation = ($matchLocation InstanceOf LocationCriteria)
             ? $matchLocation
             : new LocationCriteria($matchLocation);
    }

    /**
     * Identifies the location zone criteria to be matched.
     */
    public function getMatchLocation()
    {
        return (!$this->matchLocation) ?: $this->matchLocation->getValue();
    }

    /**
     * Identifies the roaming criteria to be matched.
     */
    public function setMatchRoaming($matchRoaming = null)
    {
        $this->matchRoaming = ($matchRoaming InstanceOf RoamingCriteria)
             ? $matchRoaming
             : new RoamingCriteria($matchRoaming);
    }

    /**
     * Identifies the roaming criteria to be matched.
     */
    public function getMatchRoaming()
    {
        return (!$this->matchRoaming) ?: $this->matchRoaming->getValue();
    }

    /**
     * Schedule name.
     */
    public function setTimeSchedule($timeSchedule = null)
    {
        $this->timeSchedule = ($timeSchedule InstanceOf ScheduleName)
             ? $timeSchedule
             : new ScheduleName($timeSchedule);
    }

    /**
     * Schedule name.
     */
    public function getTimeSchedule()
    {
        return (!$this->timeSchedule) ?: $this->timeSchedule->getValue();
    }

    /**
     * Schedule name.
     */
    public function setHolidaySchedule($holidaySchedule = null)
    {
        $this->holidaySchedule = ($holidaySchedule InstanceOf ScheduleName)
             ? $holidaySchedule
             : new ScheduleName($holidaySchedule);
    }

    /**
     * Schedule name.
     */
    public function getHolidaySchedule()
    {
        return (!$this->holidaySchedule) ?: $this->holidaySchedule->getValue();
    }
}
