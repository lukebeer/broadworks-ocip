<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemFileRepositoryDeviceUserGetListRequest.
 *         Contains a table with column headings : "User Name","Allow Get","Allow Delete","Allow Put" in a row for each file repository user.
 */
class SystemFileRepositoryDeviceUserGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE            = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemFileRepositoryDeviceUserGetListResponse';
    public    $name                    = __CLASS__;
    protected $fileRepositoryUserTable = null;


    /**
     * 
     */
    public function setFileRepositoryUserTable(core:OCITable $fileRepositoryUserTable = null)
    {
        $this->fileRepositoryUserTable = core:OCITable $fileRepositoryUserTable;
    }

    /**
     * 
     */
    public function getFileRepositoryUserTable()
    {
        return (!$this->fileRepositoryUserTable) ?: $this->fileRepositoryUserTable->getValue();
    }
}
