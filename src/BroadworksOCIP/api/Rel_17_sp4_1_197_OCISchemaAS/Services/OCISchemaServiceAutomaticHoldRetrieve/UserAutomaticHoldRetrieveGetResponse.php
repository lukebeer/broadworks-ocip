<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticHoldRetrieve; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticHoldRetrieve\AutomaticHoldRetrieveRecallTimerSeconds;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserAutomaticHoldRetrieveGetRequest.
 */
class UserAutomaticHoldRetrieveGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserAutomaticHoldRetrieveGetResponse';
    protected $isActive;
    protected $recallTimerSeconds;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticHoldRetrieve\UserAutomaticHoldRetrieveGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRecallTimerSeconds($recallTimerSeconds = null)
    {
        $this->recallTimerSeconds = ($recallTimerSeconds InstanceOf AutomaticHoldRetrieveRecallTimerSeconds)
             ? $recallTimerSeconds
             : new AutomaticHoldRetrieveRecallTimerSeconds($recallTimerSeconds);
        $this->recallTimerSeconds->setElementName('recallTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return AutomaticHoldRetrieveRecallTimerSeconds $recallTimerSeconds
     */
    public function getRecallTimerSeconds()
    {
        return ($this->recallTimerSeconds)
            ? $this->recallTimerSeconds->getElementValue()
            : null;
    }
}
