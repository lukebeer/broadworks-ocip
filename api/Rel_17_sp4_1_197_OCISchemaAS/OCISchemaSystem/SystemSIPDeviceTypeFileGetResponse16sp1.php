<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationFileName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceTypeFileEnhancedConfigurationMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileCustomization;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileCategory;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementAccessURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemSIPDeviceTypeFileGetRequest16sp1.
 */
class SystemSIPDeviceTypeFileGetResponse16sp1 extends ComplexType implements ComplexInterface
{
    public    $name                                = __CLASS__;
    protected $remoteFileFormat                    = null;
    protected $fileCategory                        = null;
    protected $fileCustomization                   = null;
    protected $fileSource                          = null;
    protected $configurationFileName               = null;
    protected $useHttpDigestAuthentication         = null;
    protected $macBasedFileAuthentication          = null;
    protected $userNamePasswordFileAuthentication  = null;
    protected $macInNonRequestURI                  = null;
    protected $macFormatInNonRequestURI            = null;
    protected $accessUrl                           = null;
    protected $repositoryUrl                       = null;
    protected $templateUrl                         = null;


    public function setRemoteFileFormat($remoteFileFormat = null)
    {
        $this->remoteFileFormat = ($remoteFileFormat InstanceOf DeviceManagementFileFormat)
             ? $remoteFileFormat
             : new DeviceManagementFileFormat($remoteFileFormat);
    }

    public function getRemoteFileFormat()
    {
        return (!$this->remoteFileFormat) ?: $this->remoteFileFormat->value();
    }

    public function setFileCategory($fileCategory = null)
    {
        $this->fileCategory = ($fileCategory InstanceOf DeviceManagementFileCategory)
             ? $fileCategory
             : new DeviceManagementFileCategory($fileCategory);
    }

    public function getFileCategory()
    {
        return (!$this->fileCategory) ?: $this->fileCategory->value();
    }

    public function setFileCustomization($fileCustomization = null)
    {
        $this->fileCustomization = ($fileCustomization InstanceOf DeviceManagementFileCustomization)
             ? $fileCustomization
             : new DeviceManagementFileCustomization($fileCustomization);
    }

    public function getFileCustomization()
    {
        return (!$this->fileCustomization) ?: $this->fileCustomization->value();
    }

    public function setFileSource($fileSource = null)
    {
        $this->fileSource = ($fileSource InstanceOf DeviceTypeFileEnhancedConfigurationMode)
             ? $fileSource
             : new DeviceTypeFileEnhancedConfigurationMode($fileSource);
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

    public function setUseHttpDigestAuthentication(xs:boolean $useHttpDigestAuthentication = null)
    {
    }

    public function getUseHttpDigestAuthentication()
    {
        return (!$this->useHttpDigestAuthentication) ?: $this->useHttpDigestAuthentication->value();
    }

    public function setMacBasedFileAuthentication(xs:boolean $macBasedFileAuthentication = null)
    {
    }

    public function getMacBasedFileAuthentication()
    {
        return (!$this->macBasedFileAuthentication) ?: $this->macBasedFileAuthentication->value();
    }

    public function setUserNamePasswordFileAuthentication(xs:boolean $userNamePasswordFileAuthentication = null)
    {
    }

    public function getUserNamePasswordFileAuthentication()
    {
        return (!$this->userNamePasswordFileAuthentication) ?: $this->userNamePasswordFileAuthentication->value();
    }

    public function setMacInNonRequestURI(xs:boolean $macInNonRequestURI = null)
    {
    }

    public function getMacInNonRequestURI()
    {
        return (!$this->macInNonRequestURI) ?: $this->macInNonRequestURI->value();
    }

    public function setMacFormatInNonRequestURI($macFormatInNonRequestURI = null)
    {
        $this->macFormatInNonRequestURI = ($macFormatInNonRequestURI InstanceOf DeviceManagementAccessURI)
             ? $macFormatInNonRequestURI
             : new DeviceManagementAccessURI($macFormatInNonRequestURI);
    }

    public function getMacFormatInNonRequestURI()
    {
        return (!$this->macFormatInNonRequestURI) ?: $this->macFormatInNonRequestURI->value();
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
