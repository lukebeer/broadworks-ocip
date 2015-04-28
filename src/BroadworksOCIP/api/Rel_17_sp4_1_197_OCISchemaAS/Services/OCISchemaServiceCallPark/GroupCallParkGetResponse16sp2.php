<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallPark; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallPark\CallParkDisplayTimerSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallPark\CallParkRecallTimerSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallPark\CallParkRecallTo;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RingPattern;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


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
    public    $elementName = 'GroupCallParkGetResponse16sp2';
    protected $recallTimerSeconds;
    protected $displayTimerSeconds;
    protected $enableDestinationAnnouncement;
    protected $recallAlternateUserId;
    protected $recallRingPattern;
    protected $recallTo;
    protected $alternateUserRecallTimerSeconds;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallPark\GroupCallParkGetResponse16sp2 $response
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
        $this->recallTimerSeconds = ($recallTimerSeconds InstanceOf CallParkRecallTimerSeconds)
             ? $recallTimerSeconds
             : new CallParkRecallTimerSeconds($recallTimerSeconds);
        $this->recallTimerSeconds->setElementName('recallTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return CallParkRecallTimerSeconds $recallTimerSeconds
     */
    public function getRecallTimerSeconds()
    {
        return ($this->recallTimerSeconds)
            ? $this->recallTimerSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDisplayTimerSeconds($displayTimerSeconds = null)
    {
        $this->displayTimerSeconds = ($displayTimerSeconds InstanceOf CallParkDisplayTimerSeconds)
             ? $displayTimerSeconds
             : new CallParkDisplayTimerSeconds($displayTimerSeconds);
        $this->displayTimerSeconds->setElementName('displayTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return CallParkDisplayTimerSeconds $displayTimerSeconds
     */
    public function getDisplayTimerSeconds()
    {
        return ($this->displayTimerSeconds)
            ? $this->displayTimerSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableDestinationAnnouncement($enableDestinationAnnouncement = null)
    {
        $this->enableDestinationAnnouncement = new PrimitiveType($enableDestinationAnnouncement);
        $this->enableDestinationAnnouncement->setElementName('enableDestinationAnnouncement');
        return $this;
    }

    /**
     * 
     * @return boolean $enableDestinationAnnouncement
     */
    public function getEnableDestinationAnnouncement()
    {
        return ($this->enableDestinationAnnouncement)
            ? $this->enableDestinationAnnouncement->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRecallAlternateUserId($recallAlternateUserId = null)
    {
        $this->recallAlternateUserId = ($recallAlternateUserId InstanceOf UserId)
             ? $recallAlternateUserId
             : new UserId($recallAlternateUserId);
        $this->recallAlternateUserId->setElementName('recallAlternateUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $recallAlternateUserId
     */
    public function getRecallAlternateUserId()
    {
        return ($this->recallAlternateUserId)
            ? $this->recallAlternateUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRecallRingPattern($recallRingPattern = null)
    {
        $this->recallRingPattern = ($recallRingPattern InstanceOf RingPattern)
             ? $recallRingPattern
             : new RingPattern($recallRingPattern);
        $this->recallRingPattern->setElementName('recallRingPattern');
        return $this;
    }

    /**
     * 
     * @return RingPattern $recallRingPattern
     */
    public function getRecallRingPattern()
    {
        return ($this->recallRingPattern)
            ? $this->recallRingPattern->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRecallTo($recallTo = null)
    {
        $this->recallTo = ($recallTo InstanceOf CallParkRecallTo)
             ? $recallTo
             : new CallParkRecallTo($recallTo);
        $this->recallTo->setElementName('recallTo');
        return $this;
    }

    /**
     * 
     * @return CallParkRecallTo $recallTo
     */
    public function getRecallTo()
    {
        return ($this->recallTo)
            ? $this->recallTo->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAlternateUserRecallTimerSeconds($alternateUserRecallTimerSeconds = null)
    {
        $this->alternateUserRecallTimerSeconds = ($alternateUserRecallTimerSeconds InstanceOf CallParkRecallTimerSeconds)
             ? $alternateUserRecallTimerSeconds
             : new CallParkRecallTimerSeconds($alternateUserRecallTimerSeconds);
        $this->alternateUserRecallTimerSeconds->setElementName('alternateUserRecallTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return CallParkRecallTimerSeconds $alternateUserRecallTimerSeconds
     */
    public function getAlternateUserRecallTimerSeconds()
    {
        return ($this->alternateUserRecallTimerSeconds)
            ? $this->alternateUserRecallTimerSeconds->getElementValue()
            : null;
    }
}
