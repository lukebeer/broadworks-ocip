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


/**
     * Response to SystemAccessDeviceFileGetRequest.
 *           Replaced By: SystemAccessDeviceFileGetResponse14sp8
 */
class SystemAccessDeviceFileGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemAccessDeviceFileGetResponse';
    public    $name                  = __CLASS__;
    protected $fileSource            = null;
    protected $configurationFileName = null;


    /**
     * Choices for the access device configuration mode.
     */
    public function setFileSource($fileSource = null)
    {
        $this->fileSource = ($fileSource InstanceOf AccessDeviceEnhancedConfigurationMode)
             ? $fileSource
             : new AccessDeviceEnhancedConfigurationMode($fileSource);
    }

    /**
     * Choices for the access device configuration mode.
     */
    public function getFileSource()
    {
        return (!$this->fileSource) ?: $this->fileSource->getValue();
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
