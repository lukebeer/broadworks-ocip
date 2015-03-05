<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceGroupPaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupPagingConfirmationToneTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupPagingOriginatorCLIDPrefix;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify a Group Paging instance.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupGroupPagingModifyInstanceRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             ServiceInstanceModifyProfile $serviceInstanceProfile=null,
             $confirmationToneTimeoutSeconds=null,
             $deliverOriginatorCLIDInstead=null,
             $originatorCLIDPrefix=null
    ) {
        $this->serviceUserId                  = new UserId($serviceUserId);
        $this->serviceInstanceProfile         = $serviceInstanceProfile;
        $this->confirmationToneTimeoutSeconds = $confirmationToneTimeoutSeconds;
        $this->deliverOriginatorCLIDInstead   = $deliverOriginatorCLIDInstead;
        $this->originatorCLIDPrefix           = $originatorCLIDPrefix;
        $this->args                           = func_get_args();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $serviceInstanceProfile and $this->serviceInstanceProfile = new ServiceInstanceModifyProfile($serviceInstanceProfile);
    }

    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->value();
    }

    public function setConfirmationToneTimeoutSeconds($confirmationToneTimeoutSeconds)
    {
        $confirmationToneTimeoutSeconds and $this->confirmationToneTimeoutSeconds = new GroupPagingConfirmationToneTimeoutSeconds($confirmationToneTimeoutSeconds);
    }

    public function getConfirmationToneTimeoutSeconds()
    {
        return (!$this->confirmationToneTimeoutSeconds) ?: $this->confirmationToneTimeoutSeconds->value();
    }

    public function setDeliverOriginatorCLIDInstead($deliverOriginatorCLIDInstead)
    {
        $deliverOriginatorCLIDInstead and $this->deliverOriginatorCLIDInstead = new xs:boolean($deliverOriginatorCLIDInstead);
    }

    public function getDeliverOriginatorCLIDInstead()
    {
        return (!$this->deliverOriginatorCLIDInstead) ?: $this->deliverOriginatorCLIDInstead->value();
    }

    public function setOriginatorCLIDPrefix($originatorCLIDPrefix)
    {
        $originatorCLIDPrefix and $this->originatorCLIDPrefix = new GroupPagingOriginatorCLIDPrefix($originatorCLIDPrefix);
    }

    public function getOriginatorCLIDPrefix()
    {
        return (!$this->originatorCLIDPrefix) ?: $this->originatorCLIDPrefix->value();
    }
}
