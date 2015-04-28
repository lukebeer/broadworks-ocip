<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Returns true if the GroupService is assigned, otherwise false.
 */
class GroupServiceIsAssignedResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupServiceIsAssignedResponse';
    protected $isAssigned;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupServiceIsAssignedResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsAssigned($isAssigned = null)
    {
        $this->isAssigned = new PrimitiveType($isAssigned);
        $this->isAssigned->setElementName('isAssigned');
        return $this;
    }

    /**
     * 
     * @return boolean $isAssigned
     */
    public function getIsAssigned()
    {
        return ($this->isAssigned)
            ? $this->isAssigned->getElementValue()
            : null;
    }
}
