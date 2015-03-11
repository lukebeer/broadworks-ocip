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
    public    $name                                       = 'GroupRoutePointDistinctiveRingingGetResponse';
    protected $enableDistinctiveRinging                   = null;
    protected $distinctiveRingingRingPattern              = null;
    protected $distinctiveRingingForceDeliveryRingPattern = null;

    /**
     * @return GroupRoutePointDistinctiveRingingGetResponse
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
        if (!$enableDistinctiveRinging) return $this;
        $this->enableDistinctiveRinging = new PrimitiveType($enableDistinctiveRinging);
        $this->enableDistinctiveRinging->setName('enableDistinctiveRinging');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableDistinctiveRinging()
    {
        return $this->enableDistinctiveRinging->getValue();
    }

    /**
     * 
     */
    public function setDistinctiveRingingRingPattern($distinctiveRingingRingPattern = null)
    {
        if (!$distinctiveRingingRingPattern) return $this;
        $this->distinctiveRingingRingPattern = ($distinctiveRingingRingPattern InstanceOf RingPattern)
             ? $distinctiveRingingRingPattern
             : new RingPattern($distinctiveRingingRingPattern);
        $this->distinctiveRingingRingPattern->setName('distinctiveRingingRingPattern');
        return $this;
    }

    /**
     * 
     * @return RingPattern
     */
    public function getDistinctiveRingingRingPattern()
    {
        return $this->distinctiveRingingRingPattern->getValue();
    }

    /**
     * 
     */
    public function setDistinctiveRingingForceDeliveryRingPattern($distinctiveRingingForceDeliveryRingPattern = null)
    {
        if (!$distinctiveRingingForceDeliveryRingPattern) return $this;
        $this->distinctiveRingingForceDeliveryRingPattern = ($distinctiveRingingForceDeliveryRingPattern InstanceOf RingPattern)
             ? $distinctiveRingingForceDeliveryRingPattern
             : new RingPattern($distinctiveRingingForceDeliveryRingPattern);
        $this->distinctiveRingingForceDeliveryRingPattern->setName('distinctiveRingingForceDeliveryRingPattern');
        return $this;
    }

    /**
     * 
     * @return RingPattern
     */
    public function getDistinctiveRingingForceDeliveryRingPattern()
    {
        return $this->distinctiveRingingForceDeliveryRingPattern->getValue();
    }
}
