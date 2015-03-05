<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtensionLength;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the group's extension length range.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemExtensionLengthModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $minExtensionLength=null,
             $maxExtensionLength=null
    ) {
        $this->minExtensionLength = new ExtensionLength($minExtensionLength);
        $this->maxExtensionLength = new ExtensionLength($maxExtensionLength);
        $this->args               = func_get_args();
    }

    public function setMinExtensionLength($minExtensionLength)
    {
        $minExtensionLength and $this->minExtensionLength = new ExtensionLength($minExtensionLength);
    }

    public function getMinExtensionLength()
    {
        return (!$this->minExtensionLength) ?: $this->minExtensionLength->value();
    }

    public function setMaxExtensionLength($maxExtensionLength)
    {
        $maxExtensionLength and $this->maxExtensionLength = new ExtensionLength($maxExtensionLength);
    }

    public function getMaxExtensionLength()
    {
        return (!$this->maxExtensionLength) ?: $this->maxExtensionLength->value();
    }
}
