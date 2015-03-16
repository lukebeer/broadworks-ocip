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
 * Modifies the system's DTMF based in-call service activation trigger  attributes.The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemInCallServiceActivationModifyRequest17 extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemInCallServiceActivationModifyRequest17';
    protected $defaultFlashActivationDigits;
    protected $defaultCallTransferActivationDigits;

    public function __construct(
         $defaultFlashActivationDigits = null,
         $defaultCallTransferActivationDigits = null
    ) {
        $this->setDefaultFlashActivationDigits($defaultFlashActivationDigits);
        $this->setDefaultCallTransferActivationDigits($defaultCallTransferActivationDigits);
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
    public function setDefaultFlashActivationDigits($defaultFlashActivationDigits = null)
    {
        $this->defaultFlashActivationDigits = ($defaultFlashActivationDigits InstanceOf InCallServiceActivationDigits)
             ? $defaultFlashActivationDigits
             : new InCallServiceActivationDigits($defaultFlashActivationDigits);
        $this->defaultFlashActivationDigits->setName('defaultFlashActivationDigits');
        return $this;
    }

    /**
     * 
     * @return InCallServiceActivationDigits $defaultFlashActivationDigits
     */
    public function getDefaultFlashActivationDigits()
    {
        return ($this->defaultFlashActivationDigits) ? $this->defaultFlashActivationDigits->getValue() : null;
    }

    /**
     * 
     */
    public function setDefaultCallTransferActivationDigits($defaultCallTransferActivationDigits = null)
    {
        $this->defaultCallTransferActivationDigits = ($defaultCallTransferActivationDigits InstanceOf InCallServiceActivationDigits)
             ? $defaultCallTransferActivationDigits
             : new InCallServiceActivationDigits($defaultCallTransferActivationDigits);
        $this->defaultCallTransferActivationDigits->setName('defaultCallTransferActivationDigits');
        return $this;
    }

    /**
     * 
     * @return InCallServiceActivationDigits $defaultCallTransferActivationDigits
     */
    public function getDefaultCallTransferActivationDigits()
    {
        return ($this->defaultCallTransferActivationDigits) ? $this->defaultCallTransferActivationDigits->getValue() : null;
    }
}
