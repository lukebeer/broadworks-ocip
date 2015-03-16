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
    public    $name = 'SystemAdviceOfChargeGetResponse';
    protected $delayBetweenNotificationSeconds;
    protected $incomingAocHandling;
    protected $costInformationSource;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAdviceOfCharge\SystemAdviceOfChargeGetResponse $response
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
        $this->delayBetweenNotificationSeconds = ($delayBetweenNotificationSeconds InstanceOf AdviceOfChargeDelayBetweenNotificationSeconds)
             ? $delayBetweenNotificationSeconds
             : new AdviceOfChargeDelayBetweenNotificationSeconds($delayBetweenNotificationSeconds);
        $this->delayBetweenNotificationSeconds->setName('delayBetweenNotificationSeconds');
        return $this;
    }

    /**
     * 
     * @return AdviceOfChargeDelayBetweenNotificationSeconds $delayBetweenNotificationSeconds
     */
    public function getDelayBetweenNotificationSeconds()
    {
        return ($this->delayBetweenNotificationSeconds) ? $this->delayBetweenNotificationSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setIncomingAocHandling($incomingAocHandling = null)
    {
        $this->incomingAocHandling = ($incomingAocHandling InstanceOf AdviceOfChargeIncomingAocHandling)
             ? $incomingAocHandling
             : new AdviceOfChargeIncomingAocHandling($incomingAocHandling);
        $this->incomingAocHandling->setName('incomingAocHandling');
        return $this;
    }

    /**
     * 
     * @return AdviceOfChargeIncomingAocHandling $incomingAocHandling
     */
    public function getIncomingAocHandling()
    {
        return ($this->incomingAocHandling) ? $this->incomingAocHandling->getValue() : null;
    }

    /**
     * 
     */
    public function setCostInformationSource($costInformationSource = null)
    {
        $this->costInformationSource = ($costInformationSource InstanceOf NetAddress)
             ? $costInformationSource
             : new NetAddress($costInformationSource);
        $this->costInformationSource->setName('costInformationSource');
        return $this;
    }

    /**
     * 
     * @return NetAddress $costInformationSource
     */
    public function getCostInformationSource()
    {
        return ($this->costInformationSource) ? $this->costInformationSource->getValue() : null;
    }
}
