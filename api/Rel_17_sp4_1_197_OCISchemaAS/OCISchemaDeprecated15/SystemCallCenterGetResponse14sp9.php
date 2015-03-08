<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterStatisticsSamplingPeriodMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemCallCenterGetRequest14sp9.
 */
class SystemCallCenterGetResponse14sp9 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\SystemCallCenterGetResponse14sp9';
    public    $name                            = __CLASS__;
    protected $defaultFromAddress              = null;
    protected $statisticsSamplingPeriodMinutes = null;


    /**
     * Email Address
     */
    public function setDefaultFromAddress($defaultFromAddress = null)
    {
        $this->defaultFromAddress = ($defaultFromAddress InstanceOf EmailAddress)
             ? $defaultFromAddress
             : new EmailAddress($defaultFromAddress);
    }

    /**
     * Email Address
     */
    public function getDefaultFromAddress()
    {
        return (!$this->defaultFromAddress) ?: $this->defaultFromAddress->getValue();
    }

    /**
     * Call Center statistics sampling period.
     */
    public function setStatisticsSamplingPeriodMinutes($statisticsSamplingPeriodMinutes = null)
    {
        $this->statisticsSamplingPeriodMinutes = ($statisticsSamplingPeriodMinutes InstanceOf CallCenterStatisticsSamplingPeriodMinutes)
             ? $statisticsSamplingPeriodMinutes
             : new CallCenterStatisticsSamplingPeriodMinutes($statisticsSamplingPeriodMinutes);
    }

    /**
     * Call Center statistics sampling period.
     */
    public function getStatisticsSamplingPeriodMinutes()
    {
        return (!$this->statisticsSamplingPeriodMinutes) ?: $this->statisticsSamplingPeriodMinutes->getValue();
    }
}
