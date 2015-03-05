<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterStatisticsSamplingPeriodMinutes;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemCallCenterGetRequest14sp9.
 */
class SystemCallCenterGetResponse14sp9 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $defaultFromAddress,
             $statisticsSamplingPeriodMinutes
    ) {
        $this->defaultFromAddress              = new EmailAddress($defaultFromAddress);
        $this->statisticsSamplingPeriodMinutes = $statisticsSamplingPeriodMinutes;
        $this->args                            = func_get_args();
    }

    public function setDefaultFromAddress($defaultFromAddress)
    {
        $defaultFromAddress and $this->defaultFromAddress = new EmailAddress($defaultFromAddress);
    }

    public function getDefaultFromAddress()
    {
        return (!$this->defaultFromAddress) ?: $this->defaultFromAddress->value();
    }

    public function setStatisticsSamplingPeriodMinutes($statisticsSamplingPeriodMinutes)
    {
        $statisticsSamplingPeriodMinutes and $this->statisticsSamplingPeriodMinutes = new CallCenterStatisticsSamplingPeriodMinutes($statisticsSamplingPeriodMinutes);
    }

    public function getStatisticsSamplingPeriodMinutes()
    {
        return (!$this->statisticsSamplingPeriodMinutes) ?: $this->statisticsSamplingPeriodMinutes->value();
    }
}
