<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNDigitManipulationOperation;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseVoiceVPNPolicySelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNTreatmentEntry;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to EnterpriseVoiceVPNGetDefaultResponse.
 */
class EnterpriseVoiceVPNGetDefaultResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseVoiceVPNGetDefaultResponse';
    protected $policySelection;
    protected $digitManipulationOperation;
    protected $routeGroupId;
    protected $treatment;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNGetDefaultResponse $response
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
        $this->policySelection = ($policySelection InstanceOf EnterpriseVoiceVPNPolicySelection)
             ? $policySelection
             : new EnterpriseVoiceVPNPolicySelection($policySelection);
        $this->policySelection->setElementName('policySelection');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNPolicySelection $policySelection
     */
    public function getPolicySelection()
    {
        return ($this->policySelection)
            ? $this->policySelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDigitManipulationOperation($digitManipulationOperation = null)
    {
        $this->digitManipulationOperation = ($digitManipulationOperation InstanceOf EnterpriseVoiceVPNDigitManipulationOperation)
             ? $digitManipulationOperation
             : new EnterpriseVoiceVPNDigitManipulationOperation($digitManipulationOperation);
        $this->digitManipulationOperation->setElementName('digitManipulationOperation');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNDigitManipulationOperation $digitManipulationOperation
     */
    public function getDigitManipulationOperation()
    {
        return ($this->digitManipulationOperation)
            ? $this->digitManipulationOperation->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRouteGroupId($routeGroupId = null)
    {
        $this->routeGroupId = ($routeGroupId InstanceOf GroupId)
             ? $routeGroupId
             : new GroupId($routeGroupId);
        $this->routeGroupId->setElementName('routeGroupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $routeGroupId
     */
    public function getRouteGroupId()
    {
        return ($this->routeGroupId)
            ? $this->routeGroupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTreatment(EnterpriseVoiceVPNTreatmentEntry $treatment = null)
    {
        $this->treatment = ($treatment InstanceOf EnterpriseVoiceVPNTreatmentEntry)
             ? $treatment
             : new EnterpriseVoiceVPNTreatmentEntry($treatment);
        $this->treatment->setElementName('treatment');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNTreatmentEntry $treatment
     */
    public function getTreatment()
    {
        return $this->treatment;
    }
}
