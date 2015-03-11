<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceExternalCustomRingback; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceExternalCustomRingback\ExternalCustomRingbackSettingLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPContact;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserExternalCustomRingbackGetRequest.
 */
class UserExternalCustomRingbackGetResponse extends ComplexType implements ComplexInterface
{
    public    $name            = 'UserExternalCustomRingbackGetResponse';
    protected $isActive        = null;
    protected $useSettingLevel = null;
    protected $sipRequestURI   = null;

    /**
     * @return UserExternalCustomRingbackGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
     * @return ExternalCustomRingbackSettingLevel
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
     * @return SIPContact
     */
    public function getSipRequestURI()
    {
        return $this->sipRequestURI->getValue();
    }
}
