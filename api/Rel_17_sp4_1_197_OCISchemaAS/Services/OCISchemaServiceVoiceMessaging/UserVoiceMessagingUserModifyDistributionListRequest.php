<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingDistributionListDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingDistributionListId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementOutgoingDNorSIPURIList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
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
    public    $name = 'UserVoiceMessagingUserModifyDistributionListRequest';
    protected $userId;
    protected $listId;
    protected $description;
    protected $phoneNumberList;

    public function __construct(
         $userId = '',
         $listId = '',
         $description = null,
         ReplacementOutgoingDNorSIPURIList $phoneNumberList = null
    ) {
        $this->setUserId($userId);
        $this->setListId($listId);
        $this->setDescription($description);
        $this->setPhoneNumberList($phoneNumberList);
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
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId) ? $this->userId->getValue() : null;
    }

    /**
     * 
     */
    public function setListId($listId = null)
    {
        $this->listId = ($listId InstanceOf VoiceMessagingDistributionListId)
             ? $listId
             : new VoiceMessagingDistributionListId($listId);
        $this->listId->setName('listId');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingDistributionListId $listId
     */
    public function getListId()
    {
        return ($this->listId) ? $this->listId->getValue() : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf VoiceMessagingDistributionListDescription)
             ? $description
             : new VoiceMessagingDistributionListDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingDistributionListDescription $description
     */
    public function getDescription()
    {
        return ($this->description) ? $this->description->getValue() : null;
    }

    /**
     * 
     */
    public function setPhoneNumberList(ReplacementOutgoingDNorSIPURIList $phoneNumberList = null)
    {
        $this->phoneNumberList = ($phoneNumberList InstanceOf ReplacementOutgoingDNorSIPURIList)
             ? $phoneNumberList
             : new ReplacementOutgoingDNorSIPURIList($phoneNumberList);
        $this->phoneNumberList->setName('phoneNumberList');
        return $this;
    }

    /**
     * 
     * @return ReplacementOutgoingDNorSIPURIList $phoneNumberList
     */
    public function getPhoneNumberList()
    {
        return $this->phoneNumberList;
    }
}
