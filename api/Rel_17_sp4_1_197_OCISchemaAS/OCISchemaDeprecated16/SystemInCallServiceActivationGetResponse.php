<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InCallServiceActivationDigits;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemInCallServiceActivationGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemInCallServiceActivationGetRequest.
 * 
 *           Replaced by: SystemInCallServiceActivationGetResponse17
 */
class SystemInCallServiceActivationGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                    = __CLASS__;
    protected $defaultActivationDigits = null;

    /**
     * @return SystemInCallServiceActivationGetResponse
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
