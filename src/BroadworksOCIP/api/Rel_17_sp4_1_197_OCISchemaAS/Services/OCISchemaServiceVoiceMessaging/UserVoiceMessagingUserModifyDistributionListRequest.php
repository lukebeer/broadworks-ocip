<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingDistributionListDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingDistributionListId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementOutgoingDNorSIPURIList;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify a voice mail distribution list for a users voice message.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserVoiceMessagingUserModifyDistributionListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserVoiceMessagingUserModifyDistributionListRequest';
    protected $userId;
    protected $listId;
    protected $description;
    protected $phoneNumberList;

    public function __construct(
         $userId = '',
         $listId = '',
         $description = null,
         $phoneNumberList = null
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
    public function setListId($listId = null)
    {
        $this->listId = ($listId InstanceOf VoiceMessagingDistributionListId)
             ? $listId
             : new VoiceMessagingDistributionListId($listId);
        $this->listId->setElementName('listId');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingDistributionListId $listId
     */
    public function getListId()
    {
        return ($this->listId)
            ? $this->listId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf VoiceMessagingDistributionListDescription)
             ? $description
             : new VoiceMessagingDistributionListDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingDistributionListDescription $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPhoneNumberList(ReplacementOutgoingDNorSIPURIList $phoneNumberList = null)
    {
        $this->phoneNumberList = ($phoneNumberList InstanceOf ReplacementOutgoingDNorSIPURIList)
             ? $phoneNumberList
             : new ReplacementOutgoingDNorSIPURIList($phoneNumberList);
        $this->phoneNumberList->setElementName('phoneNumberList');
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
