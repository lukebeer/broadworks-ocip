<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConcurrentFindMeFollowMeInvocations;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\CallProcessingMaxCallTimeForAnsweredCallsMinutes;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxCallTimeForUnansweredCallsMinutes;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConcurrentRedirectedCalls;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderConferenceURISettingLevel;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxFindMeFollowMeDepth;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxSimultaneousCalls;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxRedirectionDepth;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkUsageSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaPolicySelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaSetName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CLIDPolicy;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to ServiceProviderCallProcessingGetPolicyRequest15sp2.
 */
class ServiceProviderCallProcessingGetPolicyResponse15sp2 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderCallProcessingGetPolicyResponse15sp2';
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
    protected $networkUsageSelection;
    protected $enforceGroupCallingLineIdentityRestriction;
    protected $allowEnterpriseGroupCallTypingForPrivateDialingPlan;
    protected $allowEnterpriseGroupCallTypingForPublicDialingPlan;
    protected $overrideCLIDRestrictionForPrivateCallCategory;
    protected $useEnterpriseCLIDForPrivateCallCategory;
    protected $enableEnterpriseExtensionDialing;
    protected $enforceEnterpriseCallingLineIdentityRestriction;
    protected $useSettingLevel;
    protected $conferenceURI;
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

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\ServiceProviderCallProcessingGetPolicyResponse15sp2 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
        $this->maxCallTimeForAnsweredCallsMinutes = ($maxCallTimeForAnsweredCallsMinutes InstanceOf CallProcessingMaxCallTimeForAnsweredCallsMinutes)
             ? $maxCallTimeForAnsweredCallsMinutes
             : new CallProcessingMaxCallTimeForAnsweredCallsMinutes($maxCallTimeForAnsweredCallsMinutes);
        $this->maxCallTimeForAnsweredCallsMinutes->setElementName('maxCallTimeForAnsweredCallsMinutes');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxCallTimeForAnsweredCallsMinutes $maxCallTimeForAnsweredCallsMinutes
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
    public function setNetworkUsageSelection($networkUsageSelection = null)
    {
        $this->networkUsageSelection = ($networkUsageSelection InstanceOf NetworkUsageSelection)
             ? $networkUsageSelection
             : new NetworkUsageSelection($networkUsageSelection);
        $this->networkUsageSelection->setElementName('networkUsageSelection');
        return $this;
    }

    /**
     * 
     * @return NetworkUsageSelection $networkUsageSelection
     */
    public function getNetworkUsageSelection()
    {
        return ($this->networkUsageSelection)
            ? $this->networkUsageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnforceGroupCallingLineIdentityRestriction($enforceGroupCallingLineIdentityRestriction = null)
    {
        $this->enforceGroupCallingLineIdentityRestriction = new PrimitiveType($enforceGroupCallingLineIdentityRestriction);
        $this->enforceGroupCallingLineIdentityRestriction->setElementName('enforceGroupCallingLineIdentityRestriction');
        return $this;
    }

    /**
     * 
     * @return boolean $enforceGroupCallingLineIdentityRestriction
     */
    public function getEnforceGroupCallingLineIdentityRestriction()
    {
        return ($this->enforceGroupCallingLineIdentityRestriction)
            ? $this->enforceGroupCallingLineIdentityRestriction->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowEnterpriseGroupCallTypingForPrivateDialingPlan($allowEnterpriseGroupCallTypingForPrivateDialingPlan = null)
    {
        $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan = new PrimitiveType($allowEnterpriseGroupCallTypingForPrivateDialingPlan);
        $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan->setElementName('allowEnterpriseGroupCallTypingForPrivateDialingPlan');
        return $this;
    }

    /**
     * 
     * @return boolean $allowEnterpriseGroupCallTypingForPrivateDialingPlan
     */
    public function getAllowEnterpriseGroupCallTypingForPrivateDialingPlan()
    {
        return ($this->allowEnterpriseGroupCallTypingForPrivateDialingPlan)
            ? $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowEnterpriseGroupCallTypingForPublicDialingPlan($allowEnterpriseGroupCallTypingForPublicDialingPlan = null)
    {
        $this->allowEnterpriseGroupCallTypingForPublicDialingPlan = new PrimitiveType($allowEnterpriseGroupCallTypingForPublicDialingPlan);
        $this->allowEnterpriseGroupCallTypingForPublicDialingPlan->setElementName('allowEnterpriseGroupCallTypingForPublicDialingPlan');
        return $this;
    }

    /**
     * 
     * @return boolean $allowEnterpriseGroupCallTypingForPublicDialingPlan
     */
    public function getAllowEnterpriseGroupCallTypingForPublicDialingPlan()
    {
        return ($this->allowEnterpriseGroupCallTypingForPublicDialingPlan)
            ? $this->allowEnterpriseGroupCallTypingForPublicDialingPlan->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOverrideCLIDRestrictionForPrivateCallCategory($overrideCLIDRestrictionForPrivateCallCategory = null)
    {
        $this->overrideCLIDRestrictionForPrivateCallCategory = new PrimitiveType($overrideCLIDRestrictionForPrivateCallCategory);
        $this->overrideCLIDRestrictionForPrivateCallCategory->setElementName('overrideCLIDRestrictionForPrivateCallCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $overrideCLIDRestrictionForPrivateCallCategory
     */
    public function getOverrideCLIDRestrictionForPrivateCallCategory()
    {
        return ($this->overrideCLIDRestrictionForPrivateCallCategory)
            ? $this->overrideCLIDRestrictionForPrivateCallCategory->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseEnterpriseCLIDForPrivateCallCategory($useEnterpriseCLIDForPrivateCallCategory = null)
    {
        $this->useEnterpriseCLIDForPrivateCallCategory = new PrimitiveType($useEnterpriseCLIDForPrivateCallCategory);
        $this->useEnterpriseCLIDForPrivateCallCategory->setElementName('useEnterpriseCLIDForPrivateCallCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $useEnterpriseCLIDForPrivateCallCategory
     */
    public function getUseEnterpriseCLIDForPrivateCallCategory()
    {
        return ($this->useEnterpriseCLIDForPrivateCallCategory)
            ? $this->useEnterpriseCLIDForPrivateCallCategory->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableEnterpriseExtensionDialing($enableEnterpriseExtensionDialing = null)
    {
        $this->enableEnterpriseExtensionDialing = new PrimitiveType($enableEnterpriseExtensionDialing);
        $this->enableEnterpriseExtensionDialing->setElementName('enableEnterpriseExtensionDialing');
        return $this;
    }

    /**
     * 
     * @return boolean $enableEnterpriseExtensionDialing
     */
    public function getEnableEnterpriseExtensionDialing()
    {
        return ($this->enableEnterpriseExtensionDialing)
            ? $this->enableEnterpriseExtensionDialing->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnforceEnterpriseCallingLineIdentityRestriction($enforceEnterpriseCallingLineIdentityRestriction = null)
    {
        $this->enforceEnterpriseCallingLineIdentityRestriction = new PrimitiveType($enforceEnterpriseCallingLineIdentityRestriction);
        $this->enforceEnterpriseCallingLineIdentityRestriction->setElementName('enforceEnterpriseCallingLineIdentityRestriction');
        return $this;
    }

    /**
     * 
     * @return boolean $enforceEnterpriseCallingLineIdentityRestriction
     */
    public function getEnforceEnterpriseCallingLineIdentityRestriction()
    {
        return ($this->enforceEnterpriseCallingLineIdentityRestriction)
            ? $this->enforceEnterpriseCallingLineIdentityRestriction->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseSettingLevel($useSettingLevel = null)
    {
        $this->useSettingLevel = ($useSettingLevel InstanceOf ServiceProviderConferenceURISettingLevel)
             ? $useSettingLevel
             : new ServiceProviderConferenceURISettingLevel($useSettingLevel);
        $this->useSettingLevel->setElementName('useSettingLevel');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderConferenceURISettingLevel $useSettingLevel
     */
    public function getUseSettingLevel()
    {
        return ($this->useSettingLevel)
            ? $this->useSettingLevel->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConferenceURI($conferenceURI = null)
    {
        $this->conferenceURI = ($conferenceURI InstanceOf SIPURI)
             ? $conferenceURI
             : new SIPURI($conferenceURI);
        $this->conferenceURI->setElementName('conferenceURI');
        return $this;
    }

    /**
     * 
     * @return SIPURI $conferenceURI
     */
    public function getConferenceURI()
    {
        return ($this->conferenceURI)
            ? $this->conferenceURI->getElementValue()
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
        $this->clidPolicy = ($clidPolicy InstanceOf CLIDPolicy)
             ? $clidPolicy
             : new CLIDPolicy($clidPolicy);
        $this->clidPolicy->setElementName('clidPolicy');
        return $this;
    }

    /**
     * 
     * @return CLIDPolicy $clidPolicy
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
        $this->emergencyClidPolicy = ($emergencyClidPolicy InstanceOf CLIDPolicy)
             ? $emergencyClidPolicy
             : new CLIDPolicy($emergencyClidPolicy);
        $this->emergencyClidPolicy->setElementName('emergencyClidPolicy');
        return $this;
    }

    /**
     * 
     * @return CLIDPolicy $emergencyClidPolicy
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
}
