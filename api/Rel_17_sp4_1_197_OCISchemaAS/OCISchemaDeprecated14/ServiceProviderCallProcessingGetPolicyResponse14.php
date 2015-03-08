<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\CallProcessingMaxCallTimeForAnsweredCallsMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxCallTimeForUnansweredCallsMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderConferenceURISettingLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxSimultaneousCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkUsageSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaPolicySelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaSetName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to ServiceProviderCallProcessingGetPolicyRequest14.
 */
class ServiceProviderCallProcessingGetPolicyResponse14 extends ComplexType implements ComplexInterface
{
    public    $name                                            = __CLASS__;
    protected $useMaxSimultaneousCalls                         = null;
    protected $maxSimultaneousCalls                            = null;
    protected $useMaxSimultaneousVideoCalls                    = null;
    protected $maxSimultaneousVideoCalls                       = null;
    protected $useMaxCallTimeForAnsweredCalls                  = null;
    protected $maxCallTimeForAnsweredCallsMinutes              = null;
    protected $useMaxCallTimeForUnansweredCalls                = null;
    protected $maxCallTimeForUnansweredCallsMinutes            = null;
    protected $mediaPolicySelection                            = null;
    protected $supportedMediaSetName                           = null;
    protected $networkUsageSelection                           = null;
    protected $enforceGroupCallingLineIdentityRestriction      = null;
    protected $enforceEnterpriseCallingLineIdentityRestriction = null;
    protected $useSettingLevel                                 = null;
    protected $conferenceURI                                   = null;


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
        return (!$this->enforceGroupCallingLineIdentityRestriction) ?: $this->enforceGroupCallingLineIdentityRestriction->getValue();
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
        return (!$this->enforceEnterpriseCallingLineIdentityRestriction) ?: $this->enforceEnterpriseCallingLineIdentityRestriction->getValue();
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
}
