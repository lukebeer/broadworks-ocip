<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePushToTalk; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePushToTalk\PushToTalkOutgoingConnectionSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePushToTalk\PushToTalkAccessListSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Change the push to talk service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserPushToTalkModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                         = __CLASS__;
    protected $userId                       = null;
    protected $allowAutoAnswer              = null;
    protected $outgoingConnectionSelection  = null;
    protected $accessListSelection          = null;
    protected $selectedUserIdList           = null;

    public function __construct(
         $userId,
         $allowAutoAnswer = null,
         $outgoingConnectionSelection = null,
         $accessListSelection = null,
         ReplacementUserIdList $selectedUserIdList = null
    ) {
        $this->setUserId($userId);
        $this->setAllowAutoAnswer($allowAutoAnswer);
        $this->setOutgoingConnectionSelection($outgoingConnectionSelection);
        $this->setAccessListSelection($accessListSelection);
        $this->setSelectedUserIdList($selectedUserIdList);
    }

    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setAllowAutoAnswer(xs:boolean $allowAutoAnswer = null)
    {
    }

    public function getAllowAutoAnswer()
    {
        return (!$this->allowAutoAnswer) ?: $this->allowAutoAnswer->value();
    }

    public function setOutgoingConnectionSelection($outgoingConnectionSelection = null)
    {
        $this->outgoingConnectionSelection = ($outgoingConnectionSelection InstanceOf PushToTalkOutgoingConnectionSelection)
             ? $outgoingConnectionSelection
             : new PushToTalkOutgoingConnectionSelection($outgoingConnectionSelection);
    }

    public function getOutgoingConnectionSelection()
    {
        return (!$this->outgoingConnectionSelection) ?: $this->outgoingConnectionSelection->value();
    }

    public function setAccessListSelection($accessListSelection = null)
    {
        $this->accessListSelection = ($accessListSelection InstanceOf PushToTalkAccessListSelection)
             ? $accessListSelection
             : new PushToTalkAccessListSelection($accessListSelection);
    }

    public function getAccessListSelection()
    {
        return (!$this->accessListSelection) ?: $this->accessListSelection->value();
    }

    public function setSelectedUserIdList(ReplacementUserIdList $selectedUserIdList = null)
    {
    }

    public function getSelectedUserIdList()
    {
        return (!$this->selectedUserIdList) ?: $this->selectedUserIdList->value();
    }
}
