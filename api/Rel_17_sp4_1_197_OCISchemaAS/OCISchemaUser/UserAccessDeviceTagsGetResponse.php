<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserAccessDeviceTagsGetRequest.
 *         The response contains a table with columns: "Tag Name", and "Tag Value".
 */
class UserAccessDeviceTagsGetResponse extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $deviceTagsTable  = null;


    public function setDeviceTagsTable(core:OCITable $deviceTagsTable = null)
    {
    }

    public function getDeviceTagsTable()
    {
        return (!$this->deviceTagsTable) ?: $this->deviceTagsTable->value();
    }
}
