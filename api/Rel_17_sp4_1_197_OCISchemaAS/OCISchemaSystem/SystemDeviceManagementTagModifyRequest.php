<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementTagValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementTagName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify a static configuration tag.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemDeviceManagementTagModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name      = __CLASS__;
    protected $tagName   = null;
    protected $tagValue  = null;

    public function __construct(
         $tagName,
         $tagValue = null
    ) {
        $this->setTagName($tagName);
        $this->setTagValue($tagValue);
    }

    public function setTagName($tagName = null)
    {
        $this->tagName = ($tagName InstanceOf DeviceManagementTagName)
             ? $tagName
             : new DeviceManagementTagName($tagName);
    }

    public function getTagName()
    {
        return (!$this->tagName) ?: $this->tagName->value();
    }

    public function setTagValue($tagValue = null)
    {
        $this->tagValue = ($tagValue InstanceOf DeviceManagementTagValue)
             ? $tagValue
             : new DeviceManagementTagValue($tagValue);
    }

    public function getTagValue()
    {
        return (!$this->tagValue) ?: $this->tagValue->value();
    }
}
