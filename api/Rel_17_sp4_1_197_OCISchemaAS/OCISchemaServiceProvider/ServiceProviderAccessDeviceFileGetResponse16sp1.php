<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationFileName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to ServiceProviderAccessDeviceFileGetRequest16sp1.
 */
class ServiceProviderAccessDeviceFileGetResponse16sp1 extends ComplexType implements ComplexInterface
{
    public    $name                   = __CLASS__;
    protected $fileSource             = null;
    protected $configurationFileName  = null;
    protected $accessUrl              = null;
    protected $repositoryUrl          = null;
    protected $templateUrl            = null;


    public function setFileSource($fileSource = null)
    {
        $this->fileSource = ($fileSource InstanceOf AccessDeviceEnhancedConfigurationMode)
             ? $fileSource
             : new AccessDeviceEnhancedConfigurationMode($fileSource);
    }

    public function getFileSource()
    {
        return (!$this->fileSource) ?: $this->fileSource->value();
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

    public function setAccessUrl($accessUrl = null)
    {
        $this->accessUrl = ($accessUrl InstanceOf URL)
             ? $accessUrl
             : new URL($accessUrl);
    }

    public function getAccessUrl()
    {
        return (!$this->accessUrl) ?: $this->accessUrl->value();
    }

    public function setRepositoryUrl($repositoryUrl = null)
    {
        $this->repositoryUrl = ($repositoryUrl InstanceOf URL)
             ? $repositoryUrl
             : new URL($repositoryUrl);
    }

    public function getRepositoryUrl()
    {
        return (!$this->repositoryUrl) ?: $this->repositoryUrl->value();
    }

    public function setTemplateUrl($templateUrl = null)
    {
        $this->templateUrl = ($templateUrl InstanceOf URL)
             ? $templateUrl
             : new URL($templateUrl);
    }

    public function getTemplateUrl()
    {
        return (!$this->templateUrl) ?: $this->templateUrl->value();
    }
}
