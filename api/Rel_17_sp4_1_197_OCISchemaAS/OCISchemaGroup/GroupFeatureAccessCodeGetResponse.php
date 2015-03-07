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


/**
 * Response to the GroupFeatureAccessCodeGetRequest.
 */
class GroupFeatureAccessCodeGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                       = __CLASS__;
    protected $useFeatureAccessCodeLevel  = null;
    protected $featureAccessCode          = null;


    public function setUseFeatureAccessCodeLevel($useFeatureAccessCodeLevel = null)
    {
        $this->useFeatureAccessCodeLevel = ($useFeatureAccessCodeLevel InstanceOf GroupFeatureAccessCodeLevel)
             ? $useFeatureAccessCodeLevel
             : new GroupFeatureAccessCodeLevel($useFeatureAccessCodeLevel);
    }

    public function getUseFeatureAccessCodeLevel()
    {
        return (!$this->useFeatureAccessCodeLevel) ?: $this->useFeatureAccessCodeLevel->value();
    }

    public function setFeatureAccessCode(FeatureAccessCodeEntry $featureAccessCode = null)
    {
    }

    public function getFeatureAccessCode()
    {
        return (!$this->featureAccessCode) ?: $this->featureAccessCode->value();
    }
}
