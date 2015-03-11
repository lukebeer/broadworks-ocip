<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanTransferNumbers;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserOutgoingCallingPlanTransferNumbersGetRequest.
 */
class UserOutgoingCallingPlanTransferNumbersGetResponse extends ComplexType implements ComplexInterface
{
    public    $name              = 'UserOutgoingCallingPlanTransferNumbersGetResponse';
    protected $useCustomSettings = null;
    protected $userNumbers       = null;

    /**
     * @return UserOutgoingCallingPlanTransferNumbersGetResponse
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
    public function setUserNumbers(OutgoingCallingPlanTransferNumbers $userNumbers = null)
    {
        if (!$userNumbers) return $this;
        $this->userNumbers = $userNumbers;
        $this->userNumbers->setName('userNumbers');
        return $this;
    }

    /**
     * 
     * @return OutgoingCallingPlanTransferNumbers
     */
    public function getUserNumbers()
    {
        return $this->userNumbers;
    }
}
