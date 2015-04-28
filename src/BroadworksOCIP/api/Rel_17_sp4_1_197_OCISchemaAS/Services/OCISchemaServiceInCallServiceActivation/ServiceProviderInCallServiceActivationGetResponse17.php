<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInCallServiceActivation; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InCallServiceActivationDigits;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to ServiceProviderInCallServiceActivationGetRequest17.
 */
class ServiceProviderInCallServiceActivationGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderInCallServiceActivationGetResponse17';
    protected $flashActivationDigits;
    protected $callTransferActivationDigits;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInCallServiceActivation\ServiceProviderInCallServiceActivationGetResponse17 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setFlashActivationDigits($flashActivationDigits = null)
    {
        $this->flashActivationDigits = ($flashActivationDigits InstanceOf InCallServiceActivationDigits)
             ? $flashActivationDigits
             : new InCallServiceActivationDigits($flashActivationDigits);
        $this->flashActivationDigits->setElementName('flashActivationDigits');
        return $this;
    }

    /**
     * 
     * @return InCallServiceActivationDigits $flashActivationDigits
     */
    public function getFlashActivationDigits()
    {
        return ($this->flashActivationDigits)
            ? $this->flashActivationDigits->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallTransferActivationDigits($callTransferActivationDigits = null)
    {
        $this->callTransferActivationDigits = ($callTransferActivationDigits InstanceOf InCallServiceActivationDigits)
             ? $callTransferActivationDigits
             : new InCallServiceActivationDigits($callTransferActivationDigits);
        $this->callTransferActivationDigits->setElementName('callTransferActivationDigits');
        return $this;
    }

    /**
     * 
     * @return InCallServiceActivationDigits $callTransferActivationDigits
     */
    public function getCallTransferActivationDigits()
    {
        return ($this->callTransferActivationDigits)
            ? $this->callTransferActivationDigits->getElementValue()
            : null;
    }
}
