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
 * Identifies a trunk group within an Enterprise Trunk where the service provider id is already known.
 */
class EnterpriseTrunkTrunkGroupKey extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseTrunkTrunkGroupKey';
    protected $groupId;
    protected $trunkGroupName;

    public function __construct(
         $groupId = '',
         $trunkGroupName = ''
    ) {
        $this->setGroupId($groupId);
        $this->setTrunkGroupName($trunkGroupName);
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
    public function setGroupId($groupId = null)
    {
        $this->groupId = new SimpleContent($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTrunkGroupName($trunkGroupName = null)
    {
        $this->trunkGroupName = new SimpleContent($trunkGroupName);
        $this->trunkGroupName->setElementName('trunkGroupName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $trunkGroupName
     */
    public function getTrunkGroupName()
    {
        return ($this->trunkGroupName)
            ? $this->trunkGroupName->getElementValue()
            : null;
    }
}
