<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallPark\CallParkDisplayTimerSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallPark\CallParkRecallTimerSeconds;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupCallParkGetRequest.
 *           Contains the settings that apply to the whole group for Call Park.
 */
class GroupCallParkGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallParkGetResponse';
    protected $recallTimerSeconds;
    protected $displayTimerSeconds;
    protected $enableDestinationAnnouncement;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\GroupCallParkGetResponse $response
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
}
