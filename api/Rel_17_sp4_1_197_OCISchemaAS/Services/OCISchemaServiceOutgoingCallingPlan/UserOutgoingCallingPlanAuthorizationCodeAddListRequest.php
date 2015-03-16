<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanAuthorizationCodeEntry;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a list of authorization codes to a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserOutgoingCallingPlanAuthorizationCodeAddListRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'UserOutgoingCallingPlanAuthorizationCodeAddListRequest';
    protected $userId;
    protected $codeEntry;

    public function __construct(
         $userId = '',
         OutgoingCallingPlanAuthorizationCodeEntry $codeEntry = ''
    ) {
        $this->setUserId($userId);
        $this->setCodeEntry($codeEntry);
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
    public function setCodeEntry(OutgoingCallingPlanAuthorizationCodeEntry $codeEntry = null)
    {
        $this->codeEntry = ($codeEntry InstanceOf OutgoingCallingPlanAuthorizationCodeEntry)
             ? $codeEntry
             : new OutgoingCallingPlanAuthorizationCodeEntry($codeEntry);
        $this->codeEntry->setName('codeEntry');
        return $this;
    }

    /**
     * 
     * @return OutgoingCallingPlanAuthorizationCodeEntry $codeEntry
     */
    public function getCodeEntry()
    {
        return $this->codeEntry;
    }
}
