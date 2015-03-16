<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user id of a real or virtual user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserModifyUserIdRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'UserModifyUserIdRequest';
    protected $userId;
    protected $newUserId;

    public function __construct(
         $userId = '',
         $newUserId = ''
    ) {
        $this->setUserId($userId);
        $this->setNewUserId($newUserId);
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
    public function setNewUserId($newUserId = null)
    {
        $this->newUserId = ($newUserId InstanceOf UserId)
             ? $newUserId
             : new UserId($newUserId);
        $this->newUserId->setName('newUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $newUserId
     */
    public function getNewUserId()
    {
        return ($this->newUserId) ? $this->newUserId->getValue() : null;
    }
}
