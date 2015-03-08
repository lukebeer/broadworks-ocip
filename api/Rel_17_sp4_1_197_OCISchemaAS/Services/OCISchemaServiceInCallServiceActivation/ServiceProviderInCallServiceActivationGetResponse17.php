<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInCallServiceActivation; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InCallServiceActivationDigits;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to ServiceProviderInCallServiceActivationGetRequest17.
 */
class ServiceProviderInCallServiceActivationGetResponse17 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                 = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInCallServiceActivation\ServiceProviderInCallServiceActivationGetResponse17';
    public    $name                         = __CLASS__;
    protected $flashActivationDigits        = null;
    protected $callTransferActivationDigits = null;


    /**
     * In Call Service Activation DigitMap.
     */
    public function setFlashActivationDigits($flashActivationDigits = null)
    {
        $this->flashActivationDigits = ($flashActivationDigits InstanceOf InCallServiceActivationDigits)
             ? $flashActivationDigits
             : new InCallServiceActivationDigits($flashActivationDigits);
    }

    /**
     * In Call Service Activation DigitMap.
     */
    public function getFlashActivationDigits()
    {
        return (!$this->flashActivationDigits) ?: $this->flashActivationDigits->getValue();
    }

    /**
     * In Call Service Activation DigitMap.
     */
    public function setCallTransferActivationDigits($callTransferActivationDigits = null)
    {
        $this->callTransferActivationDigits = ($callTransferActivationDigits InstanceOf InCallServiceActivationDigits)
             ? $callTransferActivationDigits
             : new InCallServiceActivationDigits($callTransferActivationDigits);
    }

    /**
     * In Call Service Activation DigitMap.
     */
    public function getCallTransferActivationDigits()
    {
        return (!$this->callTransferActivationDigits) ?: $this->callTransferActivationDigits->getValue();
    }
}
