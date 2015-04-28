<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify a mgcp device type. In release 14, this is limited to changing the obsolete flag.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemMGCPDeviceTypeModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemMGCPDeviceTypeModifyRequest';
    protected $deviceType;
    protected $isObsolete;

    public function __construct(
         $deviceType = '',
         $isObsolete = null
    ) {
        $this->setDeviceType($deviceType);
        $this->setIsObsolete($isObsolete);
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
        $this->deviceType->setElementName('deviceType');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceType $deviceType
     */
    public function getDeviceType()
    {
        return ($this->deviceType)
            ? $this->deviceType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsObsolete($isObsolete = null)
    {
        $this->isObsolete = new PrimitiveType($isObsolete);
        $this->isObsolete->setElementName('isObsolete');
        return $this;
    }

    /**
     * 
     * @return boolean $isObsolete
     */
    public function getIsObsolete()
    {
        return ($this->isObsolete)
            ? $this->isObsolete->getElementValue()
            : null;
    }
}
