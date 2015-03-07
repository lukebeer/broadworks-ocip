<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceTypeFileEnhancedConfigurationMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileCustomization;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileCategory;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementAccessURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileResource;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to add a sip device type file.
 *           The response is either SuccessResponse or ErrorResponse.
 */
class SystemSIPDeviceTypeFileAddRequest16sp1 extends ComplexType implements ComplexInterface
{
    public    $name                                = __CLASS__;
    protected $deviceType                          = null;
    protected $fileFormat                          = null;
    protected $remoteFileFormat                    = null;
    protected $fileCategory                        = null;
    protected $fileCustomization                   = null;
    protected $fileSource                          = null;
    protected $uploadFile                          = null;
    protected $useHttpDigestAuthentication         = null;
    protected $macBasedFileAuthentication          = null;
    protected $userNamePasswordFileAuthentication  = null;
    protected $macInNonRequestURI                  = null;
    protected $macFormatInNonRequestURI            = null;

    public function __construct(
         $deviceType,
         $fileFormat,
         $remoteFileFormat,
         $fileCategory,
         $fileCustomization,
         $fileSource,
         FileResource $uploadFile = null,
         $useHttpDigestAuthentication,
         $macBasedFileAuthentication,
         $userNamePasswordFileAuthentication,
         $macInNonRequestURI,
         $macFormatInNonRequestURI = null
    ) {
        $this->setDeviceType($deviceType);
        $this->setFileFormat($fileFormat);
        $this->setRemoteFileFormat($remoteFileFormat);
        $this->setFileCategory($fileCategory);
        $this->setFileCustomization($fileCustomization);
        $this->setFileSource($fileSource);
        $this->setUploadFile($uploadFile);
        $this->setUseHttpDigestAuthentication($useHttpDigestAuthentication);
        $this->setMacBasedFileAuthentication($macBasedFileAuthentication);
        $this->setUserNamePasswordFileAuthentication($userNamePasswordFileAuthentication);
        $this->setMacInNonRequestURI($macInNonRequestURI);
        $this->setMacFormatInNonRequestURI($macFormatInNonRequestURI);
    }

    public function setDeviceType($deviceType = null)
    {
        $this->deviceType = ($deviceType InstanceOf AccessDeviceType)
             ? $deviceType
             : new AccessDeviceType($deviceType);
    }

    public function getDeviceType()
    {
        return (!$this->deviceType) ?: $this->deviceType->value();
    }

    public function setFileFormat($fileFormat = null)
    {
        $this->fileFormat = ($fileFormat InstanceOf DeviceManagementFileFormat)
             ? $fileFormat
             : new DeviceManagementFileFormat($fileFormat);
    }

    public function getFileFormat()
    {
        return (!$this->fileFormat) ?: $this->fileFormat->value();
    }

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

    public function setUploadFile(FileResource $uploadFile = null)
    {
    }

    public function getUploadFile()
    {
        return (!$this->uploadFile) ?: $this->uploadFile->value();
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
}
