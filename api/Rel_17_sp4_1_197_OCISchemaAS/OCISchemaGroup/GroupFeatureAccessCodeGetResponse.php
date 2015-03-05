<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupFeatureAccessCodeLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FeatureAccessCodeEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupFeatureAccessCodeGetRequest.
 */
class GroupFeatureAccessCodeGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $useFeatureAccessCodeLevel,
             FeatureAccessCodeEntry $featureAccessCode=null
    ) {
        $this->useFeatureAccessCodeLevel = $useFeatureAccessCodeLevel;
        $this->featureAccessCode         = $featureAccessCode;
        $this->args                      = func_get_args();
    }

    public function setUseFeatureAccessCodeLevel($useFeatureAccessCodeLevel)
    {
        $useFeatureAccessCodeLevel and $this->useFeatureAccessCodeLevel = new GroupFeatureAccessCodeLevel($useFeatureAccessCodeLevel);
    }

    public function getUseFeatureAccessCodeLevel()
    {
        return (!$this->useFeatureAccessCodeLevel) ?: $this->useFeatureAccessCodeLevel->value();
    }

    public function setFeatureAccessCode($featureAccessCode)
    {
        $featureAccessCode and $this->featureAccessCode = new FeatureAccessCodeEntry($featureAccessCode);
    }

    public function getFeatureAccessCode()
    {
        return (!$this->featureAccessCode) ?: $this->featureAccessCode->value();
    }
}
