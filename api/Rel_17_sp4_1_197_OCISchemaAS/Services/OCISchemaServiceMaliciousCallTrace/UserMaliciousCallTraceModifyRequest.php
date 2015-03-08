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
    public    $name               = __CLASS__;
    protected $userId             = null;
    protected $isActive           = null;
    protected $traceTypeSelection = null;
    protected $traceForTimePeriod = null;
    protected $traceTimePeriod    = null;

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

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

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
        $this->traceTimePeriod = MaliciousCallTraceTimePeriod $traceTimePeriod;
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