<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingCallingPlanAuthorizationCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Delete a list of authorization codes from a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserOutgoingCallingPlanAuthorizationCodeDeleteListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserOutgoingCallingPlanAuthorizationCodeDeleteListRequest';
    protected $userId;
    protected $code;

    public function __construct(
         $userId = '',
         $code = ''
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
    public function setCode($code = null)
    {
        $this->code = ($code InstanceOf OutgoingCallingPlanAuthorizationCode)
             ? $code
             : new OutgoingCallingPlanAuthorizationCode($code);
        $this->code->setElementName('code');
        return $this;
    }

    /**
     * 
     * @return OutgoingCallingPlanAuthorizationCode $code
     */
    public function getCode()
    {
        return ($this->code)
            ? $this->code->getElementValue()
            : null;
    }
}
