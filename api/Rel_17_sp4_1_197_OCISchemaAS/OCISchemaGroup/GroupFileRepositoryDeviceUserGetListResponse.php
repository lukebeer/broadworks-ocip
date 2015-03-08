<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupFileRepositoryDeviceUserGetListRequest.
 *         Contains a table with column headings : "User Name","Allow Delete","Allow Get","Allow Put" in a row for each file repository service provider user.
 */
class GroupFileRepositoryDeviceUserGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                    = __CLASS__;
    protected $fileRepositoryUserTable = null;


    /**
     * 
     */
    public function setFileRepositoryUserTable(core:OCITable $fileRepositoryUserTable = null)
    {
        $this->fileRepositoryUserTable =  $fileRepositoryUserTable;
    }

    /**
     * 
     */
    public function getFileRepositoryUserTable()
    {
        return (!$this->fileRepositoryUserTable) ?: $this->fileRepositoryUserTable->getValue();
    }
}
