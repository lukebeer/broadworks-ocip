<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoicePortalExternalRoutingScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\ServiceInstanceReadProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the GroupVoiceMessagingGroupGetVoicePortalRequest15.
 */
class GroupVoiceMessagingGroupGetVoicePortalResponse15 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                                              = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\GroupVoiceMessagingGroupGetVoicePortalResponse15';
    public    $name                                                      = __CLASS__;
    protected $serviceUserId                                             = null;
    protected $serviceInstanceProfile                                    = null;
    protected $isActive                                                  = null;
    protected $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = null;
    protected $useVoicePortalWizard                                      = null;
    protected $voicePortalExternalRoutingScope                           = null;
    protected $useExternalRouting                                        = null;
    protected $externalRoutingAddress                                    = null;
    protected $homeZoneName                                              = null;


    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->getValue();
    }

    /**
     * Service Profile Information for group service.
     *         It is identical to the ServiceInstanceAddProfile, but without the password.
     *         Prior to release 14 this was called ServiceInstanceProfile.
     */
    public function setServiceInstanceProfile(ServiceInstanceReadProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ServiceInstanceReadProfile $serviceInstanceProfile;
    }

    /**
     * Service Profile Information for group service.
     *         It is identical to the ServiceInstanceAddProfile, but without the password.
     *         Prior to release 14 this was called ServiceInstanceProfile.
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
