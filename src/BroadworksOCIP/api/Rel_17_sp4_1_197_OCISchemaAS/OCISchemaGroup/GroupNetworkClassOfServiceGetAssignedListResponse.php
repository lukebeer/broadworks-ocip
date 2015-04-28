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
 * Response to GroupNetworkClassOfServiceGetAssignedListRequest.
 *         Contains a table of all Network Classes of Service assigned to
 *         the group. The column headings are: "Name", "Description" and "Default".
 */
class GroupNetworkClassOfServiceGetAssignedListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupNetworkClassOfServiceGetAssignedListResponse';
    protected $networkClassOfServiceTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupNetworkClassOfServiceGetAssignedListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setNetworkClassOfServiceTable(TableType $networkClassOfServiceTable = null)
    {
        $this->networkClassOfServiceTable = $networkClassOfServiceTable;
        $this->networkClassOfServiceTable->setElementName('networkClassOfServiceTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getNetworkClassOfServiceTable()
    {
        return $this->networkClassOfServiceTable;
    }
}
