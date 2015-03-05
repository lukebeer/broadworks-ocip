<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessagingDistributionListId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessagingDistributionListDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementOutgoingDNorSIPURIList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a voice mail distribution list for a users voice message.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserVoiceMessagingUserModifyDistributionListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $listId,
             $description=null,
             ReplacementOutgoingDNorSIPURIList $phoneNumberList=null
    ) {
        $this->userId          = new UserId($userId);
        $this->listId          = $listId;
        $this->description     = $description;
        $this->phoneNumberList = $phoneNumberList;
        $this->args            = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setListId($listId)
    {
        $listId and $this->listId = new VoiceMessagingDistributionListId($listId);
    }

    public function getListId()
    {
        return (!$this->listId) ?: $this->listId->value();
    }

    public function setDescription($description)
    {
        $description and $this->description = new VoiceMessagingDistributionListDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setPhoneNumberList($phoneNumberList)
    {
        $phoneNumberList and $this->phoneNumberList = new ReplacementOutgoingDNorSIPURIList($phoneNumberList);
    }

    public function getPhoneNumberList()
    {
        return (!$this->phoneNumberList) ?: $this->phoneNumberList->value();
    }
}
