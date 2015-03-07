<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify a user modifiable access device file.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserAccessDeviceFileModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $userId        = null;
    protected $accessDevice  = null;
    protected $fileFormat    = null;
    protected $uploadFile    = null;

    public function __construct(
         $userId,
         AccessDevice $accessDevice,
         $fileFormat,
         FileResource $uploadFile
    ) {
        $this->setUserId($userId);
        $this->setAccessDevice($accessDevice);
        $this->setFileFormat($fileFormat);
        $this->setUploadFile($uploadFile);
    }

    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setAccessDevice(AccessDevice $accessDevice = null)
    {
    }

    public function getAccessDevice()
    {
        return (!$this->accessDevice) ?: $this->accessDevice->value();
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

    public function setUploadFile(FileResource $uploadFile = null)
    {
    }

    public function getUploadFile()
    {
        return (!$this->uploadFile) ?: $this->uploadFile->value();
    }
}
