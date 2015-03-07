<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingDistributionListDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingDistributionListId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementOutgoingDNorSIPURIList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a voice mail distribution list for a users voice message.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserVoiceMessagingUserModifyDistributionListRequest extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $userId           = null;
    protected $listId           = null;
    protected $description      = null;
    protected $phoneNumberList  = null;

    public function __construct(
         $userId,
         $listId,
         $description = null,
         ReplacementOutgoingDNorSIPURIList $phoneNumberList = null
    ) {
        $this->setUserId($userId);
        $this->setListId($listId);
        $this->setDescription($description);
        $this->setPhoneNumberList($phoneNumberList);
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

    public function setListId($listId = null)
    {
        $this->listId = ($listId InstanceOf VoiceMessagingDistributionListId)
             ? $listId
             : new VoiceMessagingDistributionListId($listId);
    }

    public function getListId()
    {
        return (!$this->listId) ?: $this->listId->value();
    }

    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf VoiceMessagingDistributionListDescription)
             ? $description
             : new VoiceMessagingDistributionListDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setPhoneNumberList(ReplacementOutgoingDNorSIPURIList $phoneNumberList = null)
    {
    }

    public function getPhoneNumberList()
    {
        return (!$this->phoneNumberList) ?: $this->phoneNumberList->value();
    }
}
