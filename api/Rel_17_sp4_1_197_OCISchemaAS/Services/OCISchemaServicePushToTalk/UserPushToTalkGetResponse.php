<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePushToTalk; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PushToTalkOutgoingConnectionSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PushToTalkAccessListSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserPushToTalkGetRequest.  It returns the service settings and a
 *         5 column selected user table with the following column headings:
 *           "User Id", "Last Name", "First Name", "Hiragana Last Name" and "Hiragana First Name".
 */
class UserPushToTalkGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $allowAutoAnswer,
             $outgoingConnectionSelection,
             $accessListSelection,
             $selectedUserTable
    ) {
        $this->allowAutoAnswer             = $allowAutoAnswer;
        $this->outgoingConnectionSelection = $outgoingConnectionSelection;
        $this->accessListSelection         = $accessListSelection;
        $this->selectedUserTable           = $selectedUserTable;
        $this->args                        = func_get_args();
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

    public function setSelectedUserTable($selectedUserTable)
    {
        $selectedUserTable and $this->selectedUserTable = new core:OCITable($selectedUserTable);
    }

    public function getSelectedUserTable()
    {
        return (!$this->selectedUserTable) ?: $this->selectedUserTable->value();
    }
}
