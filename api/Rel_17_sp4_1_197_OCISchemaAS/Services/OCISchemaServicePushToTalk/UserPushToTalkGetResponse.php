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
    public    $name                        = 'UserPushToTalkGetResponse';
    protected $allowAutoAnswer             = null;
    protected $outgoingConnectionSelection = null;
    protected $accessListSelection         = null;
    protected $selectedUserTable           = null;

    /**
     * @return UserPushToTalkGetResponse
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
        if (!$allowAutoAnswer) return $this;
        $this->allowAutoAnswer = new PrimitiveType($allowAutoAnswer);
        $this->allowAutoAnswer->setName('allowAutoAnswer');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowAutoAnswer()
    {
        return $this->allowAutoAnswer->getValue();
    }

    /**
     * 
     */
    public function setOutgoingConnectionSelection($outgoingConnectionSelection = null)
    {
        if (!$outgoingConnectionSelection) return $this;
        $this->outgoingConnectionSelection = ($outgoingConnectionSelection InstanceOf PushToTalkOutgoingConnectionSelection)
             ? $outgoingConnectionSelection
             : new PushToTalkOutgoingConnectionSelection($outgoingConnectionSelection);
        $this->outgoingConnectionSelection->setName('outgoingConnectionSelection');
        return $this;
    }

    /**
     * 
     * @return PushToTalkOutgoingConnectionSelection
     */
    public function getOutgoingConnectionSelection()
    {
        return $this->outgoingConnectionSelection->getValue();
    }

    /**
     * 
     */
    public function setAccessListSelection($accessListSelection = null)
    {
        if (!$accessListSelection) return $this;
        $this->accessListSelection = ($accessListSelection InstanceOf PushToTalkAccessListSelection)
             ? $accessListSelection
             : new PushToTalkAccessListSelection($accessListSelection);
        $this->accessListSelection->setName('accessListSelection');
        return $this;
    }

    /**
     * 
     * @return PushToTalkAccessListSelection
     */
    public function getAccessListSelection()
    {
        return $this->accessListSelection->getValue();
    }

    /**
     * 
     */
    public function setSelectedUserTable(core:OCITable $selectedUserTable = null)
    {
        if (!$selectedUserTable) return $this;
        $this->selectedUserTable->setName('selectedUserTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getSelectedUserTable()
    {
        return $this->selectedUserTable->getValue();
    }
}
