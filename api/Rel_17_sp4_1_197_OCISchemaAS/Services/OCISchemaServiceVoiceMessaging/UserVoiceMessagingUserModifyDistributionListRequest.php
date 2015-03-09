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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging\UserVoiceMessagingUserModifyDistributionListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a voice mail distribution list for a users voice message.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserVoiceMessagingUserModifyDistributionListRequest extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $userId          = null;
    protected $listId          = null;
    protected $description     = null;
    protected $phoneNumberList = null;

    public function __construct(
         $userId,
         $listId,
         $description = null,
          $phoneNumberList = null
    ) {
        $this->setUserId($userId);
        $this->setListId($listId);
        $this->setDescription($description);
        $this->setPhoneNumberList($phoneNumberList);
    }

    /**
     * @return UserVoiceMessagingUserModifyDistributionListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
     * Distribution List Id.
     */
    public function setListId($listId = null)
    {
        $this->listId = ($listId InstanceOf VoiceMessagingDistributionListId)
             ? $listId
             : new VoiceMessagingDistributionListId($listId);
    }

    /**
     * Distribution List Id.
     */
    public function getListId()
    {
        return (!$this->listId) ?: $this->listId->getValue();
    }

    /**
     * Distribution List Description.
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf VoiceMessagingDistributionListDescription)
             ? $description
             : new VoiceMessagingDistributionListDescription($description);
    }

    /**
     * Distribution List Description.
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
    }

    /**
     * A list of phone numbers or sipuris that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function setPhoneNumberList(ReplacementOutgoingDNorSIPURIList $phoneNumberList = null)
    {
        $this->phoneNumberList =  $phoneNumberList;
    }

    /**
     * A list of phone numbers or sipuris that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function getPhoneNumberList()
    {
        return (!$this->phoneNumberList) ?: $this->phoneNumberList->getValue();
    }
}
