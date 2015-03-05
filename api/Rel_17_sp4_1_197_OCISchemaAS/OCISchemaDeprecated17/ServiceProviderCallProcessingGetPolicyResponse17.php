<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxSimultaneousCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxCallTimeForAnsweredCallsMinutes16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxCallTimeForUnansweredCallsMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaPolicySelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaSetName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkUsageSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderConferenceURISettingLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConcurrentRedirectedCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxFindMeFollowMeDepth;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxRedirectionDepth;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConcurrentFindMeFollowMeInvocations;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CLIDPolicy;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to ServiceProviderCallProcessingGetPolicyRequest17.
 */
class ServiceProviderCallProcessingGetPolicyResponse17 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $useMaxSimultaneousCalls,
             $maxSimultaneousCalls,
             $useMaxSimultaneousVideoCalls,
             $maxSimultaneousVideoCalls,
             $useMaxCallTimeForAnsweredCalls,
             $maxCallTimeForAnsweredCallsMinutes,
             $useMaxCallTimeForUnansweredCalls,
             $maxCallTimeForUnansweredCallsMinutes,
             $mediaPolicySelection,
             $supportedMediaSetName=null,
             $networkUsageSelection,
             $enforceGroupCallingLineIdentityRestriction,
             $allowEnterpriseGroupCallTypingForPrivateDialingPlan,
             $allowEnterpriseGroupCallTypingForPublicDialingPlan,
             $overrideCLIDRestrictionForPrivateCallCategory,
             $useEnterpriseCLIDForPrivateCallCategory,
             $enableEnterpriseExtensionDialing,
             $enforceEnterpriseCallingLineIdentityRestriction,
             $useSettingLevel,
             $conferenceURI=null,
             $useMaxConcurrentRedirectedCalls,
             $maxConcurrentRedirectedCalls,
             $useMaxFindMeFollowMeDepth,
             $maxFindMeFollowMeDepth,
             $maxRedirectionDepth,
             $useMaxConcurrentFindMeFollowMeInvocations,
             $maxConcurrentFindMeFollowMeInvocations,
             $clidPolicy,
             $emergencyClidPolicy,
             $allowAlternateNumbersForRedirectingIdentity,
             $blockCallingNameForExternalCalls
    ) {
        $this->useMaxSimultaneousCalls                             = $useMaxSimultaneousCalls;
        $this->maxSimultaneousCalls                                = new CallProcessingMaxSimultaneousCalls($maxSimultaneousCalls);
        $this->useMaxSimultaneousVideoCalls                        = $useMaxSimultaneousVideoCalls;
        $this->maxSimultaneousVideoCalls                           = new CallProcessingMaxSimultaneousCalls($maxSimultaneousVideoCalls);
        $this->useMaxCallTimeForAnsweredCalls                      = $useMaxCallTimeForAnsweredCalls;
        $this->maxCallTimeForAnsweredCallsMinutes                  = new CallProcessingMaxCallTimeForAnsweredCallsMinutes16($maxCallTimeForAnsweredCallsMinutes);
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
        $this->enforceEnterpriseCallingLineIdentityRestriction     = $enforceEnterpriseCallingLineIdentityRestriction;
        $this->useSettingLevel                                     = new ServiceProviderConferenceURISettingLevel($useSettingLevel);
        $this->conferenceURI                                       = new SIPURI($conferenceURI);
        $this->useMaxConcurrentRedirectedCalls                     = $useMaxConcurrentRedirectedCalls;
        $this->maxConcurrentRedirectedCalls                        = new CallProcessingMaxConcurrentRedirectedCalls($maxConcurrentRedirectedCalls);
        $this->useMaxFindMeFollowMeDepth                           = $useMaxFindMeFollowMeDepth;
        $this->maxFindMeFollowMeDepth                              = new CallProcessingMaxFindMeFollowMeDepth($maxFindMeFollowMeDepth);
        $this->maxRedirectionDepth                                 = new CallProcessingMaxRedirectionDepth($maxRedirectionDepth);
        $this->useMaxConcurrentFindMeFollowMeInvocations           = $useMaxConcurrentFindMeFollowMeInvocations;
        $this->maxConcurrentFindMeFollowMeInvocations              = new CallProcessingMaxConcurrentFindMeFollowMeInvocations($maxConcurrentFindMeFollowMeInvocations);
        $this->clidPolicy                                          = new CLIDPolicy($clidPolicy);
        $this->emergencyClidPolicy                                 = new CLIDPolicy($emergencyClidPolicy);
        $this->allowAlternateNumbersForRedirectingIdentity         = $allowAlternateNumbersForRedirectingIdentity;
        $this->blockCallingNameForExternalCalls                    = $blockCallingNameForExternalCalls;
        $this->args                                                = func_get_args();
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
        $maxCallTimeForAnsweredCallsMinutes and $this->maxCallTimeForAnsweredCallsMinutes = new CallProcessingMaxCallTimeForAnsweredCallsMinutes16($maxCallTimeForAnsweredCallsMinutes);
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

    public function setEnforceEnterpriseCallingLineIdentityRestriction($enforceEnterpriseCallingLineIdentityRestriction)
    {
        $enforceEnterpriseCallingLineIdentityRestriction and $this->enforceEnterpriseCallingLineIdentityRestriction = new xs:boolean($enforceEnterpriseCallingLineIdentityRestriction);
    }

    public function getEnforceEnterpriseCallingLineIdentityRestriction()
    {
        return (!$this->enforceEnterpriseCallingLineIdentityRestriction) ?: $this->enforceEnterpriseCallingLineIdentityRestriction->value();
    }

    public function setUseSettingLevel($useSettingLevel)
    {
        $useSettingLevel and $this->useSettingLevel = new ServiceProviderConferenceURISettingLevel($useSettingLevel);
    }

    public function getUseSettingLevel()
    {
        return (!$this->useSettingLevel) ?: $this->useSettingLevel->value();
    }

    public function setConferenceURI($conferenceURI)
    {
        $conferenceURI and $this->conferenceURI = new SIPURI($conferenceURI);
    }

    public function getConferenceURI()
    {
        return (!$this->conferenceURI) ?: $this->conferenceURI->value();
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

    public function setClidPolicy($clidPolicy)
    {
        $clidPolicy and $this->clidPolicy = new CLIDPolicy($clidPolicy);
    }

    public function getClidPolicy()
    {
        return (!$this->clidPolicy) ?: $this->clidPolicy->value();
    }

    public function setEmergencyClidPolicy($emergencyClidPolicy)
    {
        $emergencyClidPolicy and $this->emergencyClidPolicy = new CLIDPolicy($emergencyClidPolicy);
    }

    public function getEmergencyClidPolicy()
    {
        return (!$this->emergencyClidPolicy) ?: $this->emergencyClidPolicy->value();
    }

    public function setAllowAlternateNumbersForRedirectingIdentity($allowAlternateNumbersForRedirectingIdentity)
    {
        $allowAlternateNumbersForRedirectingIdentity and $this->allowAlternateNumbersForRedirectingIdentity = new xs:boolean($allowAlternateNumbersForRedirectingIdentity);
    }

    public function getAllowAlternateNumbersForRedirectingIdentity()
    {
        return (!$this->allowAlternateNumbersForRedirectingIdentity) ?: $this->allowAlternateNumbersForRedirectingIdentity->value();
    }

    public function setBlockCallingNameForExternalCalls($blockCallingNameForExternalCalls)
    {
        $blockCallingNameForExternalCalls and $this->blockCallingNameForExternalCalls = new xs:boolean($blockCallingNameForExternalCalls);
    }

    public function getBlockCallingNameForExternalCalls()
    {
        return (!$this->blockCallingNameForExternalCalls) ?: $this->blockCallingNameForExternalCalls->value();
    }
}
