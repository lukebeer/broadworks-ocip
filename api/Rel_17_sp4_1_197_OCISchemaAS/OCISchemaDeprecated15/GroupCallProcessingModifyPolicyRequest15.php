<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxSimultaneousCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxCallTimeForAnsweredCallsMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxCallTimeForUnansweredCallsMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaPolicySelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaSetName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkUsageSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConcurrentRedirectedCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxFindMeFollowMeDepth;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxRedirectionDepth;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConcurrentFindMeFollowMeInvocations;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the group level data associated with Call Procesing Policy.
 *             The response is either a SuccessResponse or an ErrorResponse.
 *             Replaced By: GroupCallProcessingModifyPolicyRequest15sp2
 */
class GroupCallProcessingModifyPolicyRequest15 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $useGroupSetting=null,
             $useMaxSimultaneousCalls=null,
             $maxSimultaneousCalls=null,
             $useMaxSimultaneousVideoCalls=null,
             $maxSimultaneousVideoCalls=null,
             $useMaxCallTimeForAnsweredCalls=null,
             $maxCallTimeForAnsweredCallsMinutes=null,
             $useMaxCallTimeForUnansweredCalls=null,
             $maxCallTimeForUnansweredCallsMinutes=null,
             $mediaPolicySelection=null,
             $supportedMediaSetName=null,
             $networkUsageSelection=null,
             $enforceGroupCallingLineIdentityRestriction=null,
             $allowEnterpriseGroupCallTypingForPrivateDialingPlan=null,
             $allowEnterpriseGroupCallTypingForPublicDialingPlan=null,
             $overrideCLIDRestrictionForPrivateCallCategory=null,
             $useEnterpriseCLIDForPrivateCallCategory=null,
             $enableEnterpriseExtensionDialing=null,
             $useMaxConcurrentRedirectedCalls=null,
             $maxConcurrentRedirectedCalls=null,
             $useMaxFindMeFollowMeDepth=null,
             $maxFindMeFollowMeDepth=null,
             $maxRedirectionDepth=null,
             $useMaxConcurrentFindMeFollowMeInvocations=null,
             $maxConcurrentFindMeFollowMeInvocations=null
    ) {
        $this->serviceProviderId                                   = new ServiceProviderId($serviceProviderId);
        $this->groupId                                             = new GroupId($groupId);
        $this->useGroupSetting                                     = $useGroupSetting;
        $this->useMaxSimultaneousCalls                             = $useMaxSimultaneousCalls;
        $this->maxSimultaneousCalls                                = new CallProcessingMaxSimultaneousCalls($maxSimultaneousCalls);
        $this->useMaxSimultaneousVideoCalls                        = $useMaxSimultaneousVideoCalls;
        $this->maxSimultaneousVideoCalls                           = new CallProcessingMaxSimultaneousCalls($maxSimultaneousVideoCalls);
        $this->useMaxCallTimeForAnsweredCalls                      = $useMaxCallTimeForAnsweredCalls;
        $this->maxCallTimeForAnsweredCallsMinutes                  = $maxCallTimeForAnsweredCallsMinutes;
        $this->useMaxCallTimeForUnansweredCalls                    = $useMaxCallTimeForUnansweredCalls;
        $this->maxCallTimeForUnansweredCallsMinutes                = new CallProcessingMaxCallTimeForUnansweredCallsMinutes($maxCallTimeForUnansweredCallsMinutes);
        $this->mediaPolicySelection                                = new MediaPolicySelection($mediaPolicySelection);
        $this->supportedMediaSetName                               = new MediaSetName($supportedMediaSetName);
        $this->networkUsageSelection                               = new NetworkUsageSelection($networkUsageSelection);
        $this->enforceGroupCallingLineIdentityRestriction          = $enforceGroupCallingLineIdentityRestriction;
        $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan = $allowEnterpriseGroupCallTypingForPrivateDialingPlan;
        $this->allowEnterpriseGroupCallTypingForPublicDialingPlan  = $allowEnterpriseGroupCallTypingForPublicDialingPlan;
        $this->overrideCLIDRestrictionForPrivateCallCategory       = $overrideCLIDRestrictionForPrivateCallCategory;
        $this->useEnterpriseCLIDForPrivateCallCategory             = $useEnterpriseCLIDForPrivateCallCategory;
        $this->enableEnterpriseExtensionDialing                    = $enableEnterpriseExtensionDialing;
        $this->useMaxConcurrentRedirectedCalls                     = $useMaxConcurrentRedirectedCalls;
        $this->maxConcurrentRedirectedCalls                        = new CallProcessingMaxConcurrentRedirectedCalls($maxConcurrentRedirectedCalls);
        $this->useMaxFindMeFollowMeDepth                           = $useMaxFindMeFollowMeDepth;
        $this->maxFindMeFollowMeDepth                              = new CallProcessingMaxFindMeFollowMeDepth($maxFindMeFollowMeDepth);
        $this->maxRedirectionDepth                                 = new CallProcessingMaxRedirectionDepth($maxRedirectionDepth);
        $this->useMaxConcurrentFindMeFollowMeInvocations           = $useMaxConcurrentFindMeFollowMeInvocations;
        $this->maxConcurrentFindMeFollowMeInvocations              = new CallProcessingMaxConcurrentFindMeFollowMeInvocations($maxConcurrentFindMeFollowMeInvocations);
        $this->args                                                = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setUseGroupSetting($useGroupSetting)
    {
        $useGroupSetting and $this->useGroupSetting = new xs:boolean($useGroupSetting);
    }

    public function getUseGroupSetting()
    {
        return (!$this->useGroupSetting) ?: $this->useGroupSetting->value();
    }

    public function setUseMaxSimultaneousCalls($useMaxSimultaneousCalls)
    {
        $useMaxSimultaneousCalls and $this->useMaxSimultaneousCalls = new xs:boolean($useMaxSimultaneousCalls);
    }

    public function getUseMaxSimultaneousCalls()
    {
        return (!$this->useMaxSimultaneousCalls) ?: $this->useMaxSimultaneousCalls->value();
    }

    public function setMaxSimultaneousCalls($maxSimultaneousCalls)
    {
        $maxSimultaneousCalls and $this->maxSimultaneousCalls = new CallProcessingMaxSimultaneousCalls($maxSimultaneousCalls);
    }

    public function getMaxSimultaneousCalls()
    {
        return (!$this->maxSimultaneousCalls) ?: $this->maxSimultaneousCalls->value();
    }

    public function setUseMaxSimultaneousVideoCalls($useMaxSimultaneousVideoCalls)
    {
        $useMaxSimultaneousVideoCalls and $this->useMaxSimultaneousVideoCalls = new xs:boolean($useMaxSimultaneousVideoCalls);
    }

    public function getUseMaxSimultaneousVideoCalls()
    {
        return (!$this->useMaxSimultaneousVideoCalls) ?: $this->useMaxSimultaneousVideoCalls->value();
    }

    public function setMaxSimultaneousVideoCalls($maxSimultaneousVideoCalls)
    {
        $maxSimultaneousVideoCalls and $this->maxSimultaneousVideoCalls = new CallProcessingMaxSimultaneousCalls($maxSimultaneousVideoCalls);
    }

    public function getMaxSimultaneousVideoCalls()
    {
        return (!$this->maxSimultaneousVideoCalls) ?: $this->maxSimultaneousVideoCalls->value();
    }

    public function setUseMaxCallTimeForAnsweredCalls($useMaxCallTimeForAnsweredCalls)
    {
        $useMaxCallTimeForAnsweredCalls and $this->useMaxCallTimeForAnsweredCalls = new xs:boolean($useMaxCallTimeForAnsweredCalls);
    }

    public function getUseMaxCallTimeForAnsweredCalls()
    {
        return (!$this->useMaxCallTimeForAnsweredCalls) ?: $this->useMaxCallTimeForAnsweredCalls->value();
    }

    public function setMaxCallTimeForAnsweredCallsMinutes($maxCallTimeForAnsweredCallsMinutes)
    {
        $maxCallTimeForAnsweredCallsMinutes and $this->maxCallTimeForAnsweredCallsMinutes = new CallProcessingMaxCallTimeForAnsweredCallsMinutes($maxCallTimeForAnsweredCallsMinutes);
    }

    public function getMaxCallTimeForAnsweredCallsMinutes()
    {
        return (!$this->maxCallTimeForAnsweredCallsMinutes) ?: $this->maxCallTimeForAnsweredCallsMinutes->value();
    }

    public function setUseMaxCallTimeForUnansweredCalls($useMaxCallTimeForUnansweredCalls)
    {
        $useMaxCallTimeForUnansweredCalls and $this->useMaxCallTimeForUnansweredCalls = new xs:boolean($useMaxCallTimeForUnansweredCalls);
    }

    public function getUseMaxCallTimeForUnansweredCalls()
    {
        return (!$this->useMaxCallTimeForUnansweredCalls) ?: $this->useMaxCallTimeForUnansweredCalls->value();
    }

    public function setMaxCallTimeForUnansweredCallsMinutes($maxCallTimeForUnansweredCallsMinutes)
    {
        $maxCallTimeForUnansweredCallsMinutes and $this->maxCallTimeForUnansweredCallsMinutes = new CallProcessingMaxCallTimeForUnansweredCallsMinutes($maxCallTimeForUnansweredCallsMinutes);
    }

    public function getMaxCallTimeForUnansweredCallsMinutes()
    {
        return (!$this->maxCallTimeForUnansweredCallsMinutes) ?: $this->maxCallTimeForUnansweredCallsMinutes->value();
    }

    public function setMediaPolicySelection($mediaPolicySelection)
    {
        $mediaPolicySelection and $this->mediaPolicySelection = new MediaPolicySelection($mediaPolicySelection);
    }

    public function getMediaPolicySelection()
    {
        return (!$this->mediaPolicySelection) ?: $this->mediaPolicySelection->value();
    }

    public function setSupportedMediaSetName($supportedMediaSetName)
    {
        $supportedMediaSetName and $this->supportedMediaSetName = new MediaSetName($supportedMediaSetName);
    }

    public function getSupportedMediaSetName()
    {
        return (!$this->supportedMediaSetName) ?: $this->supportedMediaSetName->value();
    }

    public function setNetworkUsageSelection($networkUsageSelection)
    {
        $networkUsageSelection and $this->networkUsageSelection = new NetworkUsageSelection($networkUsageSelection);
    }

    public function getNetworkUsageSelection()
    {
        return (!$this->networkUsageSelection) ?: $this->networkUsageSelection->value();
    }

    public function setEnforceGroupCallingLineIdentityRestriction($enforceGroupCallingLineIdentityRestriction)
    {
        $enforceGroupCallingLineIdentityRestriction and $this->enforceGroupCallingLineIdentityRestriction = new xs:boolean($enforceGroupCallingLineIdentityRestriction);
    }

    public function getEnforceGroupCallingLineIdentityRestriction()
    {
        return (!$this->enforceGroupCallingLineIdentityRestriction) ?: $this->enforceGroupCallingLineIdentityRestriction->value();
    }

    public function setAllowEnterpriseGroupCallTypingForPrivateDialingPlan($allowEnterpriseGroupCallTypingForPrivateDialingPlan)
    {
        $allowEnterpriseGroupCallTypingForPrivateDialingPlan and $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan = new xs:boolean($allowEnterpriseGroupCallTypingForPrivateDialingPlan);
    }

    public function getAllowEnterpriseGroupCallTypingForPrivateDialingPlan()
    {
        return (!$this->allowEnterpriseGroupCallTypingForPrivateDialingPlan) ?: $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan->value();
    }

    public function setAllowEnterpriseGroupCallTypingForPublicDialingPlan($allowEnterpriseGroupCallTypingForPublicDialingPlan)
    {
        $allowEnterpriseGroupCallTypingForPublicDialingPlan and $this->allowEnterpriseGroupCallTypingForPublicDialingPlan = new xs:boolean($allowEnterpriseGroupCallTypingForPublicDialingPlan);
    }

    public function getAllowEnterpriseGroupCallTypingForPublicDialingPlan()
    {
        return (!$this->allowEnterpriseGroupCallTypingForPublicDialingPlan) ?: $this->allowEnterpriseGroupCallTypingForPublicDialingPlan->value();
    }

    public function setOverrideCLIDRestrictionForPrivateCallCategory($overrideCLIDRestrictionForPrivateCallCategory)
    {
        $overrideCLIDRestrictionForPrivateCallCategory and $this->overrideCLIDRestrictionForPrivateCallCategory = new xs:boolean($overrideCLIDRestrictionForPrivateCallCategory);
    }

    public function getOverrideCLIDRestrictionForPrivateCallCategory()
    {
        return (!$this->overrideCLIDRestrictionForPrivateCallCategory) ?: $this->overrideCLIDRestrictionForPrivateCallCategory->value();
    }

    public function setUseEnterpriseCLIDForPrivateCallCategory($useEnterpriseCLIDForPrivateCallCategory)
    {
        $useEnterpriseCLIDForPrivateCallCategory and $this->useEnterpriseCLIDForPrivateCallCategory = new xs:boolean($useEnterpriseCLIDForPrivateCallCategory);
    }

    public function getUseEnterpriseCLIDForPrivateCallCategory()
    {
        return (!$this->useEnterpriseCLIDForPrivateCallCategory) ?: $this->useEnterpriseCLIDForPrivateCallCategory->value();
    }

    public function setEnableEnterpriseExtensionDialing($enableEnterpriseExtensionDialing)
    {
        $enableEnterpriseExtensionDialing and $this->enableEnterpriseExtensionDialing = new xs:boolean($enableEnterpriseExtensionDialing);
    }

    public function getEnableEnterpriseExtensionDialing()
    {
        return (!$this->enableEnterpriseExtensionDialing) ?: $this->enableEnterpriseExtensionDialing->value();
    }

    public function setUseMaxConcurrentRedirectedCalls($useMaxConcurrentRedirectedCalls)
    {
        $useMaxConcurrentRedirectedCalls and $this->useMaxConcurrentRedirectedCalls = new xs:boolean($useMaxConcurrentRedirectedCalls);
    }

    public function getUseMaxConcurrentRedirectedCalls()
    {
        return (!$this->useMaxConcurrentRedirectedCalls) ?: $this->useMaxConcurrentRedirectedCalls->value();
    }

    public function setMaxConcurrentRedirectedCalls($maxConcurrentRedirectedCalls)
    {
        $maxConcurrentRedirectedCalls and $this->maxConcurrentRedirectedCalls = new CallProcessingMaxConcurrentRedirectedCalls($maxConcurrentRedirectedCalls);
    }

    public function getMaxConcurrentRedirectedCalls()
    {
        return (!$this->maxConcurrentRedirectedCalls) ?: $this->maxConcurrentRedirectedCalls->value();
    }

    public function setUseMaxFindMeFollowMeDepth($useMaxFindMeFollowMeDepth)
    {
        $useMaxFindMeFollowMeDepth and $this->useMaxFindMeFollowMeDepth = new xs:boolean($useMaxFindMeFollowMeDepth);
    }

    public function getUseMaxFindMeFollowMeDepth()
    {
        return (!$this->useMaxFindMeFollowMeDepth) ?: $this->useMaxFindMeFollowMeDepth->value();
    }

    public function setMaxFindMeFollowMeDepth($maxFindMeFollowMeDepth)
    {
        $maxFindMeFollowMeDepth and $this->maxFindMeFollowMeDepth = new CallProcessingMaxFindMeFollowMeDepth($maxFindMeFollowMeDepth);
    }

    public function getMaxFindMeFollowMeDepth()
    {
        return (!$this->maxFindMeFollowMeDepth) ?: $this->maxFindMeFollowMeDepth->value();
    }

    public function setMaxRedirectionDepth($maxRedirectionDepth)
    {
        $maxRedirectionDepth and $this->maxRedirectionDepth = new CallProcessingMaxRedirectionDepth($maxRedirectionDepth);
    }

    public function getMaxRedirectionDepth()
    {
        return (!$this->maxRedirectionDepth) ?: $this->maxRedirectionDepth->value();
    }

    public function setUseMaxConcurrentFindMeFollowMeInvocations($useMaxConcurrentFindMeFollowMeInvocations)
    {
        $useMaxConcurrentFindMeFollowMeInvocations and $this->useMaxConcurrentFindMeFollowMeInvocations = new xs:boolean($useMaxConcurrentFindMeFollowMeInvocations);
    }

    public function getUseMaxConcurrentFindMeFollowMeInvocations()
    {
        return (!$this->useMaxConcurrentFindMeFollowMeInvocations) ?: $this->useMaxConcurrentFindMeFollowMeInvocations->value();
    }

    public function setMaxConcurrentFindMeFollowMeInvocations($maxConcurrentFindMeFollowMeInvocations)
    {
        $maxConcurrentFindMeFollowMeInvocations and $this->maxConcurrentFindMeFollowMeInvocations = new CallProcessingMaxConcurrentFindMeFollowMeInvocations($maxConcurrentFindMeFollowMeInvocations);
    }

    public function getMaxConcurrentFindMeFollowMeInvocations()
    {
        return (!$this->maxConcurrentFindMeFollowMeInvocations) ?: $this->maxConcurrentFindMeFollowMeInvocations->value();
    }
}
