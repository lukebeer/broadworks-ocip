<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseAccessDevice;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to EnterpriseSessionAdmissionControlGetAvailableDeviceListRequest.
 *         Contains a table of devices can be assigned to session admission control group in the enterprise.
 */
class EnterpriseSessionAdmissionControlGetAvailableDeviceListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseSessionAdmissionControlGetAvailableDeviceListResponse';
    protected $accessDevice;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseSessionAdmissionControlGetAvailableDeviceListResponse $response
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
        $this->accessDevice->setElementName('accessDevice');
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
