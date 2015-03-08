<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NonNegativeInt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to modify session admission control capacity for the group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupSessionAdmissionControlModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                       = __CLASS__;
    protected $serviceProviderId          = null;
    protected $groupId                    = null;
    protected $restrictAggregateSessions  = null;
    protected $maxSessions                = null;
    protected $maxUserOriginatingSessions = null;
    protected $maxUserTerminatingSessions = null;
    protected $countIntraGroupSessions    = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $restrictAggregateSessions = null,
         $maxSessions = null,
         $maxUserOriginatingSessions = null,
         $maxUserTerminatingSessions = null,
         $countIntraGroupSessions = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setRestrictAggregateSessions($restrictAggregateSessions);
        $this->setMaxSessions($maxSessions);
        $this->setMaxUserOriginatingSessions($maxUserOriginatingSessions);
        $this->setMaxUserTerminatingSessions($maxUserTerminatingSessions);
        $this->setCountIntraGroupSessions($countIntraGroupSessions);
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
    public function setRestrictAggregateSessions($restrictAggregateSessions = null)
    {
        $this->restrictAggregateSessions = (boolean) $restrictAggregateSessions;
    }

    /**
     * 
     */
    public function getRestrictAggregateSessions()
    {
        return (!$this->restrictAggregateSessions) ?: $this->restrictAggregateSessions->getValue();
    }

    /**
     * Non-negative integer.
     */
    public function setMaxSessions($maxSessions = null)
    {
        $this->maxSessions = ($maxSessions InstanceOf NonNegativeInt)
             ? $maxSessions
             : new NonNegativeInt($maxSessions);
    }

    /**
     * Non-negative integer.
     */
    public function getMaxSessions()
    {
        return (!$this->maxSessions) ?: $this->maxSessions->getValue();
    }

    /**
     * Non-negative integer.
     */
    public function setMaxUserOriginatingSessions($maxUserOriginatingSessions = null)
    {
        $this->maxUserOriginatingSessions = ($maxUserOriginatingSessions InstanceOf NonNegativeInt)
             ? $maxUserOriginatingSessions
             : new NonNegativeInt($maxUserOriginatingSessions);
    }

    /**
     * Non-negative integer.
     */
    public function getMaxUserOriginatingSessions()
    {
        return (!$this->maxUserOriginatingSessions) ?: $this->maxUserOriginatingSessions->getValue();
    }

    /**
     * Non-negative integer.
     */
    public function setMaxUserTerminatingSessions($maxUserTerminatingSessions = null)
    {
        $this->maxUserTerminatingSessions = ($maxUserTerminatingSessions InstanceOf NonNegativeInt)
             ? $maxUserTerminatingSessions
             : new NonNegativeInt($maxUserTerminatingSessions);
    }

    /**
     * Non-negative integer.
     */
    public function getMaxUserTerminatingSessions()
    {
        return (!$this->maxUserTerminatingSessions) ?: $this->maxUserTerminatingSessions->getValue();
    }

    /**
     * 
     */
    public function setCountIntraGroupSessions($countIntraGroupSessions = null)
    {
        $this->countIntraGroupSessions = (boolean) $countIntraGroupSessions;
    }

    /**
     * 
     */
    public function getCountIntraGroupSessions()
    {
        return (!$this->countIntraGroupSessions) ?: $this->countIntraGroupSessions->getValue();
    }
}
