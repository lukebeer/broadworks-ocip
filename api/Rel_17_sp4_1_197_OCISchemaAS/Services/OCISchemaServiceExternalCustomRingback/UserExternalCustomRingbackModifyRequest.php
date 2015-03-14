<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceExternalCustomRingback; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceExternalCustomRingback\ExternalCustomRingbackSettingLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPContact;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
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
    public    $name            = 'UserExternalCustomRingbackModifyRequest';
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
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserId($userId = null)
    {
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
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
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setUseSettingLevel($useSettingLevel = null)
    {
        if (!$useSettingLevel) return $this;
        $this->useSettingLevel = ($useSettingLevel InstanceOf ExternalCustomRingbackSettingLevel)
             ? $useSettingLevel
             : new ExternalCustomRingbackSettingLevel($useSettingLevel);
        $this->useSettingLevel->setName('useSettingLevel');
        return $this;
    }

    /**
     * 
     * @return ExternalCustomRingbackSettingLevel $useSettingLevel
     */
    public function getUseSettingLevel()
    {
        return $this->useSettingLevel->getValue();
    }

    /**
     * 
     */
    public function setSipRequestURI($sipRequestURI = null)
    {
        if (!$sipRequestURI) return $this;
        $this->sipRequestURI = ($sipRequestURI InstanceOf SIPContact)
             ? $sipRequestURI
             : new SIPContact($sipRequestURI);
        $this->sipRequestURI->setName('sipRequestURI');
        return $this;
    }

    /**
     * 
     * @return SIPContact $sipRequestURI
     */
    public function getSipRequestURI()
    {
        return $this->sipRequestURI->getValue();
    }
}
