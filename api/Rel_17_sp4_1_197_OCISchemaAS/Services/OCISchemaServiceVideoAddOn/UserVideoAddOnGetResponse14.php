<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVideoAddOn; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVideoAddOn\VideoAddOnMaxOriginatingCallDelaySeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointRead14;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the UserVideoAddOnGetRequest14.
 */
class UserVideoAddOnGetResponse14 extends ComplexType implements ComplexInterface
{
    public    $name                           = __CLASS__;
    protected $isActive                       = null;
    protected $maxOriginatingCallDelaySeconds = null;
    protected $accessDeviceEndpoint           = null;


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
     * Maximum Originating Call Delay.
     */
    public function setMaxOriginatingCallDelaySeconds($maxOriginatingCallDelaySeconds = null)
    {
        $this->maxOriginatingCallDelaySeconds = ($maxOriginatingCallDelaySeconds InstanceOf VideoAddOnMaxOriginatingCallDelaySeconds)
             ? $maxOriginatingCallDelaySeconds
             : new VideoAddOnMaxOriginatingCallDelaySeconds($maxOriginatingCallDelaySeconds);
    }

    /**
     * Maximum Originating Call Delay.
     */
    public function getMaxOriginatingCallDelaySeconds()
    {
        return (!$this->maxOriginatingCallDelaySeconds) ?: $this->maxOriginatingCallDelaySeconds->getValue();
    }

    /**
     * Access device end point.
     */
    public function setAccessDeviceEndpoint(AccessDeviceEndpointRead14 $accessDeviceEndpoint = null)
    {
        $this->accessDeviceEndpoint =  $accessDeviceEndpoint;
    }

    /**
     * Access device end point.
     */
    public function getAccessDeviceEndpoint()
    {
        return (!$this->accessDeviceEndpoint) ?: $this->accessDeviceEndpoint->getValue();
    }
}
