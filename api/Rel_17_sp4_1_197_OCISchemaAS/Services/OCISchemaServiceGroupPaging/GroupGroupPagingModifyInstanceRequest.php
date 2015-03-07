<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceGroupPaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging\GroupPagingConfirmationToneTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging\GroupPagingOriginatorCLIDPrefix;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify a Group Paging instance.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupGroupPagingModifyInstanceRequest extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
    protected $serviceUserId                   = null;
    protected $serviceInstanceProfile          = null;
    protected $confirmationToneTimeoutSeconds  = null;
    protected $deliverOriginatorCLIDInstead    = null;
    protected $originatorCLIDPrefix            = null;

    public function __construct(
         $serviceUserId,
         ServiceInstanceModifyProfile $serviceInstanceProfile = null,
         $confirmationToneTimeoutSeconds = null,
         $deliverOriginatorCLIDInstead = null,
         $originatorCLIDPrefix = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setServiceInstanceProfile($serviceInstanceProfile);
        $this->setConfirmationToneTimeoutSeconds($confirmationToneTimeoutSeconds);
        $this->setDeliverOriginatorCLIDInstead($deliverOriginatorCLIDInstead);
        $this->setOriginatorCLIDPrefix($originatorCLIDPrefix);
    }

    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setServiceInstanceProfile(ServiceInstanceModifyProfile $serviceInstanceProfile = null)
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
