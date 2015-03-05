<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupFeatureAccessCodeLevel;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify group FAC code level and the list of feature access codes for a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Note: choice element is only valid when useFeatureAccessCodeLevel is set to "Group", otherwise an ErrorResponse will be returned.
 */
class GroupFeatureAccessCodeModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $useFeatureAccessCodeLevel=null
    ) {
        $this->serviceProviderId         = new ServiceProviderId($serviceProviderId);
        $this->groupId                   = new GroupId($groupId);
        $this->useFeatureAccessCodeLevel = $useFeatureAccessCodeLevel;
        $this->args                      = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setUseFeatureAccessCodeLevel($useFeatureAccessCodeLevel)
    {
        $useFeatureAccessCodeLevel and $this->useFeatureAccessCodeLevel = new GroupFeatureAccessCodeLevel($useFeatureAccessCodeLevel);
    }

    public function getUseFeatureAccessCodeLevel()
    {
        return (!$this->useFeatureAccessCodeLevel) ?: $this->useFeatureAccessCodeLevel->value();
    }
}
