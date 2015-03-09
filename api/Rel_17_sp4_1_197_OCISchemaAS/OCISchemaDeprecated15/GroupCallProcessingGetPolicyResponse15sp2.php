<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConcurrentFindMeFollowMeInvocations;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\CallProcessingMaxCallTimeForAnsweredCallsMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxCallTimeForUnansweredCallsMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConcurrentRedirectedCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxFindMeFollowMeDepth;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxSimultaneousCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxRedirectionDepth;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkUsageSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaPolicySelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupCLIDPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaSetName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\GroupCallProcessingGetPolicyResponse15sp2;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupCallProcessingGetPolicyRequest15sp2.
 */
class GroupCallProcessingGetPolicyResponse15sp2 extends ComplexType implements ComplexInterface
{
    public    $name                                                = __CLASS__;
    protected $useGroupCLIDSetting                                 = null;
    protected $useGroupMediaSetting                                = null;
    protected $useGroupCallLimitsSetting                           = null;
    protected $useGroupTranslationRoutingSetting                   = null;
    protected $useMaxSimultaneousCalls                             = null;
    protected $maxSimultaneousCalls                                = null;
    protected $useMaxSimultaneousVideoCalls                        = null;
    protected $maxSimultaneousVideoCalls                           = null;
    protected $useMaxCallTimeForAnsweredCalls                      = null;
    protected $maxCallTimeForAnsweredCallsMinutes                  = null;
    protected $useMaxCallTimeForUnansweredCalls                    = null;
    protected $maxCallTimeForUnansweredCallsMinutes                = null;
    protected $mediaPolicySelection                                = null;
    protected $supportedMediaSetName                               = null;
    protected $networkUsageSelection                               = null;
    protected $enforceGroupCallingLineIdentityRestriction          = null;
    protected $allowEnterpriseGroupCallTypingForPrivateDialingPlan = null;
    protected $allowEnterpriseGroupCallTypingForPublicDialingPlan  = null;
    protected $overrideCLIDRestrictionForPrivateCallCategory       = null;
    protected $useEnterpriseCLIDForPrivateCallCategory             = null;
    protected $enableEnterpriseExtensionDialing                    = null;
    protected $useMaxConcurrentRedirectedCalls                     = null;
    protected $maxConcurrentRedirectedCalls                        = null;
    protected $useMaxFindMeFollowMeDepth                           = null;
    protected $maxFindMeFollowMeDepth                              = null;
    protected $maxRedirectionDepth                                 = null;
    protected $useMaxConcurrentFindMeFollowMeInvocations           = null;
    protected $maxConcurrentFindMeFollowMeInvocations              = null;
    protected $clidPolicy                                          = null;
    protected $emergencyClidPolicy                                 = null;
    protected $allowAlternateNumbersForRedirectingIdentity         = null;
    protected $useGroupName                                        = null;

    /**
     * @return GroupCallProcessingGetPolicyResponse15sp2
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUseGroupCLIDSetting($useGroupCLIDSetting = null)
    {
        $this->useGroupCLIDSetting = (boolean) $useGroupCLIDSetting;
    }

    /**
     * 
     */
    public function getUseGroupCLIDSetting()
    {
        return (!$this->useGroupCLIDSetting) ?: $this->useGroupCLIDSetting;
    }

    /**
     * 
     */
    public function setUseGroupMediaSetting($useGroupMediaSetting = null)
    {
        $this->useGroupMediaSetting = (boolean) $useGroupMediaSetting;
    }

    /**
     * 
     */
    public function getUseGroupMediaSetting()
    {
        return (!$this->useGroupMediaSetting) ?: $this->useGroupMediaSetting;
    }

    /**
     * 
     */
    public function setUseGroupCallLimitsSetting($useGroupCallLimitsSetting = null)
    {
        $this->useGroupCallLimitsSetting = (boolean) $useGroupCallLimitsSetting;
    }

    /**
     * 
     */
    public function getUseGroupCallLimitsSetting()
    {
        return (!$this->useGroupCallLimitsSetting) ?: $this->useGroupCallLimitsSetting;
    }

    /**
     * 
     */
    public function setUseGroupTranslationRoutingSetting($useGroupTranslationRoutingSetting = null)
    {
        $this->useGroupTranslationRoutingSetting = (boolean) $useGroupTranslationRoutingSetting;
    }

