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
    public    $name                        = __CLASS__;
    protected $policySelection             = null;
    protected $digitManipulationOperation  = null;
    protected $routeGroupId                = null;
    protected $treatment                   = null;


    public function setPolicySelection($policySelection = null)
    {
        $this->policySelection = ($policySelection InstanceOf EnterpriseVoiceVPNPolicySelection)
             ? $policySelection
             : new EnterpriseVoiceVPNPolicySelection($policySelection);
    }

    public function getPolicySelection()
    {
        return (!$this->policySelection) ?: $this->policySelection->value();
    }

    public function setDigitManipulationOperation($digitManipulationOperation = null)
    {
        $this->digitManipulationOperation = ($digitManipulationOperation InstanceOf EnterpriseVoiceVPNDigitManipulationOperation)
             ? $digitManipulationOperation
             : new EnterpriseVoiceVPNDigitManipulationOperation($digitManipulationOperation);
    }

    public function getDigitManipulationOperation()
    {
        return (!$this->digitManipulationOperation) ?: $this->digitManipulationOperation->value();
    }

    public function setRouteGroupId($routeGroupId = null)
    {
        $this->routeGroupId = ($routeGroupId InstanceOf GroupId)
             ? $routeGroupId
             : new GroupId($routeGroupId);
    }

    public function getRouteGroupId()
    {
        return (!$this->routeGroupId) ?: $this->routeGroupId->value();
    }

    public function setTreatment(EnterpriseVoiceVPNTreatmentEntry $treatment = null)
    {
    }

    public function getTreatment()
    {
        return (!$this->treatment) ?: $this->treatment->value();
    }
}
