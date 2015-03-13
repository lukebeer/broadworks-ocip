<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxConcurrentFindMeFollowMeInvocations;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxCallTimeForUnansweredCallsMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxCallTimeForAnsweredCallsMinutes16;
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
 *         The following elements are only used in AS data mode:
 *            enableDialableCallerID
 *            allowConfigurableCLIDForRedirectingIdentity
 */
class SystemCallProcessingModifyPolicyRequest15 extends ComplexType implements ComplexInterface
{
    public    $name                                                = 'SystemCallProcessingModifyPolicyRequest15';
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
    protected $enforceEnterpriseCallingLineIdentityRestriction     = null;
    protected $allowEnterpriseGroupCallTypingForPrivateDialingPlan = null;
    protected $allowEnterpriseGroupCallTypingForPublicDialingPlan  = null;
    protected $overrideCLIDRestrictionForPrivateCallCategory       = null;
    protected $useEnterpriseCLIDForPrivateCallCategory             = null;
    protected $enableEnterpriseExtensionDialing                    = null;
    protected $conferenceURI                                       = null;
    protected $maxConferenceParties                                = null;
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
    protected $enableDialableCallerID                              = null;
    protected $blockCallingNameForExternalCalls                    = null;
    protected $allowConfigurableCLIDForRedirectingIdentity         = null;

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
         $overrideCLIDRestrictionForPrivateCallCategory = null,
         $useEnterpriseCLIDForPrivateCallCategory = null,
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
         $allowAlternateNumbersForRedirectingIdentity = null,
         $enableDialableCallerID = null,
         $blockCallingNameForExternalCalls = null,
         $allowConfigurableCLIDForRedirectingIdentity = null
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
        $this->setOverrideCLIDRestrictionForPrivateCallCategory($overrideCLIDRestrictionForPrivateCallCategory);
        $this->setUseEnterpriseCLIDForPrivateCallCategory($useEnterpriseCLIDForPrivateCallCategory);
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
        $this->setEnableDialableCallerID($enableDialableCallerID);
        $this->setBlockCallingNameForExternalCalls($blockCallingNameForExternalCalls);
        $this->setAllowConfigurableCLIDForRedirectingIdentity($allowConfigurableCLIDForRedirectingIdentity);
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
    public function setNetworkUsageSelection($networkUsageSelection = null)
    {
        if (!$networkUsageSelection) return $this;
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
        return $this->networkUsageSelection->getValue();
    }

    /**
     * 
     */
    public function setEnforceGroupCallingLineIdentityRestriction($enforceGroupCallingLineIdentityRestriction = null)
    {
        if (!$enforceGroupCallingLineIdentityRestriction) return $this;
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
        return $this->enforceGroupCallingLineIdentityRestriction->getValue();
    }

    /**
     * 
     */
    public function setEnforceEnterpriseCallingLineIdentityRestriction($enforceEnterpriseCallingLineIdentityRestriction = null)
    {
        if (!$enforceEnterpriseCallingLineIdentityRestriction) return $this;
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
        return $this->enforceEnterpriseCallingLineIdentityRestriction->getValue();
    }

    /**
     * 
     */
    public function setAllowEnterpriseGroupCallTypingForPrivateDialingPlan($allowEnterpriseGroupCallTypingForPrivateDialingPlan = null)
    {
        if (!$allowEnterpriseGroupCallTypingForPrivateDialingPlan) return $this;
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
        return $this->allowEnterpriseGroupCallTypingForPrivateDialingPlan->getValue();
    }

    /**
     * 
     */
    public function setAllowEnterpriseGroupCallTypingForPublicDialingPlan($allowEnterpriseGroupCallTypingForPublicDialingPlan = null)
    {
        if (!$allowEnterpriseGroupCallTypingForPublicDialingPlan) return $this;
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
        return $this->allowEnterpriseGroupCallTypingForPublicDialingPlan->getValue();
    }

