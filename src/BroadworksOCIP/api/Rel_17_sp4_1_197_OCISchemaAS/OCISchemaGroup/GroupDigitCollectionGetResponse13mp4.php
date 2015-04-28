<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupDigitCollectionSettingLevel;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitMap;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupDigitCollectionGetRequest13mp4.
 */
class GroupDigitCollectionGetResponse13mp4 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupDigitCollectionGetResponse13mp4';
    protected $useSetting;
    protected $accessCode;
    protected $publicDigitMap;
    protected $privateDigitMap;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupDigitCollectionGetResponse13mp4 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUseSetting($useSetting = null)
    {
        $this->useSetting = ($useSetting InstanceOf GroupDigitCollectionSettingLevel)
             ? $useSetting
             : new GroupDigitCollectionSettingLevel($useSetting);
        $this->useSetting->setElementName('useSetting');
        return $this;
    }

    /**
     * 
     * @return GroupDigitCollectionSettingLevel $useSetting
     */
    public function getUseSetting()
    {
        return ($this->useSetting)
            ? $this->useSetting->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAccessCode($accessCode = null)
    {
        $this->accessCode = ($accessCode InstanceOf AccessCode)
             ? $accessCode
             : new AccessCode($accessCode);
        $this->accessCode->setElementName('accessCode');
        return $this;
    }

    /**
     * 
     * @return AccessCode $accessCode
     */
    public function getAccessCode()
    {
        return ($this->accessCode)
            ? $this->accessCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPublicDigitMap($publicDigitMap = null)
    {
        $this->publicDigitMap = ($publicDigitMap InstanceOf DigitMap)
             ? $publicDigitMap
             : new DigitMap($publicDigitMap);
        $this->publicDigitMap->setElementName('publicDigitMap');
        return $this;
    }

    /**
     * 
     * @return DigitMap $publicDigitMap
     */
    public function getPublicDigitMap()
    {
        return ($this->publicDigitMap)
            ? $this->publicDigitMap->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPrivateDigitMap($privateDigitMap = null)
    {
        $this->privateDigitMap = ($privateDigitMap InstanceOf DigitMap)
             ? $privateDigitMap
             : new DigitMap($privateDigitMap);
        $this->privateDigitMap->setElementName('privateDigitMap');
        return $this;
    }

    /**
     * 
     * @return DigitMap $privateDigitMap
     */
    public function getPrivateDigitMap()
    {
        return ($this->privateDigitMap)
            ? $this->privateDigitMap->getElementValue()
            : null;
    }
}
