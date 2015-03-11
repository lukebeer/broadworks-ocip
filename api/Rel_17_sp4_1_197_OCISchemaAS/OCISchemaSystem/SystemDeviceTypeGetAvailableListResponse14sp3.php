<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemDeviceTypeGetAvailableListRequest14sp3.
 */
class SystemDeviceTypeGetAvailableListResponse14sp3 extends ComplexType implements ComplexInterface
{
    public    $name       = 'SystemDeviceTypeGetAvailableListResponse14sp3';
    protected $deviceType = null;
    protected $typeInfo   = null;

    /**
     * @return SystemDeviceTypeGetAvailableListResponse14sp3
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
    public function setTypeInfo($typeInfo = null)
    {
        if (!$typeInfo) return $this;
        $this->typeInfo->setName('typeInfo');
        return $this;
    }

    /**
     * 
     * @return 
     */
    public function getTypeInfo()
    {
        return $this->typeInfo->getValue();
    }
}
