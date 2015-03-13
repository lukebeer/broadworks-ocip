<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingDistributionListId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get a voice mail distribution list for a users voice message.
 *         The response is either UserVoiceMessagingUserGetDistributionListResponse or ErrorResponse.
 */
class UserVoiceMessagingUserGetDistributionListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\UserVoiceMessagingUserGetDistributionListResponse';
    public    $name   = 'UserVoiceMessagingUserGetDistributionListRequest';
    protected $userId = null;
    protected $listId = null;

    public function __construct(
         $userId,
         $listId
    ) {
        $this->setUserId($userId);
        $this->setListId($listId);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\UserVoiceMessagingUserGetDistributionListResponse $response
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
        if (!$userId) return $this;
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
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setListId($listId = null)
    {
        if (!$listId) return $this;
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
        return $this->listId->getValue();
    }
}
