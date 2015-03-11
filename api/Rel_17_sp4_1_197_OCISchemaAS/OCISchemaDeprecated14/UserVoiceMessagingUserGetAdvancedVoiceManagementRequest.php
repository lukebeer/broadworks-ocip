<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserVoiceMessagingUserGetAdvancedVoiceManagementResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get the user's voice messaging advanced voice management service setting.
 *         The response is either a UserVoiceMessagingUserGetAdvancedVoiceManagementResponse or an ErrorResponse.
 *         Replaced By: UserVoiceMessagingUserGetAdvancedVoiceManagementRequest14sp3
 */
class UserVoiceMessagingUserGetAdvancedVoiceManagementRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserVoiceMessagingUserGetAdvancedVoiceManagementResponse';
    public    $name   = 'UserVoiceMessagingUserGetAdvancedVoiceManagementRequest';
    protected $userId = null;

    public function __construct(
         $userId
    ) {
        $this->setUserId($userId);
    }

    /**
     * @return UserVoiceMessagingUserGetAdvancedVoiceManagementResponse
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
     * @return UserId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }
}
