<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CPEFileDirectory;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a device CPE config file server.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemCPEConfigModifyFileServerRequest14sp6 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $deviceType,
             $fileRepositoryName=null,
             $cpeFileDirectory=null
    ) {
        $this->deviceType         = new AccessDeviceType($deviceType);
        $this->fileRepositoryName = new FileRepositoryName($fileRepositoryName);
        $this->cpeFileDirectory   = new CPEFileDirectory($cpeFileDirectory);
        $this->args               = func_get_args();
    }

    public function setDeviceType($deviceType)
    {
        $deviceType and $this->deviceType = new AccessDeviceType($deviceType);
    }

    public function getDeviceType()
    {
        return (!$this->deviceType) ?: $this->deviceType->value();
    }

    public function setFileRepositoryName($fileRepositoryName)
    {
        $fileRepositoryName and $this->fileRepositoryName = new FileRepositoryName($fileRepositoryName);
    }

    public function getFileRepositoryName()
    {
        return (!$this->fileRepositoryName) ?: $this->fileRepositoryName->value();
    }

    public function setCpeFileDirectory($cpeFileDirectory)
    {
        $cpeFileDirectory and $this->cpeFileDirectory = new CPEFileDirectory($cpeFileDirectory);
    }

    public function getCpeFileDirectory()
    {
        return (!$this->cpeFileDirectory) ?: $this->cpeFileDirectory->value();
    }
}
