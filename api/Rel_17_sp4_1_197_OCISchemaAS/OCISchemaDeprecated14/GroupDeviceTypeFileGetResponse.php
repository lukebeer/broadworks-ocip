<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationFileName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationMode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupDeviceTypeFileGetRequest.
 *         Replaced By: GroupDeviceTypeFileGetResponse14sp8
 */
class GroupDeviceTypeFileGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupDeviceTypeFileGetResponse';
    protected $fileSource;
    protected $configurationFileName;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupDeviceTypeFileGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setFileSource($fileSource = null)
    {
        $this->fileSource = ($fileSource InstanceOf AccessDeviceEnhancedConfigurationMode)
             ? $fileSource
             : new AccessDeviceEnhancedConfigurationMode($fileSource);
        $this->fileSource->setName('fileSource');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEnhancedConfigurationMode $fileSource
     */
    public function getFileSource()
    {
        return ($this->fileSource) ? $this->fileSource->getValue() : null;
    }

    /**
     * 
     */
    public function setConfigurationFileName($configurationFileName = null)
    {
        $this->configurationFileName = ($configurationFileName InstanceOf AccessDeviceEnhancedConfigurationFileName)
             ? $configurationFileName
             : new AccessDeviceEnhancedConfigurationFileName($configurationFileName);
        $this->configurationFileName->setName('configurationFileName');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEnhancedConfigurationFileName $configurationFileName
     */
    public function getConfigurationFileName()
    {
        return ($this->configurationFileName) ? $this->configurationFileName->getValue() : null;
    }
}
