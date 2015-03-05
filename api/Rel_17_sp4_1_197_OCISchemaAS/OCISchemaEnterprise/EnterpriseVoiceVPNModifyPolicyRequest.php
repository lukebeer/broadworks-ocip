<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseVoiceVPNLocationCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseVoiceVPNExtensionLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseVoiceVPNDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseVoiceVPNPolicySelection;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the enterprise level data associated with a Voice VPN location code.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseVoiceVPNModifyPolicyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $locationDialingCode,
             $minExtensionLength=null,
             $maxExtensionLength=null,
             $description=null,
             $routeGroupId=null,
             $policySelection=null
    ) {
        $this->serviceProviderId   = new ServiceProviderId($serviceProviderId);
        $this->locationDialingCode = $locationDialingCode;
        $this->minExtensionLength  = $minExtensionLength;
        $this->maxExtensionLength  = $maxExtensionLength;
        $this->description         = $description;
        $this->routeGroupId        = new GroupId($routeGroupId);
        $this->policySelection     = new EnterpriseVoiceVPNPolicySelection($policySelection);
        $this->args                = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setLocationDialingCode($locationDialingCode)
    {
        $locationDialingCode and $this->locationDialingCode = new EnterpriseVoiceVPNLocationCode($locationDialingCode);
    }

    public function getLocationDialingCode()
    {
        return (!$this->locationDialingCode) ?: $this->locationDialingCode->value();
    }

    public function setMinExtensionLength($minExtensionLength)
    {
        $minExtensionLength and $this->minExtensionLength = new EnterpriseVoiceVPNExtensionLength($minExtensionLength);
    }

    public function getMinExtensionLength()
    {
        return (!$this->minExtensionLength) ?: $this->minExtensionLength->value();
    }

    public function setMaxExtensionLength($maxExtensionLength)
    {
        $maxExtensionLength and $this->maxExtensionLength = new EnterpriseVoiceVPNExtensionLength($maxExtensionLength);
    }

    public function getMaxExtensionLength()
    {
        return (!$this->maxExtensionLength) ?: $this->maxExtensionLength->value();
    }

    public function setDescription($description)
    {
        $description and $this->description = new EnterpriseVoiceVPNDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setRouteGroupId($routeGroupId)
    {
        $routeGroupId and $this->routeGroupId = new GroupId($routeGroupId);
    }

    public function getRouteGroupId()
    {
        return (!$this->routeGroupId) ?: $this->routeGroupId->value();
    }

    public function setPolicySelection($policySelection)
    {
        $policySelection and $this->policySelection = new EnterpriseVoiceVPNPolicySelection($policySelection);
    }

    public function getPolicySelection()
    {
        return (!$this->policySelection) ?: $this->policySelection->value();
    }
}
