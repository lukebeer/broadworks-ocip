<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoicePortalExternalRoutingScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\ServiceInstanceReadProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupVoiceMessagingGroupGetVoicePortalRequest14.
 *         Replaced by GroupVoiceMessagingGroupGetVoicePortalResponse15
 */
class GroupVoiceMessagingGroupGetVoicePortalResponse14 extends ComplexType implements ComplexInterface
{
    public    $name                                                       = __CLASS__;
    protected $serviceUserId                                              = null;
    protected $serviceInstanceProfile                                     = null;
    protected $isActive                                                   = null;
    protected $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin  = null;
    protected $useVoicePortalWizard                                       = null;
    protected $voicePortalExternalRoutingScope                            = null;
    protected $useExternalRouting                                         = null;
    protected $externalRoutingAddress                                     = null;


    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setServiceInstanceProfile(ServiceInstanceReadProfile $serviceInstanceProfile = null)
    {
    }

    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->value();
    }

    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setAllowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin(xs:boolean $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = null)
    {
    }

    public function getAllowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin()
    {
        return (!$this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin) ?: $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin->value();
    }

    public function setUseVoicePortalWizard(xs:boolean $useVoicePortalWizard = null)
    {
    }

    public function getUseVoicePortalWizard()
    {
        return (!$this->useVoicePortalWizard) ?: $this->useVoicePortalWizard->value();
    }

    public function setVoicePortalExternalRoutingScope($voicePortalExternalRoutingScope = null)
    {
        $this->voicePortalExternalRoutingScope = ($voicePortalExternalRoutingScope InstanceOf VoicePortalExternalRoutingScope)
             ? $voicePortalExternalRoutingScope
             : new VoicePortalExternalRoutingScope($voicePortalExternalRoutingScope);
    }

    public function getVoicePortalExternalRoutingScope()
    {
        return (!$this->voicePortalExternalRoutingScope) ?: $this->voicePortalExternalRoutingScope->value();
    }

    public function setUseExternalRouting(xs:boolean $useExternalRouting = null)
    {
    }

    public function getUseExternalRouting()
    {
        return (!$this->useExternalRouting) ?: $this->useExternalRouting->value();
    }

    public function setExternalRoutingAddress($externalRoutingAddress = null)
    {
        $this->externalRoutingAddress = ($externalRoutingAddress InstanceOf OutgoingDNorSIPURI)
             ? $externalRoutingAddress
             : new OutgoingDNorSIPURI($externalRoutingAddress);
    }

    public function getExternalRoutingAddress()
    {
        return (!$this->externalRoutingAddress) ?: $this->externalRoutingAddress->value();
    }
}
