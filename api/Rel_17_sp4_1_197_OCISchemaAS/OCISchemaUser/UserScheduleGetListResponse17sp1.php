<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleGlobalKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserScheduleGetListRequest17sp1.
 *         The response contains a list of schedules viewable by the user. It contains the schedules 
 *         defined for the user and the group the user belongs to. If the user belongs to an enterprise, 
 *         the list also contains the schedules defined for the enterprise.
 */
class UserScheduleGetListResponse17sp1 extends ComplexType implements ComplexInterface
{
    public    $name              = 'UserScheduleGetListResponse17sp1';
    protected $scheduleGlobalKey = null;

    /**
     * @return UserScheduleGetListResponse17sp1
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setScheduleGlobalKey(ScheduleGlobalKey $scheduleGlobalKey = null)
    {
        if (!$scheduleGlobalKey) return $this;
        $this->scheduleGlobalKey = $scheduleGlobalKey;
        $this->scheduleGlobalKey->setName('scheduleGlobalKey');
        return $this;
    }

    /**
     * 
     * @return ScheduleGlobalKey
     */
    public function getScheduleGlobalKey()
    {
        return $this->scheduleGlobalKey;
    }
}
