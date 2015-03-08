<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupPilotUserCallingLineIdentityUsagePolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupPilotUserChargeNumberUsagePolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUnreachableDestinationAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupCallForwardingAlwaysAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupInvitationTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupCapacityExceededAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\OtgDtgIdentity;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPAuthenticationUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxOutgoingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxIncomingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxActiveCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrapInitialThreshold;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrapOffsetThreshold;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxIncomingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxOutgoingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxActiveCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupTrunkGroupGetInstanceRequest15sp2.
 *         Returns the profile information for the Trunk Group.
 *         Contains a hosted user table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupTrunkGroupGetInstanceResponse15sp2 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                               = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\GroupTrunkGroupGetInstanceResponse15sp2';
    public    $name                                       = __CLASS__;
    protected $pilotUserId                                = null;
    protected $department                                 = null;
    protected $accessDevice                               = null;
    protected $maxActiveCalls                             = null;
    protected $maxIncomingCalls                           = null;
    protected $maxOutgoingCalls                           = null;
    protected $enableBursting                             = null;
    protected $burstingMaxActiveCalls                     = null;
    protected $burstingMaxIncomingCalls                   = null;
    protected $burstingMaxOutgoingCalls                   = null;
    protected $capacityExceededAction                     = null;
    protected $capacityExceededForwardAddress             = null;
    protected $capacityExceededRerouteTrunkGroupKey       = null;
    protected $capacityExceededTrapInitialCalls           = null;
    protected $capacityExceededTrapOffsetCalls            = null;
    protected $unreachableDestinationAction               = null;
    protected $unreachableDestinationForwardAddress       = null;
    protected $unreachableDestinationRerouteTrunkGroupKey = null;
    protected $invitationTimeout                          = null;
    protected $requireAuthentication                      = null;
    protected $sipAuthenticationUserName                  = null;
    protected $hostedUserTable                            = null;
    protected $trunkGroupIdentity                         = null;
    protected $otgDtgIdentity                             = null;
    protected $includeTrunkGroupIdentity                  = null;
    protected $includeDtgIdentity                         = null;
    protected $enableNetworkAddressIdentity               = null;
    protected $allowUnscreenedCalls                       = null;
    protected $allowUnscreenedEmergencyCalls              = null;
    protected $pilotUserCallingLineIdentityPolicy         = null;
    protected $pilotUserChargeNumberPolicy                = null;
    protected $callForwardingAlwaysAction                 = null;
    protected $callForwardingAlwaysForwardAddress         = null;
    protected $callForwardingAlwaysRerouteTrunkGroupKey   = null;


    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setPilotUserId($pilotUserId = null)
    {
        $this->pilotUserId = ($pilotUserId InstanceOf UserId)
             ? $pilotUserId
             : new UserId($pilotUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getPilotUserId()
    {
        return (!$this->pilotUserId) ?: $this->pilotUserId->getValue();
    }

    /**
     * Uniquely identifies a department system-wide.
     *         Departments are contained in either an enterprise or a group. Enterprise departments can be
     *         used by any or all groups within the enterprise. Department names are unique within a group and
     *         within an enterprise, but the same department name can exist in 2 different groups or in both
     *         a group and its parent enterprise. Therefore, to uniquely identify a department, we must know
     *         the department name and which enterprise or group contains the department.
     *         This type is extended by group and enterprise department keys.
     */
    public function setDepartment(DepartmentKey $department = null)
    {
        $this->department = DepartmentKey $department;
    }

    /**
     * Uniquely identifies a department system-wide.
     *         Departments are contained in either an enterprise or a group. Enterprise departments can be
     *         used by any or all groups within the enterprise. Department names are unique within a group and
     *         within an enterprise, but the same department name can exist in 2 different groups or in both
     *         a group and its parent enterprise. Therefore, to uniquely identify a department, we must know
     *         the department name and which enterprise or group contains the department.
     *         This type is extended by group and enterprise department keys.
     */
    public function getDepartment()
    {
        return (!$this->department) ?: $this->department->getValue();
    }

    /**
     * Uniquely identifies an Identity/device profile created anywhere in the system.
     */
    public function setAccessDevice(AccessDevice $accessDevice = null)
    {
        $this->accessDevice = AccessDevice $accessDevice;
    }

    /**
     * Uniquely identifies an Identity/device profile created anywhere in the system.
     */
    public function getAccessDevice()
    {
        return (!$this->accessDevice) ?: $this->accessDevice->getValue();
    }

    /**
     * Maximum Number of Active Calls
     */
    public function setMaxActiveCalls($maxActiveCalls = null)
    {
        $this->maxActiveCalls = ($maxActiveCalls InstanceOf MaxActiveCalls)
             ? $maxActiveCalls
             : new MaxActiveCalls($maxActiveCalls);
    }

    /**
     * Maximum Number of Active Calls
     */
    public function getMaxActiveCalls()
    {
        return (!$this->maxActiveCalls) ?: $this->maxActiveCalls->getValue();
    }

    /**
     * Maximum Number of Incoming Calls
     */
    public function setMaxIncomingCalls($maxIncomingCalls = null)
    {
        $this->maxIncomingCalls = ($maxIncomingCalls InstanceOf MaxIncomingCalls)
             ? $maxIncomingCalls
             : new MaxIncomingCalls($maxIncomingCalls);
    }

    /**
     * Maximum Number of Incoming Calls
     */
    public function getMaxIncomingCalls()
    {
        return (!$this->maxIncomingCalls) ?: $this->maxIncomingCalls->getValue();
    }

    /**
     * Maximum Number of Outgoing Calls
     */
    public function setMaxOutgoingCalls($maxOutgoingCalls = null)
    {
        $this->maxOutgoingCalls = ($maxOutgoingCalls InstanceOf MaxOutgoingCalls)
             ? $maxOutgoingCalls
             : new MaxOutgoingCalls($maxOutgoingCalls);
    }

    /**
     * Maximum Number of Outgoing Calls
     */
    public function getMaxOutgoingCalls()
    {
        return (!$this->maxOutgoingCalls) ?: $this->maxOutgoingCalls->getValue();
    }

    /**
     * 
     */
    public function setEnableBursting($enableBursting = null)
    {
        $this->enableBursting = (boolean) $enableBursting;
    }

    /**
     * 
     */
    public function getEnableBursting()
    {
        return (!$this->enableBursting) ?: $this->enableBursting->getValue();
    }

    /**
     * Bursting Maximum Number of Active Calls
     */
    public function setBurstingMaxActiveCalls($burstingMaxActiveCalls = null)
    {
        $this->burstingMaxActiveCalls = ($burstingMaxActiveCalls InstanceOf BurstingMaxActiveCalls)
             ? $burstingMaxActiveCalls
             : new BurstingMaxActiveCalls($burstingMaxActiveCalls);
    }

    /**
     * Bursting Maximum Number of Active Calls
     */
    public function getBurstingMaxActiveCalls()
    {
        return (!$this->burstingMaxActiveCalls) ?: $this->burstingMaxActiveCalls->getValue();
    }

    /**
     * Bursting Maximum Number of Incoming Calls
     */
    public function setBurstingMaxIncomingCalls($burstingMaxIncomingCalls = null)
    {
        $this->burstingMaxIncomingCalls = ($burstingMaxIncomingCalls InstanceOf BurstingMaxIncomingCalls)
             ? $burstingMaxIncomingCalls
             : new BurstingMaxIncomingCalls($burstingMaxIncomingCalls);
    }

    /**
     * Bursting Maximum Number of Incoming Calls
     */
    public function getBurstingMaxIncomingCalls()
    {
        return (!$this->burstingMaxIncomingCalls) ?: $this->burstingMaxIncomingCalls->getValue();
    }

    /**
     * Bursting Maximum Number of Outgoing Calls
     */
    public function setBurstingMaxOutgoingCalls($burstingMaxOutgoingCalls = null)
    {
        $this->burstingMaxOutgoingCalls = ($burstingMaxOutgoingCalls InstanceOf BurstingMaxOutgoingCalls)
             ? $burstingMaxOutgoingCalls
             : new BurstingMaxOutgoingCalls($burstingMaxOutgoingCalls);
    }

    /**
     * Bursting Maximum Number of Outgoing Calls
     */
    public function getBurstingMaxOutgoingCalls()
    {
        return (!$this->burstingMaxOutgoingCalls) ?: $this->burstingMaxOutgoingCalls->getValue();
    }

    /**
     * Trunk Group capacity exceeded action.
     */
    public function setCapacityExceededAction($capacityExceededAction = null)
    {
        $this->capacityExceededAction = ($capacityExceededAction InstanceOf TrunkGroupCapacityExceededAction)
             ? $capacityExceededAction
             : new TrunkGroupCapacityExceededAction($capacityExceededAction);
    }

    /**
     * Trunk Group capacity exceeded action.
     */
    public function getCapacityExceededAction()
    {
        return (!$this->capacityExceededAction) ?: $this->capacityExceededAction->getValue();
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function setCapacityExceededForwardAddress($capacityExceededForwardAddress = null)
    {
        $this->capacityExceededForwardAddress = ($capacityExceededForwardAddress InstanceOf OutgoingDNorSIPURI)
             ? $capacityExceededForwardAddress
             : new OutgoingDNorSIPURI($capacityExceededForwardAddress);
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function getCapacityExceededForwardAddress()
    {
        return (!$this->capacityExceededForwardAddress) ?: $this->capacityExceededForwardAddress->getValue();
    }

    /**
     * Uniquely identifies a Trunk Group system-wide.
     *         The trunkGroupName is unique within a group, but not unique system-wide.
     */
    public function setCapacityExceededRerouteTrunkGroupKey(TrunkGroupKey $capacityExceededRerouteTrunkGroupKey = null)
    {
        $this->capacityExceededRerouteTrunkGroupKey = TrunkGroupKey $capacityExceededRerouteTrunkGroupKey;
    }

    /**
     * Uniquely identifies a Trunk Group system-wide.
     *         The trunkGroupName is unique within a group, but not unique system-wide.
     */
    public function getCapacityExceededRerouteTrunkGroupKey()
    {
        return (!$this->capacityExceededRerouteTrunkGroupKey) ?: $this->capacityExceededRerouteTrunkGroupKey->getValue();
    }

    /**
     * An SNMP trap will be sent when the number of counted events crosses this threshold value.
     */
    public function setCapacityExceededTrapInitialCalls($capacityExceededTrapInitialCalls = null)
    {
        $this->capacityExceededTrapInitialCalls = ($capacityExceededTrapInitialCalls InstanceOf TrapInitialThreshold)
             ? $capacityExceededTrapInitialCalls
             : new TrapInitialThreshold($capacityExceededTrapInitialCalls);
    }

    /**
     * An SNMP trap will be sent when the number of counted events crosses this threshold value.
     */
    public function getCapacityExceededTrapInitialCalls()
    {
        return (!$this->capacityExceededTrapInitialCalls) ?: $this->capacityExceededTrapInitialCalls->getValue();
    }

    /**
     * Subsequent SNMP traps will be sent after the intial trap each time the number of
     *         counted events increases by this value since the last trap.
     */
    public function setCapacityExceededTrapOffsetCalls($capacityExceededTrapOffsetCalls = null)
    {
        $this->capacityExceededTrapOffsetCalls = ($capacityExceededTrapOffsetCalls InstanceOf TrapOffsetThreshold)
             ? $capacityExceededTrapOffsetCalls
             : new TrapOffsetThreshold($capacityExceededTrapOffsetCalls);
    }

    /**
     * Subsequent SNMP traps will be sent after the intial trap each time the number of
     *         counted events increases by this value since the last trap.
     */
    public function getCapacityExceededTrapOffsetCalls()
    {
        return (!$this->capacityExceededTrapOffsetCalls) ?: $this->capacityExceededTrapOffsetCalls->getValue();
    }

    /**
     * Trunk Group unreachable destination action.
     */
    public function setUnreachableDestinationAction($unreachableDestinationAction = null)
    {
        $this->unreachableDestinationAction = ($unreachableDestinationAction InstanceOf TrunkGroupUnreachableDestinationAction)
             ? $unreachableDestinationAction
             : new TrunkGroupUnreachableDestinationAction($unreachableDestinationAction);
    }

    /**
     * Trunk Group unreachable destination action.
     */
    public function getUnreachableDestinationAction()
    {
        return (!$this->unreachableDestinationAction) ?: $this->unreachableDestinationAction->getValue();
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function setUnreachableDestinationForwardAddress($unreachableDestinationForwardAddress = null)
    {
        $this->unreachableDestinationForwardAddress = ($unreachableDestinationForwardAddress InstanceOf OutgoingDNorSIPURI)
             ? $unreachableDestinationForwardAddress
             : new OutgoingDNorSIPURI($unreachableDestinationForwardAddress);
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function getUnreachableDestinationForwardAddress()
    {
        return (!$this->unreachableDestinationForwardAddress) ?: $this->unreachableDestinationForwardAddress->getValue();
    }

    /**
     * Uniquely identifies a Trunk Group system-wide.
     *         The trunkGroupName is unique within a group, but not unique system-wide.
     */
    public function setUnreachableDestinationRerouteTrunkGroupKey(TrunkGroupKey $unreachableDestinationRerouteTrunkGroupKey = null)
    {
        $this->unreachableDestinationRerouteTrunkGroupKey = TrunkGroupKey $unreachableDestinationRerouteTrunkGroupKey;
    }

    /**
     * Uniquely identifies a Trunk Group system-wide.
     *         The trunkGroupName is unique within a group, but not unique system-wide.
     */
    public function getUnreachableDestinationRerouteTrunkGroupKey()
    {
        return (!$this->unreachableDestinationRerouteTrunkGroupKey) ?: $this->unreachableDestinationRerouteTrunkGroupKey->getValue();
    }

    /**
     * The timer to start when an invitation is sent to a device associated with a trunk group.
     */
    public function setInvitationTimeout($invitationTimeout = null)
    {
        $this->invitationTimeout = ($invitationTimeout InstanceOf TrunkGroupInvitationTimeoutSeconds)
             ? $invitationTimeout
             : new TrunkGroupInvitationTimeoutSeconds($invitationTimeout);
    }

    /**
     * The timer to start when an invitation is sent to a device associated with a trunk group.
     */
    public function getInvitationTimeout()
    {
        return (!$this->invitationTimeout) ?: $this->invitationTimeout->getValue();
    }

    /**
     * 
     */
    public function setRequireAuthentication($requireAuthentication = null)
    {
        $this->requireAuthentication = (boolean) $requireAuthentication;
    }

    /**
     * 
     */
    public function getRequireAuthentication()
    {
        return (!$this->requireAuthentication) ?: $this->requireAuthentication->getValue();
    }

    /**
     * SIP Authentication User Name.
     */
    public function setSipAuthenticationUserName($sipAuthenticationUserName = null)
    {
        $this->sipAuthenticationUserName = ($sipAuthenticationUserName InstanceOf SIPAuthenticationUserName)
             ? $sipAuthenticationUserName
             : new SIPAuthenticationUserName($sipAuthenticationUserName);
    }

    /**
     * SIP Authentication User Name.
     */
    public function getSipAuthenticationUserName()
    {
        return (!$this->sipAuthenticationUserName) ?: $this->sipAuthenticationUserName->getValue();
    }

    /**
     * 
     */
    public function setHostedUserTable(core:OCITable $hostedUserTable = null)
    {
        $this->hostedUserTable = core:OCITable $hostedUserTable;
    }

    /**
     * 
     */
    public function getHostedUserTable()
    {
        return (!$this->hostedUserTable) ?: $this->hostedUserTable->getValue();
    }

    /**
     * SIP URI.
     *         The SIP URI is used in many different places in the schema.
     *         If the SIPURI is an alias, the Validation rules are:
     *         - don't allow sip:
     *         - allow the following characters:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )   @
     *         - exactly one @ symbol
     *         - user portion and host portion are both required
     */
    public function setTrunkGroupIdentity($trunkGroupIdentity = null)
    {
        $this->trunkGroupIdentity = ($trunkGroupIdentity InstanceOf SIPURI)
             ? $trunkGroupIdentity
             : new SIPURI($trunkGroupIdentity);
    }

    /**
     * SIP URI.
     *         The SIP URI is used in many different places in the schema.
     *         If the SIPURI is an alias, the Validation rules are:
     *         - don't allow sip:
     *         - allow the following characters:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )   @
     *         - exactly one @ symbol
     *         - user portion and host portion are both required
     */
    public function getTrunkGroupIdentity()
    {
        return (!$this->trunkGroupIdentity) ?: $this->trunkGroupIdentity->getValue();
    }

    /**
     * Otg Dtg Identity
     */
    public function setOtgDtgIdentity($otgDtgIdentity = null)
    {
        $this->otgDtgIdentity = ($otgDtgIdentity InstanceOf OtgDtgIdentity)
             ? $otgDtgIdentity
             : new OtgDtgIdentity($otgDtgIdentity);
    }

    /**
     * Otg Dtg Identity
     */
    public function getOtgDtgIdentity()
    {
        return (!$this->otgDtgIdentity) ?: $this->otgDtgIdentity->getValue();
    }

    /**
     * 
     */
    public function setIncludeTrunkGroupIdentity($includeTrunkGroupIdentity = null)
    {
        $this->includeTrunkGroupIdentity = (boolean) $includeTrunkGroupIdentity;
    }

    /**
     * 
     */
    public function getIncludeTrunkGroupIdentity()
    {
        return (!$this->includeTrunkGroupIdentity) ?: $this->includeTrunkGroupIdentity->getValue();
    }

    /**
     * 
     */
    public function setIncludeDtgIdentity($includeDtgIdentity = null)
    {
        $this->includeDtgIdentity = (boolean) $includeDtgIdentity;
    }

    /**
     * 
     */
    public function getIncludeDtgIdentity()
    {
        return (!$this->includeDtgIdentity) ?: $this->includeDtgIdentity->getValue();
    }

    /**
     * 
     */
    public function setEnableNetworkAddressIdentity($enableNetworkAddressIdentity = null)
    {
        $this->enableNetworkAddressIdentity = (boolean) $enableNetworkAddressIdentity;
    }

    /**
     * 
     */
    public function getEnableNetworkAddressIdentity()
    {
        return (!$this->enableNetworkAddressIdentity) ?: $this->enableNetworkAddressIdentity->getValue();
    }

    /**
     * 
     */
    public function setAllowUnscreenedCalls($allowUnscreenedCalls = null)
    {
        $this->allowUnscreenedCalls = (boolean) $allowUnscreenedCalls;
    }

    /**
     * 
     */
    public function getAllowUnscreenedCalls()
    {
        return (!$this->allowUnscreenedCalls) ?: $this->allowUnscreenedCalls->getValue();
    }

    /**
     * 
     */
    public function setAllowUnscreenedEmergencyCalls($allowUnscreenedEmergencyCalls = null)
    {
        $this->allowUnscreenedEmergencyCalls = (boolean) $allowUnscreenedEmergencyCalls;
    }

    /**
     * 
     */
    public function getAllowUnscreenedEmergencyCalls()
    {
        return (!$this->allowUnscreenedEmergencyCalls) ?: $this->allowUnscreenedEmergencyCalls->getValue();
    }

    /**
     * Trunk Group Pilot User Calling Line Identity policy
     */
    public function setPilotUserCallingLineIdentityPolicy($pilotUserCallingLineIdentityPolicy = null)
    {
        $this->pilotUserCallingLineIdentityPolicy = ($pilotUserCallingLineIdentityPolicy InstanceOf TrunkGroupPilotUserCallingLineIdentityUsagePolicy)
             ? $pilotUserCallingLineIdentityPolicy
             : new TrunkGroupPilotUserCallingLineIdentityUsagePolicy($pilotUserCallingLineIdentityPolicy);
    }

    /**
     * Trunk Group Pilot User Calling Line Identity policy
     */
    public function getPilotUserCallingLineIdentityPolicy()
    {
        return (!$this->pilotUserCallingLineIdentityPolicy) ?: $this->pilotUserCallingLineIdentityPolicy->getValue();
    }

    /**
     * Trunk Group Pilot User Charge Number policy
     */
    public function setPilotUserChargeNumberPolicy($pilotUserChargeNumberPolicy = null)
    {
        $this->pilotUserChargeNumberPolicy = ($pilotUserChargeNumberPolicy InstanceOf TrunkGroupPilotUserChargeNumberUsagePolicy)
             ? $pilotUserChargeNumberPolicy
             : new TrunkGroupPilotUserChargeNumberUsagePolicy($pilotUserChargeNumberPolicy);
    }

    /**
     * Trunk Group Pilot User Charge Number policy
     */
    public function getPilotUserChargeNumberPolicy()
    {
        return (!$this->pilotUserChargeNumberPolicy) ?: $this->pilotUserChargeNumberPolicy->getValue();
    }

    /**
     * Trunk Group call forwarding always action.
     */
    public function setCallForwardingAlwaysAction($callForwardingAlwaysAction = null)
    {
        $this->callForwardingAlwaysAction = ($callForwardingAlwaysAction InstanceOf TrunkGroupCallForwardingAlwaysAction)
             ? $callForwardingAlwaysAction
             : new TrunkGroupCallForwardingAlwaysAction($callForwardingAlwaysAction);
    }

    /**
     * Trunk Group call forwarding always action.
     */
    public function getCallForwardingAlwaysAction()
    {
        return (!$this->callForwardingAlwaysAction) ?: $this->callForwardingAlwaysAction->getValue();
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function setCallForwardingAlwaysForwardAddress($callForwardingAlwaysForwardAddress = null)
    {
        $this->callForwardingAlwaysForwardAddress = ($callForwardingAlwaysForwardAddress InstanceOf OutgoingDNorSIPURI)
             ? $callForwardingAlwaysForwardAddress
             : new OutgoingDNorSIPURI($callForwardingAlwaysForwardAddress);
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function getCallForwardingAlwaysForwardAddress()
    {
        return (!$this->callForwardingAlwaysForwardAddress) ?: $this->callForwardingAlwaysForwardAddress->getValue();
    }

    /**
     * Uniquely identifies a Trunk Group system-wide.
     *         The trunkGroupName is unique within a group, but not unique system-wide.
     */
    public function setCallForwardingAlwaysRerouteTrunkGroupKey(TrunkGroupKey $callForwardingAlwaysRerouteTrunkGroupKey = null)
    {
        $this->callForwardingAlwaysRerouteTrunkGroupKey = TrunkGroupKey $callForwardingAlwaysRerouteTrunkGroupKey;
    }

    /**
     * Uniquely identifies a Trunk Group system-wide.
     *         The trunkGroupName is unique within a group, but not unique system-wide.
     */
    public function getCallForwardingAlwaysRerouteTrunkGroupKey()
    {
        return (!$this->callForwardingAlwaysRerouteTrunkGroupKey) ?: $this->callForwardingAlwaysRerouteTrunkGroupKey->getValue();
    }
}
