<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileResource;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify a specified service provider/enterprise access device file.
 *           The response is either a SuccessResponse or an ErrorResponse.
 *           Replaced By: ServiceProviderAccessDeviceFileModifyRequest14sp8
 */
class ServiceProviderAccessDeviceFileModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $deviceName,
             $fileType,
             $fileSource=null,
             FileResource $uploadFile=null
    ) {
        $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
        $this->deviceName        = new AccessDeviceName($deviceName);
        $this->fileType          = $fileType;
        $this->fileSource        = new AccessDeviceEnhancedConfigurationMode($fileSource);
        $this->uploadFile        = $uploadFile;
        $this->args              = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setDeviceName($deviceName)
    {
        $deviceName and $this->deviceName = new AccessDeviceName($deviceName);
    }

    public function getDeviceName()
    {
        return (!$this->deviceName) ?: $this->deviceName->value();
    }

    public function setFileType($fileType)
    {
        $fileType and $this->fileType = new DeviceManagementFileType($fileType);
    }

    public function getFileType()
    {
        return (!$this->fileType) ?: $this->fileType->value();
    }

    public function setFileSource($fileSource)
    {
        $fileSource and $this->fileSource = new AccessDeviceEnhancedConfigurationMode($fileSource);
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
}
