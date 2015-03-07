<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceTypeFileEnhancedConfigurationMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\DeviceManagementFileType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementAccessURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileResource;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify a sip device type file.
 *             The response is either SuccessResponse or ErrorResponse.
 *             Replaced By: SystemSIPDeviceTypeFileModifyRequest14sp8
 */
class SystemSIPDeviceTypeFileModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                = __CLASS__;
    protected $deviceType                          = null;
    protected $fileType                            = null;
    protected $allowFileCustomization              = null;
    protected $fileSource                          = null;
    protected $uploadFile                          = null;
    protected $useHttpDigestAuthentication         = null;
    protected $macBasedFileAuthentication          = null;
    protected $userNamePasswordFileAuthentication  = null;
    protected $macInNonRequestURI                  = null;
    protected $macFormatInNonRequestURI            = null;

    public function __construct(
         $deviceType,
         $fileType,
         $allowFileCustomization = null,
         $fileSource = null,
         FileResource $uploadFile = null,
         $useHttpDigestAuthentication = null,
         $macBasedFileAuthentication = null,
         $userNamePasswordFileAuthentication = null,
         $macInNonRequestURI = null,
         $macFormatInNonRequestURI = null
    ) {
        $this->setDeviceType($deviceType);
        $this->setFileType($fileType);
        $this->setAllowFileCustomization($allowFileCustomization);
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

    public function setFileType($fileType = null)
    {
        $this->fileType = ($fileType InstanceOf DeviceManagementFileType)
             ? $fileType
             : new DeviceManagementFileType($fileType);
    }

    public function getFileType()
    {
        return (!$this->fileType) ?: $this->fileType->value();
    }

    public function setAllowFileCustomization(xs:boolean $allowFileCustomization = null)
    {
    }

    public function getAllowFileCustomization()
    {
        return (!$this->allowFileCustomization) ?: $this->allowFileCustomization->value();
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
