<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\PreferredCarrierName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Delete a carrier from the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         An ErrorResponse is returned if the carrier is in use, or if the carrier didn't exist prior to deletion..
 */
class SystemPreferredCarrierDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemPreferredCarrierDeleteRequest';
    protected $carrier;

    public function __construct(
         $carrier = ''
    ) {
        $this->setCarrier($carrier);
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
    public function setCarrier($carrier = null)
    {
        $this->carrier = ($carrier InstanceOf PreferredCarrierName)
             ? $carrier
             : new PreferredCarrierName($carrier);
        $this->carrier->setElementName('carrier');
        return $this;
    }

    /**
     * 
     * @return PreferredCarrierName $carrier
     */
    public function getCarrier()
    {
        return ($this->carrier)
            ? $this->carrier->getElementValue()
            : null;
    }
}
