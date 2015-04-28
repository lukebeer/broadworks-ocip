<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemSIPDeviceTypeServiceGetRequest.
 *         Contains the list of device type services integrated to BroadWorks.
 */
class SystemSIPDeviceTypeServiceGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemSIPDeviceTypeServiceGetResponse';
    protected $supportsPolycomPhoneServices;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSIPDeviceTypeServiceGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setSupportsPolycomPhoneServices($supportsPolycomPhoneServices = null)
    {
        $this->supportsPolycomPhoneServices = new PrimitiveType($supportsPolycomPhoneServices);
        $this->supportsPolycomPhoneServices->setElementName('supportsPolycomPhoneServices');
        return $this;
    }

    /**
     * 
     * @return boolean $supportsPolycomPhoneServices
     */
    public function getSupportsPolycomPhoneServices()
    {
        return ($this->supportsPolycomPhoneServices)
            ? $this->supportsPolycomPhoneServices->getElementValue()
            : null;
    }
}
