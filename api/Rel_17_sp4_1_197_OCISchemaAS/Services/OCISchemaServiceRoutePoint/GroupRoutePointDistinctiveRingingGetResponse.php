<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RingPattern;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the GroupRoutePointDistinctiveRingingGetRequest.
 */
class GroupRoutePointDistinctiveRingingGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                               = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint\GroupRoutePointDistinctiveRingingGetResponse';
    public    $name                                       = __CLASS__;
    protected $enableDistinctiveRinging                   = null;
    protected $distinctiveRingingRingPattern              = null;
    protected $distinctiveRingingForceDeliveryRingPattern = null;


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
