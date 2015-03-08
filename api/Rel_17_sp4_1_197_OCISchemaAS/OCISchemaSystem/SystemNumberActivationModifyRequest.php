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
     * Request to modify system number activation setting.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemNumberActivationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $useNumberActivation = null;

    public function __construct(
         $useNumberActivation = null
    ) {
        $this->setUseNumberActivation($useNumberActivation);
    }

    /**
     * 
     */
    public function setUseNumberActivation($useNumberActivation = null)
    {
        $this->useNumberActivation = (boolean) $useNumberActivation;
    }

    /**
     * 
     */
    public function getUseNumberActivation()
    {
        return (!$this->useNumberActivation) ?: $this->useNumberActivation->getValue();
    }
}