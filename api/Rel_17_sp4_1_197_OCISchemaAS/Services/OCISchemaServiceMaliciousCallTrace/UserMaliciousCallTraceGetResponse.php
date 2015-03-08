<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMaliciousCallTrace; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMaliciousCallTrace\MaliciousCallTraceCallTypeSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMaliciousCallTrace\MaliciousCallTraceTimePeriod;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserMaliciousCallTraceGetRequest.
 */
class UserMaliciousCallTraceGetResponse extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $isActive           = null;
    protected $traceTypeSelection = null;
    protected $traceForTimePeriod = null;
    protected $traceTimePeriod    = null;


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
     * Call Types that are traced for malicious calls
     */
    public function setTraceTypeSelection($traceTypeSelection = null)
    {
        $this->traceTypeSelection = ($traceTypeSelection InstanceOf MaliciousCallTraceCallTypeSelection)
             ? $traceTypeSelection
             : new MaliciousCallTraceCallTypeSelection($traceTypeSelection);
    }

    /**
     * Call Types that are traced for malicious calls
     */
    public function getTraceTypeSelection()
    {
        return (!$this->traceTypeSelection) ?: $this->traceTypeSelection->getValue();
    }

    /**
     * 
     */
    public function setTraceForTimePeriod($traceForTimePeriod = null)
    {
        $this->traceForTimePeriod = (boolean) $traceForTimePeriod;
    }

    /**
     * 
     */
    public function getTraceForTimePeriod()
    {
        return (!$this->traceForTimePeriod) ?: $this->traceForTimePeriod->getValue();
    }

    /**
     * Modify the user level data associated with Malicious Call Trace.
     *         The response is either a SuccessResponse or an ErrorResponse.
     */
    public function setTraceTimePeriod(MaliciousCallTraceTimePeriod $traceTimePeriod = null)
    {
        $this->traceTimePeriod =  $traceTimePeriod;
    }

    /**
     * Modify the user level data associated with Malicious Call Trace.
     *         The response is either a SuccessResponse or an ErrorResponse.
     */
    public function getTraceTimePeriod()
    {
        return (!$this->traceTimePeriod) ?: $this->traceTimePeriod->getValue();
    }
}
