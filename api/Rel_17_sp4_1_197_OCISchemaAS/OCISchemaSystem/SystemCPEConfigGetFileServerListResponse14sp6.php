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
     * Response to SystemCPEConfigGetFileServerListRequest14sp6. The table columns are:
 *         "Device Type", "File Repository Name", "Directory".
 */
class SystemCPEConfigGetFileServerListResponse14sp6 extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $fileServerTable = null;


    /**
     * 
     */
    public function setFileServerTable(core:OCITable $fileServerTable = null)
    {
        $this->fileServerTable =  $fileServerTable;
    }

    /**
     * 
     */
    public function getFileServerTable()
    {
        return (!$this->fileServerTable) ?: $this->fileServerTable->getValue();
    }
}
