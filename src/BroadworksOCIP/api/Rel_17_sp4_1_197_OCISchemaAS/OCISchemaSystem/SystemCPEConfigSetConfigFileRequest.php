<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationFileName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to set a new system default configuration file for a device type.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCPEConfigSetConfigFileRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCPEConfigSetConfigFileRequest';
    protected $deviceType;
    protected $configFile;

    public function __construct(
         $deviceType = '',
         $configFile = ''
    ) {
        $this->setDeviceType($deviceType);
        $this->setConfigFile($configFile);
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
    public function setConfigFile($configFile = null)
    {
        $this->configFile = ($configFile InstanceOf AccessDeviceEnhancedConfigurationFileName)
             ? $configFile
             : new AccessDeviceEnhancedConfigurationFileName($configFile);
        $this->configFile->setElementName('configFile');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEnhancedConfigurationFileName $configFile
     */
    public function getConfigFile()
    {
        return ($this->configFile)
            ? $this->configFile->getElementValue()
            : null;
    }
}
