<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationFileName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationType14;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupAccessDeviceGetEnhancedConfigurationTypeRequest14.
 */
class GroupAccessDeviceGetEnhancedConfigurationTypeResponse14 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupAccessDeviceGetEnhancedConfigurationTypeResponse14';
    protected $supportsEnhancedConfiguration;
    protected $supportsReset;
    protected $configurationType;
    protected $configurationFileName;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupAccessDeviceGetEnhancedConfigurationTypeResponse14 $response
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
        $this->supportsEnhancedConfiguration->setElementName('supportsEnhancedConfiguration');
        return $this;
    }

    /**
     * 
     * @return boolean $supportsEnhancedConfiguration
     */
    public function getSupportsEnhancedConfiguration()
    {
        return ($this->supportsEnhancedConfiguration)
            ? $this->supportsEnhancedConfiguration->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSupportsReset($supportsReset = null)
    {
        $this->supportsReset = new PrimitiveType($supportsReset);
        $this->supportsReset->setElementName('supportsReset');
        return $this;
    }

    /**
     * 
     * @return boolean $supportsReset
     */
    public function getSupportsReset()
    {
        return ($this->supportsReset)
            ? $this->supportsReset->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConfigurationType($configurationType = null)
    {
        $this->configurationType = ($configurationType InstanceOf AccessDeviceEnhancedConfigurationType14)
             ? $configurationType
             : new AccessDeviceEnhancedConfigurationType14($configurationType);
        $this->configurationType->setElementName('configurationType');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEnhancedConfigurationType14 $configurationType
     */
    public function getConfigurationType()
    {
        return ($this->configurationType)
            ? $this->configurationType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConfigurationFileName($configurationFileName = null)
    {
        $this->configurationFileName = ($configurationFileName InstanceOf AccessDeviceEnhancedConfigurationFileName)
             ? $configurationFileName
             : new AccessDeviceEnhancedConfigurationFileName($configurationFileName);
        $this->configurationFileName->setElementName('configurationFileName');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEnhancedConfigurationFileName $configurationFileName
     */
    public function getConfigurationFileName()
    {
        return ($this->configurationFileName)
            ? $this->configurationFileName->getElementValue()
            : null;
    }
}
