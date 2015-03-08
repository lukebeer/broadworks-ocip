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
    public    $name                                                      = __CLASS__;
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
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * Service Profile Information for group service used when modifying an existing service instance.
     */
    public function setServiceInstanceProfile(ServiceInstanceModifyProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ServiceInstanceModifyProfile $serviceInstanceProfile;
    }

    /**
     * Service Profile Information for group service used when modifying an existing service instance.
     */
    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->getValue();
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setAllowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin($allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = null)
    {
        $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = (boolean) $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin;
    }

    /**
     * 
     */
    public function getAllowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin()
    {
        return (!$this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin) ?: $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin->getValue();
    }

    /**
     * 
     */
    public function setUseVoicePortalWizard($useVoicePortalWizard = null)
    {
        $this->useVoicePortalWizard = (boolean) $useVoicePortalWizard;
    }

    /**
     * 
     */
    public function getUseVoicePortalWizard()
    {
        return (!$this->useVoicePortalWizard) ?: $this->useVoicePortalWizard->getValue();
    }

    /**
     * Choices for the voice portal's external routing to decide which settings to use.
     */
    public function setVoicePortalExternalRoutingScope($voicePortalExternalRoutingScope = null)
    {
        $this->voicePortalExternalRoutingScope = ($voicePortalExternalRoutingScope InstanceOf VoicePortalExternalRoutingScope)
             ? $voicePortalExternalRoutingScope
             : new VoicePortalExternalRoutingScope($voicePortalExternalRoutingScope);
    }

    /**
     * Choices for the voice portal's external routing to decide which settings to use.
     */
    public function getVoicePortalExternalRoutingScope()
    {
        return (!$this->voicePortalExternalRoutingScope) ?: $this->voicePortalExternalRoutingScope->getValue();
    }

    /**
     * 
     */
    public function setUseExternalRouting($useExternalRouting = null)
    {
        $this->useExternalRouting = (boolean) $useExternalRouting;
    }

    /**
     * 
     */
    public function getUseExternalRouting()
    {
        return (!$this->useExternalRouting) ?: $this->useExternalRouting->getValue();
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function setExternalRoutingAddress($externalRoutingAddress = null)
    {
        $this->externalRoutingAddress = ($externalRoutingAddress InstanceOf OutgoingDNorSIPURI)
             ? $externalRoutingAddress
             : new OutgoingDNorSIPURI($externalRoutingAddress);
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function getExternalRoutingAddress()
    {
        return (!$this->externalRoutingAddress) ?: $this->externalRoutingAddress->getValue();
    }

    /**
     * Zone Name.
     */
    public function setHomeZoneName($homeZoneName = null)
    {
        $this->homeZoneName = ($homeZoneName InstanceOf ZoneName)
             ? $homeZoneName
             : new ZoneName($homeZoneName);
    }

    /**
     * Zone Name.
     */
    public function getHomeZoneName()
    {
        return (!$this->homeZoneName) ?: $this->homeZoneName->getValue();
    }
}
