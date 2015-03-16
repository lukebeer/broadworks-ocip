<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RingPattern;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupRoutePointDistinctiveRingingGetRequest.
 */
class GroupRoutePointDistinctiveRingingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupRoutePointDistinctiveRingingGetResponse';
    protected $enableDistinctiveRinging;
    protected $distinctiveRingingRingPattern;
    protected $distinctiveRingingForceDeliveryRingPattern;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint\GroupRoutePointDistinctiveRingingGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnableDistinctiveRinging($enableDistinctiveRinging = null)
    {
        $this->enableDistinctiveRinging = new PrimitiveType($enableDistinctiveRinging);
        $this->enableDistinctiveRinging->setName('enableDistinctiveRinging');
        return $this;
    }

    /**
     * 
     * @return boolean $enableDistinctiveRinging
     */
    public function getEnableDistinctiveRinging()
    {
        return ($this->enableDistinctiveRinging) ? $this->enableDistinctiveRinging->getValue() : null;
    }

    /**
     * 
     */
    public function setDistinctiveRingingRingPattern($distinctiveRingingRingPattern = null)
    {
        $this->distinctiveRingingRingPattern = ($distinctiveRingingRingPattern InstanceOf RingPattern)
             ? $distinctiveRingingRingPattern
             : new RingPattern($distinctiveRingingRingPattern);
        $this->distinctiveRingingRingPattern->setName('distinctiveRingingRingPattern');
        return $this;
    }

    /**
     * 
     * @return RingPattern $distinctiveRingingRingPattern
     */
    public function getDistinctiveRingingRingPattern()
    {
        return ($this->distinctiveRingingRingPattern) ? $this->distinctiveRingingRingPattern->getValue() : null;
    }

    /**
     * 
     */
    public function setDistinctiveRingingForceDeliveryRingPattern($distinctiveRingingForceDeliveryRingPattern = null)
    {
        $this->distinctiveRingingForceDeliveryRingPattern = ($distinctiveRingingForceDeliveryRingPattern InstanceOf RingPattern)
             ? $distinctiveRingingForceDeliveryRingPattern
             : new RingPattern($distinctiveRingingForceDeliveryRingPattern);
        $this->distinctiveRingingForceDeliveryRingPattern->setName('distinctiveRingingForceDeliveryRingPattern');
        return $this;
    }

    /**
     * 
     * @return RingPattern $distinctiveRingingForceDeliveryRingPattern
     */
    public function getDistinctiveRingingForceDeliveryRingPattern()
    {
        return ($this->distinctiveRingingForceDeliveryRingPattern) ? $this->distinctiveRingingForceDeliveryRingPattern->getValue() : null;
    }
}
