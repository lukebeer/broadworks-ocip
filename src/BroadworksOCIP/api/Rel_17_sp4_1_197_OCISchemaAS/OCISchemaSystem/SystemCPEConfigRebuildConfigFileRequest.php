<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CPEDeviceConfigRebuildType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Rebuild the system default config file for the specified device type.
 *         If the device type is not specified, all files for all device types in the system are rebuilt.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCPEConfigRebuildConfigFileRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCPEConfigRebuildConfigFileRequest';
    protected $deviceType;
    protected $rebuildType;

    public function __construct(
         $deviceType = null,
         $rebuildType = null
    ) {
        $this->setDeviceType($deviceType);
        $this->setRebuildType($rebuildType);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDeviceType($deviceType = null)
    {
        $this->deviceType = ($deviceType InstanceOf AccessDeviceType)
             ? $deviceType
             : new AccessDeviceType($deviceType);
        $this->deviceType->setElementName('deviceType');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceType $deviceType
     */
    public function getDeviceType()
    {
        return ($this->deviceType)
            ? $this->deviceType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRebuildType($rebuildType = null)
    {
        $this->rebuildType = ($rebuildType InstanceOf CPEDeviceConfigRebuildType)
             ? $rebuildType
             : new CPEDeviceConfigRebuildType($rebuildType);
        $this->rebuildType->setElementName('rebuildType');
        return $this;
    }

    /**
     * 
     * @return CPEDeviceConfigRebuildType $rebuildType
     */
    public function getRebuildType()
    {
        return ($this->rebuildType)
            ? $this->rebuildType->getElementValue()
            : null;
    }
}
