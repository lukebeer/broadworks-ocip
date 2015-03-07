<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMaliciousCallTrace; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMaliciousCallTrace\MaliciousCallTraceCallTypeSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMaliciousCallTrace\MaliciousCallTraceTimePeriod;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user level data associated with Malicious Call Trace.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserMaliciousCallTraceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $userId              = null;
    protected $isActive            = null;
    protected $traceTypeSelection  = null;
    protected $traceForTimePeriod  = null;
    protected $traceTimePeriod     = null;

    public function __construct(
         $userId,
         $isActive = null,
         $traceTypeSelection = null,
         $traceForTimePeriod = null,
         MaliciousCallTraceTimePeriod $traceTimePeriod = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setTraceTypeSelection($traceTypeSelection);
        $this->setTraceForTimePeriod($traceForTimePeriod);
        $this->setTraceTimePeriod($traceTimePeriod);
    }

    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setTraceTypeSelection($traceTypeSelection = null)
    {
        $this->traceTypeSelection = ($traceTypeSelection InstanceOf MaliciousCallTraceCallTypeSelection)
             ? $traceTypeSelection
             : new MaliciousCallTraceCallTypeSelection($traceTypeSelection);
    }

    public function getTraceTypeSelection()
    {
        return (!$this->traceTypeSelection) ?: $this->traceTypeSelection->value();
    }

    public function setTraceForTimePeriod(xs:boolean $traceForTimePeriod = null)
    {
    }

    public function getTraceForTimePeriod()
    {
        return (!$this->traceForTimePeriod) ?: $this->traceForTimePeriod->value();
    }

    public function setTraceTimePeriod(MaliciousCallTraceTimePeriod $traceTimePeriod = null)
    {
    }

    public function getTraceTimePeriod()
    {
        return (!$this->traceTimePeriod) ?: $this->traceTimePeriod->value();
    }
}
