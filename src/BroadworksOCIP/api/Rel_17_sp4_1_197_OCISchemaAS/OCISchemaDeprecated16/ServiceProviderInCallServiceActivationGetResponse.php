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
 * Response to ServiceProviderInCallServiceActivationGetRequest.
 *           
 *           Replaced by: ServiceProviderInCallServiceActivationGetResponse17
 */
class ServiceProviderInCallServiceActivationGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderInCallServiceActivationGetResponse';
    protected $activationDigits;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\ServiceProviderInCallServiceActivationGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setActivationDigits($activationDigits = null)
    {
        $this->activationDigits = ($activationDigits InstanceOf InCallServiceActivationDigits)
             ? $activationDigits
             : new InCallServiceActivationDigits($activationDigits);
        $this->activationDigits->setElementName('activationDigits');
        return $this;
    }

    /**
     * 
     * @return InCallServiceActivationDigits $activationDigits
     */
    public function getActivationDigits()
    {
        return ($this->activationDigits)
            ? $this->activationDigits->getElementValue()
            : null;
    }
}
