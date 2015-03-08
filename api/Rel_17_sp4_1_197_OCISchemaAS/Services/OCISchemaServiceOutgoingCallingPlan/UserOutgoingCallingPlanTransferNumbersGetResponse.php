<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanTransferNumbers;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserOutgoingCallingPlanTransferNumbersGetRequest.
 */
class UserOutgoingCallingPlanTransferNumbersGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan\UserOutgoingCallingPlanTransferNumbersGetResponse';
    public    $name              = __CLASS__;
    protected $useCustomSettings = null;
    protected $userNumbers       = null;


    /**
     * 
     */
    public function setUseCustomSettings($useCustomSettings = null)
    {
        $this->useCustomSettings = (boolean) $useCustomSettings;
    }

    /**
     * 
     */
    public function getUseCustomSettings()
    {
        return (!$this->useCustomSettings) ?: $this->useCustomSettings->getValue();
    }

    /**
     * Outgoing Calling Plan transfer numbers.
     */
    public function setUserNumbers(OutgoingCallingPlanTransferNumbers $userNumbers = null)
    {
        $this->userNumbers = OutgoingCallingPlanTransferNumbers $userNumbers;
    }

    /**
     * Outgoing Calling Plan transfer numbers.
     */
    public function getUserNumbers()
    {
        return (!$this->userNumbers) ?: $this->userNumbers->getValue();
    }
}