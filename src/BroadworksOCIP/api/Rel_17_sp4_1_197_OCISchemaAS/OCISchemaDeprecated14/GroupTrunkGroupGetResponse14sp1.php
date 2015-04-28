<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedNonNegativeInt;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupTrunkGroupGetRequest14sp1.
 *         The response contains the maximum and bursting maximum permissible active trunk group calls for the group.
 */
class GroupTrunkGroupGetResponse14sp1 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupTrunkGroupGetResponse14sp1';
    protected $maxActiveCalls;
    protected $maxAvailableActiveCalls;
    protected $burstingMaxActiveCalls;
    protected $burstingMaxAvailableActiveCalls;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupTrunkGroupGetResponse14sp1 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setMaxActiveCalls(UnboundedNonNegativeInt $maxActiveCalls = null)
    {
        $this->maxActiveCalls = ($maxActiveCalls InstanceOf UnboundedNonNegativeInt)
             ? $maxActiveCalls
             : new UnboundedNonNegativeInt($maxActiveCalls);
        $this->maxActiveCalls->setElementName('maxActiveCalls');
        return $this;
    }

    /**
     * 
     * @return UnboundedNonNegativeInt $maxActiveCalls
     */
    public function getMaxActiveCalls()
    {
        return $this->maxActiveCalls;
    }

    /**
     * 
     */
    public function setMaxAvailableActiveCalls(UnboundedNonNegativeInt $maxAvailableActiveCalls = null)
    {
        $this->maxAvailableActiveCalls = ($maxAvailableActiveCalls InstanceOf UnboundedNonNegativeInt)
             ? $maxAvailableActiveCalls
             : new UnboundedNonNegativeInt($maxAvailableActiveCalls);
        $this->maxAvailableActiveCalls->setElementName('maxAvailableActiveCalls');
        return $this;
    }

    /**
     * 
     * @return UnboundedNonNegativeInt $maxAvailableActiveCalls
     */
    public function getMaxAvailableActiveCalls()
    {
        return $this->maxAvailableActiveCalls;
    }

    /**
     * 
     */
    public function setBurstingMaxActiveCalls(UnboundedNonNegativeInt $burstingMaxActiveCalls = null)
    {
        $this->burstingMaxActiveCalls = ($burstingMaxActiveCalls InstanceOf UnboundedNonNegativeInt)
             ? $burstingMaxActiveCalls
             : new UnboundedNonNegativeInt($burstingMaxActiveCalls);
        $this->burstingMaxActiveCalls->setElementName('burstingMaxActiveCalls');
        return $this;
    }

    /**
     * 
     * @return UnboundedNonNegativeInt $burstingMaxActiveCalls
     */
    public function getBurstingMaxActiveCalls()
    {
        return $this->burstingMaxActiveCalls;
    }

    /**
     * 
     */
    public function setBurstingMaxAvailableActiveCalls(UnboundedNonNegativeInt $burstingMaxAvailableActiveCalls = null)
    {
        $this->burstingMaxAvailableActiveCalls = ($burstingMaxAvailableActiveCalls InstanceOf UnboundedNonNegativeInt)
             ? $burstingMaxAvailableActiveCalls
             : new UnboundedNonNegativeInt($burstingMaxAvailableActiveCalls);
        $this->burstingMaxAvailableActiveCalls->setElementName('burstingMaxAvailableActiveCalls');
        return $this;
    }

    /**
     * 
     * @return UnboundedNonNegativeInt $burstingMaxAvailableActiveCalls
     */
    public function getBurstingMaxAvailableActiveCalls()
    {
        return $this->burstingMaxAvailableActiveCalls;
    }
}
