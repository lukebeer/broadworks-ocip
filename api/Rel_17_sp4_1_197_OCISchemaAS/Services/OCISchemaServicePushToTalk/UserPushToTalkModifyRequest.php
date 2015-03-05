<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePushToTalk; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PushToTalkOutgoingConnectionSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PushToTalkAccessListSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Change the push to talk service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserPushToTalkModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $allowAutoAnswer=null,
             $outgoingConnectionSelection=null,
             $accessListSelection=null,
             ReplacementUserIdList $selectedUserIdList=null
    ) {
        $this->userId                      = new UserId($userId);
        $this->allowAutoAnswer             = $allowAutoAnswer;
        $this->outgoingConnectionSelection = $outgoingConnectionSelection;
        $this->accessListSelection         = $accessListSelection;
        $this->selectedUserIdList          = $selectedUserIdList;
        $this->args                        = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setAllowAutoAnswer($allowAutoAnswer)
    {
        $allowAutoAnswer and $this->allowAutoAnswer = new xs:boolean($allowAutoAnswer);
    }

    public function getAllowAutoAnswer()
    {
        return (!$this->allowAutoAnswer) ?: $this->allowAutoAnswer->value();
    }

    public function setOutgoingConnectionSelection($outgoingConnectionSelection)
    {
        $outgoingConnectionSelection and $this->outgoingConnectionSelection = new PushToTalkOutgoingConnectionSelection($outgoingConnectionSelection);
    }

    public function getOutgoingConnectionSelection()
    {
        return (!$this->outgoingConnectionSelection) ?: $this->outgoingConnectionSelection->value();
    }

    public function setAccessListSelection($accessListSelection)
    {
        $accessListSelection and $this->accessListSelection = new PushToTalkAccessListSelection($accessListSelection);
    }

    public function getAccessListSelection()
    {
        return (!$this->accessListSelection) ?: $this->accessListSelection->value();
    }

    public function setSelectedUserIdList($selectedUserIdList)
    {
        $selectedUserIdList and $this->selectedUserIdList = new ReplacementUserIdList($selectedUserIdList);
    }

    public function getSelectedUserIdList()
    {
        return (!$this->selectedUserIdList) ?: $this->selectedUserIdList->value();
    }
}
