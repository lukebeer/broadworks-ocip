<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CPEDeviceConfigRebuildType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCPEConfigRebuildConfigFileResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Rebuild the system default config file for the specified device type.
 *         If the device type is not specified, all files for all device types in the system are rebuilt.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCPEConfigRebuildConfigFileRequest extends ComplexType implements ComplexInterface
{
    public    $name        = __CLASS__;
    protected $deviceType  = null;
    protected $rebuildType = null;

    public function __construct(
         $deviceType = null,
         $rebuildType = null
    ) {
        $this->setDeviceType($deviceType);
        $this->setRebuildType($rebuildType);
    }

    /**
     * @return SystemCPEConfigRebuildConfigFileResponse
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
     * Choices for the type of rebuild requested.
     */
    public function setRebuildType($rebuildType = null)
    {
        $this->rebuildType = ($rebuildType InstanceOf CPEDeviceConfigRebuildType)
             ? $rebuildType
             : new CPEDeviceConfigRebuildType($rebuildType);
    }

    /**
     * Choices for the type of rebuild requested.
     */
    public function getRebuildType()
    {
        return (!$this->rebuildType) ?: $this->rebuildType->getValue();
    }
}
