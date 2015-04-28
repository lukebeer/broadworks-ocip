<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupRoutePointExternalSystemGetAssignedListRequest.
 *         Contains a table of all Route Point External Systems assigned to the
 * 	group.  The column headings are: "Name" and "Description".
 */
class GroupRoutePointExternalSystemGetAssignedListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupRoutePointExternalSystemGetAssignedListResponse';
    protected $externalSystemTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupRoutePointExternalSystemGetAssignedListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setExternalSystemTable(TableType $externalSystemTable = null)
    {
        $this->externalSystemTable = $externalSystemTable;
        $this->externalSystemTable->setElementName('externalSystemTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getExternalSystemTable()
    {
        return $this->externalSystemTable;
    }
}
