<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConcurrentFindMeFollowMeInvocations;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxCallTimeForUnansweredCallsMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxCallTimeForAnsweredCallsMinutes16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConcurrentRedirectedCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxFindMeFollowMeDepth;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxSimultaneousCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxRedirectionDepth;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaPolicySelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupCLIDPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaSetName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserCallProcessingGetPolicyRequest17.
 * 	      The useUserCLIDSetting attribute controls the CLID settings 
 * 	      (clidPolicy, emergencyClidPolicy, allowAlternateNumbersForRedirectingIdentity, useGroupName)
 * 	      
 *           The useUserMediaSetting attribute controls the Media settings 
 *           (medisPolicySelection, supportedMediaSetName)
 *           
 *           The useUserCallLimitsSetting attribute controls the Call Limits setting 
 *           (useMaxSimultaneousCalls, maxSimultaneousCalls, useMaxSimultaneousVideoCalls, maxSimultaneousVideoCalls, useMaxCallTimeForAnsweredCalls, maxCallTimeForAnsweredCallsMinutes, useMaxCallTimeForUnansweredCalls, maxCallTimeForUnansweredCallsMinutes, useMaxConcurrentRedirectedCalls, useMaxFindMeFollowMeDepth, maxRedirectionDepth, useMaxConcurrentFindMeFollowMeInvocations, maxConcurrentFindMeFollowMeInvocations)
 */
class UserCallProcessingGetPolicyResponse17 extends ComplexType implements ComplexInterface
{
    public    $name                                         = __CLASS__;
    protected $useUserCLIDSetting                           = null;
    protected $useUserMediaSetting                          = null;
    protected $useUserCallLimitsSetting                     = null;
    protected $useMaxSimultaneousCalls                      = null;
    protected $maxSimultaneousCalls                         = null;
    protected $useMaxSimultaneousVideoCalls                 = null;
    protected $maxSimultaneousVideoCalls                    = null;
    protected $useMaxCallTimeForAnsweredCalls               = null;
    protected $maxCallTimeForAnsweredCallsMinutes           = null;
    protected $useMaxCallTimeForUnansweredCalls             = null;
    protected $maxCallTimeForUnansweredCallsMinutes         = null;
    protected $mediaPolicySelection                         = null;
    protected $supportedMediaSetName                        = null;
    protected $useMaxConcurrentRedirectedCalls              = null;
    protected $maxConcurrentRedirectedCalls                 = null;
    protected $useMaxFindMeFollowMeDepth                    = null;
    protected $maxFindMeFollowMeDepth                       = null;
    protected $maxRedirectionDepth                          = null;
    protected $useMaxConcurrentFindMeFollowMeInvocations    = null;
    protected $maxConcurrentFindMeFollowMeInvocations       = null;
    protected $clidPolicy                                   = null;
    protected $emergencyClidPolicy                          = null;
    protected $allowAlternateNumbersForRedirectingIdentity  = null;
    protected $useGroupName                                 = null;
    protected $blockCallingNameForExternalCalls             = null;


    public function setUseUserCLIDSetting(xs:boolean $useUserCLIDSetting = null)
    {
    }

    public function getUseUserCLIDSetting()
    {
        return (!$this->useUserCLIDSetting) ?: $this->useUserCLIDSetting->value();
    }

    public function setUseUserMediaSetting(xs:boolean $useUserMediaSetting = null)
    {
    }

    public function getUseUserMediaSetting()
    {
        return (!$this->useUserMediaSetting) ?: $this->useUserMediaSetting->value();
    }

    public function setUseUserCallLimitsSetting(xs:boolean $useUserCallLimitsSetting = null)
    {
    }

    public function getUseUserCallLimitsSetting()
    {
        return (!$this->useUserCallLimitsSetting) ?: $this->useUserCallLimitsSetting->value();
    }

    public function setUseMaxSimultaneousCalls(xs:boolean $useMaxSimultaneousCalls = null)
    {
    }

    public function getUseMaxSimultaneousCalls()
    {
        return (!$this->useMaxSimultaneousCalls) ?: $this->useMaxSimultaneousCalls->value();
    }

    public function setMaxSimultaneousCalls($maxSimultaneousCalls = null)
    {
        $this->maxSimultaneousCalls = ($maxSimultaneousCalls InstanceOf CallProcessingMaxSimultaneousCalls)
             ? $maxSimultaneousCalls
             : new CallProcessingMaxSimultaneousCalls($maxSimultaneousCalls);
    }

    public function getMaxSimultaneousCalls()
    {
        return (!$this->maxSimultaneousCalls) ?: $this->maxSimultaneousCalls->value();
    }

