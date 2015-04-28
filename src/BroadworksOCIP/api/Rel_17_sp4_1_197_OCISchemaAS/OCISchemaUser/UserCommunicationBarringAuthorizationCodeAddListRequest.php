<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringAuthorizationCodeEntry;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Add a list of Communication Barring Authorization codes to a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCommunicationBarringAuthorizationCodeAddListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCommunicationBarringAuthorizationCodeAddListRequest';
    protected $userId;
    protected $code;

    public function __construct(
         $userId = '',
         $code = null
    ) {
        $this->setUserId($userId);
        $this->setCode($code);
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
    public function setCode(CommunicationBarringAuthorizationCodeEntry $code = null)
    {
        $this->code = ($code InstanceOf CommunicationBarringAuthorizationCodeEntry)
             ? $code
             : new CommunicationBarringAuthorizationCodeEntry($code);
        $this->code->setElementName('code');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringAuthorizationCodeEntry $code
     */
    public function getCode()
    {
        return $this->code;
    }
}
