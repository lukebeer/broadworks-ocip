<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterAgentUnavailableCodeDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the EnterpriseCallCenterAgentUnavailableCodeGetRequest
 */
class EnterpriseCallCenterAgentUnavailableCodeGetResponse extends ComplexType implements ComplexInterface
{
    public    $name        = __CLASS__;
    protected $isActive    = null;
    protected $description = null;


    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->getValue();
    }

    /**
     * Call Center Agent Unavailable Code Description.
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf CallCenterAgentUnavailableCodeDescription)
             ? $description
             : new CallCenterAgentUnavailableCodeDescription($description);
    }

    /**
     * Call Center Agent Unavailable Code Description.
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
    }
}
