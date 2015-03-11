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
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to EnterpriseVoiceVPNGetDefaultResponse.
 */
class EnterpriseVoiceVPNGetDefaultResponse extends ComplexType implements ComplexInterface
{
    public    $name                       = 'EnterpriseVoiceVPNGetDefaultResponse';
    protected $policySelection            = null;
    protected $digitManipulationOperation = null;
    protected $routeGroupId               = null;
    protected $treatment                  = null;

    /**
     * @return EnterpriseVoiceVPNGetDefaultResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPolicySelection($policySelection = null)
    {
        if (!$policySelection) return $this;
        $this->policySelection = ($policySelection InstanceOf EnterpriseVoiceVPNPolicySelection)
             ? $policySelection
             : new EnterpriseVoiceVPNPolicySelection($policySelection);
        $this->policySelection->setName('policySelection');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNPolicySelection
     */
    public function getPolicySelection()
    {
        return $this->policySelection->getValue();
    }

    /**
     * 
     */
    public function setDigitManipulationOperation($digitManipulationOperation = null)
    {
        if (!$digitManipulationOperation) return $this;
        $this->digitManipulationOperation = ($digitManipulationOperation InstanceOf EnterpriseVoiceVPNDigitManipulationOperation)
             ? $digitManipulationOperation
             : new EnterpriseVoiceVPNDigitManipulationOperation($digitManipulationOperation);
        $this->digitManipulationOperation->setName('digitManipulationOperation');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNDigitManipulationOperation
     */
    public function getDigitManipulationOperation()
    {
        return $this->digitManipulationOperation->getValue();
    }

    /**
     * 
     */
    public function setRouteGroupId($routeGroupId = null)
    {
        if (!$routeGroupId) return $this;
        $this->routeGroupId = ($routeGroupId InstanceOf GroupId)
             ? $routeGroupId
             : new GroupId($routeGroupId);
        $this->routeGroupId->setName('routeGroupId');
        return $this;
    }

    /**
     * 
     * @return GroupId
     */
    public function getRouteGroupId()
    {
        return $this->routeGroupId->getValue();
    }

    /**
     * 
     */
    public function setTreatment(EnterpriseVoiceVPNTreatmentEntry $treatment = null)
    {
        if (!$treatment) return $this;
        $this->treatment = $treatment;
        $this->treatment->setName('treatment');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNTreatmentEntry
     */
    public function getTreatment()
    {
        return $this->treatment;
    }
}
