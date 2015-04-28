<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * A list of Enterprise Trunk Krunk Group Keys that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 */
class ReplacementEnterpriseTrunkTrunkGroupKeyList extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ReplacementEnterpriseTrunkTrunkGroupKeyList';
    protected $trunkGroupList;

    public function __construct(
         $trunkGroupList = null
    ) {
        $this->setTrunkGroupList($trunkGroupList);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTrunkGroupList($trunkGroupList = null)
    {
        $this->trunkGroupList = new SimpleContent($trunkGroupList);
        $this->trunkGroupList->setElementName('trunkGroupList');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $trunkGroupList
     */
    public function getTrunkGroupList()
    {
        return ($this->trunkGroupList)
            ? $this->trunkGroupList->getElementValue()
            : null;
    }
}
