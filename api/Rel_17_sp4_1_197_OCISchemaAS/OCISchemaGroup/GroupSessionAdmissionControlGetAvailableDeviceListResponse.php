<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevice;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupSessionAdmissionControlGetAvailableDeviceListRequest.
 *         Contains a table of devices can be assigned to session admission control group in the group.
 */
class GroupSessionAdmissionControlGetAvailableDeviceListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupSessionAdmissionControlGetAvailableDeviceListResponse';
    public    $name         = __CLASS__;
    protected $accessDevice = null;


    /**
     * Uniquely identifies an Identity/device profile created anywhere in the system.
     */
    public function setAccessDevice(AccessDevice $accessDevice = null)
    {
        $this->accessDevice = AccessDevice $accessDevice;
    }

    /**
     * Uniquely identifies an Identity/device profile created anywhere in the system.
     */
    public function getAccessDevice()
    {
        return (!$this->accessDevice) ?: $this->accessDevice->getValue();
    }
}
