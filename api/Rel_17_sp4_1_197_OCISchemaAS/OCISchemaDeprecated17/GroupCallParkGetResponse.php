<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallPark\CallParkDisplayTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallPark\CallParkRecallTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\GroupCallParkGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallParkGetRequest.
 *           Contains the settings that apply to the whole group for Call Park.
 */
class GroupCallParkGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                          = __CLASS__;
    protected $recallTimerSeconds            = null;
    protected $displayTimerSeconds           = null;
    protected $enableDestinationAnnouncement = null;

    /**
     * @return GroupCallParkGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
}
