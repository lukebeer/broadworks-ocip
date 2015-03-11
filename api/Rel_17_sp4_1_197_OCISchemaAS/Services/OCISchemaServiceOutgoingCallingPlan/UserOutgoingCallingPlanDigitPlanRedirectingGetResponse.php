<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanDigitPatternRedirectingPermissions;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserOutgoingCallingPlanDigitPlanRedirectingGetRequest.
 */
class UserOutgoingCallingPlanDigitPlanRedirectingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name              = 'UserOutgoingCallingPlanDigitPlanRedirectingGetResponse';
    protected $useCustomSettings = null;
    protected $userPermissions   = null;

    /**
     * @return UserOutgoingCallingPlanDigitPlanRedirectingGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
     * @return xs:boolean
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
     * @return OutgoingCallingPlanDigitPatternRedirectingPermissions
     */
    public function getUserPermissions()
    {
        return $this->userPermissions;
    }
}
