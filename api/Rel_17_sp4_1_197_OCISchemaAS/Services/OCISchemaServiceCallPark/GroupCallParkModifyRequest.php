<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallPark; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallPark\CallParkDisplayTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallPark\CallParkRecallTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallPark\CallParkRecallTo;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RingPattern;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
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
    public    $name                            = 'GroupCallParkModifyRequest';
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
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        if (!$groupId) return $this;
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setRecallTimerSeconds($recallTimerSeconds = null)
    {
        if (!$recallTimerSeconds) return $this;
        $this->recallTimerSeconds = ($recallTimerSeconds InstanceOf CallParkRecallTimerSeconds)
             ? $recallTimerSeconds
             : new CallParkRecallTimerSeconds($recallTimerSeconds);
        $this->recallTimerSeconds->setName('recallTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return CallParkRecallTimerSeconds $recallTimerSeconds
     */
    public function getRecallTimerSeconds()
    {
        return $this->recallTimerSeconds->getValue();
    }

    /**
     * 
     */
    public function setDisplayTimerSeconds($displayTimerSeconds = null)
    {
        if (!$displayTimerSeconds) return $this;
        $this->displayTimerSeconds = ($displayTimerSeconds InstanceOf CallParkDisplayTimerSeconds)
             ? $displayTimerSeconds
             : new CallParkDisplayTimerSeconds($displayTimerSeconds);
        $this->displayTimerSeconds->setName('displayTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return CallParkDisplayTimerSeconds $displayTimerSeconds
     */
    public function getDisplayTimerSeconds()
    {
        return $this->displayTimerSeconds->getValue();
    }

    /**
     * 
     */
    public function setEnableDestinationAnnouncement($enableDestinationAnnouncement = null)
    {
        if (!$enableDestinationAnnouncement) return $this;
        $this->enableDestinationAnnouncement = new PrimitiveType($enableDestinationAnnouncement);
        $this->enableDestinationAnnouncement->setName('enableDestinationAnnouncement');
        return $this;
    }

    /**
     * 
     * @return boolean $enableDestinationAnnouncement
     */
    public function getEnableDestinationAnnouncement()
    {
        return $this->enableDestinationAnnouncement->getValue();
    }

    /**
     * 
     */
    public function setRecallAlternateUserId($recallAlternateUserId = null)
    {
        if (!$recallAlternateUserId) return $this;
        $this->recallAlternateUserId = ($recallAlternateUserId InstanceOf UserId)
             ? $recallAlternateUserId
             : new UserId($recallAlternateUserId);
        $this->recallAlternateUserId->setName('recallAlternateUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $recallAlternateUserId
     */
    public function getRecallAlternateUserId()
    {
        return $this->recallAlternateUserId->getValue();
    }

    /**
     * 
     */
    public function setRecallRingPattern($recallRingPattern = null)
    {
        if (!$recallRingPattern) return $this;
        $this->recallRingPattern = ($recallRingPattern InstanceOf RingPattern)
             ? $recallRingPattern
             : new RingPattern($recallRingPattern);
        $this->recallRingPattern->setName('recallRingPattern');
        return $this;
    }

    /**
     * 
     * @return RingPattern $recallRingPattern
     */
    public function getRecallRingPattern()
    {
        return $this->recallRingPattern->getValue();
    }

    /**
     * 
     */
    public function setRecallTo($recallTo = null)
    {
        if (!$recallTo) return $this;
        $this->recallTo = ($recallTo InstanceOf CallParkRecallTo)
             ? $recallTo
             : new CallParkRecallTo($recallTo);
        $this->recallTo->setName('recallTo');
        return $this;
    }

    /**
     * 
     * @return CallParkRecallTo $recallTo
     */
    public function getRecallTo()
    {
        return $this->recallTo->getValue();
    }

    /**
     * 
     */
    public function setAlternateUserRecallTimerSeconds($alternateUserRecallTimerSeconds = null)
    {
        if (!$alternateUserRecallTimerSeconds) return $this;
        $this->alternateUserRecallTimerSeconds = ($alternateUserRecallTimerSeconds InstanceOf CallParkRecallTimerSeconds)
             ? $alternateUserRecallTimerSeconds
             : new CallParkRecallTimerSeconds($alternateUserRecallTimerSeconds);
        $this->alternateUserRecallTimerSeconds->setName('alternateUserRecallTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return CallParkRecallTimerSeconds $alternateUserRecallTimerSeconds
     */
    public function getAlternateUserRecallTimerSeconds()
    {
        return $this->alternateUserRecallTimerSeconds->getValue();
    }
}
