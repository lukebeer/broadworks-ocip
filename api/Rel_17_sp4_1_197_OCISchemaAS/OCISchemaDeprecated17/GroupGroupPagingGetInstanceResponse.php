<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging\GroupPagingConfirmationToneTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging\GroupPagingOriginatorCLIDPrefix;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\ServiceInstanceReadProfile;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Replaced by: GroupGroupPagingGetInstanceResponse17sp3
 *         Response to GroupGroupPagingGetInstanceRequest.
 *         Contains the service profile information.
 */
class GroupGroupPagingGetInstanceResponse extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
    protected $serviceInstanceProfile          = null;
    protected $confirmationToneTimeoutSeconds  = null;
    protected $deliverOriginatorCLIDInstead    = null;
    protected $originatorCLIDPrefix            = null;


    public function setServiceInstanceProfile(ServiceInstanceReadProfile $serviceInstanceProfile = null)
    {
    }

    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->value();
    }

    public function setConfirmationToneTimeoutSeconds($confirmationToneTimeoutSeconds = null)
    {
        $this->confirmationToneTimeoutSeconds = ($confirmationToneTimeoutSeconds InstanceOf GroupPagingConfirmationToneTimeoutSeconds)
             ? $confirmationToneTimeoutSeconds
             : new GroupPagingConfirmationToneTimeoutSeconds($confirmationToneTimeoutSeconds);
    }

    public function getConfirmationToneTimeoutSeconds()
    {
        return (!$this->confirmationToneTimeoutSeconds) ?: $this->confirmationToneTimeoutSeconds->value();
    }

    public function setDeliverOriginatorCLIDInstead(xs:boolean $deliverOriginatorCLIDInstead = null)
    {
    }

    public function getDeliverOriginatorCLIDInstead()
    {
        return (!$this->deliverOriginatorCLIDInstead) ?: $this->deliverOriginatorCLIDInstead->value();
    }

    public function setOriginatorCLIDPrefix($originatorCLIDPrefix = null)
    {
        $this->originatorCLIDPrefix = ($originatorCLIDPrefix InstanceOf GroupPagingOriginatorCLIDPrefix)
             ? $originatorCLIDPrefix
             : new GroupPagingOriginatorCLIDPrefix($originatorCLIDPrefix);
    }

    public function getOriginatorCLIDPrefix()
    {
        return (!$this->originatorCLIDPrefix) ?: $this->originatorCLIDPrefix->value();
    }
}
