<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Assign a bridge administrator to be a user's delegates.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingModifyBridgeDelegatesRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'UserInstantConferencingModifyBridgeDelegatesRequest';
    protected $userId;
    protected $bridgeServiceUserId;
    protected $bridgeDelegatesUserIdList;

    public function __construct(
         $userId = '',
         $bridgeServiceUserId = '',
         ReplacementUserIdList $bridgeDelegatesUserIdList = null
    ) {
        $this->setUserId($userId);
        $this->setBridgeServiceUserId($bridgeServiceUserId);
        $this->setBridgeDelegatesUserIdList($bridgeDelegatesUserIdList);
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
    public function setBridgeServiceUserId($bridgeServiceUserId = null)
    {
        $this->bridgeServiceUserId = ($bridgeServiceUserId InstanceOf UserId)
             ? $bridgeServiceUserId
             : new UserId($bridgeServiceUserId);
        $this->bridgeServiceUserId->setName('bridgeServiceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $bridgeServiceUserId
     */
    public function getBridgeServiceUserId()
    {
        return ($this->bridgeServiceUserId) ? $this->bridgeServiceUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setBridgeDelegatesUserIdList(ReplacementUserIdList $bridgeDelegatesUserIdList = null)
    {
        $this->bridgeDelegatesUserIdList = ($bridgeDelegatesUserIdList InstanceOf ReplacementUserIdList)
             ? $bridgeDelegatesUserIdList
             : new ReplacementUserIdList($bridgeDelegatesUserIdList);
        $this->bridgeDelegatesUserIdList->setName('bridgeDelegatesUserIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList $bridgeDelegatesUserIdList
     */
    public function getBridgeDelegatesUserIdList()
    {
        return $this->bridgeDelegatesUserIdList;
    }
}
