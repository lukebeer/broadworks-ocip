<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallPark; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallPark\CallParkRecallTo;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Adds a Call Park group.
 *         The response is either SuccessResponse or ErrorResponse.
 *         
 *         The following elements are only used in AS data mode:
 *          recallAlternateUserId
 *          recallTo, use value ‘Parking User Only’ in HSS data mode
 */
class GroupCallParkAddInstanceRequest16sp2 extends ComplexType implements ComplexInterface
{
    public    $name                  = __CLASS__;
    protected $serviceProviderId     = null;
    protected $groupId               = null;
    protected $name                  = null;
    protected $userId                = null;
    protected $recallAlternateUserId = null;
    protected $recallTo              = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $name,
         $userId = null,
         $recallAlternateUserId = null,
         $recallTo
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setName($name);
        $this->setUserId($userId);
        $this->setRecallAlternateUserId($recallAlternateUserId);
        $this->setRecallTo($recallTo);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * Service Instance Name for a service without a user id.
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf ServiceInstanceName)
             ? $name
             : new ServiceInstanceName($name);
    }

    /**
     * Service Instance Name for a service without a user id.
     */
    public function getName()
    {
        return (!$this->name) ?: $this->name->getValue();
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
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setRecallAlternateUserId($recallAlternateUserId = null)
    {
        $this->recallAlternateUserId = ($recallAlternateUserId InstanceOf UserId)
             ? $recallAlternateUserId
             : new UserId($recallAlternateUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getRecallAlternateUserId()
    {
        return (!$this->recallAlternateUserId) ?: $this->recallAlternateUserId->getValue();
    }

    /**
     * Call Park recall user options
     */
    public function setRecallTo($recallTo = null)
    {
        $this->recallTo = ($recallTo InstanceOf CallParkRecallTo)
             ? $recallTo
             : new CallParkRecallTo($recallTo);
    }

    /**
     * Call Park recall user options
     */
    public function getRecallTo()
    {
        return (!$this->recallTo) ?: $this->recallTo->getValue();
    }
}
