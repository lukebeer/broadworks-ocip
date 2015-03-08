<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAdviceOfCharge; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAdviceOfCharge\AdviceOfChargeDelayBetweenNotificationSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAdviceOfCharge\AdviceOfChargeIncomingAocHandling;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to modify Advice of Charge system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemAdviceOfChargeModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
    protected $delayBetweenNotificationSeconds = null;
    protected $incomingAocHandling             = null;
    protected $costInformationSource           = null;

    public function __construct(
         $delayBetweenNotificationSeconds = null,
         $incomingAocHandling = null,
         $costInformationSource = null
    ) {
        $this->setDelayBetweenNotificationSeconds($delayBetweenNotificationSeconds);
        $this->setIncomingAocHandling($incomingAocHandling);
        $this->setCostInformationSource($costInformationSource);
    }

    /**
     * The time in seconds used for the interval for sending AoC-D information to the caller.
     */
    public function setDelayBetweenNotificationSeconds($delayBetweenNotificationSeconds = null)
    {
        $this->delayBetweenNotificationSeconds = ($delayBetweenNotificationSeconds InstanceOf AdviceOfChargeDelayBetweenNotificationSeconds)
             ? $delayBetweenNotificationSeconds
             : new AdviceOfChargeDelayBetweenNotificationSeconds($delayBetweenNotificationSeconds);
    }

    /**
     * The time in seconds used for the interval for sending AoC-D information to the caller.
     */
    public function getDelayBetweenNotificationSeconds()
    {
        return (!$this->delayBetweenNotificationSeconds) ?: $this->delayBetweenNotificationSeconds->getValue();
    }

    /**
     * Choices for method of how the Advice of Charge is processed by the Application Server.
     */
    public function setIncomingAocHandling($incomingAocHandling = null)
    {
        $this->incomingAocHandling = ($incomingAocHandling InstanceOf AdviceOfChargeIncomingAocHandling)
             ? $incomingAocHandling
             : new AdviceOfChargeIncomingAocHandling($incomingAocHandling);
    }

    /**
     * Choices for method of how the Advice of Charge is processed by the Application Server.
     */
    public function getIncomingAocHandling()
    {
        return (!$this->incomingAocHandling) ?: $this->incomingAocHandling->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setCostInformationSource($costInformationSource = null)
    {
        $this->costInformationSource = ($costInformationSource InstanceOf NetAddress)
             ? $costInformationSource
             : new NetAddress($costInformationSource);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getCostInformationSource()
    {
        return (!$this->costInformationSource) ?: $this->costInformationSource->getValue();
    }
}
