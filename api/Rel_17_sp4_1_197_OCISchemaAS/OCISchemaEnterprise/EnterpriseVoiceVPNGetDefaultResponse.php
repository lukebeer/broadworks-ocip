<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNDigitManipulationOperation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseVoiceVPNPolicySelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNTreatmentEntry;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to EnterpriseVoiceVPNGetDefaultResponse.
 */
class EnterpriseVoiceVPNGetDefaultResponse extends ComplexType implements ComplexInterface
{
    public    $name                       = __CLASS__;
    protected $policySelection            = null;
    protected $digitManipulationOperation = null;
    protected $routeGroupId               = null;
    protected $treatment                  = null;


    /**
     * Enterprise Voice VPN Location Selection.
     */
    public function setPolicySelection($policySelection = null)
    {
        $this->policySelection = ($policySelection InstanceOf EnterpriseVoiceVPNPolicySelection)
             ? $policySelection
             : new EnterpriseVoiceVPNPolicySelection($policySelection);
    }

    /**
     * Enterprise Voice VPN Location Selection.
     */
    public function getPolicySelection()
    {
        return (!$this->policySelection) ?: $this->policySelection->getValue();
    }

    /**
     * Enterprise Voice VPN Digit Manipulation operations.
     */
    public function setDigitManipulationOperation($digitManipulationOperation = null)
    {
        $this->digitManipulationOperation = ($digitManipulationOperation InstanceOf EnterpriseVoiceVPNDigitManipulationOperation)
             ? $digitManipulationOperation
             : new EnterpriseVoiceVPNDigitManipulationOperation($digitManipulationOperation);
    }

    /**
     * Enterprise Voice VPN Digit Manipulation operations.
     */
    public function getDigitManipulationOperation()
    {
        return (!$this->digitManipulationOperation) ?: $this->digitManipulationOperation->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setRouteGroupId($routeGroupId = null)
    {
        $this->routeGroupId = ($routeGroupId InstanceOf GroupId)
             ? $routeGroupId
             : new GroupId($routeGroupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getRouteGroupId()
    {
        return (!$this->routeGroupId) ?: $this->routeGroupId->getValue();
    }

    /**
     * Enterprise Voice VPN Treatment entry
     */
    public function setTreatment(EnterpriseVoiceVPNTreatmentEntry $treatment = null)
    {
        $this->treatment =  $treatment;
    }

    /**
     * Enterprise Voice VPN Treatment entry
     */
    public function getTreatment()
    {
        return (!$this->treatment) ?: $this->treatment->getValue();
    }
}
