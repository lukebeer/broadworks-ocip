<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceExternalCustomRingback; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceExternalCustomRingback\ExternalCustomRingbackSettingLevel;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPContact;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserExternalCustomRingbackGetRequest.
 */
class UserExternalCustomRingbackGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserExternalCustomRingbackGetResponse';
    protected $isActive;
    protected $useSettingLevel;
    protected $sipRequestURI;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceExternalCustomRingback\UserExternalCustomRingbackGetResponse $response
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
    public function setUseSettingLevel($useSettingLevel = null)
    {
        $this->useSettingLevel = ($useSettingLevel InstanceOf ExternalCustomRingbackSettingLevel)
             ? $useSettingLevel
             : new ExternalCustomRingbackSettingLevel($useSettingLevel);
        $this->useSettingLevel->setElementName('useSettingLevel');
        return $this;
    }

    /**
     * 
     * @return ExternalCustomRingbackSettingLevel $useSettingLevel
     */
    public function getUseSettingLevel()
    {
        return ($this->useSettingLevel)
            ? $this->useSettingLevel->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSipRequestURI($sipRequestURI = null)
    {
        $this->sipRequestURI = ($sipRequestURI InstanceOf SIPContact)
             ? $sipRequestURI
             : new SIPContact($sipRequestURI);
        $this->sipRequestURI->setElementName('sipRequestURI');
        return $this;
    }

    /**
     * 
     * @return SIPContact $sipRequestURI
     */
    public function getSipRequestURI()
    {
        return ($this->sipRequestURI)
            ? $this->sipRequestURI->getElementValue()
            : null;
    }
}
