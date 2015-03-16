<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationFileName;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupAccessDeviceGetEnhancedConfigurationTypeRequest14.
 */
class GroupAccessDeviceGetEnhancedConfigurationTypeResponse14 extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupAccessDeviceGetEnhancedConfigurationTypeResponse14';
    protected $supportsEnhancedConfiguration;
    protected $supportsReset;
    protected $configurationType;
    protected $configurationFileName;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupAccessDeviceGetEnhancedConfigurationTypeResponse14 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setSupportsEnhancedConfiguration($supportsEnhancedConfiguration = null)
    {
        $this->supportsEnhancedConfiguration = new PrimitiveType($supportsEnhancedConfiguration);
        $this->supportsEnhancedConfiguration->setName('supportsEnhancedConfiguration');
        return $this;
    }

    /**
     * 
     * @return boolean $supportsEnhancedConfiguration
     */
    public function getSupportsEnhancedConfiguration()
    {
        return ($this->supportsEnhancedConfiguration) ? $this->supportsEnhancedConfiguration->getValue() : null;
    }

    /**
     * 
     */
    public function setSupportsReset($supportsReset = null)
    {
        $this->supportsReset = new PrimitiveType($supportsReset);
        $this->supportsReset->setName('supportsReset');
        return $this;
    }

    /**
     * 
     * @return boolean $supportsReset
     */
    public function getSupportsReset()
    {
        return ($this->supportsReset) ? $this->supportsReset->getValue() : null;
    }

    /**
     * 
     */
    public function setConfigurationType($configurationType = null)
    {
        $this->configurationType = ($configurationType InstanceOf AccessDeviceEnhancedConfigurationType14)
             ? $configurationType
             : new AccessDeviceEnhancedConfigurationType14($configurationType);
        $this->configurationType->setName('configurationType');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEnhancedConfigurationType14 $configurationType
     */
    public function getConfigurationType()
    {
        return ($this->configurationType) ? $this->configurationType->getValue() : null;
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
