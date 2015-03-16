<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemDeviceTypeGetAvailableListRequest14sp1.
 *         Replaced By: SystemDeviceTypeGetAvailableListResponse14sp3
 */
class SystemDeviceTypeGetAvailableListResponse14sp1 extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemDeviceTypeGetAvailableListResponse14sp1';
    protected $deviceType;
    protected $typeInfo;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemDeviceTypeGetAvailableListResponse14sp1 $response
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
    public function setTypeInfo($typeInfo = null)
    {
        $this->typeInfo->setName('typeInfo');
        return $this;
    }

    /**
     * 
     * @return  $typeInfo
     */
    public function getTypeInfo()
    {
        return ($this->typeInfo) ? $this->typeInfo->getValue() : null;
    }
}
