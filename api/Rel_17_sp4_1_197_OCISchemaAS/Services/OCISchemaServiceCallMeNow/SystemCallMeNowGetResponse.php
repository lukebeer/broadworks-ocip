<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallMeNow; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallMeNowPasscodeLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallMeNowPasscodeTimeoutSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemCallMeNowGetRequest.
 */
class SystemCallMeNowGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $passcodeLength,
             $passcodeTimeoutSeconds
    ) {
        $this->passcodeLength         = $passcodeLength;
        $this->passcodeTimeoutSeconds = $passcodeTimeoutSeconds;
        $this->args                   = func_get_args();
    }

    public function setPasscodeLength($passcodeLength)
    {
        $passcodeLength and $this->passcodeLength = new CallMeNowPasscodeLength($passcodeLength);
    }

    public function getPasscodeLength()
    {
        return (!$this->passcodeLength) ?: $this->passcodeLength->value();
    }

    public function setPasscodeTimeoutSeconds($passcodeTimeoutSeconds)
    {
        $passcodeTimeoutSeconds and $this->passcodeTimeoutSeconds = new CallMeNowPasscodeTimeoutSeconds($passcodeTimeoutSeconds);
    }

    public function getPasscodeTimeoutSeconds()
    {
        return (!$this->passcodeTimeoutSeconds) ?: $this->passcodeTimeoutSeconds->value();
    }
}
