<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\GroupExtensionLength;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupExtensionLengthGetRequest.
 */
class GroupExtensionLengthGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\GroupExtensionLengthGetResponse';
    public    $name            = __CLASS__;
    protected $extensionLength = null;


    /**
     * The group's extension length.
     */
    public function setExtensionLength($extensionLength = null)
    {
        $this->extensionLength = ($extensionLength InstanceOf GroupExtensionLength)
             ? $extensionLength
             : new GroupExtensionLength($extensionLength);
    }

    /**
     * The group's extension length.
     */
    public function getExtensionLength()
    {
        return (!$this->extensionLength) ?: $this->extensionLength->getValue();
    }
}