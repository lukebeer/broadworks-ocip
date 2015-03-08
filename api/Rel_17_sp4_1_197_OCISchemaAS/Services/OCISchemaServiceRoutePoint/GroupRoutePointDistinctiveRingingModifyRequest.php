<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RingPattern;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the distinctive ringing configuration values for route point.
 *         
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupRoutePointDistinctiveRingingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                       = __CLASS__;
    protected $serviceUserId                              = null;
    protected $enableDistinctiveRinging                   = null;
    protected $distinctiveRingingRingPattern              = null;
    protected $distinctiveRingingForceDeliveryRingPattern = null;

    public function __construct(
         $serviceUserId,
         $enableDistinctiveRinging = null,
         $distinctiveRingingRingPattern = null,
         $distinctiveRingingForceDeliveryRingPattern = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setEnableDistinctiveRinging($enableDistinctiveRinging);
        $this->setDistinctiveRingingRingPattern($distinctiveRingingRingPattern);
        $this->setDistinctiveRingingForceDeliveryRingPattern($distinctiveRingingForceDeliveryRingPattern);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setEnableDistinctiveRinging($enableDistinctiveRinging = null)
    {
        $this->enableDistinctiveRinging = (boolean) $enableDistinctiveRinging;
    }

    /**
     * 
     */
    public function getEnableDistinctiveRinging()
    {
        return (!$this->enableDistinctiveRinging) ?: $this->enableDistinctiveRinging->getValue();
    }

    /**
     * The supported ring patterns.
     */
    public function setDistinctiveRingingRingPattern($distinctiveRingingRingPattern = null)
    {
        $this->distinctiveRingingRingPattern = ($distinctiveRingingRingPattern InstanceOf RingPattern)
             ? $distinctiveRingingRingPattern
             : new RingPattern($distinctiveRingingRingPattern);
    }

    /**
     * The supported ring patterns.
     */
    public function getDistinctiveRingingRingPattern()
    {
        return (!$this->distinctiveRingingRingPattern) ?: $this->distinctiveRingingRingPattern->getValue();
    }

    /**
     * The supported ring patterns.
     */
    public function setDistinctiveRingingForceDeliveryRingPattern($distinctiveRingingForceDeliveryRingPattern = null)
    {
        $this->distinctiveRingingForceDeliveryRingPattern = ($distinctiveRingingForceDeliveryRingPattern InstanceOf RingPattern)
             ? $distinctiveRingingForceDeliveryRingPattern
             : new RingPattern($distinctiveRingingForceDeliveryRingPattern);
    }

    /**
     * The supported ring patterns.
     */
    public function getDistinctiveRingingForceDeliveryRingPattern()
    {
        return (!$this->distinctiveRingingForceDeliveryRingPattern) ?: $this->distinctiveRingingForceDeliveryRingPattern->getValue();
    }
}
