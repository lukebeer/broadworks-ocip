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
     * Response to GroupAccessDeviceGetAvailableDetailListRequest14.
 */
class GroupAccessDeviceGetAvailableDetailListResponse14 extends ComplexType implements ComplexInterface
{
    public    $name                  = __CLASS__;
    protected $availableAccessDevice = null;


    /**
     * 
     */
    public function setAvailableAccessDevice($availableAccessDevice = null)
    {
        $this->availableAccessDevice = $availableAccessDevice;
    }

    /**
     * 
     */
    public function getAvailableAccessDevice()
    {
        return (!$this->availableAccessDevice) ?: $this->availableAccessDevice->getValue();
    }
}
