<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ScheduleCombinationType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSelectiveServicesGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemSelectiveServicesGetRequest.
 */
class SystemSelectiveServicesGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $scheduleCombination = null;

    /**
     * @return SystemSelectiveServicesGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

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
