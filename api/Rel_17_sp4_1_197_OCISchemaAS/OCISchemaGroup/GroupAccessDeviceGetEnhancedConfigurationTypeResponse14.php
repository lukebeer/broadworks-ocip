<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationFileName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationType14;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupAccessDeviceGetEnhancedConfigurationTypeRequest14.
 */
class GroupAccessDeviceGetEnhancedConfigurationTypeResponse14 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupAccessDeviceGetEnhancedConfigurationTypeResponse14';
    public    $name                          = __CLASS__;
    protected $supportsEnhancedConfiguration = null;
    protected $supportsReset                 = null;
    protected $configurationType             = null;
    protected $configurationFileName         = null;


    /**
     * 
     */
    public function setSupportsEnhancedConfiguration($supportsEnhancedConfiguration = null)
    {
        $this->supportsEnhancedConfiguration = (boolean) $supportsEnhancedConfiguration;
    }

    /**
     * 
     */
    public function getSupportsEnhancedConfiguration()
    {
        return (!$this->supportsEnhancedConfiguration) ?: $this->supportsEnhancedConfiguration->getValue();
    }

    /**
     * 
     */
    public function setSupportsReset($supportsReset = null)
    {
        $this->supportsReset = (boolean) $supportsReset;
    }

    /**
     * 
     */
    public function getSupportsReset()
    {
        return (!$this->supportsReset) ?: $this->supportsReset->getValue();
    }

    /**
     * Type of enhanced configuration supported by an access device.
     *         "2 File Configuration" was formerly called "CPE Type 1"
     *         "3 File Configuration" was formerly called "CPE Type 2"
     */
    public function setConfigurationType($configurationType = null)
    {
        $this->configurationType = ($configurationType InstanceOf AccessDeviceEnhancedConfigurationType14)
             ? $configurationType
             : new AccessDeviceEnhancedConfigurationType14($configurationType);
    }

    /**
     * Type of enhanced configuration supported by an access device.
     *         "2 File Configuration" was formerly called "CPE Type 1"
     *         "3 File Configuration" was formerly called "CPE Type 2"
     */
    public function getConfigurationType()
    {
        return (!$this->configurationType) ?: $this->configurationType->getValue();
    }

    /**
     * Access device enhanced configuration file name.
     */
    public function setConfigurationFileName($configurationFileName = null)
    {
        $this->configurationFileName = ($configurationFileName InstanceOf AccessDeviceEnhancedConfigurationFileName)
             ? $configurationFileName
             : new AccessDeviceEnhancedConfigurationFileName($configurationFileName);
    }

    /**
     * Access device enhanced configuration file name.
     */
    public function getConfigurationFileName()
    {
        return (!$this->configurationFileName) ?: $this->configurationFileName->getValue();
    }
}
