<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceReadProfile17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoicePortalExternalRoutingScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupVoiceMessagingGroupGetVoicePortalRequest17.
 */
class GroupVoiceMessagingGroupGetVoicePortalResponse17 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             ServiceInstanceReadProfile17 $serviceInstanceProfile,
             $isActive,
             $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin,
             $useVoicePortalWizard,
             $voicePortalExternalRoutingScope,
             $useExternalRouting,
             $externalRoutingAddress=null,
             $homeZoneName=null
    ) {
        $this->serviceUserId                                             = new UserId($serviceUserId);
        $this->serviceInstanceProfile                                    = $serviceInstanceProfile;
        $this->isActive                                                  = $isActive;
        $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin;
        $this->useVoicePortalWizard                                      = $useVoicePortalWizard;
        $this->voicePortalExternalRoutingScope                           = $voicePortalExternalRoutingScope;
        $this->useExternalRouting                                        = $useExternalRouting;
        $this->externalRoutingAddress                                    = new OutgoingDNorSIPURI($externalRoutingAddress);
        $this->homeZoneName                                              = new ZoneName($homeZoneName);
        $this->args                                                      = func_get_args();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $serviceInstanceProfile and $this->serviceInstanceProfile = new ServiceInstanceReadProfile17($serviceInstanceProfile);
    }

    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->value();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setAllowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin($allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin)
    {
        $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin and $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = new xs:boolean($allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin);
    }

    public function getAllowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin()
    {
        return (!$this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin) ?: $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin->value();
    }

    public function setUseVoicePortalWizard($useVoicePortalWizard)
    {
        $useVoicePortalWizard and $this->useVoicePortalWizard = new xs:boolean($useVoicePortalWizard);
    }

    public function getUseVoicePortalWizard()
    {
        return (!$this->useVoicePortalWizard) ?: $this->useVoicePortalWizard->value();
    }

    public function setVoicePortalExternalRoutingScope($voicePortalExternalRoutingScope)
    {
        $voicePortalExternalRoutingScope and $this->voicePortalExternalRoutingScope = new VoicePortalExternalRoutingScope($voicePortalExternalRoutingScope);
    }

    public function getVoicePortalExternalRoutingScope()
    {
        return (!$this->voicePortalExternalRoutingScope) ?: $this->voicePortalExternalRoutingScope->value();
    }

    public function setUseExternalRouting($useExternalRouting)
    {
        $useExternalRouting and $this->useExternalRouting = new xs:boolean($useExternalRouting);
    }

    public function getUseExternalRouting()
    {
        return (!$this->useExternalRouting) ?: $this->useExternalRouting->value();
    }

    public function setExternalRoutingAddress($externalRoutingAddress)
    {
        $externalRoutingAddress and $this->externalRoutingAddress = new OutgoingDNorSIPURI($externalRoutingAddress);
    }

    public function getExternalRoutingAddress()
    {
        return (!$this->externalRoutingAddress) ?: $this->externalRoutingAddress->value();
    }

    public function setHomeZoneName($homeZoneName)
    {
        $homeZoneName and $this->homeZoneName = new ZoneName($homeZoneName);
    }

    public function getHomeZoneName()
    {
        return (!$this->homeZoneName) ?: $this->homeZoneName->value();
    }
}
