<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAdviceOfCharge; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAdviceOfCharge\AdviceOfChargeType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserAdviceOfChargeGetRequest.
 */
class UserAdviceOfChargeGetResponse extends ComplexType implements ComplexInterface
{
    public    $name     = __CLASS__;
    protected $isActive = null;
    protected $aocType  = null;


    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->getValue();
    }

    /**
     * Choices for Advice of Charge Type.
     */
    public function setAocType($aocType = null)
    {
        $this->aocType = ($aocType InstanceOf AdviceOfChargeType)
             ? $aocType
             : new AdviceOfChargeType($aocType);
    }

    /**
     * Choices for Advice of Charge Type.
     */
    public function getAocType()
    {
        return (!$this->aocType) ?: $this->aocType->getValue();
    }
}
