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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNModifyPolicyResponse;
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
    public    $name                = __CLASS__;
    protected $serviceProviderId   = null;
    protected $locationDialingCode = null;
    protected $minExtensionLength  = null;
    protected $maxExtensionLength  = null;
    protected $description         = null;
    protected $routeGroupId        = null;
    protected $policySelection     = null;

    public function __construct(
         $serviceProviderId,
         $locationDialingCode,
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
     * @return EnterpriseVoiceVPNModifyPolicyResponse
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
     * Enterprise Voice VPN location code.
     */
    public function setLocationDialingCode($locationDialingCode = null)
    {
        $this->locationDialingCode = ($locationDialingCode InstanceOf EnterpriseVoiceVPNLocationCode)
             ? $locationDialingCode
             : new EnterpriseVoiceVPNLocationCode($locationDialingCode);
    }

    /**
     * Enterprise Voice VPN location code.
     */
    public function getLocationDialingCode()
    {
        return (!$this->locationDialingCode) ?: $this->locationDialingCode->getValue();
    }

    /**
     * Enterprise Voice VPN Extension Length.
     */
    public function setMinExtensionLength($minExtensionLength = null)
    {
        $this->minExtensionLength = ($minExtensionLength InstanceOf EnterpriseVoiceVPNExtensionLength)
             ? $minExtensionLength
             : new EnterpriseVoiceVPNExtensionLength($minExtensionLength);
    }

    /**
     * Enterprise Voice VPN Extension Length.
     */
    public function getMinExtensionLength()
    {
        return (!$this->minExtensionLength) ?: $this->minExtensionLength->getValue();
    }

    /**
     * Enterprise Voice VPN Extension Length.
     */
    public function setMaxExtensionLength($maxExtensionLength = null)
    {
        $this->maxExtensionLength = ($maxExtensionLength InstanceOf EnterpriseVoiceVPNExtensionLength)
             ? $maxExtensionLength
             : new EnterpriseVoiceVPNExtensionLength($maxExtensionLength);
    }

    /**
     * Enterprise Voice VPN Extension Length.
     */
    public function getMaxExtensionLength()
    {
        return (!$this->maxExtensionLength) ?: $this->maxExtensionLength->getValue();
    }

    /**
     * Enterprise Voice VPN description.
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf EnterpriseVoiceVPNDescription)
             ? $description
             : new EnterpriseVoiceVPNDescription($description);
    }

    /**
     * Enterprise Voice VPN description.
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
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
}
