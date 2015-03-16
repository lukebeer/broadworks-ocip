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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileResource;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify a sip device type file.
 *             The response is either SuccessResponse or ErrorResponse.
 *             Replaced By: SystemSIPDeviceTypeFileModifyRequest14sp8
 */
class SystemSIPDeviceTypeFileModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemSIPDeviceTypeFileModifyRequest';
    protected $deviceType;
    protected $fileType;
    protected $allowFileCustomization;
    protected $fileSource;
    protected $uploadFile;
    protected $useHttpDigestAuthentication;
    protected $macBasedFileAuthentication;
    protected $userNamePasswordFileAuthentication;
    protected $macInNonRequestURI;
    protected $macFormatInNonRequestURI;

    public function __construct(
         $deviceType = '',
         $fileType = '',
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

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDeviceType($deviceType = null)
    {
        $this->deviceType = ($deviceType InstanceOf AccessDeviceType)
             ? $deviceType
             : new AccessDeviceType($deviceType);
        $this->deviceType->setName('deviceType');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceType $deviceType
     */
    public function getDeviceType()
    {
        return ($this->deviceType) ? $this->deviceType->getValue() : null;
    }

    /**
     * 
     */
    public function setFileType($fileType = null)
    {
        $this->fileType = ($fileType InstanceOf DeviceManagementFileType)
             ? $fileType
             : new DeviceManagementFileType($fileType);
        $this->fileType->setName('fileType');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementFileType $fileType
     */
    public function getFileType()
    {
        return ($this->fileType) ? $this->fileType->getValue() : null;
    }

    /**
     * 
     */
    public function setAllowFileCustomization($allowFileCustomization = null)
    {
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
        return ($this->allowFileCustomization) ? $this->allowFileCustomization->getValue() : null;
    }

    /**
     * 
     */
    public function setFileSource($fileSource = null)
    {
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
        return ($this->fileSource) ? $this->fileSource->getValue() : null;
    }

    /**
     * 
     */
    public function setUploadFile(FileResource $uploadFile = null)
    {
        $this->uploadFile = ($uploadFile InstanceOf FileResource)
             ? $uploadFile
             : new FileResource($uploadFile);
        $this->uploadFile->setName('uploadFile');
        return $this;
    }

    /**
     * 
     * @return FileResource $uploadFile
     */
    public function getUploadFile()
    {
        return $this->uploadFile;
    }

    /**
     * 
     */
    public function setUseHttpDigestAuthentication($useHttpDigestAuthentication = null)
    {
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
        return ($this->useHttpDigestAuthentication) ? $this->useHttpDigestAuthentication->getValue() : null;
    }

    /**
     * 
     */
    public function setMacBasedFileAuthentication($macBasedFileAuthentication = null)
    {
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
        return ($this->macBasedFileAuthentication) ? $this->macBasedFileAuthentication->getValue() : null;
    }

    /**
     * 
     */
    public function setUserNamePasswordFileAuthentication($userNamePasswordFileAuthentication = null)
    {
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
        return ($this->userNamePasswordFileAuthentication) ? $this->userNamePasswordFileAuthentication->getValue() : null;
    }

    /**
     * 
     */
    public function setMacInNonRequestURI($macInNonRequestURI = null)
    {
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
        return ($this->macInNonRequestURI) ? $this->macInNonRequestURI->getValue() : null;
    }

    /**
     * 
     */
    public function setMacFormatInNonRequestURI($macFormatInNonRequestURI = null)
    {
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
        return ($this->macFormatInNonRequestURI) ? $this->macFormatInNonRequestURI->getValue() : null;
    }
}
