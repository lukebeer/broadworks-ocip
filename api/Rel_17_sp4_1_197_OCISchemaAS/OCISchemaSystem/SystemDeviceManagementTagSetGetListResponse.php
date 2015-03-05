<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementTagSetName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemDeviceManagementTagSetGetListRequest.
 *         The response includes an array of tag set names defined in the system.
 *         The system default tag set name is not part of this response.
 */
class SystemDeviceManagementTagSetGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $tagSetName=null
    ) {
        $this->tagSetName = new DeviceManagementTagSetName($tagSetName);
        $this->args       = func_get_args();
    }

    public function setTagSetName($tagSetName)
    {
        $tagSetName and $this->tagSetName = new DeviceManagementTagSetName($tagSetName);
    }

    public function getTagSetName()
    {
        return (!$this->tagSetName) ?: $this->tagSetName->value();
    }
}
