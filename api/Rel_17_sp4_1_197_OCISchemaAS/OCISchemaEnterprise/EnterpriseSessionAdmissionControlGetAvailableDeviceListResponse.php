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
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to EnterpriseSessionAdmissionControlGetAvailableDeviceListRequest.
 *         Contains a table of devices can be assigned to session admission control group in the enterprise.
 */
class EnterpriseSessionAdmissionControlGetAvailableDeviceListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'EnterpriseSessionAdmissionControlGetAvailableDeviceListResponse';
    protected $accessDevice;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseSessionAdmissionControlGetAvailableDeviceListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAccessDevice(EnterpriseAccessDevice $accessDevice = null)
    {
        $this->accessDevice = ($accessDevice InstanceOf EnterpriseAccessDevice)
             ? $accessDevice
             : new EnterpriseAccessDevice($accessDevice);
        $this->accessDevice->setName('accessDevice');
        return $this;
    }

    /**
     * 
     * @return EnterpriseAccessDevice $accessDevice
     */
    public function getAccessDevice()
    {
        return $this->accessDevice;
    }
}
