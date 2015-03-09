<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\UserTimeScheduleGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserTimeScheduleGetListRequest. The column headings are "Time Schedule" and
 *         "Type".
 *         The response contains user's personal and user's group's schedule names.
 */
class UserTimeScheduleGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $timeScheduleTable = null;

    /**
     * @return UserTimeScheduleGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTimeScheduleTable(core:OCITable $timeScheduleTable = null)
    {
        $this->timeScheduleTable =  $timeScheduleTable;
    }

    /**
     * 
     */
    public function getTimeScheduleTable()
    {
        return (!$this->timeScheduleTable) ?: $this->timeScheduleTable->getValue();
    }
}
