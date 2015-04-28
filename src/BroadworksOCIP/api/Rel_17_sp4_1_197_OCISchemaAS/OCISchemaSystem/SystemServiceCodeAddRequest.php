<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceCodeDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceCode;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to add a service code for the purpose of providing free format routable strings for dialing
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemServiceCodeAddRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemServiceCodeAddRequest';
    protected $serviceCode;
    protected $description;

    public function __construct(
         $serviceCode = '',
         $description = ''
    ) {
        $this->setServiceCode($serviceCode);
        $this->setDescription($description);
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
    public function setServiceCode($serviceCode = null)
    {
        $this->serviceCode = ($serviceCode InstanceOf ServiceCode)
             ? $serviceCode
             : new ServiceCode($serviceCode);
        $this->serviceCode->setElementName('serviceCode');
        return $this;
    }

    /**
     * 
     * @return ServiceCode $serviceCode
     */
    public function getServiceCode()
    {
        return ($this->serviceCode)
            ? $this->serviceCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf ServiceCodeDescription)
             ? $description
             : new ServiceCodeDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return ServiceCodeDescription $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }
}
