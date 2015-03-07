<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceDirectedCallPickupWithBargeIn; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserDirectedCallPickupWithBargeInGetRequest14sp7.
 */
class UserDirectedCallPickupWithBargeInGetResponse14sp7 extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
    protected $enableBargeInWarningTone        = null;
    protected $enableAutomaticTargetSelection  = null;


    public function setEnableBargeInWarningTone(xs:boolean $enableBargeInWarningTone = null)
    {
    }

    public function getEnableBargeInWarningTone()
    {
        return (!$this->enableBargeInWarningTone) ?: $this->enableBargeInWarningTone->value();
    }

    public function setEnableAutomaticTargetSelection(xs:boolean $enableAutomaticTargetSelection = null)
    {
    }

    public function getEnableAutomaticTargetSelection()
    {
        return (!$this->enableAutomaticTargetSelection) ?: $this->enableAutomaticTargetSelection->value();
    }
}
