<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePushToTalk; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePushToTalk\PushToTalkOutgoingConnectionSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePushToTalk\PushToTalkAccessListSelection;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserPushToTalkGetRequest.  It returns the service settings and a
 *         5 column selected user table with the following column headings:
 *           "User Id", "Last Name", "First Name", "Hiragana Last Name" and "Hiragana First Name".
 */
class UserPushToTalkGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                        = __CLASS__;
    protected $allowAutoAnswer             = null;
    protected $outgoingConnectionSelection = null;
    protected $accessListSelection         = null;
    protected $selectedUserTable           = null;


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
     * 
     */
    public function setSelectedUserTable(core:OCITable $selectedUserTable = null)
    {
        $this->selectedUserTable =  $selectedUserTable;
    }

    /**
     * 
     */
    public function getSelectedUserTable()
    {
        return (!$this->selectedUserTable) ?: $this->selectedUserTable->getValue();
    }
}
