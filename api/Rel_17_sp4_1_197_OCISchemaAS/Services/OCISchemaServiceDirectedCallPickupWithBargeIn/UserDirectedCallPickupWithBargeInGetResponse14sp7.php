<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceDirectedCallPickupWithBargeIn; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserDirectedCallPickupWithBargeInGetRequest14sp7.
 */
class UserDirectedCallPickupWithBargeInGetResponse14sp7 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $enableBargeInWarningTone,
             $enableAutomaticTargetSelection
    ) {
        $this->enableBargeInWarningTone       = $enableBargeInWarningTone;
        $this->enableAutomaticTargetSelection = $enableAutomaticTargetSelection;
        $this->args                           = func_get_args();
    }

    public function setEnableBargeInWarningTone($enableBargeInWarningTone)
    {
        $enableBargeInWarningTone and $this->enableBargeInWarningTone = new xs:boolean($enableBargeInWarningTone);
    }

    public function getEnableBargeInWarningTone()
    {
        return (!$this->enableBargeInWarningTone) ?: $this->enableBargeInWarningTone->value();
    }

    public function setEnableAutomaticTargetSelection($enableAutomaticTargetSelection)
    {
        $enableAutomaticTargetSelection and $this->enableAutomaticTargetSelection = new xs:boolean($enableAutomaticTargetSelection);
    }

    public function getEnableAutomaticTargetSelection()
    {
        return (!$this->enableAutomaticTargetSelection) ?: $this->enableAutomaticTargetSelection->value();
    }
}
