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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RingPattern;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallParkGetRequest16sp2.
 *         Contains the settings that apply to the whole group for Call Park.
 *         
 *         The following elements are only used in AS data mode:
 *          recallAlternateUserId       
 *          recallRingPattern
 *          recallTo
 *          alternateUserRecallTimerSeconds
 */
class GroupCallParkGetResponse16sp2 extends ComplexType implements ComplexInterface
{
    public    $name                            = 'GroupCallParkGetResponse16sp2';
    protected $recallTimerSeconds              = null;
    protected $displayTimerSeconds             = null;
    protected $enableDestinationAnnouncement   = null;
    protected $recallAlternateUserId           = null;
    protected $recallRingPattern               = null;
    protected $recallTo                        = null;
    protected $alternateUserRecallTimerSeconds = null;

    /**
     * @return GroupCallParkGetResponse16sp2
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
     * @return CallParkRecallTimerSeconds
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
     * @return CallParkDisplayTimerSeconds
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
     * @return xs:boolean
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
     * @return UserId
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
     * @return RingPattern
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
     * @return CallParkRecallTo
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
     * @return CallParkRecallTimerSeconds
     */
    public function getAlternateUserRecallTimerSeconds()
    {
        return $this->alternateUserRecallTimerSeconds->getValue();
    }
}