    /**
     * 
     */
    public function getUseGroupTranslationRoutingSetting()
    {
        return (!$this->useGroupTranslationRoutingSetting) ?: $this->useGroupTranslationRoutingSetting;
    }

    /**
     * 
     */
    public function setUseMaxSimultaneousCalls($useMaxSimultaneousCalls = null)
    {
        $this->useMaxSimultaneousCalls = (boolean) $useMaxSimultaneousCalls;
    }

    /**
     * 
     */
    public function getUseMaxSimultaneousCalls()
    {
        return (!$this->useMaxSimultaneousCalls) ?: $this->useMaxSimultaneousCalls;
    }

    /**
     * Maximum Number of Simultaneous Calls
     */
    public function setMaxSimultaneousCalls($maxSimultaneousCalls = null)
    {
        $this->maxSimultaneousCalls = ($maxSimultaneousCalls InstanceOf CallProcessingMaxSimultaneousCalls)
             ? $maxSimultaneousCalls
             : new CallProcessingMaxSimultaneousCalls($maxSimultaneousCalls);
    }

    /**
     * Maximum Number of Simultaneous Calls
     */
    public function getMaxSimultaneousCalls()
    {
        return (!$this->maxSimultaneousCalls) ?: $this->maxSimultaneousCalls->getValue();
    }

    /**
     * 
     */
    public function setUseMaxSimultaneousVideoCalls($useMaxSimultaneousVideoCalls = null)
    {
        $this->useMaxSimultaneousVideoCalls = (boolean) $useMaxSimultaneousVideoCalls;
    }

    /**
     * 
     */
    public function getUseMaxSimultaneousVideoCalls()
    {
        return (!$this->useMaxSimultaneousVideoCalls) ?: $this->useMaxSimultaneousVideoCalls;
    }

    /**
     * Maximum Number of Simultaneous Calls
     */
    public function setMaxSimultaneousVideoCalls($maxSimultaneousVideoCalls = null)
    {
        $this->maxSimultaneousVideoCalls = ($maxSimultaneousVideoCalls InstanceOf CallProcessingMaxSimultaneousCalls)
             ? $maxSimultaneousVideoCalls
             : new CallProcessingMaxSimultaneousCalls($maxSimultaneousVideoCalls);
    }

    /**
     * Maximum Number of Simultaneous Calls
     */
    public function getMaxSimultaneousVideoCalls()
    {
        return (!$this->maxSimultaneousVideoCalls) ?: $this->maxSimultaneousVideoCalls->getValue();
    }

    /**
     * 
     */
    public function setUseMaxCallTimeForAnsweredCalls($useMaxCallTimeForAnsweredCalls = null)
    {
        $this->useMaxCallTimeForAnsweredCalls = (boolean) $useMaxCallTimeForAnsweredCalls;
    }

    /**
     * 
     */
    public function getUseMaxCallTimeForAnsweredCalls()
    {
        return (!$this->useMaxCallTimeForAnsweredCalls) ?: $this->useMaxCallTimeForAnsweredCalls;
    }

    /**
     * Maximum Call Time for Answered Calls
     */
    public function setMaxCallTimeForAnsweredCallsMinutes($maxCallTimeForAnsweredCallsMinutes = null)
    {
        $this->maxCallTimeForAnsweredCallsMinutes = ($maxCallTimeForAnsweredCallsMinutes InstanceOf CallProcessingMaxCallTimeForAnsweredCallsMinutes)
             ? $maxCallTimeForAnsweredCallsMinutes
             : new CallProcessingMaxCallTimeForAnsweredCallsMinutes($maxCallTimeForAnsweredCallsMinutes);
    }

    /**
     * Maximum Call Time for Answered Calls
     */
    public function getMaxCallTimeForAnsweredCallsMinutes()
    {
        return (!$this->maxCallTimeForAnsweredCallsMinutes) ?: $this->maxCallTimeForAnsweredCallsMinutes->getValue();
    }

    /**
     * 
     */
    public function setUseMaxCallTimeForUnansweredCalls($useMaxCallTimeForUnansweredCalls = null)
    {
        $this->useMaxCallTimeForUnansweredCalls = (boolean) $useMaxCallTimeForUnansweredCalls;
    }

