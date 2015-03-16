<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAuthentication; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPAuthenticationUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user's authentication service information.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserAuthenticationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'UserAuthenticationModifyRequest';
    protected $userId;
    protected $userName;

    public function __construct(
         $userId = '',
         $userName = null
    ) {
        $this->setUserId($userId);
        $this->setUserName($userName);
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
    public function setUserName($userName = null)
    {
        $this->userName = ($userName InstanceOf SIPAuthenticationUserName)
             ? $userName
             : new SIPAuthenticationUserName($userName);
        $this->userName->setName('userName');
        return $this;
    }

    /**
     * 
     * @return SIPAuthenticationUserName $userName
     */
    public function getUserName()
    {
        return ($this->userName) ? $this->userName->getValue() : null;
    }
}
