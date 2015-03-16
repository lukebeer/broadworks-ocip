<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConcurrentFindMeFollowMeInvocations;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\CallProcessingMaxCallTimeForAnsweredCallsMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxCallTimeForUnansweredCallsMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConcurrentRedirectedCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxFindMeFollowMeDepth;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxSimultaneousCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConferenceParties;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxRedirectionDepth;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkUsageSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaPolicySelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaSetName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CLIDPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the system level data associated with Call Processing Policy.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By : SystemCallProcessingModifyPolicyRequest15
 */
class SystemCallProcessingModifyPolicyRequest14 extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemCallProcessingModifyPolicyRequest14';
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
    protected $enforceEnterpriseCallingLineIdentityRestriction;
    protected $allowEnterpriseGroupCallTypingForPrivateDialingPlan;
    protected $allowEnterpriseGroupCallTypingForPublicDialingPlan;
    protected $overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan;
    protected $enableEnterpriseExtensionDialing;
    protected $conferenceURI;
    protected $maxConferenceParties;
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

    public function __construct(
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
         $networkUsageSelection = null,
         $enforceGroupCallingLineIdentityRestriction = null,
         $enforceEnterpriseCallingLineIdentityRestriction = null,
         $allowEnterpriseGroupCallTypingForPrivateDialingPlan = null,
         $allowEnterpriseGroupCallTypingForPublicDialingPlan = null,
         $overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan = null,
         $enableEnterpriseExtensionDialing = null,
         $conferenceURI = null,
         $maxConferenceParties = null,
         $useMaxConcurrentRedirectedCalls = null,
         $maxConcurrentRedirectedCalls = null,
         $useMaxFindMeFollowMeDepth = null,
         $maxFindMeFollowMeDepth = null,
         $maxRedirectionDepth = null,
         $useMaxConcurrentFindMeFollowMeInvocations = null,
         $maxConcurrentFindMeFollowMeInvocations = null,
         $clidPolicy = null,
         $emergencyClidPolicy = null,
         $allowAlternateNumbersForRedirectingIdentity = null
    ) {
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
        $this->setNetworkUsageSelection($networkUsageSelection);
        $this->setEnforceGroupCallingLineIdentityRestriction($enforceGroupCallingLineIdentityRestriction);
        $this->setEnforceEnterpriseCallingLineIdentityRestriction($enforceEnterpriseCallingLineIdentityRestriction);
        $this->setAllowEnterpriseGroupCallTypingForPrivateDialingPlan($allowEnterpriseGroupCallTypingForPrivateDialingPlan);
        $this->setAllowEnterpriseGroupCallTypingForPublicDialingPlan($allowEnterpriseGroupCallTypingForPublicDialingPlan);
        $this->setOverrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan($overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan);
        $this->setEnableEnterpriseExtensionDialing($enableEnterpriseExtensionDialing);
        $this->setConferenceURI($conferenceURI);
        $this->setMaxConferenceParties($maxConferenceParties);
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
    }

    /**
     * @return mixed $response
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
        $this->useMaxSimultaneousCalls->setName('useMaxSimultaneousCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $useMaxSimultaneousCalls
     */
    public function getUseMaxSimultaneousCalls()
    {
        return ($this->useMaxSimultaneousCalls) ? $this->useMaxSimultaneousCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxSimultaneousCalls($maxSimultaneousCalls = null)
    {
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
        return ($this->maxSimultaneousCalls) ? $this->maxSimultaneousCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setUseMaxSimultaneousVideoCalls($useMaxSimultaneousVideoCalls = null)
    {
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
        return ($this->useMaxSimultaneousVideoCalls) ? $this->useMaxSimultaneousVideoCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxSimultaneousVideoCalls($maxSimultaneousVideoCalls = null)
    {
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
        return ($this->maxSimultaneousVideoCalls) ? $this->maxSimultaneousVideoCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setUseMaxCallTimeForAnsweredCalls($useMaxCallTimeForAnsweredCalls = null)
    {
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
        return ($this->useMaxCallTimeForAnsweredCalls) ? $this->useMaxCallTimeForAnsweredCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxCallTimeForAnsweredCallsMinutes($maxCallTimeForAnsweredCallsMinutes = null)
    {
        $this->maxCallTimeForAnsweredCallsMinutes = ($maxCallTimeForAnsweredCallsMinutes InstanceOf CallProcessingMaxCallTimeForAnsweredCallsMinutes)
             ? $maxCallTimeForAnsweredCallsMinutes
             : new CallProcessingMaxCallTimeForAnsweredCallsMinutes($maxCallTimeForAnsweredCallsMinutes);
        $this->maxCallTimeForAnsweredCallsMinutes->setName('maxCallTimeForAnsweredCallsMinutes');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxCallTimeForAnsweredCallsMinutes $maxCallTimeForAnsweredCallsMinutes
     */
    public function getMaxCallTimeForAnsweredCallsMinutes()
    {
        return ($this->maxCallTimeForAnsweredCallsMinutes) ? $this->maxCallTimeForAnsweredCallsMinutes->getValue() : null;
    }

    /**
     * 
     */
    public function setUseMaxCallTimeForUnansweredCalls($useMaxCallTimeForUnansweredCalls = null)
    {
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
        return ($this->useMaxCallTimeForUnansweredCalls) ? $this->useMaxCallTimeForUnansweredCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxCallTimeForUnansweredCallsMinutes($maxCallTimeForUnansweredCallsMinutes = null)
    {
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
        return ($this->maxCallTimeForUnansweredCallsMinutes) ? $this->maxCallTimeForUnansweredCallsMinutes->getValue() : null;
    }

    /**
     * 
     */
    public function setMediaPolicySelection($mediaPolicySelection = null)
    {
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
        return ($this->mediaPolicySelection) ? $this->mediaPolicySelection->getValue() : null;
    }

    /**
     * 
     */
    public function setSupportedMediaSetName($supportedMediaSetName = null)
    {
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
        return ($this->supportedMediaSetName) ? $this->supportedMediaSetName->getValue() : null;
    }

    /**
     * 
     */
    public function setNetworkUsageSelection($networkUsageSelection = null)
    {
        $this->networkUsageSelection = ($networkUsageSelection InstanceOf NetworkUsageSelection)
             ? $networkUsageSelection
             : new NetworkUsageSelection($networkUsageSelection);
        $this->networkUsageSelection->setName('networkUsageSelection');
        return $this;
    }

    /**
     * 
     * @return NetworkUsageSelection $networkUsageSelection
     */
    public function getNetworkUsageSelection()
    {
        return ($this->networkUsageSelection) ? $this->networkUsageSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setEnforceGroupCallingLineIdentityRestriction($enforceGroupCallingLineIdentityRestriction = null)
    {
        $this->enforceGroupCallingLineIdentityRestriction = new PrimitiveType($enforceGroupCallingLineIdentityRestriction);
        $this->enforceGroupCallingLineIdentityRestriction->setName('enforceGroupCallingLineIdentityRestriction');
        return $this;
    }

    /**
     * 
     * @return boolean $enforceGroupCallingLineIdentityRestriction
     */
    public function getEnforceGroupCallingLineIdentityRestriction()
    {
        return ($this->enforceGroupCallingLineIdentityRestriction) ? $this->enforceGroupCallingLineIdentityRestriction->getValue() : null;
    }

    /**
     * 
     */
    public function setEnforceEnterpriseCallingLineIdentityRestriction($enforceEnterpriseCallingLineIdentityRestriction = null)
    {
        $this->enforceEnterpriseCallingLineIdentityRestriction = new PrimitiveType($enforceEnterpriseCallingLineIdentityRestriction);
        $this->enforceEnterpriseCallingLineIdentityRestriction->setName('enforceEnterpriseCallingLineIdentityRestriction');
        return $this;
    }

    /**
     * 
     * @return boolean $enforceEnterpriseCallingLineIdentityRestriction
     */
    public function getEnforceEnterpriseCallingLineIdentityRestriction()
    {
        return ($this->enforceEnterpriseCallingLineIdentityRestriction) ? $this->enforceEnterpriseCallingLineIdentityRestriction->getValue() : null;
    }

    /**
     * 
     */
    public function setAllowEnterpriseGroupCallTypingForPrivateDialingPlan($allowEnterpriseGroupCallTypingForPrivateDialingPlan = null)
    {
        $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan = new PrimitiveType($allowEnterpriseGroupCallTypingForPrivateDialingPlan);
        $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan->setName('allowEnterpriseGroupCallTypingForPrivateDialingPlan');
        return $this;
    }

    /**
     * 
     * @return boolean $allowEnterpriseGroupCallTypingForPrivateDialingPlan
     */
    public function getAllowEnterpriseGroupCallTypingForPrivateDialingPlan()
    {
        return ($this->allowEnterpriseGroupCallTypingForPrivateDialingPlan) ? $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan->getValue() : null;
    }

    /**
     * 
     */
    public function setAllowEnterpriseGroupCallTypingForPublicDialingPlan($allowEnterpriseGroupCallTypingForPublicDialingPlan = null)
    {
        $this->allowEnterpriseGroupCallTypingForPublicDialingPlan = new PrimitiveType($allowEnterpriseGroupCallTypingForPublicDialingPlan);
        $this->allowEnterpriseGroupCallTypingForPublicDialingPlan->setName('allowEnterpriseGroupCallTypingForPublicDialingPlan');
        return $this;
    }

    /**
     * 
     * @return boolean $allowEnterpriseGroupCallTypingForPublicDialingPlan
     */
    public function getAllowEnterpriseGroupCallTypingForPublicDialingPlan()
    {
        return ($this->allowEnterpriseGroupCallTypingForPublicDialingPlan) ? $this->allowEnterpriseGroupCallTypingForPublicDialingPlan->getValue() : null;
    }

    /**
     * 
     */
    public function setOverrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan($overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan = null)
    {
        $this->overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan = new PrimitiveType($overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan);
        $this->overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan->setName('overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan');
        return $this;
    }

    /**
     * 
     * @return boolean $overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan
     */
    public function getOverrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan()
    {
        return ($this->overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan) ? $this->overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableEnterpriseExtensionDialing($enableEnterpriseExtensionDialing = null)
    {
        $this->enableEnterpriseExtensionDialing = new PrimitiveType($enableEnterpriseExtensionDialing);
        $this->enableEnterpriseExtensionDialing->setName('enableEnterpriseExtensionDialing');
        return $this;
    }

    /**
     * 
     * @return boolean $enableEnterpriseExtensionDialing
     */
    public function getEnableEnterpriseExtensionDialing()
    {
        return ($this->enableEnterpriseExtensionDialing) ? $this->enableEnterpriseExtensionDialing->getValue() : null;
    }

    /**
     * 
     */
    public function setConferenceURI($conferenceURI = null)
    {
        $this->conferenceURI = ($conferenceURI InstanceOf SIPURI)
             ? $conferenceURI
             : new SIPURI($conferenceURI);
        $this->conferenceURI->setName('conferenceURI');
        return $this;
    }

    /**
     * 
     * @return SIPURI $conferenceURI
     */
    public function getConferenceURI()
    {
        return ($this->conferenceURI) ? $this->conferenceURI->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxConferenceParties($maxConferenceParties = null)
    {
        $this->maxConferenceParties = ($maxConferenceParties InstanceOf CallProcessingMaxConferenceParties)
             ? $maxConferenceParties
             : new CallProcessingMaxConferenceParties($maxConferenceParties);
        $this->maxConferenceParties->setName('maxConferenceParties');
        return $this;
    }

    /**
     * 
     * @return CallProcessingMaxConferenceParties $maxConferenceParties
     */
    public function getMaxConferenceParties()
    {
        return ($this->maxConferenceParties) ? $this->maxConferenceParties->getValue() : null;
    }

    /**
     * 
     */
    public function setUseMaxConcurrentRedirectedCalls($useMaxConcurrentRedirectedCalls = null)
    {
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
        return ($this->useMaxConcurrentRedirectedCalls) ? $this->useMaxConcurrentRedirectedCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxConcurrentRedirectedCalls($maxConcurrentRedirectedCalls = null)
    {
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
        return ($this->maxConcurrentRedirectedCalls) ? $this->maxConcurrentRedirectedCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setUseMaxFindMeFollowMeDepth($useMaxFindMeFollowMeDepth = null)
    {
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
        return ($this->useMaxFindMeFollowMeDepth) ? $this->useMaxFindMeFollowMeDepth->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxFindMeFollowMeDepth($maxFindMeFollowMeDepth = null)
    {
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
        return ($this->maxFindMeFollowMeDepth) ? $this->maxFindMeFollowMeDepth->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxRedirectionDepth($maxRedirectionDepth = null)
    {
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
        return ($this->maxRedirectionDepth) ? $this->maxRedirectionDepth->getValue() : null;
    }

    /**
     * 
     */
    public function setUseMaxConcurrentFindMeFollowMeInvocations($useMaxConcurrentFindMeFollowMeInvocations = null)
    {
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
        return ($this->useMaxConcurrentFindMeFollowMeInvocations) ? $this->useMaxConcurrentFindMeFollowMeInvocations->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxConcurrentFindMeFollowMeInvocations($maxConcurrentFindMeFollowMeInvocations = null)
    {
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
        return ($this->maxConcurrentFindMeFollowMeInvocations) ? $this->maxConcurrentFindMeFollowMeInvocations->getValue() : null;
    }

    /**
     * 
     */
    public function setClidPolicy($clidPolicy = null)
    {
        $this->clidPolicy = ($clidPolicy InstanceOf CLIDPolicy)
             ? $clidPolicy
             : new CLIDPolicy($clidPolicy);
        $this->clidPolicy->setName('clidPolicy');
        return $this;
    }

    /**
     * 
     * @return CLIDPolicy $clidPolicy
     */
    public function getClidPolicy()
    {
        return ($this->clidPolicy) ? $this->clidPolicy->getValue() : null;
    }

    /**
     * 
     */
    public function setEmergencyClidPolicy($emergencyClidPolicy = null)
    {
        $this->emergencyClidPolicy = ($emergencyClidPolicy InstanceOf CLIDPolicy)
             ? $emergencyClidPolicy
             : new CLIDPolicy($emergencyClidPolicy);
        $this->emergencyClidPolicy->setName('emergencyClidPolicy');
        return $this;
    }

    /**
     * 
     * @return CLIDPolicy $emergencyClidPolicy
     */
    public function getEmergencyClidPolicy()
    {
        return ($this->emergencyClidPolicy) ? $this->emergencyClidPolicy->getValue() : null;
    }

    /**
     * 
     */
    public function setAllowAlternateNumbersForRedirectingIdentity($allowAlternateNumbersForRedirectingIdentity = null)
    {
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
        return ($this->allowAlternateNumbersForRedirectingIdentity) ? $this->allowAlternateNumbersForRedirectingIdentity->getValue() : null;
    }
}
