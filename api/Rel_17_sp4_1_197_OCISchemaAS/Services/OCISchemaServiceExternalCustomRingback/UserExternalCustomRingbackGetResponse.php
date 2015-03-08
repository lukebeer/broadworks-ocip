<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceExternalCustomRingback; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceExternalCustomRingback\ExternalCustomRingbackSettingLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPContact;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserExternalCustomRingbackGetRequest.
 */
class UserExternalCustomRingbackGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceExternalCustomRingback\UserExternalCustomRingbackGetResponse';
    public    $name            = __CLASS__;
    protected $isActive        = null;
    protected $useSettingLevel = null;
    protected $sipRequestURI   = null;


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
