<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConcurrentFindMeFollowMeInvocations;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxCallTimeForUnansweredCallsMinutes;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxCallTimeForAnsweredCallsMinutes16;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConcurrentRedirectedCalls;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxFindMeFollowMeDepth;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxSimultaneousCalls;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxRedirectionDepth;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaPolicySelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupCLIDPolicy;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaSetName;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


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
    public    $elementName = 'UserCallProcessingGetPolicyResponse16';
    protected $useUserCLIDSetting;
    protected $useUserMediaSetting;
    protected $useUserCallLimitsSetting;
    protected $useMaxSimultaneousCalls;
    protected $maxSimultaneousCalls;
    protected $useMaxSimultaneousVideoCalls;
    protected $maxSimultaneousVideoCalls;
    protected $useMaxCallTimeForAnsweredCalls;
    protected $maxCallTimeForAnsweredCallsMinutes;
    protected $useMaxCallTimeForUnansweredCalls;
    protected $maxCallTimeForUnansweredCallsMinutes;
    protected $mediaPolicySelection;
    protected $supportedMediaSetName;
    protected $useMaxConcurrentRedirectedCalls;
    protected $maxConcurrentRedirectedCalls;
    protected $useMaxFindMeFollowMeDepth;
    protected $maxFindMeFollowMeDepth;
    protected $maxRedirectionDepth;
    protected $useMaxConcurrentFindMeFollowMeInvocations;
    protected $maxConcurrentFindMeFollowMeInvocations;
    protected $clidPolicy;
    protected $emergencyClidPolicy;
    protected $allowAlternateNumbersForRedirectingIdentity;
    protected $useGroupName;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\UserCallProcessingGetPolicyResponse16 $response
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
        $this->useUserCLIDSetting = new PrimitiveType($useUserCLIDSetting);
        $this->useUserCLIDSetting->setElementName('useUserCLIDSetting');
        return $this;
    }

    /**
     * 
     * @return boolean $useUserCLIDSetting
     */
    public function getUseUserCLIDSetting()
    {
        return ($this->useUserCLIDSetting)
            ? $this->useUserCLIDSetting->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseUserMediaSetting($useUserMediaSetting = null)
    {
        $this->useUserMediaSetting = new PrimitiveType($useUserMediaSetting);
        $this->useUserMediaSetting->setElementName('useUserMediaSetting');
        return $this;
    }

    /**
     * 
     * @return boolean $useUserMediaSetting
     */
    public function getUseUserMediaSetting()
    {
        return ($this->useUserMediaSetting)
            ? $this->useUserMediaSetting->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseUserCallLimitsSetting($useUserCallLimitsSetting = null)
    {
        $this->useUserCallLimitsSetting = new PrimitiveType($useUserCallLimitsSetting);
        $this->useUserCallLimitsSetting->setElementName('useUserCallLimitsSetting');
        return $this;
    }

    /**
     * 
     * @return boolean $useUserCallLimitsSetting
     */
    public function getUseUserCallLimitsSetting()
    {
        return ($this->useUserCallLimitsSetting)
            ? $this->useUserCallLimitsSetting->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseMaxSimultaneousCalls($useMaxSimultaneousCalls = null)
    {
        $this->useMaxSimultaneousCalls = new PrimitiveType($useMaxSimultaneousCalls);
        $this->useMaxSimultaneousCalls->setElementName('useMaxSimultaneousCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $useMaxSimultaneousCalls
     */
    public function getUseMaxSimultaneousCalls()
    {
        return ($this->useMaxSimultaneousCalls)
            ? $this->useMaxSimultaneousCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxSimultaneousCalls($maxSimultaneousCalls = null)
    {
        $this->maxSimultaneousCalls = ($maxSimultaneousCalls InstanceOf CallProcessingMaxSimultaneousCalls)
             ? $maxSimultaneousCalls
             : new CallProcessingMaxSimultaneousCalls($maxSimultaneousCalls);
        $this->maxSimultaneousCalls->setElementName('maxSimultaneousCalls');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxSimultaneousCalls $maxSimultaneousCalls
     */
    public function getMaxSimultaneousCalls()
    {
        return ($this->maxSimultaneousCalls)
            ? $this->maxSimultaneousCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseMaxSimultaneousVideoCalls($useMaxSimultaneousVideoCalls = null)
    {
        $this->useMaxSimultaneousVideoCalls = new PrimitiveType($useMaxSimultaneousVideoCalls);
        $this->useMaxSimultaneousVideoCalls->setElementName('useMaxSimultaneousVideoCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $useMaxSimultaneousVideoCalls
     */
    public function getUseMaxSimultaneousVideoCalls()
    {
        return ($this->useMaxSimultaneousVideoCalls)
            ? $this->useMaxSimultaneousVideoCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxSimultaneousVideoCalls($maxSimultaneousVideoCalls = null)
    {
        $this->maxSimultaneousVideoCalls = ($maxSimultaneousVideoCalls InstanceOf CallProcessingMaxSimultaneousCalls)
             ? $maxSimultaneousVideoCalls
             : new CallProcessingMaxSimultaneousCalls($maxSimultaneousVideoCalls);
        $this->maxSimultaneousVideoCalls->setElementName('maxSimultaneousVideoCalls');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxSimultaneousCalls $maxSimultaneousVideoCalls
     */
    public function getMaxSimultaneousVideoCalls()
    {
        return ($this->maxSimultaneousVideoCalls)
            ? $this->maxSimultaneousVideoCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseMaxCallTimeForAnsweredCalls($useMaxCallTimeForAnsweredCalls = null)
    {
        $this->useMaxCallTimeForAnsweredCalls = new PrimitiveType($useMaxCallTimeForAnsweredCalls);
        $this->useMaxCallTimeForAnsweredCalls->setElementName('useMaxCallTimeForAnsweredCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $useMaxCallTimeForAnsweredCalls
     */
    public function getUseMaxCallTimeForAnsweredCalls()
    {
        return ($this->useMaxCallTimeForAnsweredCalls)
            ? $this->useMaxCallTimeForAnsweredCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxCallTimeForAnsweredCallsMinutes($maxCallTimeForAnsweredCallsMinutes = null)
    {
        $this->maxCallTimeForAnsweredCallsMinutes = ($maxCallTimeForAnsweredCallsMinutes InstanceOf CallProcessingMaxCallTimeForAnsweredCallsMinutes16)
             ? $maxCallTimeForAnsweredCallsMinutes
             : new CallProcessingMaxCallTimeForAnsweredCallsMinutes16($maxCallTimeForAnsweredCallsMinutes);
        $this->maxCallTimeForAnsweredCallsMinutes->setElementName('maxCallTimeForAnsweredCallsMinutes');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxCallTimeForAnsweredCallsMinutes16 $maxCallTimeForAnsweredCallsMinutes
     */
    public function getMaxCallTimeForAnsweredCallsMinutes()
    {
        return ($this->maxCallTimeForAnsweredCallsMinutes)
            ? $this->maxCallTimeForAnsweredCallsMinutes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseMaxCallTimeForUnansweredCalls($useMaxCallTimeForUnansweredCalls = null)
    {
        $this->useMaxCallTimeForUnansweredCalls = new PrimitiveType($useMaxCallTimeForUnansweredCalls);
        $this->useMaxCallTimeForUnansweredCalls->setElementName('useMaxCallTimeForUnansweredCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $useMaxCallTimeForUnansweredCalls
     */
    public function getUseMaxCallTimeForUnansweredCalls()
    {
        return ($this->useMaxCallTimeForUnansweredCalls)
            ? $this->useMaxCallTimeForUnansweredCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxCallTimeForUnansweredCallsMinutes($maxCallTimeForUnansweredCallsMinutes = null)
    {
        $this->maxCallTimeForUnansweredCallsMinutes = ($maxCallTimeForUnansweredCallsMinutes InstanceOf CallProcessingMaxCallTimeForUnansweredCallsMinutes)
             ? $maxCallTimeForUnansweredCallsMinutes
             : new CallProcessingMaxCallTimeForUnansweredCallsMinutes($maxCallTimeForUnansweredCallsMinutes);
        $this->maxCallTimeForUnansweredCallsMinutes->setElementName('maxCallTimeForUnansweredCallsMinutes');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxCallTimeForUnansweredCallsMinutes $maxCallTimeForUnansweredCallsMinutes
     */
    public function getMaxCallTimeForUnansweredCallsMinutes()
    {
        return ($this->maxCallTimeForUnansweredCallsMinutes)
            ? $this->maxCallTimeForUnansweredCallsMinutes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMediaPolicySelection($mediaPolicySelection = null)
    {
        $this->mediaPolicySelection = ($mediaPolicySelection InstanceOf MediaPolicySelection)
             ? $mediaPolicySelection
             : new MediaPolicySelection($mediaPolicySelection);
        $this->mediaPolicySelection->setElementName('mediaPolicySelection');
        return $this;
    }

    /**
     * 
     * @return MediaPolicySelection $mediaPolicySelection
     */
    public function getMediaPolicySelection()
    {
        return ($this->mediaPolicySelection)
            ? $this->mediaPolicySelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSupportedMediaSetName($supportedMediaSetName = null)
    {
        $this->supportedMediaSetName = ($supportedMediaSetName InstanceOf MediaSetName)
             ? $supportedMediaSetName
             : new MediaSetName($supportedMediaSetName);
        $this->supportedMediaSetName->setElementName('supportedMediaSetName');
        return $this;
    }

    /**
     * 
     * @return MediaSetName $supportedMediaSetName
     */
    public function getSupportedMediaSetName()
    {
        return ($this->supportedMediaSetName)
            ? $this->supportedMediaSetName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseMaxConcurrentRedirectedCalls($useMaxConcurrentRedirectedCalls = null)
    {
        $this->useMaxConcurrentRedirectedCalls = new PrimitiveType($useMaxConcurrentRedirectedCalls);
        $this->useMaxConcurrentRedirectedCalls->setElementName('useMaxConcurrentRedirectedCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $useMaxConcurrentRedirectedCalls
     */
    public function getUseMaxConcurrentRedirectedCalls()
    {
        return ($this->useMaxConcurrentRedirectedCalls)
            ? $this->useMaxConcurrentRedirectedCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxConcurrentRedirectedCalls($maxConcurrentRedirectedCalls = null)
    {
        $this->maxConcurrentRedirectedCalls = ($maxConcurrentRedirectedCalls InstanceOf CallProcessingMaxConcurrentRedirectedCalls)
             ? $maxConcurrentRedirectedCalls
             : new CallProcessingMaxConcurrentRedirectedCalls($maxConcurrentRedirectedCalls);
        $this->maxConcurrentRedirectedCalls->setElementName('maxConcurrentRedirectedCalls');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxConcurrentRedirectedCalls $maxConcurrentRedirectedCalls
     */
    public function getMaxConcurrentRedirectedCalls()
    {
        return ($this->maxConcurrentRedirectedCalls)
            ? $this->maxConcurrentRedirectedCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseMaxFindMeFollowMeDepth($useMaxFindMeFollowMeDepth = null)
    {
        $this->useMaxFindMeFollowMeDepth = new PrimitiveType($useMaxFindMeFollowMeDepth);
        $this->useMaxFindMeFollowMeDepth->setElementName('useMaxFindMeFollowMeDepth');
        return $this;
    }

    /**
     * 
     * @return boolean $useMaxFindMeFollowMeDepth
     */
    public function getUseMaxFindMeFollowMeDepth()
    {
        return ($this->useMaxFindMeFollowMeDepth)
            ? $this->useMaxFindMeFollowMeDepth->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxFindMeFollowMeDepth($maxFindMeFollowMeDepth = null)
    {
        $this->maxFindMeFollowMeDepth = ($maxFindMeFollowMeDepth InstanceOf CallProcessingMaxFindMeFollowMeDepth)
             ? $maxFindMeFollowMeDepth
             : new CallProcessingMaxFindMeFollowMeDepth($maxFindMeFollowMeDepth);
        $this->maxFindMeFollowMeDepth->setElementName('maxFindMeFollowMeDepth');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxFindMeFollowMeDepth $maxFindMeFollowMeDepth
     */
    public function getMaxFindMeFollowMeDepth()
    {
        return ($this->maxFindMeFollowMeDepth)
            ? $this->maxFindMeFollowMeDepth->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxRedirectionDepth($maxRedirectionDepth = null)
    {
        $this->maxRedirectionDepth = ($maxRedirectionDepth InstanceOf CallProcessingMaxRedirectionDepth)
             ? $maxRedirectionDepth
             : new CallProcessingMaxRedirectionDepth($maxRedirectionDepth);
        $this->maxRedirectionDepth->setElementName('maxRedirectionDepth');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxRedirectionDepth $maxRedirectionDepth
     */
    public function getMaxRedirectionDepth()
    {
        return ($this->maxRedirectionDepth)
            ? $this->maxRedirectionDepth->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseMaxConcurrentFindMeFollowMeInvocations($useMaxConcurrentFindMeFollowMeInvocations = null)
    {
        $this->useMaxConcurrentFindMeFollowMeInvocations = new PrimitiveType($useMaxConcurrentFindMeFollowMeInvocations);
        $this->useMaxConcurrentFindMeFollowMeInvocations->setElementName('useMaxConcurrentFindMeFollowMeInvocations');
        return $this;
    }

    /**
     * 
     * @return boolean $useMaxConcurrentFindMeFollowMeInvocations
     */
    public function getUseMaxConcurrentFindMeFollowMeInvocations()
    {
        return ($this->useMaxConcurrentFindMeFollowMeInvocations)
            ? $this->useMaxConcurrentFindMeFollowMeInvocations->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxConcurrentFindMeFollowMeInvocations($maxConcurrentFindMeFollowMeInvocations = null)
    {
        $this->maxConcurrentFindMeFollowMeInvocations = ($maxConcurrentFindMeFollowMeInvocations InstanceOf CallProcessingMaxConcurrentFindMeFollowMeInvocations)
             ? $maxConcurrentFindMeFollowMeInvocations
             : new CallProcessingMaxConcurrentFindMeFollowMeInvocations($maxConcurrentFindMeFollowMeInvocations);
        $this->maxConcurrentFindMeFollowMeInvocations->setElementName('maxConcurrentFindMeFollowMeInvocations');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxConcurrentFindMeFollowMeInvocations $maxConcurrentFindMeFollowMeInvocations
     */
    public function getMaxConcurrentFindMeFollowMeInvocations()
    {
        return ($this->maxConcurrentFindMeFollowMeInvocations)
            ? $this->maxConcurrentFindMeFollowMeInvocations->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setClidPolicy($clidPolicy = null)
    {
        $this->clidPolicy = ($clidPolicy InstanceOf GroupCLIDPolicy)
             ? $clidPolicy
             : new GroupCLIDPolicy($clidPolicy);
        $this->clidPolicy->setElementName('clidPolicy');
        return $this;
    }

    /**
     * 
     * @return GroupCLIDPolicy $clidPolicy
     */
    public function getClidPolicy()
    {
        return ($this->clidPolicy)
            ? $this->clidPolicy->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEmergencyClidPolicy($emergencyClidPolicy = null)
    {
        $this->emergencyClidPolicy = ($emergencyClidPolicy InstanceOf GroupCLIDPolicy)
             ? $emergencyClidPolicy
             : new GroupCLIDPolicy($emergencyClidPolicy);
        $this->emergencyClidPolicy->setElementName('emergencyClidPolicy');
        return $this;
    }

    /**
     * 
     * @return GroupCLIDPolicy $emergencyClidPolicy
     */
    public function getEmergencyClidPolicy()
    {
        return ($this->emergencyClidPolicy)
            ? $this->emergencyClidPolicy->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowAlternateNumbersForRedirectingIdentity($allowAlternateNumbersForRedirectingIdentity = null)
    {
        $this->allowAlternateNumbersForRedirectingIdentity = new PrimitiveType($allowAlternateNumbersForRedirectingIdentity);
        $this->allowAlternateNumbersForRedirectingIdentity->setElementName('allowAlternateNumbersForRedirectingIdentity');
        return $this;
    }

    /**
     * 
     * @return boolean $allowAlternateNumbersForRedirectingIdentity
     */
    public function getAllowAlternateNumbersForRedirectingIdentity()
    {
        return ($this->allowAlternateNumbersForRedirectingIdentity)
            ? $this->allowAlternateNumbersForRedirectingIdentity->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseGroupName($useGroupName = null)
    {
        $this->useGroupName = new PrimitiveType($useGroupName);
        $this->useGroupName->setElementName('useGroupName');
        return $this;
    }

    /**
     * 
     * @return boolean $useGroupName
     */
    public function getUseGroupName()
    {
        return ($this->useGroupName)
            ? $this->useGroupName->getElementValue()
            : null;
    }
}
