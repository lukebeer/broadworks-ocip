<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging\GroupPagingConfirmationToneTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging\GroupPagingOriginatorCLIDPrefix;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify a Group Paging instance.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupGroupPagingModifyInstanceRequest extends ComplexType implements ComplexInterface
{
    public    $name                           = 'GroupGroupPagingModifyInstanceRequest';
    protected $serviceUserId                  = null;
    protected $serviceInstanceProfile         = null;
    protected $confirmationToneTimeoutSeconds = null;
    protected $deliverOriginatorCLIDInstead   = null;
    protected $originatorCLIDPrefix           = null;

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

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        if (!$serviceUserId) return $this;
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceModifyProfile $serviceInstanceProfile = null)
    {
        if (!$serviceInstanceProfile) return $this;
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        $this->serviceInstanceProfile->setName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceModifyProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * 
     */
    public function setConfirmationToneTimeoutSeconds($confirmationToneTimeoutSeconds = null)
    {
        if (!$confirmationToneTimeoutSeconds) return $this;
        $this->confirmationToneTimeoutSeconds = ($confirmationToneTimeoutSeconds InstanceOf GroupPagingConfirmationToneTimeoutSeconds)
             ? $confirmationToneTimeoutSeconds
             : new GroupPagingConfirmationToneTimeoutSeconds($confirmationToneTimeoutSeconds);
        $this->confirmationToneTimeoutSeconds->setName('confirmationToneTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return GroupPagingConfirmationToneTimeoutSeconds
     */
    public function getConfirmationToneTimeoutSeconds()
    {
        return $this->confirmationToneTimeoutSeconds->getValue();
    }

    /**
     * 
     */
    public function setDeliverOriginatorCLIDInstead($deliverOriginatorCLIDInstead = null)
    {
        if (!$deliverOriginatorCLIDInstead) return $this;
        $this->deliverOriginatorCLIDInstead = new PrimitiveType($deliverOriginatorCLIDInstead);
        $this->deliverOriginatorCLIDInstead->setName('deliverOriginatorCLIDInstead');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDeliverOriginatorCLIDInstead()
    {
        return $this->deliverOriginatorCLIDInstead->getValue();
    }

    /**
     * 
     */
    public function setOriginatorCLIDPrefix($originatorCLIDPrefix = null)
    {
        if (!$originatorCLIDPrefix) return $this;
        $this->originatorCLIDPrefix = ($originatorCLIDPrefix InstanceOf GroupPagingOriginatorCLIDPrefix)
             ? $originatorCLIDPrefix
             : new GroupPagingOriginatorCLIDPrefix($originatorCLIDPrefix);
        $this->originatorCLIDPrefix->setName('originatorCLIDPrefix');
        return $this;
    }

    /**
     * 
     * @return GroupPagingOriginatorCLIDPrefix
     */
    public function getOriginatorCLIDPrefix()
    {
        return $this->originatorCLIDPrefix->getValue();
    }
}
