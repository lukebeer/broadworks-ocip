<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupExtensionLength;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupExtensionLengthGetRequest.
 */
class GroupExtensionLengthGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $extensionLength
    ) {
        $this->extensionLength = $extensionLength;
        $this->args            = func_get_args();
    }

    public function setExtensionLength($extensionLength)
    {
        $extensionLength and $this->extensionLength = new GroupExtensionLength($extensionLength);
    }

    public function getExtensionLength()
    {
        return (!$this->extensionLength) ?: $this->extensionLength->value();
    }
}
