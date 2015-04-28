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
 * Response to SystemInCallServiceActivationGetRequest17.
 */
class SystemInCallServiceActivationGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemInCallServiceActivationGetResponse17';
    protected $defaultFlashActivationDigits;
    protected $defaultCallTransferActivationDigits;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInCallServiceActivation\SystemInCallServiceActivationGetResponse17 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDefaultFlashActivationDigits($defaultFlashActivationDigits = null)
    {
        $this->defaultFlashActivationDigits = ($defaultFlashActivationDigits InstanceOf InCallServiceActivationDigits)
             ? $defaultFlashActivationDigits
             : new InCallServiceActivationDigits($defaultFlashActivationDigits);
        $this->defaultFlashActivationDigits->setElementName('defaultFlashActivationDigits');
        return $this;
    }

    /**
     * 
     * @return InCallServiceActivationDigits $defaultFlashActivationDigits
     */
    public function getDefaultFlashActivationDigits()
    {
        return ($this->defaultFlashActivationDigits)
            ? $this->defaultFlashActivationDigits->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultCallTransferActivationDigits($defaultCallTransferActivationDigits = null)
    {
        $this->defaultCallTransferActivationDigits = ($defaultCallTransferActivationDigits InstanceOf InCallServiceActivationDigits)
             ? $defaultCallTransferActivationDigits
             : new InCallServiceActivationDigits($defaultCallTransferActivationDigits);
        $this->defaultCallTransferActivationDigits->setElementName('defaultCallTransferActivationDigits');
        return $this;
    }

    /**
     * 
     * @return InCallServiceActivationDigits $defaultCallTransferActivationDigits
     */
    public function getDefaultCallTransferActivationDigits()
    {
        return ($this->defaultCallTransferActivationDigits)
            ? $this->defaultCallTransferActivationDigits->getElementValue()
            : null;
    }
}
