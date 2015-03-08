<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CustomContactDirectoryName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the GroupCustomContactDirectoryGetListRequest.
 *         The response contains all the group's custom contact directory names.
 */
class GroupCustomContactDirectoryGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;
    protected $name = null;


    /**
     * Custom Contact Directory name.
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf CustomContactDirectoryName)
             ? $name
             : new CustomContactDirectoryName($name);
    }

    /**
     * Custom Contact Directory name.
     */
    public function getName()
    {
        return (!$this->name) ?: $this->name->getValue();
    }
}
