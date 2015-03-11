<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CPEFileDirectory;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a device CPE config file server.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemCPEConfigModifyFileServerRequest14sp6 extends ComplexType implements ComplexInterface
{
    public    $name               = 'SystemCPEConfigModifyFileServerRequest14sp6';
    protected $deviceType         = null;
    protected $fileRepositoryName = null;
    protected $cpeFileDirectory   = null;

    public function __construct(
         $deviceType,
         $fileRepositoryName = null,
         $cpeFileDirectory = null
    ) {
        $this->setDeviceType($deviceType);
        $this->setFileRepositoryName($fileRepositoryName);
        $this->setCpeFileDirectory($cpeFileDirectory);
    }

    /**
     * @return 
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
        if (!$deviceType) return $this;
        $this->deviceType = ($deviceType InstanceOf AccessDeviceType)
             ? $deviceType
             : new AccessDeviceType($deviceType);
        $this->deviceType->setName('deviceType');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceType
     */
    public function getDeviceType()
    {
        return $this->deviceType->getValue();
    }

    /**
     * 
     */
    public function setFileRepositoryName($fileRepositoryName = null)
    {
        if (!$fileRepositoryName) return $this;
        $this->fileRepositoryName = ($fileRepositoryName InstanceOf FileRepositoryName)
             ? $fileRepositoryName
             : new FileRepositoryName($fileRepositoryName);
        $this->fileRepositoryName->setName('fileRepositoryName');
        return $this;
    }

    /**
     * 
     * @return FileRepositoryName
     */
    public function getFileRepositoryName()
    {
        return $this->fileRepositoryName->getValue();
    }

    /**
     * 
     */
    public function setCpeFileDirectory($cpeFileDirectory = null)
    {
        if (!$cpeFileDirectory) return $this;
        $this->cpeFileDirectory = ($cpeFileDirectory InstanceOf CPEFileDirectory)
             ? $cpeFileDirectory
             : new CPEFileDirectory($cpeFileDirectory);
        $this->cpeFileDirectory->setName('cpeFileDirectory');
        return $this;
    }

    /**
     * 
     * @return CPEFileDirectory
     */
    public function getCpeFileDirectory()
    {
        return $this->cpeFileDirectory->getValue();
    }
}
