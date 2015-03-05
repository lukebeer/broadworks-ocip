<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingCallingPlanTransferNumbers;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserOutgoingCallingPlanTransferNumbersGetRequest.
 */
class UserOutgoingCallingPlanTransferNumbersGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $useCustomSettings,
             $userNumbers
    ) {
        $this->useCustomSettings = $useCustomSettings;
        $this->userNumbers       = $userNumbers;
        $this->args              = func_get_args();
    }

    public function setUseCustomSettings($useCustomSettings)
    {
        $useCustomSettings and $this->useCustomSettings = new xs:boolean($useCustomSettings);
    }

    public function getUseCustomSettings()
    {
        return (!$this->useCustomSettings) ?: $this->useCustomSettings->value();
    }

    public function setUserNumbers($userNumbers)
    {
        $userNumbers and $this->userNumbers = new OutgoingCallingPlanTransferNumbers($userNumbers);
    }

    public function getUserNumbers()
    {
        return (!$this->userNumbers) ?: $this->userNumbers->value();
    }
}
