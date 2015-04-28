<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemNetworkRoutingServerGetListRequest. The routing Network Server table column
 *         headings are: "Net Address", "Port", "Transport", "Poll", "OpState", "Description".
 */
class SystemNetworkRoutingServerGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemNetworkRoutingServerGetListResponse';
    protected $networkRoutingServerTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemNetworkRoutingServerGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setNetworkRoutingServerTable(TableType $networkRoutingServerTable = null)
    {
        $this->networkRoutingServerTable = $networkRoutingServerTable;
        $this->networkRoutingServerTable->setElementName('networkRoutingServerTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getNetworkRoutingServerTable()
    {
        return $this->networkRoutingServerTable;
    }
}
