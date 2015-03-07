<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoicePortalExternalRoutingScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify the group voice portal information for a voice messaging group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupVoiceMessagingGroupModifyVoicePortalRequest extends ComplexType implements ComplexInterface
{
    public    $name                                                       = __CLASS__;
    protected $serviceProviderId                                          = null;
    protected $groupId                                                    = null;
    protected $serviceInstanceProfile                                     = null;
    protected $isActive                                                   = null;
    protected $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin  = null;
    protected $useVoicePortalWizard                                       = null;
    protected $voicePortalExternalRoutingScope                            = null;
    protected $useExternalRouting                                         = null;
    protected $externalRoutingAddress                                     = null;
    protected $homeZoneName                                               = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         ServiceInstanceModifyProfile $serviceInstanceProfile = null,
         $isActive = null,
         $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = null,
         $useVoicePortalWizard = null,
         $voicePortalExternalRoutingScope = null,
         $useExternalRouting = null,
         $externalRoutingAddress = null,
         $homeZoneName = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setServiceInstanceProfile($serviceInstanceProfile);
        $this->setIsActive($isActive);
        $this->setAllowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin($allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin);
        $this->setUseVoicePortalWizard($useVoicePortalWizard);
        $this->setVoicePortalExternalRoutingScope($voicePortalExternalRoutingScope);
        $this->setUseExternalRouting($useExternalRouting);
        $this->setExternalRoutingAddress($externalRoutingAddress);
        $this->setHomeZoneName($homeZoneName);
    }

    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setServiceInstanceProfile(ServiceInstanceModifyProfile $serviceInstanceProfile = null)
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

    public function setHomeZoneName($homeZoneName = null)
    {
        $this->homeZoneName = ($homeZoneName InstanceOf ZoneName)
             ? $homeZoneName
             : new ZoneName($homeZoneName);
    }

    public function getHomeZoneName()
    {
        return (!$this->homeZoneName) ?: $this->homeZoneName->value();
    }
}
