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
     * Response to SystemOCICallControlApplicationGetListRequest. The table columns are:
 *         "Application Id", "Enabled System Wide", "Description" "Notification Timeout Seconds" and "Max Event Channels Per Set".
 */
class SystemOCICallControlApplicationGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name     = __CLASS__;
    protected $appTable = null;


    /**
     * 
     */
    public function setAppTable(core:OCITable $appTable = null)
    {
        $this->appTable =  $appTable;
    }

    /**
     * 
     */
    public function getAppTable()
    {
        return (!$this->appTable) ?: $this->appTable->getValue();
    }
}
