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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderConferenceURISettingLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxFindMeFollowMeDepth;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxSimultaneousCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxRedirectionDepth;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkUsageSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaPolicySelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaSetName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CLIDPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\ServiceProviderCallProcessingModifyPolicyResponse14;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the service provider level data associated with Call Procesing
 *        Policy. The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderCallProcessingModifyPolicyRequest14 extends ComplexType implements ComplexInterface
{
    public    $name                                                         = __CLASS__;
    protected $serviceProviderId                                            = null;
    protected $useMaxSimultaneousCalls                                      = null;
    protected $maxSimultaneousCalls                                         = null;
    protected $useMaxSimultaneousVideoCalls                                 = null;
    protected $maxSimultaneousVideoCalls                                    = null;
    protected $useMaxCallTimeForAnsweredCalls                               = null;
    protected $maxCallTimeForAnsweredCallsMinutes                           = null;
    protected $useMaxCallTimeForUnansweredCalls                             = null;
    protected $maxCallTimeForUnansweredCallsMinutes                         = null;
    protected $mediaPolicySelection                                         = null;
    protected $supportedMediaSetName                                        = null;
    protected $networkUsageSelection                                        = null;
    protected $enforceGroupCallingLineIdentityRestriction                   = null;
    protected $allowEnterpriseGroupCallTypingForPrivateDialingPlan          = null;
    protected $allowEnterpriseGroupCallTypingForPublicDialingPlan           = null;
    protected $overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan = null;
    protected $enableEnterpriseExtensionDialing                             = null;
    protected $enforceEnterpriseCallingLineIdentityRestriction              = null;
    protected $useSettingLevel                                              = null;
    protected $conferenceURI                                                = null;
    protected $useMaxConcurrentRedirectedCalls                              = null;
    protected $maxConcurrentRedirectedCalls                                 = null;
    protected $useMaxFindMeFollowMeDepth                                    = null;
    protected $maxFindMeFollowMeDepth                                       = null;
    protected $maxRedirectionDepth                                          = null;
    protected $useMaxConcurrentFindMeFollowMeInvocations                    = null;
    protected $maxConcurrentFindMeFollowMeInvocations                       = null;
    protected $clidPolicy                                                   = null;
    protected $emergencyClidPolicy                                          = null;
    protected $allowAlternateNumbersForRedirectingIdentity                  = null;

    public function __construct(
         $serviceProviderId,
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
         $allowEnterpriseGroupCallTypingForPrivateDialingPlan = null,
         $allowEnterpriseGroupCallTypingForPublicDialingPlan = null,
         $overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan = null,
         $enableEnterpriseExtensionDialing = null,
         $enforceEnterpriseCallingLineIdentityRestriction = null,
         $useSettingLevel = null,
         $conferenceURI = null,
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
        $this->setServiceProviderId($serviceProviderId);
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
        $this->setAllowEnterpriseGroupCallTypingForPrivateDialingPlan($allowEnterpriseGroupCallTypingForPrivateDialingPlan);
        $this->setAllowEnterpriseGroupCallTypingForPublicDialingPlan($allowEnterpriseGroupCallTypingForPublicDialingPlan);
        $this->setOverrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan($overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan);
        $this->setEnableEnterpriseExtensionDialing($enableEnterpriseExtensionDialing);
        $this->setEnforceEnterpriseCallingLineIdentityRestriction($enforceEnterpriseCallingLineIdentityRestriction);
        $this->setUseSettingLevel($useSettingLevel);
        $this->setConferenceURI($conferenceURI);
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
     * @return ServiceProviderCallProcessingModifyPolicyResponse14
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
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
    public function setOverrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan($overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan = null)
    {
        $this->overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan = (boolean) $overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan;
    }

    /**
     * 
     */
    public function getOverrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan()
    {
        return (!$this->overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan) ?: $this->overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan;
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
    public function setEnforceEnterpriseCallingLineIdentityRestriction($enforceEnterpriseCallingLineIdentityRestriction = null)
    {
        $this->enforceEnterpriseCallingLineIdentityRestriction = (boolean) $enforceEnterpriseCallingLineIdentityRestriction;
    }

    /**
     * 
     */
    public function getEnforceEnterpriseCallingLineIdentityRestriction()
    {
        return (!$this->enforceEnterpriseCallingLineIdentityRestriction) ?: $this->enforceEnterpriseCallingLineIdentityRestriction;
    }

    /**
     * Choices for the service provider conference URI
     *         setting to decide which level of settings to use.
     */
    public function setUseSettingLevel($useSettingLevel = null)
    {
        $this->useSettingLevel = ($useSettingLevel InstanceOf ServiceProviderConferenceURISettingLevel)
             ? $useSettingLevel
             : new ServiceProviderConferenceURISettingLevel($useSettingLevel);
    }

    /**
     * Choices for the service provider conference URI
     *         setting to decide which level of settings to use.
     */
    public function getUseSettingLevel()
    {
        return (!$this->useSettingLevel) ?: $this->useSettingLevel->getValue();
    }

    /**
     * SIP URI.
     *         The SIP URI is used in many different places in the schema.
     *         If the SIPURI is an alias, the Validation rules are:
     *         - don't allow sip:
     *         - allow the following characters:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )   @
     *         - exactly one @ symbol
     *         - user portion and host portion are both required
     */
    public function setConferenceURI($conferenceURI = null)
    {
        $this->conferenceURI = ($conferenceURI InstanceOf SIPURI)
             ? $conferenceURI
             : new SIPURI($conferenceURI);
    }

    /**
     * SIP URI.
     *         The SIP URI is used in many different places in the schema.
     *         If the SIPURI is an alias, the Validation rules are:
     *         - don't allow sip:
     *         - allow the following characters:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )   @
     *         - exactly one @ symbol
     *         - user portion and host portion are both required
     */
    public function getConferenceURI()
    {
        return (!$this->conferenceURI) ?: $this->conferenceURI->getValue();
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
        $this->clidPolicy = ($clidPolicy InstanceOf CLIDPolicy)
             ? $clidPolicy
             : new CLIDPolicy($clidPolicy);
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
        $this->emergencyClidPolicy = ($emergencyClidPolicy InstanceOf CLIDPolicy)
             ? $emergencyClidPolicy
             : new CLIDPolicy($emergencyClidPolicy);
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
}
