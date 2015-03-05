<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationFileName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemAccessDeviceFileGetRequest16sp1.
 */
class SystemAccessDeviceFileGetResponse16sp1 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $fileSource,
             $configurationFileName=null,
             $accessUrl,
             $repositoryUrl=null,
             $templateUrl=null
    ) {
        $this->fileSource            = new AccessDeviceEnhancedConfigurationMode($fileSource);
        $this->configurationFileName = new AccessDeviceEnhancedConfigurationFileName($configurationFileName);
        $this->accessUrl             = new URL($accessUrl);
        $this->repositoryUrl         = new URL($repositoryUrl);
        $this->templateUrl           = new URL($templateUrl);
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

    public function setAccessUrl($accessUrl)
    {
        $accessUrl and $this->accessUrl = new URL($accessUrl);
    }

    public function getAccessUrl()
    {
        return (!$this->accessUrl) ?: $this->accessUrl->value();
    }

    public function setRepositoryUrl($repositoryUrl)
    {
        $repositoryUrl and $this->repositoryUrl = new URL($repositoryUrl);
    }

    public function getRepositoryUrl()
    {
        return (!$this->repositoryUrl) ?: $this->repositoryUrl->value();
    }

    public function setTemplateUrl($templateUrl)
    {
        $templateUrl and $this->templateUrl = new URL($templateUrl);
    }

    public function getTemplateUrl()
    {
        return (!$this->templateUrl) ?: $this->templateUrl->value();
    }
}
