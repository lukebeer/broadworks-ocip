<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallPark; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallPark\CallParkDisplayTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallPark\CallParkRecallTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallPark\CallParkRecallTo;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RingPattern;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallPark\GroupCallParkModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modifies the Group's Call Park settings.
 *         The response is either SuccessResponse or ErrorResponse.
 *         
 *         The following elements are only used in AS data mode:
 *          recallAlternateUserId
 *          recallRingPattern
 *          recallTo
 *          alternateUserRecallTimerSeconds
 */
class GroupCallParkModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
    protected $serviceProviderId               = null;
    protected $groupId                         = null;
    protected $recallTimerSeconds              = null;
    protected $displayTimerSeconds             = null;
    protected $enableDestinationAnnouncement   = null;
    protected $recallAlternateUserId           = null;
    protected $recallRingPattern               = null;
    protected $recallTo                        = null;
    protected $alternateUserRecallTimerSeconds = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $recallTimerSeconds = null,
         $displayTimerSeconds = null,
         $enableDestinationAnnouncement = null,
         $recallAlternateUserId = null,
         $recallRingPattern = null,
         $recallTo = null,
         $alternateUserRecallTimerSeconds = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setRecallTimerSeconds($recallTimerSeconds);
        $this->setDisplayTimerSeconds($displayTimerSeconds);
        $this->setEnableDestinationAnnouncement($enableDestinationAnnouncement);
        $this->setRecallAlternateUserId($recallAlternateUserId);
        $this->setRecallRingPattern($recallRingPattern);
        $this->setRecallTo($recallTo);
        $this->setAlternateUserRecallTimerSeconds($alternateUserRecallTimerSeconds);
    }

    /**
     * @return GroupCallParkModifyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
     * The timer determines how long a call can be parked before the parker is recalled.
     */
    public function setRecallTimerSeconds($recallTimerSeconds = null)
    {
        $this->recallTimerSeconds = ($recallTimerSeconds InstanceOf CallParkRecallTimerSeconds)
             ? $recallTimerSeconds
             : new CallParkRecallTimerSeconds($recallTimerSeconds);
    }

    /**
     * The timer determines how long a call can be parked before the parker is recalled.
     */
    public function getRecallTimerSeconds()
    {
        return (!$this->recallTimerSeconds) ?: $this->recallTimerSeconds->getValue();
    }

    /**
     * The timer determines how long the extension/DN of the parked against user is displayed.
     */
    public function setDisplayTimerSeconds($displayTimerSeconds = null)
    {
        $this->displayTimerSeconds = ($displayTimerSeconds InstanceOf CallParkDisplayTimerSeconds)
             ? $displayTimerSeconds
             : new CallParkDisplayTimerSeconds($displayTimerSeconds);
    }

    /**
     * The timer determines how long the extension/DN of the parked against user is displayed.
     */
    public function getDisplayTimerSeconds()
    {
        return (!$this->displayTimerSeconds) ?: $this->displayTimerSeconds->getValue();
    }

    /**
     * 
     */
    public function setEnableDestinationAnnouncement($enableDestinationAnnouncement = null)
    {
        $this->enableDestinationAnnouncement = (boolean) $enableDestinationAnnouncement;
    }

    /**
     * 
     */
    public function getEnableDestinationAnnouncement()
    {
        return (!$this->enableDestinationAnnouncement) ?: $this->enableDestinationAnnouncement;
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
     * The supported ring patterns.
     */
    public function setRecallRingPattern($recallRingPattern = null)
    {
        $this->recallRingPattern = ($recallRingPattern InstanceOf RingPattern)
             ? $recallRingPattern
             : new RingPattern($recallRingPattern);
    }

    /**
     * The supported ring patterns.
     */
    public function getRecallRingPattern()
    {
        return (!$this->recallRingPattern) ?: $this->recallRingPattern->getValue();
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

    /**
     * The timer determines how long a call can be parked before the parker is recalled.
     */
    public function setAlternateUserRecallTimerSeconds($alternateUserRecallTimerSeconds = null)
    {
        $this->alternateUserRecallTimerSeconds = ($alternateUserRecallTimerSeconds InstanceOf CallParkRecallTimerSeconds)
             ? $alternateUserRecallTimerSeconds
             : new CallParkRecallTimerSeconds($alternateUserRecallTimerSeconds);
    }

    /**
     * The timer determines how long a call can be parked before the parker is recalled.
     */
    public function getAlternateUserRecallTimerSeconds()
    {
        return (!$this->alternateUserRecallTimerSeconds) ?: $this->alternateUserRecallTimerSeconds->getValue();
    }
}
