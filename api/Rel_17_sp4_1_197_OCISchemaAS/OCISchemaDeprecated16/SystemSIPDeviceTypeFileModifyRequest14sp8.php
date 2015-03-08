<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceTypeFileEnhancedConfigurationMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementAccessURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileResource;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to modify a sip device type file.
 *           The response is either SuccessResponse or ErrorResponse.
 */
class SystemSIPDeviceTypeFileModifyRequest14sp8 extends ComplexType implements ComplexInterface
{
    public    $name                               = __CLASS__;
    protected $deviceType                         = null;
    protected $fileFormat                         = null;
    protected $allowFileCustomization             = null;
    protected $fileSource                         = null;
    protected $uploadFile                         = null;
    protected $useHttpDigestAuthentication        = null;
    protected $macBasedFileAuthentication         = null;
    protected $userNamePasswordFileAuthentication = null;
    protected $macInNonRequestURI                 = null;
    protected $macFormatInNonRequestURI           = null;

    public function __construct(
         $deviceType,
         $fileFormat,
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
        $this->setFileFormat($fileFormat);
        $this->setAllowFileCustomization($allowFileCustomization);
        $this->setFileSource($fileSource);
        $this->setUploadFile($uploadFile);
        $this->setUseHttpDigestAuthentication($useHttpDigestAuthentication);
        $this->setMacBasedFileAuthentication($macBasedFileAuthentication);
        $this->setUserNamePasswordFileAuthentication($userNamePasswordFileAuthentication);
        $this->setMacInNonRequestURI($macInNonRequestURI);
        $this->setMacFormatInNonRequestURI($macFormatInNonRequestURI);
    }

    /**
     * Access device type.
     */
    public function setDeviceType($deviceType = null)
    {
        $this->deviceType = ($deviceType InstanceOf AccessDeviceType)
             ? $deviceType
             : new AccessDeviceType($deviceType);
    }

    /**
     * Access device type.
     */
    public function getDeviceType()
    {
        return (!$this->deviceType) ?: $this->deviceType->getValue();
    }

    /**
     * The file name format for an access device file managed by the Device Management System on BroadWorks.
     */
    public function setFileFormat($fileFormat = null)
    {
        $this->fileFormat = ($fileFormat InstanceOf DeviceManagementFileFormat)
             ? $fileFormat
             : new DeviceManagementFileFormat($fileFormat);
    }

    /**
     * The file name format for an access device file managed by the Device Management System on BroadWorks.
     */
    public function getFileFormat()
    {
        return (!$this->fileFormat) ?: $this->fileFormat->getValue();
    }

    /**
     * 
     */
    public function setAllowFileCustomization($allowFileCustomization = null)
    {
        $this->allowFileCustomization = (boolean) $allowFileCustomization;
    }

    /**
     * 
     */
    public function getAllowFileCustomization()
    {
        return (!$this->allowFileCustomization) ?: $this->allowFileCustomization->getValue();
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
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer.
     */
    public function setUploadFile(FileResource $uploadFile = null)
    {
        $this->uploadFile = FileResource $uploadFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer.
     */
    public function getUploadFile()
    {
        return (!$this->uploadFile) ?: $this->uploadFile->getValue();
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
}
