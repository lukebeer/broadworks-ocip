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
    public    $name                           = __CLASS__;
    protected $supportsEnhancedConfiguration  = null;
    protected $supportsReset                  = null;
    protected $configurationType              = null;
    protected $configurationFileName          = null;


    public function setSupportsEnhancedConfiguration(xs:boolean $supportsEnhancedConfiguration = null)
    {
    }

    public function getSupportsEnhancedConfiguration()
    {
        return (!$this->supportsEnhancedConfiguration) ?: $this->supportsEnhancedConfiguration->value();
    }

    public function setSupportsReset(xs:boolean $supportsReset = null)
    {
    }

    public function getSupportsReset()
    {
        return (!$this->supportsReset) ?: $this->supportsReset->value();
    }

    public function setConfigurationType($configurationType = null)
    {
        $this->configurationType = ($configurationType InstanceOf AccessDeviceEnhancedConfigurationType14)
             ? $configurationType
             : new AccessDeviceEnhancedConfigurationType14($configurationType);
    }

    public function getConfigurationType()
    {
        return (!$this->configurationType) ?: $this->configurationType->value();
    }

    public function setConfigurationFileName($configurationFileName = null)
    {
        $this->configurationFileName = ($configurationFileName InstanceOf AccessDeviceEnhancedConfigurationFileName)
             ? $configurationFileName
             : new AccessDeviceEnhancedConfigurationFileName($configurationFileName);
    }

    public function getConfigurationFileName()
    {
        return (!$this->configurationFileName) ?: $this->configurationFileName->value();
    }
}
