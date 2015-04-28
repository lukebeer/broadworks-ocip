<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNExtensionLength;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseVoiceVPNPolicySelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNLocationCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Add the enterprise level data associated with a Voice VPN location code.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseVoiceVPNAddPolicyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseVoiceVPNAddPolicyRequest';
    protected $serviceProviderId;
    protected $locationDialingCode;
    protected $minExtensionLength;
    protected $maxExtensionLength;
    protected $description;
    protected $routeGroupId;
    protected $policySelection;

    public function __construct(
         $serviceProviderId = '',
         $locationDialingCode = '',
         $minExtensionLength = '',
         $maxExtensionLength = '',
         $description = null,
         $routeGroupId = null,
         $policySelection = ''
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setLocationDialingCode($locationDialingCode);
        $this->setMinExtensionLength($minExtensionLength);
        $this->setMaxExtensionLength($maxExtensionLength);
        $this->setDescription($description);
        $this->setRouteGroupId($routeGroupId);
        $this->setPolicySelection($policySelection);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLocationDialingCode($locationDialingCode = null)
    {
        $this->locationDialingCode = ($locationDialingCode InstanceOf EnterpriseVoiceVPNLocationCode)
             ? $locationDialingCode
             : new EnterpriseVoiceVPNLocationCode($locationDialingCode);
        $this->locationDialingCode->setElementName('locationDialingCode');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNLocationCode $locationDialingCode
     */
    public function getLocationDialingCode()
    {
        return ($this->locationDialingCode)
            ? $this->locationDialingCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMinExtensionLength($minExtensionLength = null)
    {
        $this->minExtensionLength = ($minExtensionLength InstanceOf EnterpriseVoiceVPNExtensionLength)
             ? $minExtensionLength
             : new EnterpriseVoiceVPNExtensionLength($minExtensionLength);
        $this->minExtensionLength->setElementName('minExtensionLength');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNExtensionLength $minExtensionLength
     */
    public function getMinExtensionLength()
    {
        return ($this->minExtensionLength)
            ? $this->minExtensionLength->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxExtensionLength($maxExtensionLength = null)
    {
        $this->maxExtensionLength = ($maxExtensionLength InstanceOf EnterpriseVoiceVPNExtensionLength)
             ? $maxExtensionLength
             : new EnterpriseVoiceVPNExtensionLength($maxExtensionLength);
        $this->maxExtensionLength->setElementName('maxExtensionLength');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNExtensionLength $maxExtensionLength
     */
    public function getMaxExtensionLength()
    {
        return ($this->maxExtensionLength)
            ? $this->maxExtensionLength->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf EnterpriseVoiceVPNDescription)
             ? $description
             : new EnterpriseVoiceVPNDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNDescription $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
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
}
