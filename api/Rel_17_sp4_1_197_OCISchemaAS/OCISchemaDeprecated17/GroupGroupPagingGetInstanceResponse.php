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
    const     RESPONSE_TYPE                   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\GroupGroupPagingGetInstanceResponse';
    public    $name                           = __CLASS__;
    protected $serviceInstanceProfile         = null;
    protected $confirmationToneTimeoutSeconds = null;
    protected $deliverOriginatorCLIDInstead   = null;
    protected $originatorCLIDPrefix           = null;


    /**
     * Service Profile Information for group service.
     *         It is identical to the ServiceInstanceAddProfile, but without the password.
     *         Prior to release 14 this was called ServiceInstanceProfile.
     */
    public function setServiceInstanceProfile(ServiceInstanceReadProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ServiceInstanceReadProfile $serviceInstanceProfile;
    }

    /**
     * Service Profile Information for group service.
     *         It is identical to the ServiceInstanceAddProfile, but without the password.
     *         Prior to release 14 this was called ServiceInstanceProfile.
     */
    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->getValue();
    }

    /**
     * Maximum time to wait after the first answer is received from a target before
     *         sending back the confirmation tone to the originator.
     */
    public function setConfirmationToneTimeoutSeconds($confirmationToneTimeoutSeconds = null)
    {
        $this->confirmationToneTimeoutSeconds = ($confirmationToneTimeoutSeconds InstanceOf GroupPagingConfirmationToneTimeoutSeconds)
             ? $confirmationToneTimeoutSeconds
             : new GroupPagingConfirmationToneTimeoutSeconds($confirmationToneTimeoutSeconds);
    }

    /**
     * Maximum time to wait after the first answer is received from a target before
     *         sending back the confirmation tone to the originator.
     */
    public function getConfirmationToneTimeoutSeconds()
    {
        return (!$this->confirmationToneTimeoutSeconds) ?: $this->confirmationToneTimeoutSeconds->getValue();
    }

    /**
     * 
     */
    public function setDeliverOriginatorCLIDInstead($deliverOriginatorCLIDInstead = null)
    {
        $this->deliverOriginatorCLIDInstead = (boolean) $deliverOriginatorCLIDInstead;
    }

    /**
     * 
     */
    public function getDeliverOriginatorCLIDInstead()
    {
        return (!$this->deliverOriginatorCLIDInstead) ?: $this->deliverOriginatorCLIDInstead->getValue();
    }

    /**
     * Prefix for Calling Line Id Display.
     */
    public function setOriginatorCLIDPrefix($originatorCLIDPrefix = null)
    {
        $this->originatorCLIDPrefix = ($originatorCLIDPrefix InstanceOf GroupPagingOriginatorCLIDPrefix)
             ? $originatorCLIDPrefix
             : new GroupPagingOriginatorCLIDPrefix($originatorCLIDPrefix);
    }

    /**
     * Prefix for Calling Line Id Display.
     */
    public function getOriginatorCLIDPrefix()
    {
        return (!$this->originatorCLIDPrefix) ?: $this->originatorCLIDPrefix->getValue();
    }
}
