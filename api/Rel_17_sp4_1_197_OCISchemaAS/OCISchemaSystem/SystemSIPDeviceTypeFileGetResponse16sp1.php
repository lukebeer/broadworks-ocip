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
    public    $name                               = __CLASS__;
    protected $remoteFileFormat                   = null;
    protected $fileCategory                       = null;
    protected $fileCustomization                  = null;
    protected $fileSource                         = null;
    protected $configurationFileName              = null;
    protected $useHttpDigestAuthentication        = null;
    protected $macBasedFileAuthentication         = null;
    protected $userNamePasswordFileAuthentication = null;
    protected $macInNonRequestURI                 = null;
    protected $macFormatInNonRequestURI           = null;
    protected $accessUrl                          = null;
    protected $repositoryUrl                      = null;
    protected $templateUrl                        = null;


    /**
     * The file name format for an access device file managed by the Device Management System on BroadWorks.
     */
    public function setRemoteFileFormat($remoteFileFormat = null)
    {
        $this->remoteFileFormat = ($remoteFileFormat InstanceOf DeviceManagementFileFormat)
             ? $remoteFileFormat
             : new DeviceManagementFileFormat($remoteFileFormat);
    }

    /**
     * The file name format for an access device file managed by the Device Management System on BroadWorks.
     */
    public function getRemoteFileFormat()
    {
        return (!$this->remoteFileFormat) ?: $this->remoteFileFormat->getValue();
    }

    /**
     * The file category for an access device file managed by the Device Management System on BroadWorks. A static file has no variable content and only one copy is required on the repository.
     */
    public function setFileCategory($fileCategory = null)
    {
        $this->fileCategory = ($fileCategory InstanceOf DeviceManagementFileCategory)
             ? $fileCategory
             : new DeviceManagementFileCategory($fileCategory);
    }

    /**
     * The file category for an access device file managed by the Device Management System on BroadWorks. A static file has no variable content and only one copy is required on the repository.
     */
    public function getFileCategory()
    {
        return (!$this->fileCategory) ?: $this->fileCategory->getValue();
    }

    /**
     * Controls the file customization privileges.
     */
    public function setFileCustomization($fileCustomization = null)
    {
        $this->fileCustomization = ($fileCustomization InstanceOf DeviceManagementFileCustomization)
             ? $fileCustomization
             : new DeviceManagementFileCustomization($fileCustomization);
    }

    /**
     * Controls the file customization privileges.
     */
    public function getFileCustomization()
    {
        return (!$this->fileCustomization) ?: $this->fileCustomization->getValue();
    }

    /**
     * Choices for the device type configuration mode.
     */
    public function setFileSource($fileSource = null)
    {
        $this->fileSource = ($fileSource InstanceOf DeviceTypeFileEnhancedConfigurationMode)
             ? $fileSource
             : new DeviceTypeFileEnhancedConfigurationMode($fileSource);
    }

    /**
     * Choices for the device type configuration mode.
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

    /**
     * 
     */
    public function setUseHttpDigestAuthentication($useHttpDigestAuthentication = null)
    {
        $this->useHttpDigestAuthentication = (boolean) $useHttpDigestAuthentication;
    }

    /**
     * 
     */
    public function getUseHttpDigestAuthentication()
    {
        return (!$this->useHttpDigestAuthentication) ?: $this->useHttpDigestAuthentication->getValue();
    }

    /**
     * 
     */
    public function setMacBasedFileAuthentication($macBasedFileAuthentication = null)
    {
        $this->macBasedFileAuthentication = (boolean) $macBasedFileAuthentication;
    }

    /**
     * 
     */
    public function getMacBasedFileAuthentication()
    {
        return (!$this->macBasedFileAuthentication) ?: $this->macBasedFileAuthentication->getValue();
    }

    /**
     * 
     */
    public function setUserNamePasswordFileAuthentication($userNamePasswordFileAuthentication = null)
    {
        $this->userNamePasswordFileAuthentication = (boolean) $userNamePasswordFileAuthentication;
    }

    /**
     * 
     */
    public function getUserNamePasswordFileAuthentication()
    {
        return (!$this->userNamePasswordFileAuthentication) ?: $this->userNamePasswordFileAuthentication->getValue();
    }

    /**
     * 
     */
    public function setMacInNonRequestURI($macInNonRequestURI = null)
    {
        $this->macInNonRequestURI = (boolean) $macInNonRequestURI;
    }

    /**
     * 
     */
    public function getMacInNonRequestURI()
    {
        return (!$this->macInNonRequestURI) ?: $this->macInNonRequestURI->getValue();
    }

    /**
     * The access URI that a device uses to access files on BroadWorks.
     */
    public function setMacFormatInNonRequestURI($macFormatInNonRequestURI = null)
    {
        $this->macFormatInNonRequestURI = ($macFormatInNonRequestURI InstanceOf DeviceManagementAccessURI)
             ? $macFormatInNonRequestURI
             : new DeviceManagementAccessURI($macFormatInNonRequestURI);
    }

    /**
     * The access URI that a device uses to access files on BroadWorks.
     */
    public function getMacFormatInNonRequestURI()
    {
        return (!$this->macFormatInNonRequestURI) ?: $this->macFormatInNonRequestURI->getValue();
    }

    /**
     * URL.
     */
    public function setAccessUrl($accessUrl = null)
    {
        $this->accessUrl = ($accessUrl InstanceOf URL)
             ? $accessUrl
             : new URL($accessUrl);
    }

    /**
     * URL.
     */
    public function getAccessUrl()
    {
        return (!$this->accessUrl) ?: $this->accessUrl->getValue();
    }

    /**
     * URL.
     */
    public function setRepositoryUrl($repositoryUrl = null)
    {
        $this->repositoryUrl = ($repositoryUrl InstanceOf URL)
             ? $repositoryUrl
             : new URL($repositoryUrl);
    }

    /**
     * URL.
     */
    public function getRepositoryUrl()
    {
        return (!$this->repositoryUrl) ?: $this->repositoryUrl->getValue();
    }

    /**
     * URL.
     */
    public function setTemplateUrl($templateUrl = null)
    {
        $this->templateUrl = ($templateUrl InstanceOf URL)
             ? $templateUrl
             : new URL($templateUrl);
    }

    /**
     * URL.
     */
    public function getTemplateUrl()
    {
        return (!$this->templateUrl) ?: $this->templateUrl->getValue();
    }
}
