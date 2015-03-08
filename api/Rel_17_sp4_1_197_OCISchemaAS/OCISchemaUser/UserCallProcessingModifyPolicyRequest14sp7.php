<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConcurrentFindMeFollowMeInvocations;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxCallTimeForAnsweredCallsMinutes16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxCallTimeForUnansweredCallsMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConcurrentRedirectedCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxFindMeFollowMeDepth;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxSimultaneousCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxRedirectionDepth;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaPolicySelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupCLIDPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaSetName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the user level data associated with Call Procesing Policy.
 *           The response is either a SuccessResponse or an ErrorResponse.
 *  
 *           The useUserCLIDSetting attribute controls the CLID settings 
 *           (clidPolicy, emergencyClidPolicy, allowAlternateNumbersForRedirectingIdentity, useGroupName, allowConfigurableCLIDForRedirectingIdentity)
 *           
 *           The useUserMediaSetting attribute controls the Media settings 
 *           (medisPolicySelection, supportedMediaSetName)
 *           
 *           The useUserCallLimitsSetting attribute controls the Call Limits setting 
 *           (useMaxSimultaneousCalls, maxSimultaneousCalls, useMaxSimultaneousVideoCalls, maxSimultaneousVideoCalls, useMaxCallTimeForAnsweredCalls, maxCallTimeForAnsweredCallsMinutes, useMaxCallTimeForUnansweredCalls, maxCallTimeForUnansweredCallsMinutes, useMaxConcurrentRedirectedCalls, useMaxFindMeFollowMeDepth, maxRedirectionDepth, useMaxConcurrentFindMeFollowMeInvocations, maxConcurrentFindMeFollowMeInvocations)
 * 
 *           The useUserDCLIDSetting controls the Dialable Caller ID settings (enableDialableCallerID)
 *           
 *           The following elements are only used in AS data mode:
 *            useUserDCLIDSetting
 *            enableDialableCallerID
 *            allowConfigurableCLIDForRedirectingIdentity
 */
class UserCallProcessingModifyPolicyRequest14sp7 extends ComplexType implements ComplexInterface
{
    public    $name                                        = __CLASS__;
    protected $userId                                      = null;
    protected $useUserCLIDSetting                          = null;
    protected $useUserMediaSetting                         = null;
    protected $useUserCallLimitsSetting                    = null;
    protected $useUserDCLIDSetting                         = null;
    protected $useMaxSimultaneousCalls                     = null;
    protected $maxSimultaneousCalls                        = null;
    protected $useMaxSimultaneousVideoCalls                = null;
    protected $maxSimultaneousVideoCalls                   = null;
    protected $useMaxCallTimeForAnsweredCalls              = null;
    protected $maxCallTimeForAnsweredCallsMinutes          = null;
    protected $useMaxCallTimeForUnansweredCalls            = null;
    protected $maxCallTimeForUnansweredCallsMinutes        = null;
    protected $mediaPolicySelection                        = null;
    protected $supportedMediaSetName                       = null;
    protected $useMaxConcurrentRedirectedCalls             = null;
    protected $maxConcurrentRedirectedCalls                = null;
    protected $useMaxFindMeFollowMeDepth                   = null;
    protected $maxFindMeFollowMeDepth                      = null;
    protected $maxRedirectionDepth                         = null;
    protected $useMaxConcurrentFindMeFollowMeInvocations   = null;
    protected $maxConcurrentFindMeFollowMeInvocations      = null;
    protected $clidPolicy                                  = null;
    protected $emergencyClidPolicy                         = null;
    protected $allowAlternateNumbersForRedirectingIdentity = null;
    protected $useGroupName                                = null;
    protected $enableDialableCallerID                      = null;
    protected $blockCallingNameForExternalCalls            = null;
    protected $allowConfigurableCLIDForRedirectingIdentity = null;

