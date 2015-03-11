<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAdviceOfCharge; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAdviceOfCharge\AdviceOfChargeDelayBetweenNotificationSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAdviceOfCharge\AdviceOfChargeIncomingAocHandling;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemAdviceOfChargeGetRequest.
 *         Contains a list of system Advice of Charge parameters.
 */
class SystemAdviceOfChargeGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                            = 'SystemAdviceOfChargeGetResponse';
    protected $delayBetweenNotificationSeconds = null;
    protected $incomingAocHandling             = null;
    protected $costInformationSource           = null;

    /**
     * @return SystemAdviceOfChargeGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDelayBetweenNotificationSeconds($delayBetweenNotificationSeconds = null)
    {
        if (!$delayBetweenNotificationSeconds) return $this;
        $this->delayBetweenNotificationSeconds = ($delayBetweenNotificationSeconds InstanceOf AdviceOfChargeDelayBetweenNotificationSeconds)
             ? $delayBetweenNotificationSeconds
             : new AdviceOfChargeDelayBetweenNotificationSeconds($delayBetweenNotificationSeconds);
        $this->delayBetweenNotificationSeconds->setName('delayBetweenNotificationSeconds');
        return $this;
    }

    /**
     * 
     * @return AdviceOfChargeDelayBetweenNotificationSeconds
     */
    public function getDelayBetweenNotificationSeconds()
    {
        return $this->delayBetweenNotificationSeconds->getValue();
    }

    /**
     * 
     */
    public function setIncomingAocHandling($incomingAocHandling = null)
    {
        if (!$incomingAocHandling) return $this;
        $this->incomingAocHandling = ($incomingAocHandling InstanceOf AdviceOfChargeIncomingAocHandling)
             ? $incomingAocHandling
             : new AdviceOfChargeIncomingAocHandling($incomingAocHandling);
        $this->incomingAocHandling->setName('incomingAocHandling');
        return $this;
    }

    /**
     * 
     * @return AdviceOfChargeIncomingAocHandling
     */
    public function getIncomingAocHandling()
    {
        return $this->incomingAocHandling->getValue();
    }

    /**
     * 
     */
    public function setCostInformationSource($costInformationSource = null)
    {
        if (!$costInformationSource) return $this;
        $this->costInformationSource = ($costInformationSource InstanceOf NetAddress)
             ? $costInformationSource
             : new NetAddress($costInformationSource);
        $this->costInformationSource->setName('costInformationSource');
        return $this;
    }

    /**
     * 
     * @return NetAddress
     */
    public function getCostInformationSource()
    {
        return $this->costInformationSource->getValue();
    }
}
