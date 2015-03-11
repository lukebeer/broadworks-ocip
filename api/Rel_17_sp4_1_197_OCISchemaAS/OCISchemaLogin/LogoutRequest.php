<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\LogoutRequestReason;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * LogoutRequest is sent when an OCI user logs out or when connection is lost.
 *         This command can be sent either to the server, or to the client from OCS.
 *         Response is either SuccessResponse or ErrorResponse.
 */
class LogoutRequest extends ComplexType implements ComplexInterface
{
    public    $name   = 'LogoutRequest';
    protected $userId = null;
    protected $reason = null;

    public function __construct(
         $userId,
         $reason = null
    ) {
        $this->setUserId($userId);
        $this->setReason($reason);
    }

    /**
     * @return 
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

    /**
     * 
     */
    public function setReason($reason = null)
    {
        if (!$reason) return $this;
        $this->reason = ($reason InstanceOf LogoutRequestReason)
             ? $reason
             : new LogoutRequestReason($reason);
        $this->reason->setName('reason');
        return $this;
    }

    /**
     * 
     * @return LogoutRequestReason
     */
    public function getReason()
    {
        return $this->reason->getValue();
    }
}
