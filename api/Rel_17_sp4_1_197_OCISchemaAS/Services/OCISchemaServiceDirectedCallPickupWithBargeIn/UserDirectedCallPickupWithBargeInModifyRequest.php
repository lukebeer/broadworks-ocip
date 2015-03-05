<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceDirectedCallPickupWithBargeIn; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user level data associated with Directed Call Pickup With Barge In.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserDirectedCallPickupWithBargeInModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $enableBargeInWarningTone=null,
             $enableAutomaticTargetSelection=null
    ) {
        $this->userId                         = new UserId($userId);
        $this->enableBargeInWarningTone       = $enableBargeInWarningTone;
        $this->enableAutomaticTargetSelection = $enableAutomaticTargetSelection;
        $this->args                           = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
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
