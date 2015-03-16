<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePushToTalk; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePushToTalk\PushToTalkOutgoingConnectionSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePushToTalk\PushToTalkAccessListSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Change the push to talk service settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserPushToTalkModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserPushToTalkModifyRequest';
    protected $userId;
    protected $allowAutoAnswer;
    protected $outgoingConnectionSelection;
    protected $accessListSelection;
    protected $selectedUserIdList;

    public function __construct(
         $userId = '',
         $allowAutoAnswer = null,
         $outgoingConnectionSelection = null,
         $accessListSelection = null,
         $selectedUserIdList = null
    ) {
        $this->setUserId($userId);
        $this->setAllowAutoAnswer($allowAutoAnswer);
        $this->setOutgoingConnectionSelection($outgoingConnectionSelection);
        $this->setAccessListSelection($accessListSelection);
        $this->setSelectedUserIdList($selectedUserIdList);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowAutoAnswer($allowAutoAnswer = null)
    {
        $this->allowAutoAnswer = new PrimitiveType($allowAutoAnswer);
        $this->allowAutoAnswer->setElementName('allowAutoAnswer');
        return $this;
    }

    /**
     * 
     * @return boolean $allowAutoAnswer
     */
    public function getAllowAutoAnswer()
    {
        return ($this->allowAutoAnswer)
            ? $this->allowAutoAnswer->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOutgoingConnectionSelection($outgoingConnectionSelection = null)
    {
        $this->outgoingConnectionSelection = ($outgoingConnectionSelection InstanceOf PushToTalkOutgoingConnectionSelection)
             ? $outgoingConnectionSelection
             : new PushToTalkOutgoingConnectionSelection($outgoingConnectionSelection);
        $this->outgoingConnectionSelection->setElementName('outgoingConnectionSelection');
        return $this;
    }

    /**
     * 
     * @return PushToTalkOutgoingConnectionSelection $outgoingConnectionSelection
     */
    public function getOutgoingConnectionSelection()
    {
        return ($this->outgoingConnectionSelection)
            ? $this->outgoingConnectionSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAccessListSelection($accessListSelection = null)
    {
        $this->accessListSelection = ($accessListSelection InstanceOf PushToTalkAccessListSelection)
             ? $accessListSelection
             : new PushToTalkAccessListSelection($accessListSelection);
        $this->accessListSelection->setElementName('accessListSelection');
        return $this;
    }

    /**
     * 
     * @return PushToTalkAccessListSelection $accessListSelection
     */
    public function getAccessListSelection()
    {
        return ($this->accessListSelection)
            ? $this->accessListSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSelectedUserIdList(ReplacementUserIdList $selectedUserIdList = null)
    {
        $this->selectedUserIdList = ($selectedUserIdList InstanceOf ReplacementUserIdList)
             ? $selectedUserIdList
             : new ReplacementUserIdList($selectedUserIdList);
        $this->selectedUserIdList->setElementName('selectedUserIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList $selectedUserIdList
     */
    public function getSelectedUserIdList()
    {
        return $this->selectedUserIdList;
    }
}
