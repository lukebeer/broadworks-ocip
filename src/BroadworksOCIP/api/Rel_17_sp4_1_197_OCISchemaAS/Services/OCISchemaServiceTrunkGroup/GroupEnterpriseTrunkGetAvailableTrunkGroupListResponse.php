<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupEnterpriseTrunkGetAvailableTrunkGroupListRequest.
 */
class GroupEnterpriseTrunkGetAvailableTrunkGroupListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupEnterpriseTrunkGetAvailableTrunkGroupListResponse';
    protected $trunkGroupName;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\GroupEnterpriseTrunkGetAvailableTrunkGroupListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTrunkGroupName($trunkGroupName = null)
    {
        $this->trunkGroupName = ($trunkGroupName InstanceOf TrunkGroupName)
             ? $trunkGroupName
             : new TrunkGroupName($trunkGroupName);
        $this->trunkGroupName->setElementName('trunkGroupName');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupName $trunkGroupName
     */
    public function getTrunkGroupName()
    {
        return ($this->trunkGroupName)
            ? $this->trunkGroupName->getElementValue()
            : null;
    }
}
