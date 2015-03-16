<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePushToTalk; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePushToTalk\PushToTalkOutgoingConnectionSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePushToTalk\PushToTalkAccessListSelection;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserPushToTalkGetRequest.  It returns the service settings and a
 *         5 column selected user table with the following column headings:
 *           "User Id", "Last Name", "First Name", "Hiragana Last Name" and "Hiragana First Name".
 */
class UserPushToTalkGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserPushToTalkGetResponse';
    protected $allowAutoAnswer;
    protected $outgoingConnectionSelection;
    protected $accessListSelection;
    protected $selectedUserTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePushToTalk\UserPushToTalkGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
    public function setSelectedUserTable(TableType $selectedUserTable = null)
    {
        $this->selectedUserTable = $selectedUserTable;
        $this->selectedUserTable->setElementName('selectedUserTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getSelectedUserTable()
    {
        return $this->selectedUserTable;
    }
}
