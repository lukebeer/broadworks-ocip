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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupVoiceMessagingGroupGetVoicePortalRequest14.
 *         Replaced by GroupVoiceMessagingGroupGetVoicePortalResponse15
 */
class GroupVoiceMessagingGroupGetVoicePortalResponse14 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupVoiceMessagingGroupGetVoicePortalResponse14';
    protected $serviceUserId;
    protected $serviceInstanceProfile;
    protected $isActive;
    protected $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin;
    protected $useVoicePortalWizard;
    protected $voicePortalExternalRoutingScope;
    protected $useExternalRouting;
    protected $externalRoutingAddress;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupVoiceMessagingGroupGetVoicePortalResponse14 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setElementName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId)
            ? $this->serviceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceReadProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ($serviceInstanceProfile InstanceOf ServiceInstanceReadProfile)
             ? $serviceInstanceProfile
             : new ServiceInstanceReadProfile($serviceInstanceProfile);
        $this->serviceInstanceProfile->setElementName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceReadProfile $serviceInstanceProfile
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
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin($allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = null)
    {
        $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin = new PrimitiveType($allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin);
        $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin->setElementName('allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin');
        return $this;
    }

    /**
     * 
     * @return boolean $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin
     */
    public function getAllowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin()
    {
        return ($this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin)
            ? $this->allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseVoicePortalWizard($useVoicePortalWizard = null)
    {
        $this->useVoicePortalWizard = new PrimitiveType($useVoicePortalWizard);
        $this->useVoicePortalWizard->setElementName('useVoicePortalWizard');
        return $this;
    }

    /**
     * 
     * @return boolean $useVoicePortalWizard
     */
    public function getUseVoicePortalWizard()
    {
        return ($this->useVoicePortalWizard)
            ? $this->useVoicePortalWizard->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVoicePortalExternalRoutingScope($voicePortalExternalRoutingScope = null)
    {
        $this->voicePortalExternalRoutingScope = ($voicePortalExternalRoutingScope InstanceOf VoicePortalExternalRoutingScope)
             ? $voicePortalExternalRoutingScope
             : new VoicePortalExternalRoutingScope($voicePortalExternalRoutingScope);
        $this->voicePortalExternalRoutingScope->setElementName('voicePortalExternalRoutingScope');
        return $this;
    }

    /**
     * 
     * @return VoicePortalExternalRoutingScope $voicePortalExternalRoutingScope
     */
    public function getVoicePortalExternalRoutingScope()
    {
        return ($this->voicePortalExternalRoutingScope)
            ? $this->voicePortalExternalRoutingScope->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseExternalRouting($useExternalRouting = null)
    {
        $this->useExternalRouting = new PrimitiveType($useExternalRouting);
        $this->useExternalRouting->setElementName('useExternalRouting');
        return $this;
    }

    /**
     * 
     * @return boolean $useExternalRouting
     */
    public function getUseExternalRouting()
    {
        return ($this->useExternalRouting)
            ? $this->useExternalRouting->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setExternalRoutingAddress($externalRoutingAddress = null)
    {
        $this->externalRoutingAddress = ($externalRoutingAddress InstanceOf OutgoingDNorSIPURI)
             ? $externalRoutingAddress
             : new OutgoingDNorSIPURI($externalRoutingAddress);
        $this->externalRoutingAddress->setElementName('externalRoutingAddress');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $externalRoutingAddress
     */
    public function getExternalRoutingAddress()
    {
        return ($this->externalRoutingAddress)
            ? $this->externalRoutingAddress->getElementValue()
            : null;
    }
}
