<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseAccessDevice;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to EnterpriseSessionAdmissionControlGetAvailableDeviceListRequest.
 *         Contains a table of devices can be assigned to session admission control group in the enterprise.
 */
class EnterpriseSessionAdmissionControlGetAvailableDeviceListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseSessionAdmissionControlGetAvailableDeviceListResponse';
    public    $name         = __CLASS__;
    protected $accessDevice = null;


    /**
     * Uniquely identifies an access device accessible for an enterprise. It could be a system level device, an enterprise level device or a group level device.
     */
    public function setAccessDevice(EnterpriseAccessDevice $accessDevice = null)
    {
        $this->accessDevice = EnterpriseAccessDevice $accessDevice;
    }

    /**
     * Uniquely identifies an access device accessible for an enterprise. It could be a system level device, an enterprise level device or a group level device.
     */
    public function getAccessDevice()
    {
        return (!$this->accessDevice) ?: $this->accessDevice->getValue();
    }
}