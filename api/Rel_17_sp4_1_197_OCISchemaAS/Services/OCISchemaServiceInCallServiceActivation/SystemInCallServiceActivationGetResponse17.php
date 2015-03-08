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
     * Response to SystemInCallServiceActivationGetRequest17.
 */
class SystemInCallServiceActivationGetResponse17 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                        = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInCallServiceActivation\SystemInCallServiceActivationGetResponse17';
    public    $name                                = __CLASS__;
    protected $defaultFlashActivationDigits        = null;
    protected $defaultCallTransferActivationDigits = null;


    /**
     * In Call Service Activation DigitMap.
     */
    public function setDefaultFlashActivationDigits($defaultFlashActivationDigits = null)
    {
        $this->defaultFlashActivationDigits = ($defaultFlashActivationDigits InstanceOf InCallServiceActivationDigits)
             ? $defaultFlashActivationDigits
             : new InCallServiceActivationDigits($defaultFlashActivationDigits);
    }

    /**
     * In Call Service Activation DigitMap.
     */
    public function getDefaultFlashActivationDigits()
    {
        return (!$this->defaultFlashActivationDigits) ?: $this->defaultFlashActivationDigits->getValue();
    }

    /**
     * In Call Service Activation DigitMap.
     */
    public function setDefaultCallTransferActivationDigits($defaultCallTransferActivationDigits = null)
    {
        $this->defaultCallTransferActivationDigits = ($defaultCallTransferActivationDigits InstanceOf InCallServiceActivationDigits)
             ? $defaultCallTransferActivationDigits
             : new InCallServiceActivationDigits($defaultCallTransferActivationDigits);
    }

    /**
     * In Call Service Activation DigitMap.
     */
    public function getDefaultCallTransferActivationDigits()
    {
        return (!$this->defaultCallTransferActivationDigits) ?: $this->defaultCallTransferActivationDigits->getValue();
    }
}
