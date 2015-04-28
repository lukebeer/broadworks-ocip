<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupAutoAttendantGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Video", "Phone Number", "Extension", "Department", "Is Active".
 *         The column values for "Video" and "Is Active" can either be true, or false.
 */
class GroupAutoAttendantGetInstanceListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupAutoAttendantGetInstanceListResponse';
    protected $autoAttendantTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant\GroupAutoAttendantGetInstanceListResponse $response
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
        $this->autoAttendantTable = $autoAttendantTable;
        $this->autoAttendantTable->setElementName('autoAttendantTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getAutoAttendantTable()
    {
        return $this->autoAttendantTable;
    }
}
