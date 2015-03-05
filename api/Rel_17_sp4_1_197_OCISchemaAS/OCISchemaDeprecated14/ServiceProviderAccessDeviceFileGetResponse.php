<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationFileName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to ServiceProviderAccessDeviceFileGetRequest.
 *           Replaced By: ServiceProviderAccessDeviceFileGetResponse14sp8
 */
class ServiceProviderAccessDeviceFileGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $fileSource,
             $configurationFileName=null
    ) {
        $this->fileSource            = new AccessDeviceEnhancedConfigurationMode($fileSource);
        $this->configurationFileName = new AccessDeviceEnhancedConfigurationFileName($configurationFileName);
        $this->args                  = func_get_args();
    }

    public function setFileSource($fileSource)
    {
        $fileSource and $this->fileSource = new AccessDeviceEnhancedConfigurationMode($fileSource);
    }

    public function getFileSource()
    {
        return (!$this->fileSource) ?: $this->fileSource->value();
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
