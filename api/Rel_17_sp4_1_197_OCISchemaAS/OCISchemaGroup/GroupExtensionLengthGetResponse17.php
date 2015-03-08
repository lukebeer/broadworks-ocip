<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtensionLength;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupExtensionLengthGetRequest17.
 */
class GroupExtensionLengthGetResponse17 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE           = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupExtensionLengthGetResponse17';
    public    $name                   = __CLASS__;
    protected $minExtensionLength     = null;
    protected $maxExtensionLength     = null;
    protected $defaultExtensionLength = null;


    /**
     * The group's extension length.
     */
    public function setMinExtensionLength($minExtensionLength = null)
    {
        $this->minExtensionLength = ($minExtensionLength InstanceOf ExtensionLength)
             ? $minExtensionLength
             : new ExtensionLength($minExtensionLength);
    }

    /**
     * The group's extension length.
     */
    public function getMinExtensionLength()
    {
        return (!$this->minExtensionLength) ?: $this->minExtensionLength->getValue();
    }

    /**
     * The group's extension length.
     */
    public function setMaxExtensionLength($maxExtensionLength = null)
    {
        $this->maxExtensionLength = ($maxExtensionLength InstanceOf ExtensionLength)
             ? $maxExtensionLength
             : new ExtensionLength($maxExtensionLength);
    }

    /**
     * The group's extension length.
     */
    public function getMaxExtensionLength()
    {
        return (!$this->maxExtensionLength) ?: $this->maxExtensionLength->getValue();
    }

    /**
     * The group's extension length.
     */
    public function setDefaultExtensionLength($defaultExtensionLength = null)
    {
        $this->defaultExtensionLength = ($defaultExtensionLength InstanceOf ExtensionLength)
             ? $defaultExtensionLength
             : new ExtensionLength($defaultExtensionLength);
    }

    /**
     * The group's extension length.
     */
    public function getDefaultExtensionLength()
    {
        return (!$this->defaultExtensionLength) ?: $this->defaultExtensionLength->getValue();
    }
}
