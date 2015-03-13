<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserCallProcessingGetPolicyRequest16.
 * 	      The useUserCLIDSetting attribute controls the CLID settings 
 * 	      (clidPolicy, emergencyClidPolicy, allowAlternateNumbersForRedirectingIdentity, useGroupName)
 * 	      
 *           The useUserMediaSetting attribute controls the Media settings 
 *           (medisPolicySelection, supportedMediaSetName)
 *           
 *           The useUserCallLimitsSetting attribute controls the Call Limits setting 
 *           (useMaxSimultaneousCalls, maxSimultaneousCalls, useMaxSimultaneousVideoCalls, maxSimultaneousVideoCalls, useMaxCallTimeForAnsweredCalls, maxCallTimeForAnsweredCallsMinutes, useMaxCallTimeForUnansweredCalls, maxCallTimeForUnansweredCallsMinutes, useMaxConcurrentRedirectedCalls, useMaxFindMeFollowMeDepth, maxRedirectionDepth, useMaxConcurrentFindMeFollowMeInvocations, maxConcurrentFindMeFollowMeInvocations)
 */
class UserCallProcessingGetPolicyResponse16 extends ComplexType implements ComplexInterface
{
    public    $name                                        = 'UserCallProcessingGetPolicyResponse16';
    protected $useUserCLIDSetting                          = null;
    protected $useUserMediaSetting                         = null;
    protected $useUserCallLimitsSetting                    = null;
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

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\UserCallProcessingGetPolicyResponse16 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUseUserCLIDSetting($useUserCLIDSetting = null)
    {
        if (!$useUserCLIDSetting) return $this;
        $this->useUserCLIDSetting = new PrimitiveType($useUserCLIDSetting);
        $this->useUserCLIDSetting->setName('useUserCLIDSetting');
        return $this;
    }

    /**
     * 
     * @return boolean $useUserCLIDSetting
     */
    public function getUseUserCLIDSetting()
    {
        return $this->useUserCLIDSetting->getValue();
    }

    /**
     * 
     */
    public function setUseUserMediaSetting($useUserMediaSetting = null)
    {
        if (!$useUserMediaSetting) return $this;
        $this->useUserMediaSetting = new PrimitiveType($useUserMediaSetting);
        $this->useUserMediaSetting->setName('useUserMediaSetting');
        return $this;
    }

    /**
     * 
     * @return boolean $useUserMediaSetting
     */
    public function getUseUserMediaSetting()
    {
        return $this->useUserMediaSetting->getValue();
    }

    /**
     * 
     */
    public function setUseUserCallLimitsSetting($useUserCallLimitsSetting = null)
    {
        if (!$useUserCallLimitsSetting) return $this;
        $this->useUserCallLimitsSetting = new PrimitiveType($useUserCallLimitsSetting);
        $this->useUserCallLimitsSetting->setName('useUserCallLimitsSetting');
        return $this;
    }

    /**
     * 
     * @return boolean $useUserCallLimitsSetting
     */
    public function getUseUserCallLimitsSetting()
    {
        return $this->useUserCallLimitsSetting->getValue();
    }

