<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\LogoutRequestReason;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * LogoutRequest is sent when an OCI user logs out or when connection is lost.
 *         This command can be sent either to the server, or to the client from OCS.
 *         Response is either SuccessResponse or ErrorResponse.
 */
class LogoutRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'LogoutRequest';
    protected $userId;
    protected $reason;

    public function __construct(
         $userId = '',
         $reason = null
    ) {
        $this->setUserId($userId);
        $this->setReason($reason);
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
    public function setReason($reason = null)
    {
        $this->reason = ($reason InstanceOf LogoutRequestReason)
             ? $reason
             : new LogoutRequestReason($reason);
        $this->reason->setElementName('reason');
        return $this;
    }

    /**
     * 
     * @return LogoutRequestReason $reason
     */
    public function getReason()
    {
        return ($this->reason)
            ? $this->reason->getElementValue()
            : null;
    }
}
