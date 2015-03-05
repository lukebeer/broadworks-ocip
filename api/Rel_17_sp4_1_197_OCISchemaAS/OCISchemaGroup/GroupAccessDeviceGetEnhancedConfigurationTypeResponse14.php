<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationType14;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationFileName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupAccessDeviceGetEnhancedConfigurationTypeRequest14.
 */
class GroupAccessDeviceGetEnhancedConfigurationTypeResponse14 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $supportsEnhancedConfiguration,
             $supportsReset,
             $configurationType=null,
             $configurationFileName=null
    ) {
        $this->supportsEnhancedConfiguration = $supportsEnhancedConfiguration;
        $this->supportsReset                 = $supportsReset;
        $this->configurationType             = new AccessDeviceEnhancedConfigurationType14($configurationType);
        $this->configurationFileName         = new AccessDeviceEnhancedConfigurationFileName($configurationFileName);
        $this->args                          = func_get_args();
    }

    public function setSupportsEnhancedConfiguration($supportsEnhancedConfiguration)
    {
        $supportsEnhancedConfiguration and $this->supportsEnhancedConfiguration = new xs:boolean($supportsEnhancedConfiguration);
    }

    public function getSupportsEnhancedConfiguration()
    {
        return (!$this->supportsEnhancedConfiguration) ?: $this->supportsEnhancedConfiguration->value();
    }

    public function setSupportsReset($supportsReset)
    {
        $supportsReset and $this->supportsReset = new xs:boolean($supportsReset);
    }

    public function getSupportsReset()
    {
        return (!$this->supportsReset) ?: $this->supportsReset->value();
    }

    public function setConfigurationType($configurationType)
    {
        $configurationType and $this->configurationType = new AccessDeviceEnhancedConfigurationType14($configurationType);
    }

    public function getConfigurationType()
    {
        return (!$this->configurationType) ?: $this->configurationType->value();
    }

    public function setConfigurationFileName($configurationFileName)
    {
        $configurationFileName and $this->configurationFileName = new AccessDeviceEnhancedConfigurationFileName($configurationFileName);
    }

    public function getConfigurationFileName()
    {
        return (!$this->configurationFileName) ?: $this->configurationFileName->value();
    }
}
