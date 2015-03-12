<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserHolidayScheduleGetListRequest.
 *         The response contains all the user's personal and user's group holiday schedule names.
 */
class UserHolidayScheduleGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = 'UserHolidayScheduleGetListResponse';
    protected $holidayScheduleTable = null;

    /**
     * @return UserHolidayScheduleGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setHolidayScheduleTable(TableType $holidayScheduleTable = null)
    {
        if (!$holidayScheduleTable) return $this;
        $this->holidayScheduleTable = $holidayScheduleTable;
        $this->holidayScheduleTable->setName('holidayScheduleTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getHolidayScheduleTable()
    {
        return $this->holidayScheduleTable;
    }
}
