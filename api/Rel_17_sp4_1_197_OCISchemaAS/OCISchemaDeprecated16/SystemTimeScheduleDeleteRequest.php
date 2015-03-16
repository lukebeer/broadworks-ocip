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
 * Delete a system time schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTimeScheduleDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemTimeScheduleDeleteRequest';
    protected $timeScheduleName;

    public function __construct(
         $timeScheduleName = ''
    ) {
        $this->setTimeScheduleName($timeScheduleName);
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
    public function setTimeScheduleName($timeScheduleName = null)
    {
        $this->timeScheduleName = ($timeScheduleName InstanceOf ScheduleName)
             ? $timeScheduleName
             : new ScheduleName($timeScheduleName);
        $this->timeScheduleName->setName('timeScheduleName');
        return $this;
    }

    /**
     * 
     * @return ScheduleName $timeScheduleName
     */
    public function getTimeScheduleName()
    {
        return ($this->timeScheduleName) ? $this->timeScheduleName->getValue() : null;
    }
}