    public function __construct(
         $userId,
         $useUserCLIDSetting = null,
         $useUserMediaSetting = null,
         $useUserCallLimitsSetting = null,
         $useUserDCLIDSetting = null,
         $useMaxSimultaneousCalls = null,
         $maxSimultaneousCalls = null,
         $useMaxSimultaneousVideoCalls = null,
         $maxSimultaneousVideoCalls = null,
         $useMaxCallTimeForAnsweredCalls = null,
         $maxCallTimeForAnsweredCallsMinutes = null,
         $useMaxCallTimeForUnansweredCalls = null,
         $maxCallTimeForUnansweredCallsMinutes = null,
         $mediaPolicySelection = null,
         $supportedMediaSetName = null,
         $useMaxConcurrentRedirectedCalls = null,
         $maxConcurrentRedirectedCalls = null,
         $useMaxFindMeFollowMeDepth = null,
         $maxFindMeFollowMeDepth = null,
         $maxRedirectionDepth = null,
         $useMaxConcurrentFindMeFollowMeInvocations = null,
         $maxConcurrentFindMeFollowMeInvocations = null,
         $clidPolicy = null,
         $emergencyClidPolicy = null,
         $allowAlternateNumbersForRedirectingIdentity = null,
         $useGroupName = null,
         $enableDialableCallerID = null,
         $blockCallingNameForExternalCalls = null,
         $allowConfigurableCLIDForRedirectingIdentity = null
    ) {
        $this->setUserId($userId);
        $this->setUseUserCLIDSetting($useUserCLIDSetting);
        $this->setUseUserMediaSetting($useUserMediaSetting);
        $this->setUseUserCallLimitsSetting($useUserCallLimitsSetting);
        $this->setUseUserDCLIDSetting($useUserDCLIDSetting);
        $this->setUseMaxSimultaneousCalls($useMaxSimultaneousCalls);
        $this->setMaxSimultaneousCalls($maxSimultaneousCalls);
        $this->setUseMaxSimultaneousVideoCalls($useMaxSimultaneousVideoCalls);
        $this->setMaxSimultaneousVideoCalls($maxSimultaneousVideoCalls);
        $this->setUseMaxCallTimeForAnsweredCalls($useMaxCallTimeForAnsweredCalls);
        $this->setMaxCallTimeForAnsweredCallsMinutes($maxCallTimeForAnsweredCallsMinutes);
        $this->setUseMaxCallTimeForUnansweredCalls($useMaxCallTimeForUnansweredCalls);
        $this->setMaxCallTimeForUnansweredCallsMinutes($maxCallTimeForUnansweredCallsMinutes);
        $this->setMediaPolicySelection($mediaPolicySelection);
        $this->setSupportedMediaSetName($supportedMediaSetName);
        $this->setUseMaxConcurrentRedirectedCalls($useMaxConcurrentRedirectedCalls);
        $this->setMaxConcurrentRedirectedCalls($maxConcurrentRedirectedCalls);
        $this->setUseMaxFindMeFollowMeDepth($useMaxFindMeFollowMeDepth);
        $this->setMaxFindMeFollowMeDepth($maxFindMeFollowMeDepth);
        $this->setMaxRedirectionDepth($maxRedirectionDepth);
        $this->setUseMaxConcurrentFindMeFollowMeInvocations($useMaxConcurrentFindMeFollowMeInvocations);
        $this->setMaxConcurrentFindMeFollowMeInvocations($maxConcurrentFindMeFollowMeInvocations);
        $this->setClidPolicy($clidPolicy);
        $this->setEmergencyClidPolicy($emergencyClidPolicy);
        $this->setAllowAlternateNumbersForRedirectingIdentity($allowAlternateNumbersForRedirectingIdentity);
        $this->setUseGroupName($useGroupName);
        $this->setEnableDialableCallerID($enableDialableCallerID);
        $this->setBlockCallingNameForExternalCalls($blockCallingNameForExternalCalls);
        $this->setAllowConfigurableCLIDForRedirectingIdentity($allowConfigurableCLIDForRedirectingIdentity);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

    /**
     * 
     */
    public function setUseUserCLIDSetting($useUserCLIDSetting = null)
    {
        $this->useUserCLIDSetting = (boolean) $useUserCLIDSetting;
    }

    /**
     * 
     */
    public function getUseUserCLIDSetting()
    {
        return (!$this->useUserCLIDSetting) ?: $this->useUserCLIDSetting->getValue();
    }

    /**
     * 
     */
    public function setUseUserMediaSetting($useUserMediaSetting = null)
    {
        $this->useUserMediaSetting = (boolean) $useUserMediaSetting;
    }

    /**
     * 
     */
    public function getUseUserMediaSetting()
    {
        return (!$this->useUserMediaSetting) ?: $this->useUserMediaSetting->getValue();
    }

    /**
     * 
     */
    public function setUseUserCallLimitsSetting($useUserCallLimitsSetting = null)
    {
        $this->useUserCallLimitsSetting = (boolean) $useUserCallLimitsSetting;
    }

    /**
     * 
     */
    public function getUseUserCallLimitsSetting()
    {
        return (!$this->useUserCallLimitsSetting) ?: $this->useUserCallLimitsSetting->getValue();
    }

    /**
     * 
     */
    public function setUseUserDCLIDSetting($useUserDCLIDSetting = null)
    {
        $this->useUserDCLIDSetting = (boolean) $useUserDCLIDSetting;
    }

    /**
     * 
     */
    public function getUseUserDCLIDSetting()
    {
        return (!$this->useUserDCLIDSetting) ?: $this->useUserDCLIDSetting->getValue();
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
        return (!$this->useMaxSimultaneousCalls) ?: $this->useMaxSimultaneousCalls->getValue();
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
        return (!$this->useMaxSimultaneousVideoCalls) ?: $this->useMaxSimultaneousVideoCalls->getValue();
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
        return (!$this->useMaxCallTimeForAnsweredCalls) ?: $this->useMaxCallTimeForAnsweredCalls->getValue();
    }

    /**
     * Maximum Call Time for Answered Calls
     */
    public function setMaxCallTimeForAnsweredCallsMinutes($maxCallTimeForAnsweredCallsMinutes = null)
    {
        $this->maxCallTimeForAnsweredCallsMinutes = ($maxCallTimeForAnsweredCallsMinutes InstanceOf CallProcessingMaxCallTimeForAnsweredCallsMinutes16)
             ? $maxCallTimeForAnsweredCallsMinutes
             : new CallProcessingMaxCallTimeForAnsweredCallsMinutes16($maxCallTimeForAnsweredCallsMinutes);
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
        return (!$this->useMaxCallTimeForUnansweredCalls) ?: $this->useMaxCallTimeForUnansweredCalls->getValue();
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
        return (!$this->useMaxConcurrentRedirectedCalls) ?: $this->useMaxConcurrentRedirectedCalls->getValue();
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
        return (!$this->useMaxFindMeFollowMeDepth) ?: $this->useMaxFindMeFollowMeDepth->getValue();
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
        return (!$this->useMaxConcurrentFindMeFollowMeInvocations) ?: $this->useMaxConcurrentFindMeFollowMeInvocations->getValue();
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
        return (!$this->allowAlternateNumbersForRedirectingIdentity) ?: $this->allowAlternateNumbersForRedirectingIdentity->getValue();
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
        return (!$this->useGroupName) ?: $this->useGroupName->getValue();
    }

    /**
     * 
     */
    public function setEnableDialableCallerID($enableDialableCallerID = null)
    {
        $this->enableDialableCallerID = (boolean) $enableDialableCallerID;
    }

    /**
     * 
     */
    public function getEnableDialableCallerID()
    {
        return (!$this->enableDialableCallerID) ?: $this->enableDialableCallerID->getValue();
    }

    /**
     * 
     */
    public function setBlockCallingNameForExternalCalls($blockCallingNameForExternalCalls = null)
    {
        $this->blockCallingNameForExternalCalls = (boolean) $blockCallingNameForExternalCalls;
    }

    /**
     * 
     */
    public function getBlockCallingNameForExternalCalls()
    {
        return (!$this->blockCallingNameForExternalCalls) ?: $this->blockCallingNameForExternalCalls->getValue();
    }

    /**
     * 
     */
    public function setAllowConfigurableCLIDForRedirectingIdentity($allowConfigurableCLIDForRedirectingIdentity = null)
    {
        $this->allowConfigurableCLIDForRedirectingIdentity = (boolean) $allowConfigurableCLIDForRedirectingIdentity;
    }

    /**
     * 
     */
    public function getAllowConfigurableCLIDForRedirectingIdentity()
    {
        return (!$this->allowConfigurableCLIDForRedirectingIdentity) ?: $this->allowConfigurableCLIDForRedirectingIdentity->getValue();
    }
}
