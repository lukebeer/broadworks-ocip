<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoicePortalExternalRoutingScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify the group voice portal information for a voice messaging group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupVoiceMessagingGroupModifyVoicePortalRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             ServiceInstanceModifyProfile $serviceInstanceProfile=null,
             $isActive=null,
             $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin=null,
             $useVoicePortalWizard=null,
             $voicePortalExternalRoutingScope=null,
             $useExternalRouting=null,
             $externalRoutingAddress=null,
             $homeZoneName=null
    ) {
        $this->serviceProviderId                                         = new ServiceProviderId($serviceProviderId);
        $this->groupId                                                   = new GroupId($groupId);
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

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $serviceInstanceProfile and $this->serviceInstanceProfile = new ServiceInstanceModifyProfile($serviceInstanceProfile);
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
