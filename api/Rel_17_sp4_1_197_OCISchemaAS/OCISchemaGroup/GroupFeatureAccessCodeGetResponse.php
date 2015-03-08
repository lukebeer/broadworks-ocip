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
    const     RESPONSE_TYPE              = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupFeatureAccessCodeGetResponse';
    public    $name                      = __CLASS__;
    protected $useFeatureAccessCodeLevel = null;
    protected $featureAccessCode         = null;


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
        $this->featureAccessCode = FeatureAccessCodeEntry $featureAccessCode;
    }

    /**
     * Feature Access Code Entry
     */
    public function getFeatureAccessCode()
    {
        return (!$this->featureAccessCode) ?: $this->featureAccessCode->getValue();
    }
}
