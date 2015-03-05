<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserAccessDeviceTagsGetRequest.
 *         The response contains a table with columns: "Tag Name", and "Tag Value".
 */
class UserAccessDeviceTagsGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $deviceTagsTable
    ) {
        $this->deviceTagsTable = $deviceTagsTable;
        $this->args            = func_get_args();
    }

    public function setDeviceTagsTable($deviceTagsTable)
    {
        $deviceTagsTable and $this->deviceTagsTable = new core:OCITable($deviceTagsTable);
    }

    public function getDeviceTagsTable()
    {
        return (!$this->deviceTagsTable) ?: $this->deviceTagsTable->value();
    }
}
