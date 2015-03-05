<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePolycomPhoneServices; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CustomContactDirectoryName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the group's Polycom Phone Services attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupPolycomPhoneServicesModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $includeGroupCommonPhoneListInDirectory=null,
             $includeGroupCustomContactDirectoryInDirectory=null,
             $groupCustomContactDirectory=null
    ) {
        $this->serviceProviderId                             = new ServiceProviderId($serviceProviderId);
        $this->groupId                                       = new GroupId($groupId);
        $this->includeGroupCommonPhoneListInDirectory        = $includeGroupCommonPhoneListInDirectory;
        $this->includeGroupCustomContactDirectoryInDirectory = $includeGroupCustomContactDirectoryInDirectory;
        $this->groupCustomContactDirectory                   = new CustomContactDirectoryName($groupCustomContactDirectory);
        $this->args                                          = func_get_args();
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

    public function setIncludeGroupCommonPhoneListInDirectory($includeGroupCommonPhoneListInDirectory)
    {
        $includeGroupCommonPhoneListInDirectory and $this->includeGroupCommonPhoneListInDirectory = new xs:boolean($includeGroupCommonPhoneListInDirectory);
    }

    public function getIncludeGroupCommonPhoneListInDirectory()
    {
        return (!$this->includeGroupCommonPhoneListInDirectory) ?: $this->includeGroupCommonPhoneListInDirectory->value();
    }

    public function setIncludeGroupCustomContactDirectoryInDirectory($includeGroupCustomContactDirectoryInDirectory)
    {
        $includeGroupCustomContactDirectoryInDirectory and $this->includeGroupCustomContactDirectoryInDirectory = new xs:boolean($includeGroupCustomContactDirectoryInDirectory);
    }

    public function getIncludeGroupCustomContactDirectoryInDirectory()
    {
        return (!$this->includeGroupCustomContactDirectoryInDirectory) ?: $this->includeGroupCustomContactDirectoryInDirectory->value();
    }

    public function setGroupCustomContactDirectory($groupCustomContactDirectory)
    {
        $groupCustomContactDirectory and $this->groupCustomContactDirectory = new CustomContactDirectoryName($groupCustomContactDirectory);
    }

    public function getGroupCustomContactDirectory()
    {
        return (!$this->groupCustomContactDirectory) ?: $this->groupCustomContactDirectory->value();
    }
}
