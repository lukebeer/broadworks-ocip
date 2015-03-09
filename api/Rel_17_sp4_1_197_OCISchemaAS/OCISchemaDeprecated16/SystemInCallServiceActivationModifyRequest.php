<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InCallServiceActivationDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemInCallServiceActivationModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modifies the system's DTMF based in-call service activation trigger  attributes.The response is either a SuccessResponse or an ErrorResponse.
 * 
 *           Replaced by: SystemInCallServiceActivationModifyRequest17
 */
class SystemInCallServiceActivationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                    = __CLASS__;
    protected $defaultActivationDigits = null;

    public function __construct(
         $defaultActivationDigits = null
    ) {
        $this->setDefaultActivationDigits($defaultActivationDigits);
    }

    /**
     * @return SystemInCallServiceActivationModifyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * In Call Service Activation DigitMap.
     */
    public function setDefaultActivationDigits($defaultActivationDigits = null)
    {
        $this->defaultActivationDigits = ($defaultActivationDigits InstanceOf InCallServiceActivationDigits)
             ? $defaultActivationDigits
             : new InCallServiceActivationDigits($defaultActivationDigits);
    }

    /**
     * In Call Service Activation DigitMap.
     */
    public function getDefaultActivationDigits()
    {
        return (!$this->defaultActivationDigits) ?: $this->defaultActivationDigits->getValue();
    }
}
