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
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Informs BroadWorks that a file was uploaded to the repository. The response is always a SuccessResponse.
 */
class DeviceManagementPutFileRequest extends ComplexType implements ComplexInterface
{
    public    $name            = 'DeviceManagementPutFileRequest';
    protected $deviceAccessURI = null;
    protected $ipAddress       = null;

    public function __construct(
         $deviceAccessURI,
         $ipAddress
    ) {
        $this->setDeviceAccessURI($deviceAccessURI);
        $this->setIpAddress($ipAddress);
    }

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDeviceAccessURI($deviceAccessURI = null)
    {
        if (!$deviceAccessURI) return $this;
        $this->deviceAccessURI = ($deviceAccessURI InstanceOf DeviceManagementAccessURI)
             ? $deviceAccessURI
             : new DeviceManagementAccessURI($deviceAccessURI);
        $this->deviceAccessURI->setName('deviceAccessURI');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementAccessURI
     */
    public function getDeviceAccessURI()
    {
        return $this->deviceAccessURI->getValue();
    }

    /**
     * 
     */
    public function setIpAddress($ipAddress = null)
    {
        if (!$ipAddress) return $this;
        $this->ipAddress = ($ipAddress InstanceOf NetAddress)
             ? $ipAddress
             : new NetAddress($ipAddress);
        $this->ipAddress->setName('ipAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress
     */
    public function getIpAddress()
    {
        return $this->ipAddress->getValue();
    }
}
