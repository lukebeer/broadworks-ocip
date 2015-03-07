<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementAccessURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Informs BroadWorks that a file was uploaded to the repository. The response is always a SuccessResponse.
 */
class DeviceManagementPutFileRequest extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $deviceAccessURI  = null;
    protected $ipAddress        = null;

    public function __construct(
         $deviceAccessURI,
         $ipAddress
    ) {
        $this->setDeviceAccessURI($deviceAccessURI);
        $this->setIpAddress($ipAddress);
    }

    public function setDeviceAccessURI($deviceAccessURI = null)
    {
        $this->deviceAccessURI = ($deviceAccessURI InstanceOf DeviceManagementAccessURI)
             ? $deviceAccessURI
             : new DeviceManagementAccessURI($deviceAccessURI);
    }

    public function getDeviceAccessURI()
    {
        return (!$this->deviceAccessURI) ?: $this->deviceAccessURI->value();
    }

    public function setIpAddress($ipAddress = null)
    {
        $this->ipAddress = ($ipAddress InstanceOf NetAddress)
             ? $ipAddress
             : new NetAddress($ipAddress);
    }

    public function getIpAddress()
    {
        return (!$this->ipAddress) ?: $this->ipAddress->value();
    }
}
