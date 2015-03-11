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
    public    $name      = 'UserOutgoingCallingPlanAuthorizationCodeAddListRequest';
    protected $userId    = null;
    protected $codeEntry = null;

    public function __construct(
         $userId,
         OutgoingCallingPlanAuthorizationCodeEntry $codeEntry
    ) {
        $this->setUserId($userId);
        $this->setCodeEntry($codeEntry);
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
    public function setCodeEntry(OutgoingCallingPlanAuthorizationCodeEntry $codeEntry = null)
    {
        if (!$codeEntry) return $this;
        $this->codeEntry = $codeEntry;
        $this->codeEntry->setName('codeEntry');
        return $this;
    }

    /**
     * 
     * @return OutgoingCallingPlanAuthorizationCodeEntry
     */
    public function getCodeEntry()
    {
        return $this->codeEntry;
    }
}
