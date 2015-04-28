<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InCallServiceActivationDigits;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modifies the system's DTMF based in-call service activation trigger  attributes.The response is either a SuccessResponse or an ErrorResponse.
 * 
 *           Replaced by: SystemInCallServiceActivationModifyRequest17
 */
class SystemInCallServiceActivationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemInCallServiceActivationModifyRequest';
    protected $defaultActivationDigits;

    public function __construct(
         $defaultActivationDigits = null
    ) {
        $this->setDefaultActivationDigits($defaultActivationDigits);
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
    public function setDefaultActivationDigits($defaultActivationDigits = null)
    {
        $this->defaultActivationDigits = ($defaultActivationDigits InstanceOf InCallServiceActivationDigits)
             ? $defaultActivationDigits
             : new InCallServiceActivationDigits($defaultActivationDigits);
        $this->defaultActivationDigits->setElementName('defaultActivationDigits');
        return $this;
    }

    /**
     * 
     * @return InCallServiceActivationDigits $defaultActivationDigits
     */
    public function getDefaultActivationDigits()
    {
        return ($this->defaultActivationDigits)
            ? $this->defaultActivationDigits->getElementValue()
            : null;
    }
}
