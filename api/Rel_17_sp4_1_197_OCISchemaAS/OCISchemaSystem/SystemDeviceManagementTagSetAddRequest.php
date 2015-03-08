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
     * Request to add a static configuration tag set.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemDeviceManagementTagSetAddRequest extends ComplexType implements ComplexInterface
{
    public    $name       = __CLASS__;
    protected $tagSetName = null;

    public function __construct(
         $tagSetName
    ) {
        $this->setTagSetName($tagSetName);
    }

    /**
     * A static tag set name for access device files managed by the Device Management System on BroadWorks.
     */
    public function setTagSetName($tagSetName = null)
    {
        $this->tagSetName = ($tagSetName InstanceOf DeviceManagementTagSetName)
             ? $tagSetName
             : new DeviceManagementTagSetName($tagSetName);
    }

    /**
     * A static tag set name for access device files managed by the Device Management System on BroadWorks.
     */
    public function getTagSetName()
    {
        return (!$this->tagSetName) ?: $this->tagSetName->getValue();
    }
}
