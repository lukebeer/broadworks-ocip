<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupFeatureAccessCodeLevel;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FeatureAccessCodeEntry;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupFeatureAccessCodeGetRequest.
 */
class GroupFeatureAccessCodeGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupFeatureAccessCodeGetResponse';
    protected $useFeatureAccessCodeLevel;
    protected $featureAccessCode;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupFeatureAccessCodeGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUseFeatureAccessCodeLevel($useFeatureAccessCodeLevel = null)
    {
        $this->useFeatureAccessCodeLevel = ($useFeatureAccessCodeLevel InstanceOf GroupFeatureAccessCodeLevel)
             ? $useFeatureAccessCodeLevel
             : new GroupFeatureAccessCodeLevel($useFeatureAccessCodeLevel);
        $this->useFeatureAccessCodeLevel->setElementName('useFeatureAccessCodeLevel');
        return $this;
    }

    /**
     * 
     * @return GroupFeatureAccessCodeLevel $useFeatureAccessCodeLevel
     */
    public function getUseFeatureAccessCodeLevel()
    {
        return ($this->useFeatureAccessCodeLevel)
            ? $this->useFeatureAccessCodeLevel->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setFeatureAccessCode(FeatureAccessCodeEntry $featureAccessCode = null)
    {
        $this->featureAccessCode = ($featureAccessCode InstanceOf FeatureAccessCodeEntry)
             ? $featureAccessCode
             : new FeatureAccessCodeEntry($featureAccessCode);
        $this->featureAccessCode->setElementName('featureAccessCode');
        return $this;
    }

    /**
     * 
     * @return FeatureAccessCodeEntry $featureAccessCode
     */
    public function getFeatureAccessCode()
    {
        return $this->featureAccessCode;
    }
}
