<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationFileName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to set a new system default configuration file for a device type.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCPEConfigSetConfigFileRequest extends ComplexType implements ComplexInterface
{
    public    $name       = 'SystemCPEConfigSetConfigFileRequest';
    protected $deviceType = null;
    protected $configFile = null;

    public function __construct(
         $deviceType,
         $configFile
    ) {
        $this->setDeviceType($deviceType);
        $this->setConfigFile($configFile);
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
    public function setDeviceType($deviceType = null)
    {
        if (!$deviceType) return $this;
        $this->deviceType = ($deviceType InstanceOf AccessDeviceType)
             ? $deviceType
             : new AccessDeviceType($deviceType);
        $this->deviceType->setName('deviceType');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceType
     */
    public function getDeviceType()
    {
        return $this->deviceType->getValue();
    }

    /**
     * 
     */
    public function setConfigFile($configFile = null)
    {
        if (!$configFile) return $this;
        $this->configFile = ($configFile InstanceOf AccessDeviceEnhancedConfigurationFileName)
             ? $configFile
             : new AccessDeviceEnhancedConfigurationFileName($configFile);
        $this->configFile->setName('configFile');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEnhancedConfigurationFileName
     */
    public function getConfigFile()
    {
        return $this->configFile->getValue();
    }
}
