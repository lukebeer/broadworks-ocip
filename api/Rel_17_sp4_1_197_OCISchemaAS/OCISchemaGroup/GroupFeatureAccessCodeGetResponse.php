<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupFeatureAccessCodeLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FeatureAccessCodeEntry;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupFeatureAccessCodeGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupFeatureAccessCodeGetRequest.
 */
class GroupFeatureAccessCodeGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
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
     * Feature Access Code Level defining group policy how Feature Access Codes will be used by a group.
     */
    public function setUseFeatureAccessCodeLevel($useFeatureAccessCodeLevel = null)
    {
        $this->useFeatureAccessCodeLevel = ($useFeatureAccessCodeLevel InstanceOf GroupFeatureAccessCodeLevel)
             ? $useFeatureAccessCodeLevel
             : new GroupFeatureAccessCodeLevel($useFeatureAccessCodeLevel);
    }

    /**
     * Feature Access Code Level defining group policy how Feature Access Codes will be used by a group.
     */
    public function getUseFeatureAccessCodeLevel()
    {
        return (!$this->useFeatureAccessCodeLevel) ?: $this->useFeatureAccessCodeLevel->getValue();
    }

    /**
     * Feature Access Code Entry
     */
    public function setFeatureAccessCode(FeatureAccessCodeEntry $featureAccessCode = null)
    {
        $this->featureAccessCode =  $featureAccessCode;
    }

    /**
     * Feature Access Code Entry
     */
    public function getFeatureAccessCode()
    {
        return (!$this->featureAccessCode) ?: $this->featureAccessCode->getValue();
    }
}