    /**
     * 
     */
    public function setUseMaxSimultaneousCalls($useMaxSimultaneousCalls = null)
    {
        if (!$useMaxSimultaneousCalls) return $this;
        $this->useMaxSimultaneousCalls = new PrimitiveType($useMaxSimultaneousCalls);
        $this->useMaxSimultaneousCalls->setName('useMaxSimultaneousCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $useMaxSimultaneousCalls
     */
    public function getUseMaxSimultaneousCalls()
    {
        return $this->useMaxSimultaneousCalls->getValue();
    }

    /**
     * 
     */
    public function setMaxSimultaneousCalls($maxSimultaneousCalls = null)
    {
        if (!$maxSimultaneousCalls) return $this;
        $this->maxSimultaneousCalls = ($maxSimultaneousCalls InstanceOf CallProcessingMaxSimultaneousCalls)
             ? $maxSimultaneousCalls
             : new CallProcessingMaxSimultaneousCalls($maxSimultaneousCalls);
        $this->maxSimultaneousCalls->setName('maxSimultaneousCalls');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxSimultaneousCalls $maxSimultaneousCalls
     */
    public function getMaxSimultaneousCalls()
    {
        return $this->maxSimultaneousCalls->getValue();
    }

    /**
     * 
     */
    public function setUseMaxSimultaneousVideoCalls($useMaxSimultaneousVideoCalls = null)
    {
        if (!$useMaxSimultaneousVideoCalls) return $this;
        $this->useMaxSimultaneousVideoCalls = new PrimitiveType($useMaxSimultaneousVideoCalls);
        $this->useMaxSimultaneousVideoCalls->setName('useMaxSimultaneousVideoCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $useMaxSimultaneousVideoCalls
     */
    public function getUseMaxSimultaneousVideoCalls()
    {
        return $this->useMaxSimultaneousVideoCalls->getValue();
    }

    /**
     * 
     */
    public function setMaxSimultaneousVideoCalls($maxSimultaneousVideoCalls = null)
    {
        if (!$maxSimultaneousVideoCalls) return $this;
        $this->maxSimultaneousVideoCalls = ($maxSimultaneousVideoCalls InstanceOf CallProcessingMaxSimultaneousCalls)
             ? $maxSimultaneousVideoCalls
             : new CallProcessingMaxSimultaneousCalls($maxSimultaneousVideoCalls);
        $this->maxSimultaneousVideoCalls->setName('maxSimultaneousVideoCalls');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxSimultaneousCalls $maxSimultaneousVideoCalls
     */
    public function getMaxSimultaneousVideoCalls()
    {
        return $this->maxSimultaneousVideoCalls->getValue();
    }

    /**
     * 
     */
    public function setUseMaxCallTimeForAnsweredCalls($useMaxCallTimeForAnsweredCalls = null)
    {
        if (!$useMaxCallTimeForAnsweredCalls) return $this;
        $this->useMaxCallTimeForAnsweredCalls = new PrimitiveType($useMaxCallTimeForAnsweredCalls);
        $this->useMaxCallTimeForAnsweredCalls->setName('useMaxCallTimeForAnsweredCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $useMaxCallTimeForAnsweredCalls
     */
    public function getUseMaxCallTimeForAnsweredCalls()
    {
        return $this->useMaxCallTimeForAnsweredCalls->getValue();
    }

    /**
     * 
     */
    public function setMaxCallTimeForAnsweredCallsMinutes($maxCallTimeForAnsweredCallsMinutes = null)
    {
        if (!$maxCallTimeForAnsweredCallsMinutes) return $this;
        $this->maxCallTimeForAnsweredCallsMinutes = ($maxCallTimeForAnsweredCallsMinutes InstanceOf CallProcessingMaxCallTimeForAnsweredCallsMinutes16)
             ? $maxCallTimeForAnsweredCallsMinutes
             : new CallProcessingMaxCallTimeForAnsweredCallsMinutes16($maxCallTimeForAnsweredCallsMinutes);
        $this->maxCallTimeForAnsweredCallsMinutes->setName('maxCallTimeForAnsweredCallsMinutes');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxCallTimeForAnsweredCallsMinutes16 $maxCallTimeForAnsweredCallsMinutes
     */
    public function getMaxCallTimeForAnsweredCallsMinutes()
    {
        return $this->maxCallTimeForAnsweredCallsMinutes->getValue();
    }

    /**
     * 
     */
    public function setUseMaxCallTimeForUnansweredCalls($useMaxCallTimeForUnansweredCalls = null)
    {
        if (!$useMaxCallTimeForUnansweredCalls) return $this;
        $this->useMaxCallTimeForUnansweredCalls = new PrimitiveType($useMaxCallTimeForUnansweredCalls);
        $this->useMaxCallTimeForUnansweredCalls->setName('useMaxCallTimeForUnansweredCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $useMaxCallTimeForUnansweredCalls
     */
    public function getUseMaxCallTimeForUnansweredCalls()
    {
        return $this->useMaxCallTimeForUnansweredCalls->getValue();
    }

    /**
     * 
     */
    public function setMaxCallTimeForUnansweredCallsMinutes($maxCallTimeForUnansweredCallsMinutes = null)
    {
        if (!$maxCallTimeForUnansweredCallsMinutes) return $this;
        $this->maxCallTimeForUnansweredCallsMinutes = ($maxCallTimeForUnansweredCallsMinutes InstanceOf CallProcessingMaxCallTimeForUnansweredCallsMinutes)
             ? $maxCallTimeForUnansweredCallsMinutes
             : new CallProcessingMaxCallTimeForUnansweredCallsMinutes($maxCallTimeForUnansweredCallsMinutes);
        $this->maxCallTimeForUnansweredCallsMinutes->setName('maxCallTimeForUnansweredCallsMinutes');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxCallTimeForUnansweredCallsMinutes $maxCallTimeForUnansweredCallsMinutes
     */
    public function getMaxCallTimeForUnansweredCallsMinutes()
    {
        return $this->maxCallTimeForUnansweredCallsMinutes->getValue();
    }

    /**
     * 
     */
    public function setMediaPolicySelection($mediaPolicySelection = null)
    {
        if (!$mediaPolicySelection) return $this;
        $this->mediaPolicySelection = ($mediaPolicySelection InstanceOf MediaPolicySelection)
             ? $mediaPolicySelection
             : new MediaPolicySelection($mediaPolicySelection);
        $this->mediaPolicySelection->setName('mediaPolicySelection');
        return $this;
    }

    /**
     * 
     * @return MediaPolicySelection $mediaPolicySelection
     */
    public function getMediaPolicySelection()
    {
        return $this->mediaPolicySelection->getValue();
    }

    /**
     * 
     */
    public function setSupportedMediaSetName($supportedMediaSetName = null)
    {
        if (!$supportedMediaSetName) return $this;
        $this->supportedMediaSetName = ($supportedMediaSetName InstanceOf MediaSetName)
             ? $supportedMediaSetName
             : new MediaSetName($supportedMediaSetName);
        $this->supportedMediaSetName->setName('supportedMediaSetName');
        return $this;
    }

    /**
     * 
     * @return MediaSetName $supportedMediaSetName
     */
    public function getSupportedMediaSetName()
    {
        return $this->supportedMediaSetName->getValue();
    }

    /**
     * 
     */
    public function setUseMaxConcurrentRedirectedCalls($useMaxConcurrentRedirectedCalls = null)
    {
        if (!$useMaxConcurrentRedirectedCalls) return $this;
        $this->useMaxConcurrentRedirectedCalls = new PrimitiveType($useMaxConcurrentRedirectedCalls);
        $this->useMaxConcurrentRedirectedCalls->setName('useMaxConcurrentRedirectedCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $useMaxConcurrentRedirectedCalls
     */
    public function getUseMaxConcurrentRedirectedCalls()
    {
        return $this->useMaxConcurrentRedirectedCalls->getValue();
    }

    /**
     * 
     */
    public function setMaxConcurrentRedirectedCalls($maxConcurrentRedirectedCalls = null)
    {
        if (!$maxConcurrentRedirectedCalls) return $this;
        $this->maxConcurrentRedirectedCalls = ($maxConcurrentRedirectedCalls InstanceOf CallProcessingMaxConcurrentRedirectedCalls)
             ? $maxConcurrentRedirectedCalls
             : new CallProcessingMaxConcurrentRedirectedCalls($maxConcurrentRedirectedCalls);
        $this->maxConcurrentRedirectedCalls->setName('maxConcurrentRedirectedCalls');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxConcurrentRedirectedCalls $maxConcurrentRedirectedCalls
     */
    public function getMaxConcurrentRedirectedCalls()
    {
        return $this->maxConcurrentRedirectedCalls->getValue();
    }

    /**
     * 
     */
    public function setUseMaxFindMeFollowMeDepth($useMaxFindMeFollowMeDepth = null)
    {
        if (!$useMaxFindMeFollowMeDepth) return $this;
        $this->useMaxFindMeFollowMeDepth = new PrimitiveType($useMaxFindMeFollowMeDepth);
        $this->useMaxFindMeFollowMeDepth->setName('useMaxFindMeFollowMeDepth');
        return $this;
    }

    /**
     * 
     * @return boolean $useMaxFindMeFollowMeDepth
     */
    public function getUseMaxFindMeFollowMeDepth()
    {
        return $this->useMaxFindMeFollowMeDepth->getValue();
    }

    /**
     * 
     */
    public function setMaxFindMeFollowMeDepth($maxFindMeFollowMeDepth = null)
    {
        if (!$maxFindMeFollowMeDepth) return $this;
        $this->maxFindMeFollowMeDepth = ($maxFindMeFollowMeDepth InstanceOf CallProcessingMaxFindMeFollowMeDepth)
             ? $maxFindMeFollowMeDepth
             : new CallProcessingMaxFindMeFollowMeDepth($maxFindMeFollowMeDepth);
        $this->maxFindMeFollowMeDepth->setName('maxFindMeFollowMeDepth');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxFindMeFollowMeDepth $maxFindMeFollowMeDepth
     */
    public function getMaxFindMeFollowMeDepth()
    {
        return $this->maxFindMeFollowMeDepth->getValue();
    }

    /**
     * 
     */
    public function setMaxRedirectionDepth($maxRedirectionDepth = null)
    {
        if (!$maxRedirectionDepth) return $this;
        $this->maxRedirectionDepth = ($maxRedirectionDepth InstanceOf CallProcessingMaxRedirectionDepth)
             ? $maxRedirectionDepth
             : new CallProcessingMaxRedirectionDepth($maxRedirectionDepth);
        $this->maxRedirectionDepth->setName('maxRedirectionDepth');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxRedirectionDepth $maxRedirectionDepth
     */
    public function getMaxRedirectionDepth()
    {
        return $this->maxRedirectionDepth->getValue();
    }

    /**
     * 
     */
    public function setUseMaxConcurrentFindMeFollowMeInvocations($useMaxConcurrentFindMeFollowMeInvocations = null)
    {
        if (!$useMaxConcurrentFindMeFollowMeInvocations) return $this;
        $this->useMaxConcurrentFindMeFollowMeInvocations = new PrimitiveType($useMaxConcurrentFindMeFollowMeInvocations);
        $this->useMaxConcurrentFindMeFollowMeInvocations->setName('useMaxConcurrentFindMeFollowMeInvocations');
        return $this;
    }

    /**
     * 
     * @return boolean $useMaxConcurrentFindMeFollowMeInvocations
     */
    public function getUseMaxConcurrentFindMeFollowMeInvocations()
    {
        return $this->useMaxConcurrentFindMeFollowMeInvocations->getValue();
    }

    /**
     * 
     */
    public function setMaxConcurrentFindMeFollowMeInvocations($maxConcurrentFindMeFollowMeInvocations = null)
    {
        if (!$maxConcurrentFindMeFollowMeInvocations) return $this;
        $this->maxConcurrentFindMeFollowMeInvocations = ($maxConcurrentFindMeFollowMeInvocations InstanceOf CallProcessingMaxConcurrentFindMeFollowMeInvocations)
             ? $maxConcurrentFindMeFollowMeInvocations
             : new CallProcessingMaxConcurrentFindMeFollowMeInvocations($maxConcurrentFindMeFollowMeInvocations);
        $this->maxConcurrentFindMeFollowMeInvocations->setName('maxConcurrentFindMeFollowMeInvocations');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxConcurrentFindMeFollowMeInvocations $maxConcurrentFindMeFollowMeInvocations
     */
    public function getMaxConcurrentFindMeFollowMeInvocations()
    {
        return $this->maxConcurrentFindMeFollowMeInvocations->getValue();
    }

    /**
     * 
     */
    public function setClidPolicy($clidPolicy = null)
    {
        if (!$clidPolicy) return $this;
        $this->clidPolicy = ($clidPolicy InstanceOf GroupCLIDPolicy)
             ? $clidPolicy
             : new GroupCLIDPolicy($clidPolicy);
        $this->clidPolicy->setName('clidPolicy');
        return $this;
    }

    /**
     * 
     * @return GroupCLIDPolicy $clidPolicy
     */
    public function getClidPolicy()
    {
        return $this->clidPolicy->getValue();
    }

    /**
     * 
     */
    public function setEmergencyClidPolicy($emergencyClidPolicy = null)
    {
        if (!$emergencyClidPolicy) return $this;
        $this->emergencyClidPolicy = ($emergencyClidPolicy InstanceOf GroupCLIDPolicy)
             ? $emergencyClidPolicy
             : new GroupCLIDPolicy($emergencyClidPolicy);
        $this->emergencyClidPolicy->setName('emergencyClidPolicy');
        return $this;
    }

    /**
     * 
     * @return GroupCLIDPolicy $emergencyClidPolicy
     */
    public function getEmergencyClidPolicy()
    {
        return $this->emergencyClidPolicy->getValue();
    }

    /**
     * 
     */
    public function setAllowAlternateNumbersForRedirectingIdentity($allowAlternateNumbersForRedirectingIdentity = null)
    {
        if (!$allowAlternateNumbersForRedirectingIdentity) return $this;
        $this->allowAlternateNumbersForRedirectingIdentity = new PrimitiveType($allowAlternateNumbersForRedirectingIdentity);
        $this->allowAlternateNumbersForRedirectingIdentity->setName('allowAlternateNumbersForRedirectingIdentity');
        return $this;
    }

    /**
     * 
     * @return boolean $allowAlternateNumbersForRedirectingIdentity
     */
    public function getAllowAlternateNumbersForRedirectingIdentity()
    {
        return $this->allowAlternateNumbersForRedirectingIdentity->getValue();
    }

    /**
     * 
     */
    public function setUseGroupName($useGroupName = null)
    {
        if (!$useGroupName) return $this;
        $this->useGroupName = new PrimitiveType($useGroupName);
        $this->useGroupName->setName('useGroupName');
        return $this;
    }

    /**
     * 
     * @return boolean $useGroupName
     */
    public function getUseGroupName()
    {
        return $this->useGroupName->getValue();
    }
}