    /**
     * 
     */
    public function getUseMaxCallTimeForUnansweredCalls()
    {
        return (!$this->useMaxCallTimeForUnansweredCalls) ?: $this->useMaxCallTimeForUnansweredCalls;
    }

    /**
     * Maximum Call Time for Unanswered Calls
     */
    public function setMaxCallTimeForUnansweredCallsMinutes($maxCallTimeForUnansweredCallsMinutes = null)
    {
        $this->maxCallTimeForUnansweredCallsMinutes = ($maxCallTimeForUnansweredCallsMinutes InstanceOf CallProcessingMaxCallTimeForUnansweredCallsMinutes)
             ? $maxCallTimeForUnansweredCallsMinutes
             : new CallProcessingMaxCallTimeForUnansweredCallsMinutes($maxCallTimeForUnansweredCallsMinutes);
    }

    /**
     * Maximum Call Time for Unanswered Calls
     */
    public function getMaxCallTimeForUnansweredCallsMinutes()
    {
        return (!$this->maxCallTimeForUnansweredCallsMinutes) ?: $this->maxCallTimeForUnansweredCallsMinutes->getValue();
    }

    /**
     * Media Policy Selections.
     */
    public function setMediaPolicySelection($mediaPolicySelection = null)
    {
        $this->mediaPolicySelection = ($mediaPolicySelection InstanceOf MediaPolicySelection)
             ? $mediaPolicySelection
             : new MediaPolicySelection($mediaPolicySelection);
    }

    /**
     * Media Policy Selections.
     */
    public function getMediaPolicySelection()
    {
        return (!$this->mediaPolicySelection) ?: $this->mediaPolicySelection->getValue();
    }

    /**
     * Media Set name
     */
    public function setSupportedMediaSetName($supportedMediaSetName = null)
    {
        $this->supportedMediaSetName = ($supportedMediaSetName InstanceOf MediaSetName)
             ? $supportedMediaSetName
             : new MediaSetName($supportedMediaSetName);
    }

    /**
     * Media Set name
     */
    public function getSupportedMediaSetName()
    {
        return (!$this->supportedMediaSetName) ?: $this->supportedMediaSetName->getValue();
    }

    /**
     * Network Usage types.
     */
    public function setNetworkUsageSelection($networkUsageSelection = null)
    {
        $this->networkUsageSelection = ($networkUsageSelection InstanceOf NetworkUsageSelection)
             ? $networkUsageSelection
             : new NetworkUsageSelection($networkUsageSelection);
    }

    /**
     * Network Usage types.
     */
    public function getNetworkUsageSelection()
    {
        return (!$this->networkUsageSelection) ?: $this->networkUsageSelection->getValue();
    }

    /**
     * 
     */
    public function setEnforceGroupCallingLineIdentityRestriction($enforceGroupCallingLineIdentityRestriction = null)
    {
        $this->enforceGroupCallingLineIdentityRestriction = (boolean) $enforceGroupCallingLineIdentityRestriction;
    }

    /**
     * 
     */
    public function getEnforceGroupCallingLineIdentityRestriction()
    {
        return (!$this->enforceGroupCallingLineIdentityRestriction) ?: $this->enforceGroupCallingLineIdentityRestriction;
    }

    /**
     * 
     */
    public function setAllowEnterpriseGroupCallTypingForPrivateDialingPlan($allowEnterpriseGroupCallTypingForPrivateDialingPlan = null)
    {
        $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan = (boolean) $allowEnterpriseGroupCallTypingForPrivateDialingPlan;
    }

    /**
     * 
     */
    public function getAllowEnterpriseGroupCallTypingForPrivateDialingPlan()
    {
        return (!$this->allowEnterpriseGroupCallTypingForPrivateDialingPlan) ?: $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan;
    }

    /**
     * 
     */
    public function setAllowEnterpriseGroupCallTypingForPublicDialingPlan($allowEnterpriseGroupCallTypingForPublicDialingPlan = null)
    {
        $this->allowEnterpriseGroupCallTypingForPublicDialingPlan = (boolean) $allowEnterpriseGroupCallTypingForPublicDialingPlan;
    }