    /**
     * 
     */
    public function setOverrideCLIDRestrictionForPrivateCallCategory($overrideCLIDRestrictionForPrivateCallCategory = null)
    {
        if (!$overrideCLIDRestrictionForPrivateCallCategory) return $this;
        $this->overrideCLIDRestrictionForPrivateCallCategory = new PrimitiveType($overrideCLIDRestrictionForPrivateCallCategory);
        $this->overrideCLIDRestrictionForPrivateCallCategory->setName('overrideCLIDRestrictionForPrivateCallCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $overrideCLIDRestrictionForPrivateCallCategory
     */
    public function getOverrideCLIDRestrictionForPrivateCallCategory()
    {
        return $this->overrideCLIDRestrictionForPrivateCallCategory->getValue();
    }

    /**
     * 
     */
    public function setUseEnterpriseCLIDForPrivateCallCategory($useEnterpriseCLIDForPrivateCallCategory = null)
    {
        if (!$useEnterpriseCLIDForPrivateCallCategory) return $this;
        $this->useEnterpriseCLIDForPrivateCallCategory = new PrimitiveType($useEnterpriseCLIDForPrivateCallCategory);
        $this->useEnterpriseCLIDForPrivateCallCategory->setName('useEnterpriseCLIDForPrivateCallCategory');
        return $this;
    }

    /**
     * 
     * @return boolean $useEnterpriseCLIDForPrivateCallCategory
     */
    public function getUseEnterpriseCLIDForPrivateCallCategory()
    {
        return $this->useEnterpriseCLIDForPrivateCallCategory->getValue();
    }

    /**
     * 
     */
    public function setEnableEnterpriseExtensionDialing($enableEnterpriseExtensionDialing = null)
    {
        if (!$enableEnterpriseExtensionDialing) return $this;
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
        return $this->enableEnterpriseExtensionDialing->getValue();
    }

    /**
     * 
     */
    public function setConferenceURI($conferenceURI = null)
    {
        if (!$conferenceURI) return $this;
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
        return $this->conferenceURI->getValue();
    }

    /**
     * 
     */
    public function setMaxConferenceParties($maxConferenceParties = null)
    {
        if (!$maxConferenceParties) return $this;
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
        return $this->maxConferenceParties->getValue();
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
        return $this->clidPolicy->getValue();
    }

    /**
     * 
     */
    public function setEmergencyClidPolicy($emergencyClidPolicy = null)
    {
        if (!$emergencyClidPolicy) return $this;
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
    public function setEnableDialableCallerID($enableDialableCallerID = null)
    {
        if (!$enableDialableCallerID) return $this;
        $this->enableDialableCallerID = new PrimitiveType($enableDialableCallerID);
        $this->enableDialableCallerID->setName('enableDialableCallerID');
        return $this;
    }

    /**
     * 
     * @return boolean $enableDialableCallerID
     */
    public function getEnableDialableCallerID()
    {
        return $this->enableDialableCallerID->getValue();
    }

    /**
     * 
     */
    public function setBlockCallingNameForExternalCalls($blockCallingNameForExternalCalls = null)
    {
        if (!$blockCallingNameForExternalCalls) return $this;
        $this->blockCallingNameForExternalCalls = new PrimitiveType($blockCallingNameForExternalCalls);
        $this->blockCallingNameForExternalCalls->setName('blockCallingNameForExternalCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $blockCallingNameForExternalCalls
     */
    public function getBlockCallingNameForExternalCalls()
    {
        return $this->blockCallingNameForExternalCalls->getValue();
    }

    /**
     * 
     */
    public function setAllowConfigurableCLIDForRedirectingIdentity($allowConfigurableCLIDForRedirectingIdentity = null)
    {
        if (!$allowConfigurableCLIDForRedirectingIdentity) return $this;
        $this->allowConfigurableCLIDForRedirectingIdentity = new PrimitiveType($allowConfigurableCLIDForRedirectingIdentity);
        $this->allowConfigurableCLIDForRedirectingIdentity->setName('allowConfigurableCLIDForRedirectingIdentity');
        return $this;
    }

    /**
     * 
     * @return boolean $allowConfigurableCLIDForRedirectingIdentity
     */
    public function getAllowConfigurableCLIDForRedirectingIdentity()
    {
        return $this->allowConfigurableCLIDForRedirectingIdentity->getValue();
    }
}
