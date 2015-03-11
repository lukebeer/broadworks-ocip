<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoicePortalExternalRoutingScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify the group voice portal information for a voice messaging group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupVoiceMessagingGroupModifyVoicePortalRequest extends ComplexType implements ComplexInterface
{
    public    $name                                                      = 'GroupVoiceMessagingGroupModifyVoicePortalRequest';
    protected $serviceProviderId                                         = null;
    protected $groupId                                                   = null;
    protected $serviceInstanceProfile                                    = null;
    protected $isActive                                                  = null;
    protected $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = null;
    protected $useVoicePortalWizard                                      = null;
    protected $voicePortalExternalRoutingScope                           = null;
    protected $useExternalRouting                                        = null;
    protected $externalRoutingAddress                                    = null;
    protected $homeZoneName                                              = null;

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

    /**
     * @return 
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
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        if (!$groupId) return $this;
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceModifyProfile $serviceInstanceProfile = null)
    {
        if (!$serviceInstanceProfile) return $this;
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        $this->serviceInstanceProfile->setName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceModifyProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        if (!$isActive) return $this;
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setAllowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin($allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = null)
    {
        if (!$allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin) return $this;
        $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = new PrimitiveType($allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin);
        $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin->setName('allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin()
    {
        return $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin->getValue();
    }

    /**
     * 
     */
    public function setUseVoicePortalWizard($useVoicePortalWizard = null)
    {
        if (!$useVoicePortalWizard) return $this;
        $this->useVoicePortalWizard = new PrimitiveType($useVoicePortalWizard);
        $this->useVoicePortalWizard->setName('useVoicePortalWizard');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseVoicePortalWizard()
    {
        return $this->useVoicePortalWizard->getValue();
    }

    /**
     * 
     */
    public function setVoicePortalExternalRoutingScope($voicePortalExternalRoutingScope = null)
    {
        if (!$voicePortalExternalRoutingScope) return $this;
        $this->voicePortalExternalRoutingScope = ($voicePortalExternalRoutingScope InstanceOf VoicePortalExternalRoutingScope)
             ? $voicePortalExternalRoutingScope
             : new VoicePortalExternalRoutingScope($voicePortalExternalRoutingScope);
        $this->voicePortalExternalRoutingScope->setName('voicePortalExternalRoutingScope');
        return $this;
    }

    /**
     * 
     * @return VoicePortalExternalRoutingScope
     */
    public function getVoicePortalExternalRoutingScope()
    {
        return $this->voicePortalExternalRoutingScope->getValue();
    }

    /**
     * 
     */
    public function setUseExternalRouting($useExternalRouting = null)
    {
        if (!$useExternalRouting) return $this;
        $this->useExternalRouting = new PrimitiveType($useExternalRouting);
        $this->useExternalRouting->setName('useExternalRouting');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseExternalRouting()
    {
        return $this->useExternalRouting->getValue();
    }

    /**
     * 
     */
    public function setExternalRoutingAddress($externalRoutingAddress = null)
    {
        if (!$externalRoutingAddress) return $this;
        $this->externalRoutingAddress = ($externalRoutingAddress InstanceOf OutgoingDNorSIPURI)
             ? $externalRoutingAddress
             : new OutgoingDNorSIPURI($externalRoutingAddress);
        $this->externalRoutingAddress->setName('externalRoutingAddress');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI
     */
    public function getExternalRoutingAddress()
    {
        return $this->externalRoutingAddress->getValue();
    }

    /**
     * 
     */
    public function setHomeZoneName($homeZoneName = null)
    {
        if (!$homeZoneName) return $this;
        $this->homeZoneName = ($homeZoneName InstanceOf ZoneName)
             ? $homeZoneName
             : new ZoneName($homeZoneName);
        $this->homeZoneName->setName('homeZoneName');
        return $this;
    }

    /**
     * 
     * @return ZoneName
     */
    public function getHomeZoneName()
    {
        return $this->homeZoneName->getValue();
    }
}
