<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RoutingDigits;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to delete a digit routing table entry from the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemRoutingDeleteTranslationRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemRoutingDeleteTranslationRequest';
    protected $digits;

    public function __construct(
         $digits = ''
    ) {
        $this->setDigits($digits);
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
    public function setDigits($digits = null)
    {
        $this->digits = ($digits InstanceOf RoutingDigits)
             ? $digits
             : new RoutingDigits($digits);
        $this->digits->setElementName('digits');
        return $this;
    }

    /**
     * 
     * @return RoutingDigits $digits
     */
    public function getDigits()
    {
        return ($this->digits)
            ? $this->digits->getElementValue()
            : null;
    }
}
