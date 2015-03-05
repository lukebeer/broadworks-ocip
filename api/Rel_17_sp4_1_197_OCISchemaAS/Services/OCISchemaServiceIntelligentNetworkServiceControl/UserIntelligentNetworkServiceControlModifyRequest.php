<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceIntelligentNetworkServiceControl; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user level data associated with Intelligent Network Service Control.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserIntelligentNetworkServiceControlModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $preAnswerActionsEnabled=null
    ) {
        $this->userId                  = new UserId($userId);
        $this->preAnswerActionsEnabled = $preAnswerActionsEnabled;
        $this->args                    = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setPreAnswerActionsEnabled($preAnswerActionsEnabled)
    {
        $preAnswerActionsEnabled and $this->preAnswerActionsEnabled = new xs:boolean($preAnswerActionsEnabled);
    }

    public function getPreAnswerActionsEnabled()
    {
        return (!$this->preAnswerActionsEnabled) ?: $this->preAnswerActionsEnabled->value();
    }
}
