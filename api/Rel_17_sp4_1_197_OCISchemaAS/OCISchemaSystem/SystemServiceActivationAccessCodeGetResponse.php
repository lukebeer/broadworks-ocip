<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceActivationAccessCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemServiceActivationAccessCodeGetRequest.
 *         Contains Service Activation Access Code system parameters.
 */
class SystemServiceActivationAccessCodeGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isActive,
             $terminatingAccessCode=null,
             $redirectingAccessCode=null,
             $clickToDialAccessCode=null
    ) {
        $this->isActive              = $isActive;
        $this->terminatingAccessCode = $terminatingAccessCode;
        $this->redirectingAccessCode = $redirectingAccessCode;
        $this->clickToDialAccessCode = $clickToDialAccessCode;
        $this->args                  = func_get_args();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setTerminatingAccessCode($terminatingAccessCode)
    {
        $terminatingAccessCode and $this->terminatingAccessCode = new ServiceActivationAccessCode($terminatingAccessCode);
    }

    public function getTerminatingAccessCode()
    {
        return (!$this->terminatingAccessCode) ?: $this->terminatingAccessCode->value();
    }

    public function setRedirectingAccessCode($redirectingAccessCode)
    {
        $redirectingAccessCode and $this->redirectingAccessCode = new ServiceActivationAccessCode($redirectingAccessCode);
    }

    public function getRedirectingAccessCode()
    {
        return (!$this->redirectingAccessCode) ?: $this->redirectingAccessCode->value();
    }

    public function setClickToDialAccessCode($clickToDialAccessCode)
    {
        $clickToDialAccessCode and $this->clickToDialAccessCode = new ServiceActivationAccessCode($clickToDialAccessCode);
    }

    public function getClickToDialAccessCode()
    {
        return (!$this->clickToDialAccessCode) ?: $this->clickToDialAccessCode->value();
    }
}
