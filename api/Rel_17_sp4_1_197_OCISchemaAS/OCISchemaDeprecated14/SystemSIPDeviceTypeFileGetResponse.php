<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationFileName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceTypeFileEnhancedConfigurationMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileCategory;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementAccessURI;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemSIPDeviceTypeFileGetRequest.
 *             Replaced By: SystemSIPDeviceTypeFileGetResponse14sp8
 */
class SystemSIPDeviceTypeFileGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                               = 'SystemSIPDeviceTypeFileGetResponse';
    protected $fileFormat                         = null;
    protected $remoteFileFormat                   = null;
    protected $fileCategory                       = null;
    protected $allowFileCustomization             = null;
    protected $fileSource                         = null;
    protected $configurationFileName              = null;
    protected $useHttpDigestAuthentication        = null;
    protected $macBasedFileAuthentication         = null;
    protected $userNamePasswordFileAuthentication = null;
    protected $macInNonRequestURI                 = null;
    protected $macFormatInNonRequestURI           = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemSIPDeviceTypeFileGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setFileFormat($fileFormat = null)
    {
        if (!$fileFormat) return $this;
        $this->fileFormat = ($fileFormat InstanceOf DeviceManagementFileFormat)
             ? $fileFormat
             : new DeviceManagementFileFormat($fileFormat);
        $this->fileFormat->setName('fileFormat');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementFileFormat $fileFormat
     */
    public function getFileFormat()
    {
        return $this->fileFormat->getValue();
    }

    /**
     * 
     */
    public function setRemoteFileFormat($remoteFileFormat = null)
    {
        if (!$remoteFileFormat) return $this;
        $this->remoteFileFormat = ($remoteFileFormat InstanceOf DeviceManagementFileFormat)
             ? $remoteFileFormat
             : new DeviceManagementFileFormat($remoteFileFormat);
        $this->remoteFileFormat->setName('remoteFileFormat');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementFileFormat $remoteFileFormat
     */
    public function getRemoteFileFormat()
    {
        return $this->remoteFileFormat->getValue();
    }

    /**
     * 
     */
    public function setFileCategory($fileCategory = null)
    {
        if (!$fileCategory) return $this;
        $this->fileCategory = ($fileCategory InstanceOf DeviceManagementFileCategory)
             ? $fileCategory
             : new DeviceManagementFileCategory($fileCategory);
        $this->fileCategory->setName('fileCategory');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementFileCategory $fileCategory
     */
    public function getFileCategory()
    {
        return $this->fileCategory->getValue();
    }

    /**
     * 
     */
    public function setAllowFileCustomization($allowFileCustomization = null)
    {
        if (!$allowFileCustomization) return $this;
        $this->allowFileCustomization = new PrimitiveType($allowFileCustomization);
        $this->allowFileCustomization->setName('allowFileCustomization');
        return $this;
    }

    /**
     * 
     * @return boolean $allowFileCustomization
     */
    public function getAllowFileCustomization()
    {
        return $this->allowFileCustomization->getValue();
    }

    /**
     * 
     */
    public function setFileSource($fileSource = null)
    {
        if (!$fileSource) return $this;
        $this->fileSource = ($fileSource InstanceOf DeviceTypeFileEnhancedConfigurationMode)
             ? $fileSource
             : new DeviceTypeFileEnhancedConfigurationMode($fileSource);
        $this->fileSource->setName('fileSource');
        return $this;
    }

    /**
     * 
     * @return DeviceTypeFileEnhancedConfigurationMode $fileSource
     */
    public function getFileSource()
    {
        return $this->fileSource->getValue();
    }

    /**
     * 
     */
    public function setConfigurationFileName($configurationFileName = null)
    {
        if (!$configurationFileName) return $this;
        $this->configurationFileName = ($configurationFileName InstanceOf AccessDeviceEnhancedConfigurationFileName)
             ? $configurationFileName
             : new AccessDeviceEnhancedConfigurationFileName($configurationFileName);
        $this->configurationFileName->setName('configurationFileName');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEnhancedConfigurationFileName $configurationFileName
     */
    public function getConfigurationFileName()
    {
        return $this->configurationFileName->getValue();
    }

    /**
     * 
     */
    public function setUseHttpDigestAuthentication($useHttpDigestAuthentication = null)
    {
        if (!$useHttpDigestAuthentication) return $this;
        $this->useHttpDigestAuthentication = new PrimitiveType($useHttpDigestAuthentication);
        $this->useHttpDigestAuthentication->setName('useHttpDigestAuthentication');
        return $this;
    }

    /**
     * 
     * @return boolean $useHttpDigestAuthentication
     */
    public function getUseHttpDigestAuthentication()
    {
        return $this->useHttpDigestAuthentication->getValue();
    }

    /**
     * 
     */
    public function setMacBasedFileAuthentication($macBasedFileAuthentication = null)
    {
        if (!$macBasedFileAuthentication) return $this;
        $this->macBasedFileAuthentication = new PrimitiveType($macBasedFileAuthentication);
        $this->macBasedFileAuthentication->setName('macBasedFileAuthentication');
        return $this;
    }

    /**
     * 
     * @return boolean $macBasedFileAuthentication
     */
    public function getMacBasedFileAuthentication()
    {
        return $this->macBasedFileAuthentication->getValue();
    }

    /**
     * 
     */
    public function setUserNamePasswordFileAuthentication($userNamePasswordFileAuthentication = null)
    {
        if (!$userNamePasswordFileAuthentication) return $this;
        $this->userNamePasswordFileAuthentication = new PrimitiveType($userNamePasswordFileAuthentication);
        $this->userNamePasswordFileAuthentication->setName('userNamePasswordFileAuthentication');
        return $this;
    }

    /**
     * 
     * @return boolean $userNamePasswordFileAuthentication
     */
    public function getUserNamePasswordFileAuthentication()
    {
        return $this->userNamePasswordFileAuthentication->getValue();
    }

    /**
     * 
     */
    public function setMacInNonRequestURI($macInNonRequestURI = null)
    {
        if (!$macInNonRequestURI) return $this;
        $this->macInNonRequestURI = new PrimitiveType($macInNonRequestURI);
        $this->macInNonRequestURI->setName('macInNonRequestURI');
        return $this;
    }

    /**
     * 
     * @return boolean $macInNonRequestURI
     */
    public function getMacInNonRequestURI()
    {
        return $this->macInNonRequestURI->getValue();
    }

    /**
     * 
     */
    public function setMacFormatInNonRequestURI($macFormatInNonRequestURI = null)
    {
        if (!$macFormatInNonRequestURI) return $this;
        $this->macFormatInNonRequestURI = ($macFormatInNonRequestURI InstanceOf DeviceManagementAccessURI)
             ? $macFormatInNonRequestURI
             : new DeviceManagementAccessURI($macFormatInNonRequestURI);
        $this->macFormatInNonRequestURI->setName('macFormatInNonRequestURI');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementAccessURI $macFormatInNonRequestURI
     */
    public function getMacFormatInNonRequestURI()
    {
        return $this->macFormatInNonRequestURI->getValue();
    }
}