    /**
     * 
     */
    public function getAllowEnterpriseGroupCallTypingForPublicDialingPlan()
    {
        return (!$this->allowEnterpriseGroupCallTypingForPublicDialingPlan) ?: $this->allowEnterpriseGroupCallTypingForPublicDialingPlan;
    }

    /**
     * 
     */
    public function setOverrideCLIDRestrictionForPrivateCallCategory($overrideCLIDRestrictionForPrivateCallCategory = null)
    {
        $this->overrideCLIDRestrictionForPrivateCallCategory = (boolean) $overrideCLIDRestrictionForPrivateCallCategory;
    }

    /**
     * 
     */
    public function getOverrideCLIDRestrictionForPrivateCallCategory()
    {
        return (!$this->overrideCLIDRestrictionForPrivateCallCategory) ?: $this->overrideCLIDRestrictionForPrivateCallCategory;
    }

    /**
     * 
     */
    public function setUseEnterpriseCLIDForPrivateCallCategory($useEnterpriseCLIDForPrivateCallCategory = null)
    {
        $this->useEnterpriseCLIDForPrivateCallCategory = (boolean) $useEnterpriseCLIDForPrivateCallCategory;
    }

    /**
     * 
     */
    public function getUseEnterpriseCLIDForPrivateCallCategory()
    {
        return (!$this->useEnterpriseCLIDForPrivateCallCategory) ?: $this->useEnterpriseCLIDForPrivateCallCategory;
    }

    /**
     * 
     */
    public function setEnableEnterpriseExtensionDialing($enableEnterpriseExtensionDialing = null)
    {
        $this->enableEnterpriseExtensionDialing = (boolean) $enableEnterpriseExtensionDialing;
    }

    /**
     * 
     */
    public function getEnableEnterpriseExtensionDialing()
    {
        return (!$this->enableEnterpriseExtensionDialing) ?: $this->enableEnterpriseExtensionDialing;
    }

    /**
     * 
     */
    public function setUseMaxConcurrentRedirectedCalls($useMaxConcurrentRedirectedCalls = null)
    {
        $this->useMaxConcurrentRedirectedCalls = (boolean) $useMaxConcurrentRedirectedCalls;
    }

    /**
     * 
     */
    public function getUseMaxConcurrentRedirectedCalls()
    {
        return (!$this->useMaxConcurrentRedirectedCalls) ?: $this->useMaxConcurrentRedirectedCalls;
    }

    /**
     * Maximum Number of Concurrent Redirected Calls
     */
    public function setMaxConcurrentRedirectedCalls($maxConcurrentRedirectedCalls = null)
    {
        $this->maxConcurrentRedirectedCalls = ($maxConcurrentRedirectedCalls InstanceOf CallProcessingMaxConcurrentRedirectedCalls)
             ? $maxConcurrentRedirectedCalls
             : new CallProcessingMaxConcurrentRedirectedCalls($maxConcurrentRedirectedCalls);
    }

    /**
     * Maximum Number of Concurrent Redirected Calls
     */
    public function getMaxConcurrentRedirectedCalls()
    {
        return (!$this->maxConcurrentRedirectedCalls) ?: $this->maxConcurrentRedirectedCalls->getValue();
    }

    /**
     * 
     */
    public function setUseMaxFindMeFollowMeDepth($useMaxFindMeFollowMeDepth = null)
    {
        $this->useMaxFindMeFollowMeDepth = (boolean) $useMaxFindMeFollowMeDepth;
    }

    /**
     * 
     */
    public function getUseMaxFindMeFollowMeDepth()
    {
        return (!$this->useMaxFindMeFollowMeDepth) ?: $this->useMaxFindMeFollowMeDepth;
    }

    /**
     * Maximum Number of Find Me Follow Me Depth
     */
    public function setMaxFindMeFollowMeDepth($maxFindMeFollowMeDepth = null)
    {
        $this->maxFindMeFollowMeDepth = ($maxFindMeFollowMeDepth InstanceOf CallProcessingMaxFindMeFollowMeDepth)
             ? $maxFindMeFollowMeDepth
             : new CallProcessingMaxFindMeFollowMeDepth($maxFindMeFollowMeDepth);
    }

