<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ScheduleCombinationType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemSelectiveServicesGetRequest.
 */
class SystemSelectiveServicesGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE        = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSelectiveServicesGetResponse';
    public    $name                = __CLASS__;
    protected $scheduleCombination = null;


    /**
     * Schedule Combination.
     */
    public function setScheduleCombination($scheduleCombination = null)
    {
        $this->scheduleCombination = ($scheduleCombination InstanceOf ScheduleCombinationType)
             ? $scheduleCombination
             : new ScheduleCombinationType($scheduleCombination);
    }

    /**
     * Schedule Combination.
     */
    public function getScheduleCombination()
    {
        return (!$this->scheduleCombination) ?: $this->scheduleCombination->getValue();
    }
}
