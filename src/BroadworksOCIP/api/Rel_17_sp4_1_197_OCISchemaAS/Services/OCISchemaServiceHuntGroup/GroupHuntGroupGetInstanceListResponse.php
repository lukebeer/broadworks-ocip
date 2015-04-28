<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHuntGroup; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupHuntGroupGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Extension", "Department", "Is Active", "Policy".
 *         The column values for "Is Active" can either be true, or false.
 *         NOTE: prior to release 14, the policy column did not match the HuntPolicy enumerated type.
 */
class GroupHuntGroupGetInstanceListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupHuntGroupGetInstanceListResponse';
    protected $huntGroupTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHuntGroup\GroupHuntGroupGetInstanceListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setHuntGroupTable(TableType $huntGroupTable = null)
    {
        $this->huntGroupTable = $huntGroupTable;
        $this->huntGroupTable->setElementName('huntGroupTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getHuntGroupTable()
    {
        return $this->huntGroupTable;
    }
}
