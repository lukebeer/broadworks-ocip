<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemNumberActivationGetRequest.
 *         Contains the system number activation setting.
 */
class SystemNumberActivationGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $useNumberActivation  = null;


    public function setUseNumberActivation(xs:boolean $useNumberActivation = null)
    {
    }

    public function getUseNumberActivation()
    {
        return (!$this->useNumberActivation) ?: $this->useNumberActivation->value();
    }
}