    public function setUseMaxSimultaneousVideoCalls(xs:boolean $useMaxSimultaneousVideoCalls = null)
    {
    }

    public function getUseMaxSimultaneousVideoCalls()
    {
        return (!$this->useMaxSimultaneousVideoCalls) ?: $this->useMaxSimultaneousVideoCalls->value();
    }

    public function setMaxSimultaneousVideoCalls($maxSimultaneousVideoCalls = null)
    {
        $this->maxSimultaneousVideoCalls = ($maxSimultaneousVideoCalls InstanceOf CallProcessingMaxSimultaneousCalls)
             ? $maxSimultaneousVideoCalls
             : new CallProcessingMaxSimultaneousCalls($maxSimultaneousVideoCalls);
    }

    public function getMaxSimultaneousVideoCalls()
    {
        return (!$this->maxSimultaneousVideoCalls) ?: $this->maxSimultaneousVideoCalls->value();
    }

    public function setUseMaxCallTimeForAnsweredCalls(xs:boolean $useMaxCallTimeForAnsweredCalls = null)
    {
    }

    public function getUseMaxCallTimeForAnsweredCalls()
    {
        return (!$this->useMaxCallTimeForAnsweredCalls) ?: $this->useMaxCallTimeForAnsweredCalls->value();
    }

    public function setMaxCallTimeForAnsweredCallsMinutes($maxCallTimeForAnsweredCallsMinutes = null)
    {
        $this->maxCallTimeForAnsweredCallsMinutes = ($maxCallTimeForAnsweredCallsMinutes InstanceOf CallProcessingMaxCallTimeForAnsweredCallsMinutes16)
             ? $maxCallTimeForAnsweredCallsMinutes
             : new CallProcessingMaxCallTimeForAnsweredCallsMinutes16($maxCallTimeForAnsweredCallsMinutes);
    }

    public function getMaxCallTimeForAnsweredCallsMinutes()
    {
        return (!$this->maxCallTimeForAnsweredCallsMinutes) ?: $this->maxCallTimeForAnsweredCallsMinutes->value();
    }

    public function setUseMaxCallTimeForUnansweredCalls(xs:boolean $useMaxCallTimeForUnansweredCalls = null)
    {
    }

    public function getUseMaxCallTimeForUnansweredCalls()
    {
        return (!$this->useMaxCallTimeForUnansweredCalls) ?: $this->useMaxCallTimeForUnansweredCalls->value();
    }

    public function setMaxCallTimeForUnansweredCallsMinutes($maxCallTimeForUnansweredCallsMinutes = null)
    {
        $this->maxCallTimeForUnansweredCallsMinutes = ($maxCallTimeForUnansweredCallsMinutes InstanceOf CallProcessingMaxCallTimeForUnansweredCallsMinutes)
             ? $maxCallTimeForUnansweredCallsMinutes
             : new CallProcessingMaxCallTimeForUnansweredCallsMinutes($maxCallTimeForUnansweredCallsMinutes);
    }

    public function getMaxCallTimeForUnansweredCallsMinutes()
    {
        return (!$this->maxCallTimeForUnansweredCallsMinutes) ?: $this->maxCallTimeForUnansweredCallsMinutes->value();
    }

    public function setMediaPolicySelection($mediaPolicySelection = null)
    {
        $this->mediaPolicySelection = ($mediaPolicySelection InstanceOf MediaPolicySelection)
             ? $mediaPolicySelection
             : new MediaPolicySelection($mediaPolicySelection);
    }

    public function getMediaPolicySelection()
    {
        return (!$this->mediaPolicySelection) ?: $this->mediaPolicySelection->value();
    }

    public function setSupportedMediaSetName($supportedMediaSetName = null)
    {
        $this->supportedMediaSetName = ($supportedMediaSetName InstanceOf MediaSetName)
             ? $supportedMediaSetName
             : new MediaSetName($supportedMediaSetName);
    }

    public function getSupportedMediaSetName()
    {
        return (!$this->supportedMediaSetName) ?: $this->supportedMediaSetName->value();
    }

    public function setUseMaxConcurrentRedirectedCalls(xs:boolean $useMaxConcurrentRedirectedCalls = null)
    {
    }

    public function getUseMaxConcurrentRedirectedCalls()
    {
        return (!$this->useMaxConcurrentRedirectedCalls) ?: $this->useMaxConcurrentRedirectedCalls->value();
    }

    public function setMaxConcurrentRedirectedCalls($maxConcurrentRedirectedCalls = null)
    {
        $this->maxConcurrentRedirectedCalls = ($maxConcurrentRedirectedCalls InstanceOf CallProcessingMaxConcurrentRedirectedCalls)
             ? $maxConcurrentRedirectedCalls
             : new CallProcessingMaxConcurrentRedirectedCalls($maxConcurrentRedirectedCalls);
    }

