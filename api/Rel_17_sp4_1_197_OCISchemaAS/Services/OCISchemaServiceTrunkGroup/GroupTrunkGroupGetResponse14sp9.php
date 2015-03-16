<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedNonNegativeInt;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupTrunkGroupGetRequest14sp1.
 *         The response contains the maximum and bursting maximum permissible active trunk group calls for the group.
 */
class GroupTrunkGroupGetResponse14sp9 extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupTrunkGroupGetResponse14sp9';
    protected $maxActiveCalls;
    protected $maxAvailableActiveCalls;
    protected $burstingMaxActiveCalls;
    protected $burstingMaxAvailableActiveCalls;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\GroupTrunkGroupGetResponse14sp9 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setMaxActiveCalls($maxActiveCalls = null)
    {
        $this->maxActiveCalls = new PrimitiveType($maxActiveCalls);
        $this->maxActiveCalls->setName('maxActiveCalls');
        return $this;
    }

    /**
     * 
     * @return int $maxActiveCalls
     */
    public function getMaxActiveCalls()
    {
        return ($this->maxActiveCalls) ? $this->maxActiveCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxAvailableActiveCalls(UnboundedNonNegativeInt $maxAvailableActiveCalls = null)
    {
        $this->maxAvailableActiveCalls = ($maxAvailableActiveCalls InstanceOf UnboundedNonNegativeInt)
             ? $maxAvailableActiveCalls
             : new UnboundedNonNegativeInt($maxAvailableActiveCalls);
        $this->maxAvailableActiveCalls->setName('maxAvailableActiveCalls');
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
        $this->burstingMaxActiveCalls->setName('burstingMaxActiveCalls');
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
        $this->burstingMaxAvailableActiveCalls->setName('burstingMaxAvailableActiveCalls');
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
