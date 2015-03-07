<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCenterCurrentAndPastDNISGetListRequest.
 */
class GroupCallCenterCurrentAndPastDNISGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name         = __CLASS__;
    protected $name         = null;
    protected $deletedName  = null;


    public function setName($name = null)
    {
        $this->name = ($name InstanceOf DNISName)
             ? $name
             : new DNISName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }

    public function setDeletedName($deletedName = null)
    {
        $this->deletedName = ($deletedName InstanceOf DNISName)
             ? $deletedName
             : new DNISName($deletedName);
    }

    public function getDeletedName()
    {
        return (!$this->deletedName) ?: $this->deletedName->value();
    }
}
