<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNExtensionLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseVoiceVPNPolicySelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNLocationCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the enterprise level data associated with a Voice VPN location code.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseVoiceVPNModifyPolicyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'EnterpriseVoiceVPNModifyPolicyRequest';
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
         $minExtensionLength = null,
         $maxExtensionLength = null,
         $description = null,
         $routeGroupId = null,
         $policySelection = null
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
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setLocationDialingCode($locationDialingCode = null)
    {
        $this->locationDialingCode = ($locationDialingCode InstanceOf EnterpriseVoiceVPNLocationCode)
             ? $locationDialingCode
             : new EnterpriseVoiceVPNLocationCode($locationDialingCode);
        $this->locationDialingCode->setName('locationDialingCode');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNLocationCode $locationDialingCode
     */
    public function getLocationDialingCode()
    {
        return ($this->locationDialingCode) ? $this->locationDialingCode->getValue() : null;
    }

    /**
     * 
     */
    public function setMinExtensionLength($minExtensionLength = null)
    {
        $this->minExtensionLength = ($minExtensionLength InstanceOf EnterpriseVoiceVPNExtensionLength)
             ? $minExtensionLength
             : new EnterpriseVoiceVPNExtensionLength($minExtensionLength);
        $this->minExtensionLength->setName('minExtensionLength');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNExtensionLength $minExtensionLength
     */
    public function getMinExtensionLength()
    {
        return ($this->minExtensionLength) ? $this->minExtensionLength->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxExtensionLength($maxExtensionLength = null)
    {
        $this->maxExtensionLength = ($maxExtensionLength InstanceOf EnterpriseVoiceVPNExtensionLength)
             ? $maxExtensionLength
             : new EnterpriseVoiceVPNExtensionLength($maxExtensionLength);
        $this->maxExtensionLength->setName('maxExtensionLength');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNExtensionLength $maxExtensionLength
     */
    public function getMaxExtensionLength()
    {
        return ($this->maxExtensionLength) ? $this->maxExtensionLength->getValue() : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf EnterpriseVoiceVPNDescription)
             ? $description
             : new EnterpriseVoiceVPNDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNDescription $description
     */
    public function getDescription()
    {
        return ($this->description) ? $this->description->getValue() : null;
    }

    /**
     * 
     */
    public function setRouteGroupId($routeGroupId = null)
    {
        $this->routeGroupId = ($routeGroupId InstanceOf GroupId)
             ? $routeGroupId
             : new GroupId($routeGroupId);
        $this->routeGroupId->setName('routeGroupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $routeGroupId
     */
    public function getRouteGroupId()
    {
        return ($this->routeGroupId) ? $this->routeGroupId->getValue() : null;
    }

    /**
     * 
     */
    public function setPolicySelection($policySelection = null)
    {
        $this->policySelection = ($policySelection InstanceOf EnterpriseVoiceVPNPolicySelection)
             ? $policySelection
             : new EnterpriseVoiceVPNPolicySelection($policySelection);
        $this->policySelection->setName('policySelection');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNPolicySelection $policySelection
     */
    public function getPolicySelection()
    {
        return ($this->policySelection) ? $this->policySelection->getValue() : null;
    }
}
