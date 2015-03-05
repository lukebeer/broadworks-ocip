<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceTypeFileEnhancedConfigurationMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementAccessURI;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify a sip device type file.
 *             The response is either SuccessResponse or ErrorResponse.
 *             Replaced By: SystemSIPDeviceTypeFileModifyRequest14sp8
 */
class SystemSIPDeviceTypeFileModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $deviceType,
             $fileType,
             $allowFileCustomization=null,
             $fileSource=null,
             FileResource $uploadFile=null,
             $useHttpDigestAuthentication=null,
             $macBasedFileAuthentication=null,
             $userNamePasswordFileAuthentication=null,
             $macInNonRequestURI=null,
             $macFormatInNonRequestURI=null
    ) {
        $this->deviceType                         = new AccessDeviceType($deviceType);
        $this->fileType                           = $fileType;
        $this->allowFileCustomization             = $allowFileCustomization;
        $this->fileSource                         = new DeviceTypeFileEnhancedConfigurationMode($fileSource);
        $this->uploadFile                         = $uploadFile;
        $this->useHttpDigestAuthentication        = $useHttpDigestAuthentication;
        $this->macBasedFileAuthentication         = $macBasedFileAuthentication;
        $this->userNamePasswordFileAuthentication = $userNamePasswordFileAuthentication;
        $this->macInNonRequestURI                 = $macInNonRequestURI;
        $this->macFormatInNonRequestURI           = new DeviceManagementAccessURI($macFormatInNonRequestURI);
        $this->args                               = func_get_args();
    }

    public function setDeviceType($deviceType)
    {
        $deviceType and $this->deviceType = new AccessDeviceType($deviceType);
    }

    public function getDeviceType()
    {
        return (!$this->deviceType) ?: $this->deviceType->value();
    }

    public function setFileType($fileType)
    {
        $fileType and $this->fileType = new DeviceManagementFileType($fileType);
    }

    public function getFileType()
    {
        return (!$this->fileType) ?: $this->fileType->value();
    }

    public function setAllowFileCustomization($allowFileCustomization)
    {
        $allowFileCustomization and $this->allowFileCustomization = new xs:boolean($allowFileCustomization);
    }

    public function getAllowFileCustomization()
    {
        return (!$this->allowFileCustomization) ?: $this->allowFileCustomization->value();
    }

    public function setFileSource($fileSource)
    {
        $fileSource and $this->fileSource = new DeviceTypeFileEnhancedConfigurationMode($fileSource);
    }

    public function getFileSource()
    {
        return (!$this->fileSource) ?: $this->fileSource->value();
    }

    public function setUploadFile($uploadFile)
    {
        $uploadFile and $this->uploadFile = new FileResource($uploadFile);
    }

    public function getUploadFile()
    {
        return (!$this->uploadFile) ?: $this->uploadFile->value();
    }

    public function setUseHttpDigestAuthentication($useHttpDigestAuthentication)
    {
        $useHttpDigestAuthentication and $this->useHttpDigestAuthentication = new xs:boolean($useHttpDigestAuthentication);
    }

    public function getUseHttpDigestAuthentication()
    {
        return (!$this->useHttpDigestAuthentication) ?: $this->useHttpDigestAuthentication->value();
    }

    public function setMacBasedFileAuthentication($macBasedFileAuthentication)
    {
        $macBasedFileAuthentication and $this->macBasedFileAuthentication = new xs:boolean($macBasedFileAuthentication);
    }

    public function getMacBasedFileAuthentication()
    {
        return (!$this->macBasedFileAuthentication) ?: $this->macBasedFileAuthentication->value();
    }

    public function setUserNamePasswordFileAuthentication($userNamePasswordFileAuthentication)
    {
        $userNamePasswordFileAuthentication and $this->userNamePasswordFileAuthentication = new xs:boolean($userNamePasswordFileAuthentication);
    }

    public function getUserNamePasswordFileAuthentication()
    {
        return (!$this->userNamePasswordFileAuthentication) ?: $this->userNamePasswordFileAuthentication->value();
    }

    public function setMacInNonRequestURI($macInNonRequestURI)
    {
        $macInNonRequestURI and $this->macInNonRequestURI = new xs:boolean($macInNonRequestURI);
    }

    public function getMacInNonRequestURI()
    {
        return (!$this->macInNonRequestURI) ?: $this->macInNonRequestURI->value();
    }

    public function setMacFormatInNonRequestURI($macFormatInNonRequestURI)
    {
        $macFormatInNonRequestURI and $this->macFormatInNonRequestURI = new DeviceManagementAccessURI($macFormatInNonRequestURI);
    }

    public function getMacFormatInNonRequestURI()
    {
        return (!$this->macFormatInNonRequestURI) ?: $this->macFormatInNonRequestURI->value();
    }
}
