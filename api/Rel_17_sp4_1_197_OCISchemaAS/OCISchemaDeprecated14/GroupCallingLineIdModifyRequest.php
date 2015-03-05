<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the calling line id settings for a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallingLineIdModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $useGroupNumber=null,
             $useGroupName=null,
             $callingLineIdPhoneNumber=null
    ) {
        $this->serviceProviderId        = new ServiceProviderId($serviceProviderId);
        $this->groupId                  = new GroupId($groupId);
        $this->useGroupNumber           = $useGroupNumber;
        $this->useGroupName             = $useGroupName;
        $this->callingLineIdPhoneNumber = new DN($callingLineIdPhoneNumber);
        $this->args                     = func_get_args();
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

    public function setUseGroupNumber($useGroupNumber)
    {
        $useGroupNumber and $this->useGroupNumber = new xs:boolean($useGroupNumber);
    }

    public function getUseGroupNumber()
    {
        return (!$this->useGroupNumber) ?: $this->useGroupNumber->value();
    }

    public function setUseGroupName($useGroupName)
    {
        $useGroupName and $this->useGroupName = new xs:boolean($useGroupName);
    }

    public function getUseGroupName()
    {
        return (!$this->useGroupName) ?: $this->useGroupName->value();
    }

    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber)
    {
        $callingLineIdPhoneNumber and $this->callingLineIdPhoneNumber = new DN($callingLineIdPhoneNumber);
    }

    public function getCallingLineIdPhoneNumber()
    {
        return (!$this->callingLineIdPhoneNumber) ?: $this->callingLineIdPhoneNumber->value();
    }
}
