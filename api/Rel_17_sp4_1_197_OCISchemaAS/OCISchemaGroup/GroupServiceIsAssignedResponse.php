<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Returns true if the GroupService is assigned, otherwise false.
 */
class GroupServiceIsAssignedResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupServiceIsAssignedResponse';
    protected $isAssigned;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupServiceIsAssignedResponse $response
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
