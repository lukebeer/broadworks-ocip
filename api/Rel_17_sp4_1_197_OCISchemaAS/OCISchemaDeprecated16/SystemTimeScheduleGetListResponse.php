<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the SystemTimeScheduleGetListRequest.
 *         The response contains all the system time schedule names.
 */
class SystemTimeScheduleGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name         = 'SystemTimeScheduleGetListResponse';
    protected $timeSchedule = null;

    /**
     * @return SystemTimeScheduleGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTimeSchedule($timeSchedule = null)
    {
        if (!$timeSchedule) return $this;
        $this->timeSchedule = ($timeSchedule InstanceOf ScheduleName)
             ? $timeSchedule
             : new ScheduleName($timeSchedule);
        $this->timeSchedule->setName('timeSchedule');
        return $this;
    }

    /**
     * 
     * @return ScheduleName
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule->getValue();
    }
}
