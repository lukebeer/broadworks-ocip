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
    public    $name                          = 'GroupAccessDeviceGetEnhancedConfigurationTypeResponse14';
    protected $supportsEnhancedConfiguration = null;
    protected $supportsReset                 = null;
    protected $configurationType             = null;
    protected $configurationFileName         = null;

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
        if (!$supportsEnhancedConfiguration) return $this;
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
        return $this->supportsEnhancedConfiguration->getValue();
    }

    /**
     * 
     */
    public function setSupportsReset($supportsReset = null)
    {
        if (!$supportsReset) return $this;
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
        return $this->supportsReset->getValue();
    }

    /**
     * 
     */
    public function setConfigurationType($configurationType = null)
    {
        if (!$configurationType) return $this;
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
        return $this->configurationType->getValue();
    }

    /**
     * 
     */
    public function setConfigurationFileName($configurationFileName = null)
    {
        if (!$configurationFileName) return $this;
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
        return $this->configurationFileName->getValue();
    }
}
