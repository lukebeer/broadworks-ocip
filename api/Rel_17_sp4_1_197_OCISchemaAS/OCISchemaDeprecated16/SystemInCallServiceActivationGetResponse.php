<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InCallServiceActivationDigits;
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
    public    $name                    = 'SystemInCallServiceActivationGetResponse';
    protected $defaultActivationDigits = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemInCallServiceActivationGetResponse $response
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
        if (!$defaultActivationDigits) return $this;
        $this->defaultActivationDigits = ($defaultActivationDigits InstanceOf InCallServiceActivationDigits)
             ? $defaultActivationDigits
             : new InCallServiceActivationDigits($defaultActivationDigits);
        $this->defaultActivationDigits->setName('defaultActivationDigits');
        return $this;
    }

    /**
     * 
     * @return InCallServiceActivationDigits $defaultActivationDigits
     */
    public function getDefaultActivationDigits()
    {
        return $this->defaultActivationDigits->getValue();
    }
}
