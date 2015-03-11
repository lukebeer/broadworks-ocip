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
    public    $name       = 'GroupServiceIsAssignedResponse';
    protected $isAssigned = null;

    /**
     * @return GroupServiceIsAssignedResponse
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
        if (!$isAssigned) return $this;
        $this->isAssigned = new PrimitiveType($isAssigned);
        $this->isAssigned->setName('isAssigned');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsAssigned()
    {
        return $this->isAssigned->getValue();
    }
}
