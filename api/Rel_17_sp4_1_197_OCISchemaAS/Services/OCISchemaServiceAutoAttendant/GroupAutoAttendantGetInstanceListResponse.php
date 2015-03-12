<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupAutoAttendantGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Video", "Phone Number", "Extension", "Department", "Is Active".
 *         The column values for "Video" and "Is Active" can either be true, or false.
 */
class GroupAutoAttendantGetInstanceListResponse extends ComplexType implements ComplexInterface
{
    public    $name               = 'GroupAutoAttendantGetInstanceListResponse';
    protected $autoAttendantTable = null;

    /**
     * @return GroupAutoAttendantGetInstanceListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAutoAttendantTable(TableType $autoAttendantTable = null)
    {
        if (!$autoAttendantTable) return $this;
        $this->autoAttendantTable = $autoAttendantTable;
        $this->autoAttendantTable->setName('autoAttendantTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getAutoAttendantTable()
    {
        return $this->autoAttendantTable->getValue();
    }
}
