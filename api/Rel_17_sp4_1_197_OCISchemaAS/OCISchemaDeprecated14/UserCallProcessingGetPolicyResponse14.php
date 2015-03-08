<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\CallProcessingMaxCallTimeForAnsweredCallsMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxCallTimeForUnansweredCallsMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallProcessingMaxSimultaneousCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaPolicySelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaSetName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserCallProcessingGetPolicyRequest14.
 */
class UserCallProcessingGetPolicyResponse14 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                         = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserCallProcessingGetPolicyResponse14';
    public    $name                                 = __CLASS__;
    protected $useUserSetting                       = null;
    protected $useMaxSimultaneousCalls              = null;
    protected $maxSimultaneousCalls                 = null;
    protected $useMaxSimultaneousVideoCalls         = null;
    protected $maxSimultaneousVideoCalls            = null;
    protected $useMaxCallTimeForAnsweredCalls       = null;
    protected $maxCallTimeForAnsweredCallsMinutes   = null;
    protected $useMaxCallTimeForUnansweredCalls     = null;
    protected $maxCallTimeForUnansweredCallsMinutes = null;
    protected $mediaPolicySelection                 = null;
    protected $supportedMediaSetName                = null;


    /**
     * 
     */
    public function setUseUserSetting($useUserSetting = null)
    {
        $this->useUserSetting = (boolean) $useUserSetting;
    }

    /**
     * 
     */
    public function getUseUserSetting()
    {
        return (!$this->useUserSetting) ?: $this->useUserSetting->getValue();
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
}
