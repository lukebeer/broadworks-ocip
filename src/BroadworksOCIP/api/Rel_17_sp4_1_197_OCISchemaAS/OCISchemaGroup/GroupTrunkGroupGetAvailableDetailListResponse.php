<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 


use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupTrunkGroupGetAvailableDetailListRequest.
 */
class GroupTrunkGroupGetAvailableDetailListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupTrunkGroupGetAvailableDetailListResponse';
    protected $trunkGroup;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupTrunkGroupGetAvailableDetailListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTrunkGroup($trunkGroup = null)
    {
        $this->trunkGroup->setElementName('trunkGroup');
        return $this;
    }

    /**
     * 
     * @return  $trunkGroup
     */
    public function getTrunkGroup()
    {
        return ($this->trunkGroup)
            ? $this->trunkGroup->getElementValue()
            : null;
    }
}
