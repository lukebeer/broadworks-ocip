<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupFeatureAccessCodeLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FeatureAccessCodeEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupFeatureAccessCodeGetRequest.
 */
class GroupFeatureAccessCodeGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                      = 'GroupFeatureAccessCodeGetResponse';
    protected $useFeatureAccessCodeLevel = null;
    protected $featureAccessCode         = null;

    /**
     * @return GroupFeatureAccessCodeGetResponse
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
        if (!$useFeatureAccessCodeLevel) return $this;
        $this->useFeatureAccessCodeLevel = ($useFeatureAccessCodeLevel InstanceOf GroupFeatureAccessCodeLevel)
             ? $useFeatureAccessCodeLevel
             : new GroupFeatureAccessCodeLevel($useFeatureAccessCodeLevel);
        $this->useFeatureAccessCodeLevel->setName('useFeatureAccessCodeLevel');
        return $this;
    }

    /**
     * 
     * @return GroupFeatureAccessCodeLevel
     */
    public function getUseFeatureAccessCodeLevel()
    {
        return $this->useFeatureAccessCodeLevel->getValue();
    }

    /**
     * 
     */
    public function setFeatureAccessCode(FeatureAccessCodeEntry $featureAccessCode = null)
    {
        if (!$featureAccessCode) return $this;
        $this->featureAccessCode = $featureAccessCode;
        $this->featureAccessCode->setName('featureAccessCode');
        return $this;
    }

    /**
     * 
     * @return FeatureAccessCodeEntry
     */
    public function getFeatureAccessCode()
    {
        return $this->featureAccessCode;
    }
}
