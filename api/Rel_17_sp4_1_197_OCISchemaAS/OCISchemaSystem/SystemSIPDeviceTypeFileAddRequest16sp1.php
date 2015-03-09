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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSIPDeviceTypeFileAddResponse16sp1;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to add a sip device type file.
 *           The response is either SuccessResponse or ErrorResponse.
 */
class SystemSIPDeviceTypeFileAddRequest16sp1 extends ComplexType implements ComplexInterface
{
    public    $name                               = __CLASS__;
    protected $deviceType                         = null;
    protected $fileFormat                         = null;
    protected $remoteFileFormat                   = null;
    protected $fileCategory                       = null;
    protected $fileCustomization                  = null;
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
         $remoteFileFormat,
         $fileCategory,
         $fileCustomization,
         $fileSource,
          $uploadFile = null,
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

    /**
     * @return SystemSIPDeviceTypeFileAddResponse16sp1
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer.
     */
    public function setUploadFile(FileResource $uploadFile = null)
    {
        $this->uploadFile =  $uploadFile;
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
        return (!$this->useHttpDigestAuthentication) ?: $this->useHttpDigestAuthentication;
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
        return (!$this->macBasedFileAuthentication) ?: $this->macBasedFileAuthentication;
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
        return (!$this->userNamePasswordFileAuthentication) ?: $this->userNamePasswordFileAuthentication;
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
        return (!$this->macInNonRequestURI) ?: $this->macInNonRequestURI;
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
