<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanTransferNumbersModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the transfer numbers for a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserOutgoingCallingPlanTransferNumbersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'UserOutgoingCallingPlanTransferNumbersModifyRequest';
    protected $userId;
    protected $useCustomSettings;
    protected $userNumbers;

    public function __construct(
         $userId = '',
         $useCustomSettings = null,
         $userNumbers = null
    ) {
        $this->setUserId($userId);
        $this->setUseCustomSettings($useCustomSettings);
        $this->setUserNumbers($userNumbers);
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
    public function setUseCustomSettings($useCustomSettings = null)
    {
        $this->useCustomSettings = new PrimitiveType($useCustomSettings);
        $this->useCustomSettings->setName('useCustomSettings');
        return $this;
    }

    /**
     * 
     * @return boolean $useCustomSettings
     */
    public function getUseCustomSettings()
    {
        return ($this->useCustomSettings) ? $this->useCustomSettings->getValue() : null;
    }

    /**
     * 
     */
    public function setUserNumbers(OutgoingCallingPlanTransferNumbersModify $userNumbers = null)
    {
        $this->userNumbers = ($userNumbers InstanceOf OutgoingCallingPlanTransferNumbersModify)
             ? $userNumbers
             : new OutgoingCallingPlanTransferNumbersModify($userNumbers);
        $this->userNumbers->setName('userNumbers');
        return $this;
    }

    /**
     * 
     * @return OutgoingCallingPlanTransferNumbersModify $userNumbers
     */
    public function getUserNumbers()
    {
        return $this->userNumbers;
    }
}
