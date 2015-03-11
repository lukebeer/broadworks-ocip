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
 * Response to ServiceProviderInCallServiceActivationGetRequest.
 *           
 *           Replaced by: ServiceProviderInCallServiceActivationGetResponse17
 */
class ServiceProviderInCallServiceActivationGetResponse extends ComplexType implements ComplexInterface
{
    public    $name             = 'ServiceProviderInCallServiceActivationGetResponse';
    protected $activationDigits = null;

    /**
     * @return ServiceProviderInCallServiceActivationGetResponse
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
        if (!$activationDigits) return $this;
        $this->activationDigits = ($activationDigits InstanceOf InCallServiceActivationDigits)
             ? $activationDigits
             : new InCallServiceActivationDigits($activationDigits);
        $this->activationDigits->setName('activationDigits');
        return $this;
    }

    /**
     * 
     * @return InCallServiceActivationDigits
     */
    public function getActivationDigits()
    {
        return $this->activationDigits->getValue();
    }
}
