<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanDigitPatternRedirectingPermissions;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the redirecting permissions for digit patterns for a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserOutgoingCallingPlanDigitPlanRedirectingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name              = 'UserOutgoingCallingPlanDigitPlanRedirectingModifyRequest';
    protected $userId            = null;
    protected $useCustomSettings = null;
    protected $userPermissions   = null;

    public function __construct(
         $userId,
         $useCustomSettings = null,
         OutgoingCallingPlanDigitPatternRedirectingPermissions $userPermissions = null
    ) {
        $this->setUserId($userId);
        $this->setUseCustomSettings($useCustomSettings);
        $this->setUserPermissions($userPermissions);
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
        if (!$userId) return $this;
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
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setUseCustomSettings($useCustomSettings = null)
    {
        if (!$useCustomSettings) return $this;
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
        return $this->useCustomSettings->getValue();
    }

    /**
     * 
     */
    public function setUserPermissions(OutgoingCallingPlanDigitPatternRedirectingPermissions $userPermissions = null)
    {
        if (!$userPermissions) return $this;
        $this->userPermissions = $userPermissions;
        $this->userPermissions->setName('userPermissions');
        return $this;
    }

    /**
     * 
     * @return OutgoingCallingPlanDigitPatternRedirectingPermissions $userPermissions
     */
    public function getUserPermissions()
    {
        return $this->userPermissions;
    }
}
