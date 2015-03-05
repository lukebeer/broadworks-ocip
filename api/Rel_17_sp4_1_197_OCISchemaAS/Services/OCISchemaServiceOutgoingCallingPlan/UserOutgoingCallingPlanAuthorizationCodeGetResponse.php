<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserOutgoingCallingPlanAuthorizationCodeGetRequest.
 */
class UserOutgoingCallingPlanAuthorizationCodeGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $useCustomSettings
    ) {
        $this->useCustomSettings = $useCustomSettings;
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
}
