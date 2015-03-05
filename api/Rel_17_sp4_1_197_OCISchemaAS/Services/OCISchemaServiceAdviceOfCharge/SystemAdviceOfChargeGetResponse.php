<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAdviceOfCharge; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AdviceOfChargeDelayBetweenNotificationSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AdviceOfChargeIncomingAocHandling;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemAdviceOfChargeGetRequest.
 *         Contains a list of system Advice of Charge parameters.
 */
class SystemAdviceOfChargeGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $delayBetweenNotificationSeconds,
             $incomingAocHandling,
             $costInformationSource=null
    ) {
        $this->delayBetweenNotificationSeconds = $delayBetweenNotificationSeconds;
        $this->incomingAocHandling             = $incomingAocHandling;
        $this->costInformationSource           = new NetAddress($costInformationSource);
        $this->args                            = func_get_args();
    }

    public function setDelayBetweenNotificationSeconds($delayBetweenNotificationSeconds)
    {
        $delayBetweenNotificationSeconds and $this->delayBetweenNotificationSeconds = new AdviceOfChargeDelayBetweenNotificationSeconds($delayBetweenNotificationSeconds);
    }

    public function getDelayBetweenNotificationSeconds()
    {
        return (!$this->delayBetweenNotificationSeconds) ?: $this->delayBetweenNotificationSeconds->value();
    }

    public function setIncomingAocHandling($incomingAocHandling)
    {
        $incomingAocHandling and $this->incomingAocHandling = new AdviceOfChargeIncomingAocHandling($incomingAocHandling);
    }

    public function getIncomingAocHandling()
    {
        return (!$this->incomingAocHandling) ?: $this->incomingAocHandling->value();
    }

    public function setCostInformationSource($costInformationSource)
    {
        $costInformationSource and $this->costInformationSource = new NetAddress($costInformationSource);
    }

    public function getCostInformationSource()
    {
        return (!$this->costInformationSource) ?: $this->costInformationSource->value();
    }
}
