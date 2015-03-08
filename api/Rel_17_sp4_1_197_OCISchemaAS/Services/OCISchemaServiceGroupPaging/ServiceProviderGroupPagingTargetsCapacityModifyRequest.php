<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceGroupPaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging\GroupPagingMaxTargetCapacity;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the maximum number of target users per paging group configured for a service provider.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderGroupPagingTargetsCapacityModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $serviceProviderId  = null;
    protected $maximumTargetUsers = null;

    public function __construct(
         $serviceProviderId,
         $maximumTargetUsers = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setMaximumTargetUsers($maximumTargetUsers);
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
     * Maximum number of targets per Paging Group
     */
    public function setMaximumTargetUsers($maximumTargetUsers = null)
    {
        $this->maximumTargetUsers = ($maximumTargetUsers InstanceOf GroupPagingMaxTargetCapacity)
             ? $maximumTargetUsers
             : new GroupPagingMaxTargetCapacity($maximumTargetUsers);
    }

    /**
     * Maximum number of targets per Paging Group
     */
    public function getMaximumTargetUsers()
    {
        return (!$this->maximumTargetUsers) ?: $this->maximumTargetUsers->getValue();
    }
}
