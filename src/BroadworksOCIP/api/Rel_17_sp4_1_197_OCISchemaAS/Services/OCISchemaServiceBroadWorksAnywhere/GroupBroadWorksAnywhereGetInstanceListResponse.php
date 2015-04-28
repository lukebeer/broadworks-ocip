<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupBroadWorksAnywhereGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Extension", "Department", "Is Active".
 *         The column value for "Is Active" can either be true, or false.
 */
class GroupBroadWorksAnywhereGetInstanceListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupBroadWorksAnywhereGetInstanceListResponse';
    protected $broadWorksAnywhereTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere\GroupBroadWorksAnywhereGetInstanceListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setBroadWorksAnywhereTable(TableType $broadWorksAnywhereTable = null)
    {
        $this->broadWorksAnywhereTable = $broadWorksAnywhereTable;
        $this->broadWorksAnywhereTable->setElementName('broadWorksAnywhereTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getBroadWorksAnywhereTable()
    {
        return $this->broadWorksAnywhereTable;
    }
}
