<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceExternalCustomRingback; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceExternalCustomRingback\ExternalCustomRingbackSettingLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPContact;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceExternalCustomRingback\UserExternalCustomRingbackModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user level data associated with External Custom Ringback.  
 *         The user SIP URI, when selected, it replaces the SP address, port and prefix.  
 *         The user SIP URI, if selected, is the Request URI of the SIP INVITE sent 
 *         to the external server.  When the service provider data is used instead, 
 *         the Request URI is constructed using the prefix, address, port and the user DN.  
 *         The timeout value is the only SP configuration used when the user SIP URI is selected.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserExternalCustomRingbackModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $userId          = null;
    protected $isActive        = null;
    protected $useSettingLevel = null;
    protected $sipRequestURI   = null;

    public function __construct(
         $userId,
         $isActive = null,
         $useSettingLevel = null,
         $sipRequestURI = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setUseSettingLevel($useSettingLevel);
        $this->setSipRequestURI($sipRequestURI);
    }

    /**
     * @return UserExternalCustomRingbackModifyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
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
        return (!$this->isActive) ?: $this->isActive;
    }

    /**
     * Choices for the External Custom Ringback feature to decide which type of settings to use.
     */
    public function setUseSettingLevel($useSettingLevel = null)
    {
        $this->useSettingLevel = ($useSettingLevel InstanceOf ExternalCustomRingbackSettingLevel)
             ? $useSettingLevel
             : new ExternalCustomRingbackSettingLevel($useSettingLevel);
    }

    /**
     * Choices for the External Custom Ringback feature to decide which type of settings to use.
     */
    public function getUseSettingLevel()
    {
        return (!$this->useSettingLevel) ?: $this->useSettingLevel->getValue();
    }

    /**
     * SIP Registration Contact without the sip: prefix.
     *         Validation:
     *          - do not allow sip:
     *          - allow the following characters:
     *            alphanumeric   ampersand    =   +   $   ,   ;   ?   /   -   _   .   !   ~   *   '   (   )   :  @
     */
    public function setSipRequestURI($sipRequestURI = null)
    {
        $this->sipRequestURI = ($sipRequestURI InstanceOf SIPContact)
             ? $sipRequestURI
             : new SIPContact($sipRequestURI);
    }

    /**
     * SIP Registration Contact without the sip: prefix.
     *         Validation:
     *          - do not allow sip:
     *          - allow the following characters:
     *            alphanumeric   ampersand    =   +   $   ,   ;   ?   /   -   _   .   !   ~   *   '   (   )   :  @
     */
    public function getSipRequestURI()
    {
        return (!$this->sipRequestURI) ?: $this->sipRequestURI->getValue();
    }
}