    /**
     * Maximum Number of Find Me Follow Me Depth
     */
    public function getMaxFindMeFollowMeDepth()
    {
        return (!$this->maxFindMeFollowMeDepth) ?: $this->maxFindMeFollowMeDepth->getValue();
    }

    /**
     * Maximum Number of Redirections Depth
     */
    public function setMaxRedirectionDepth($maxRedirectionDepth = null)
    {
        $this->maxRedirectionDepth = ($maxRedirectionDepth InstanceOf CallProcessingMaxRedirectionDepth)
             ? $maxRedirectionDepth
             : new CallProcessingMaxRedirectionDepth($maxRedirectionDepth);
    }

    /**
     * Maximum Number of Redirections Depth
     */
    public function getMaxRedirectionDepth()
    {
        return (!$this->maxRedirectionDepth) ?: $this->maxRedirectionDepth->getValue();
    }

    /**
     * 
     */
    public function setUseMaxConcurrentFindMeFollowMeInvocations($useMaxConcurrentFindMeFollowMeInvocations = null)
    {
        $this->useMaxConcurrentFindMeFollowMeInvocations = (boolean) $useMaxConcurrentFindMeFollowMeInvocations;
    }

    /**
     * 
     */
    public function getUseMaxConcurrentFindMeFollowMeInvocations()
    {
        return (!$this->useMaxConcurrentFindMeFollowMeInvocations) ?: $this->useMaxConcurrentFindMeFollowMeInvocations;
    }

    /**
     * Maximum Number of Concurrent Find Me/Follow Me Invocations
     */
    public function setMaxConcurrentFindMeFollowMeInvocations($maxConcurrentFindMeFollowMeInvocations = null)
    {
        $this->maxConcurrentFindMeFollowMeInvocations = ($maxConcurrentFindMeFollowMeInvocations InstanceOf CallProcessingMaxConcurrentFindMeFollowMeInvocations)
             ? $maxConcurrentFindMeFollowMeInvocations
             : new CallProcessingMaxConcurrentFindMeFollowMeInvocations($maxConcurrentFindMeFollowMeInvocations);
    }

    /**
     * Maximum Number of Concurrent Find Me/Follow Me Invocations
     */
    public function getMaxConcurrentFindMeFollowMeInvocations()
    {
        return (!$this->maxConcurrentFindMeFollowMeInvocations) ?: $this->maxConcurrentFindMeFollowMeInvocations->getValue();
    }

    /**
     * Calling Line ID Policy Selections.
     */
    public function setClidPolicy($clidPolicy = null)
    {
        $this->clidPolicy = ($clidPolicy InstanceOf GroupCLIDPolicy)
             ? $clidPolicy
             : new GroupCLIDPolicy($clidPolicy);
    }

    /**
     * Calling Line ID Policy Selections.
     */
    public function getClidPolicy()
    {
        return (!$this->clidPolicy) ?: $this->clidPolicy->getValue();
    }

    /**
     * Calling Line ID Policy Selections.
     */
    public function setEmergencyClidPolicy($emergencyClidPolicy = null)
    {
        $this->emergencyClidPolicy = ($emergencyClidPolicy InstanceOf GroupCLIDPolicy)
             ? $emergencyClidPolicy
             : new GroupCLIDPolicy($emergencyClidPolicy);
    }

    /**
     * Calling Line ID Policy Selections.
     */
    public function getEmergencyClidPolicy()
    {
        return (!$this->emergencyClidPolicy) ?: $this->emergencyClidPolicy->getValue();
    }

    /**
     * 
     */
    public function setAllowAlternateNumbersForRedirectingIdentity($allowAlternateNumbersForRedirectingIdentity = null)
    {
        $this->allowAlternateNumbersForRedirectingIdentity = (boolean) $allowAlternateNumbersForRedirectingIdentity;
    }

    /**
     * 
     */
    public function getAllowAlternateNumbersForRedirectingIdentity()
    {
        return (!$this->allowAlternateNumbersForRedirectingIdentity) ?: $this->allowAlternateNumbersForRedirectingIdentity;
    }

    /**
     * 
     */
    public function setUseGroupName($useGroupName = null)
    {
        $this->useGroupName = (boolean) $useGroupName;
    }

    /**
     * 
     */
    public function getUseGroupName()
    {
        return (!$this->useGroupName) ?: $this->useGroupName;
    }
}
