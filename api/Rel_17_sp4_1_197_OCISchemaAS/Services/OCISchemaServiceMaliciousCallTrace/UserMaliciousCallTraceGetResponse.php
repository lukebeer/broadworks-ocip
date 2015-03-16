<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMaliciousCallTrace; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMaliciousCallTrace\MaliciousCallTraceCallTypeSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMaliciousCallTrace\MaliciousCallTraceTimePeriod;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserMaliciousCallTraceGetRequest.
 */
class UserMaliciousCallTraceGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'UserMaliciousCallTraceGetResponse';
    protected $isActive;
    protected $traceTypeSelection;
    protected $traceForTimePeriod;
    protected $traceTimePeriod;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMaliciousCallTrace\UserMaliciousCallTraceGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive) ? $this->isActive->getValue() : null;
    }

    /**
     * 
     */
    public function setTraceTypeSelection($traceTypeSelection = null)
    {
        $this->traceTypeSelection = ($traceTypeSelection InstanceOf MaliciousCallTraceCallTypeSelection)
             ? $traceTypeSelection
             : new MaliciousCallTraceCallTypeSelection($traceTypeSelection);
        $this->traceTypeSelection->setName('traceTypeSelection');
        return $this;
    }

    /**
     * 
     * @return MaliciousCallTraceCallTypeSelection $traceTypeSelection
     */
    public function getTraceTypeSelection()
    {
        return ($this->traceTypeSelection) ? $this->traceTypeSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setTraceForTimePeriod($traceForTimePeriod = null)
    {
        $this->traceForTimePeriod = new PrimitiveType($traceForTimePeriod);
        $this->traceForTimePeriod->setName('traceForTimePeriod');
        return $this;
    }

    /**
     * 
     * @return boolean $traceForTimePeriod
     */
    public function getTraceForTimePeriod()
    {
        return ($this->traceForTimePeriod) ? $this->traceForTimePeriod->getValue() : null;
    }

    /**
     * 
     */
    public function setTraceTimePeriod(MaliciousCallTraceTimePeriod $traceTimePeriod = null)
    {
        $this->traceTimePeriod = ($traceTimePeriod InstanceOf MaliciousCallTraceTimePeriod)
             ? $traceTimePeriod
             : new MaliciousCallTraceTimePeriod($traceTimePeriod);
        $this->traceTimePeriod->setName('traceTimePeriod');
        return $this;
    }

    /**
     * 
     * @return MaliciousCallTraceTimePeriod $traceTimePeriod
     */
    public function getTraceTimePeriod()
    {
        return $this->traceTimePeriod;
    }
}