    public function getMaxConcurrentRedirectedCalls()
    {
        return (!$this->maxConcurrentRedirectedCalls) ?: $this->maxConcurrentRedirectedCalls->value();
    }

    public function setUseMaxFindMeFollowMeDepth(xs:boolean $useMaxFindMeFollowMeDepth = null)
    {
    }

    public function getUseMaxFindMeFollowMeDepth()
    {
        return (!$this->useMaxFindMeFollowMeDepth) ?: $this->useMaxFindMeFollowMeDepth->value();
    }

    public function setMaxFindMeFollowMeDepth($maxFindMeFollowMeDepth = null)
    {
        $this->maxFindMeFollowMeDepth = ($maxFindMeFollowMeDepth InstanceOf CallProcessingMaxFindMeFollowMeDepth)
             ? $maxFindMeFollowMeDepth
             : new CallProcessingMaxFindMeFollowMeDepth($maxFindMeFollowMeDepth);
    }

    public function getMaxFindMeFollowMeDepth()
    {
        return (!$this->maxFindMeFollowMeDepth) ?: $this->maxFindMeFollowMeDepth->value();
    }

    public function setMaxRedirectionDepth($maxRedirectionDepth = null)
    {
        $this->maxRedirectionDepth = ($maxRedirectionDepth InstanceOf CallProcessingMaxRedirectionDepth)
             ? $maxRedirectionDepth
             : new CallProcessingMaxRedirectionDepth($maxRedirectionDepth);
    }

    public function getMaxRedirectionDepth()
    {
        return (!$this->maxRedirectionDepth) ?: $this->maxRedirectionDepth->value();
    }

    public function setUseMaxConcurrentFindMeFollowMeInvocations(xs:boolean $useMaxConcurrentFindMeFollowMeInvocations = null)
    {
    }

    public function getUseMaxConcurrentFindMeFollowMeInvocations()
    {
        return (!$this->useMaxConcurrentFindMeFollowMeInvocations) ?: $this->useMaxConcurrentFindMeFollowMeInvocations->value();
    }

    public function setMaxConcurrentFindMeFollowMeInvocations($maxConcurrentFindMeFollowMeInvocations = null)
    {
        $this->maxConcurrentFindMeFollowMeInvocations = ($maxConcurrentFindMeFollowMeInvocations InstanceOf CallProcessingMaxConcurrentFindMeFollowMeInvocations)
             ? $maxConcurrentFindMeFollowMeInvocations
             : new CallProcessingMaxConcurrentFindMeFollowMeInvocations($maxConcurrentFindMeFollowMeInvocations);
    }

    public function getMaxConcurrentFindMeFollowMeInvocations()
    {
        return (!$this->maxConcurrentFindMeFollowMeInvocations) ?: $this->maxConcurrentFindMeFollowMeInvocations->value();
    }

    public function setClidPolicy($clidPolicy = null)
    {
        $this->clidPolicy = ($clidPolicy InstanceOf GroupCLIDPolicy)
             ? $clidPolicy
             : new GroupCLIDPolicy($clidPolicy);
    }

    public function getClidPolicy()
    {
        return (!$this->clidPolicy) ?: $this->clidPolicy->value();
    }

    public function setEmergencyClidPolicy($emergencyClidPolicy = null)
    {
        $this->emergencyClidPolicy = ($emergencyClidPolicy InstanceOf GroupCLIDPolicy)
             ? $emergencyClidPolicy
             : new GroupCLIDPolicy($emergencyClidPolicy);
    }

    public function getEmergencyClidPolicy()
    {
        return (!$this->emergencyClidPolicy) ?: $this->emergencyClidPolicy->value();
    }

    public function setAllowAlternateNumbersForRedirectingIdentity(xs:boolean $allowAlternateNumbersForRedirectingIdentity = null)
    {
    }

    public function getAllowAlternateNumbersForRedirectingIdentity()
    {
        return (!$this->allowAlternateNumbersForRedirectingIdentity) ?: $this->allowAlternateNumbersForRedirectingIdentity->value();
    }

    public function setUseGroupName(xs:boolean $useGroupName = null)
    {
    }

    public function getUseGroupName()
    {
        return (!$this->useGroupName) ?: $this->useGroupName->value();
    }

    public function setBlockCallingNameForExternalCalls(xs:boolean $blockCallingNameForExternalCalls = null)
    {
    }

    public function getBlockCallingNameForExternalCalls()
    {
        return (!$this->blockCallingNameForExternalCalls) ?: $this->blockCallingNameForExternalCalls->value();
    }
}
