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
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemCallCenterGetRequest14sp9.
 */
class SystemCallCenterGetResponse14sp9 extends ComplexType implements ComplexInterface
{
    public    $name                            = 'SystemCallCenterGetResponse14sp9';
    protected $defaultFromAddress              = null;
    protected $statisticsSamplingPeriodMinutes = null;

    /**
     * @return SystemCallCenterGetResponse14sp9
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDefaultFromAddress($defaultFromAddress = null)
    {
        if (!$defaultFromAddress) return $this;
        $this->defaultFromAddress = ($defaultFromAddress InstanceOf EmailAddress)
             ? $defaultFromAddress
             : new EmailAddress($defaultFromAddress);
        $this->defaultFromAddress->setName('defaultFromAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress
     */
    public function getDefaultFromAddress()
    {
        return $this->defaultFromAddress->getValue();
    }

    /**
     * 
     */
    public function setStatisticsSamplingPeriodMinutes($statisticsSamplingPeriodMinutes = null)
    {
        if (!$statisticsSamplingPeriodMinutes) return $this;
        $this->statisticsSamplingPeriodMinutes = ($statisticsSamplingPeriodMinutes InstanceOf CallCenterStatisticsSamplingPeriodMinutes)
             ? $statisticsSamplingPeriodMinutes
             : new CallCenterStatisticsSamplingPeriodMinutes($statisticsSamplingPeriodMinutes);
        $this->statisticsSamplingPeriodMinutes->setName('statisticsSamplingPeriodMinutes');
        return $this;
    }

    /**
     * 
     * @return CallCenterStatisticsSamplingPeriodMinutes
     */
    public function getStatisticsSamplingPeriodMinutes()
    {
        return $this->statisticsSamplingPeriodMinutes->getValue();
    }
}
