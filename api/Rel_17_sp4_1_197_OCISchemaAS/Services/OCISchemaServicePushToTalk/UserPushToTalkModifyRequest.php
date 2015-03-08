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
    public    $name                        = __CLASS__;
    protected $userId                      = null;
    protected $allowAutoAnswer             = null;
    protected $outgoingConnectionSelection = null;
    protected $accessListSelection         = null;
    protected $selectedUserIdList          = null;

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

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

    /**
     * 
     */
    public function setAllowAutoAnswer($allowAutoAnswer = null)
    {
        $this->allowAutoAnswer = (boolean) $allowAutoAnswer;
    }

    /**
     * 
     */
    public function getAllowAutoAnswer()
    {
        return (!$this->allowAutoAnswer) ?: $this->allowAutoAnswer->getValue();
    }

    /**
     * Push to talk outgoing connection type.
     */
    public function setOutgoingConnectionSelection($outgoingConnectionSelection = null)
    {
        $this->outgoingConnectionSelection = ($outgoingConnectionSelection InstanceOf PushToTalkOutgoingConnectionSelection)
             ? $outgoingConnectionSelection
             : new PushToTalkOutgoingConnectionSelection($outgoingConnectionSelection);
    }

    /**
     * Push to talk outgoing connection type.
     */
    public function getOutgoingConnectionSelection()
    {
        return (!$this->outgoingConnectionSelection) ?: $this->outgoingConnectionSelection->getValue();
    }

    /**
     * Push to talk access list.
     */
    public function setAccessListSelection($accessListSelection = null)
    {
        $this->accessListSelection = ($accessListSelection InstanceOf PushToTalkAccessListSelection)
             ? $accessListSelection
             : new PushToTalkAccessListSelection($accessListSelection);
    }

    /**
     * Push to talk access list.
     */
    public function getAccessListSelection()
    {
        return (!$this->accessListSelection) ?: $this->accessListSelection->getValue();
    }

    /**
     * A list of userIds that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function setSelectedUserIdList(ReplacementUserIdList $selectedUserIdList = null)
    {
        $this->selectedUserIdList = ReplacementUserIdList $selectedUserIdList;
    }

    /**
     * A list of userIds that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function getSelectedUserIdList()
    {
        return (!$this->selectedUserIdList) ?: $this->selectedUserIdList->getValue();
    }
}
