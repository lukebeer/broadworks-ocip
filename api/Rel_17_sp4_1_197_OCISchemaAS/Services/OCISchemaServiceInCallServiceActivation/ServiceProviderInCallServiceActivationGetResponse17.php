<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInCallServiceActivation; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InCallServiceActivationDigits;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderInCallServiceActivationGetRequest17.
 */
class ServiceProviderInCallServiceActivationGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name                         = 'ServiceProviderInCallServiceActivationGetResponse17';
    protected $flashActivationDigits        = null;
    protected $callTransferActivationDigits = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInCallServiceActivation\ServiceProviderInCallServiceActivationGetResponse17 $response
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
        if (!$flashActivationDigits) return $this;
        $this->flashActivationDigits = ($flashActivationDigits InstanceOf InCallServiceActivationDigits)
             ? $flashActivationDigits
             : new InCallServiceActivationDigits($flashActivationDigits);
        $this->flashActivationDigits->setName('flashActivationDigits');
        return $this;
    }

    /**
     * 
     * @return InCallServiceActivationDigits $flashActivationDigits
     */
    public function getFlashActivationDigits()
    {
        return $this->flashActivationDigits->getValue();
    }

    /**
     * 
     */
    public function setCallTransferActivationDigits($callTransferActivationDigits = null)
    {
        if (!$callTransferActivationDigits) return $this;
        $this->callTransferActivationDigits = ($callTransferActivationDigits InstanceOf InCallServiceActivationDigits)
             ? $callTransferActivationDigits
             : new InCallServiceActivationDigits($callTransferActivationDigits);
        $this->callTransferActivationDigits->setName('callTransferActivationDigits');
        return $this;
    }

    /**
     * 
     * @return InCallServiceActivationDigits $callTransferActivationDigits
     */
    public function getCallTransferActivationDigits()
    {
        return $this->callTransferActivationDigits->getValue();
    }
}
