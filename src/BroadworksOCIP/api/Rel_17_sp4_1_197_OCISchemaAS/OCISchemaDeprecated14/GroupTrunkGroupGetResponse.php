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
 * Response to the GroupTrunkGroupGetRequest.
 *         The response contains the maximum permissible active trunk group calls for the group.
 */
class GroupTrunkGroupGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupTrunkGroupGetResponse';
    protected $maxActiveCalls;
    protected $maxAvailableActiveCalls;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupTrunkGroupGetResponse $response
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
}
