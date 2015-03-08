<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Requests the list of available access devices for assignment to a user
 *         within a group. The list includes devices created at the system, service provider, and group levels.
 *         The response is either GroupAccessDeviceGetAvailableDetailListResponse14 or
 *         ErrorResponse.
 */
class GroupAccessDeviceGetAvailableDetailListRequest14 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupAccessDeviceGetAvailableDetailListResponse14';
    public    $name              = __CLASS__;
    protected $serviceProviderId = null;
    protected $groupId           = null;
    protected $isMusicOnHold     = null;
    protected $onlyVideoCapable  = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $isMusicOnHold,
         $onlyVideoCapable
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setIsMusicOnHold($isMusicOnHold);
        $this->setOnlyVideoCapable($onlyVideoCapable);
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
     * 
     */
    public function setIsMusicOnHold($isMusicOnHold = null)
    {
        $this->isMusicOnHold = (boolean) $isMusicOnHold;
    }

    /**
     * 
     */
    public function getIsMusicOnHold()
    {
        return (!$this->isMusicOnHold) ?: $this->isMusicOnHold->getValue();
    }

    /**
     * 
     */
    public function setOnlyVideoCapable($onlyVideoCapable = null)
    {
        $this->onlyVideoCapable = (boolean) $onlyVideoCapable;
    }

    /**
     * 
     */
    public function getOnlyVideoCapable()
    {
        return (!$this->onlyVideoCapable) ?: $this->onlyVideoCapable->getValue();
    }
}
