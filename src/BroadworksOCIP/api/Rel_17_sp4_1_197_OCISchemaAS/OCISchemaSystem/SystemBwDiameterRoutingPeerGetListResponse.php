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
 * Contains a 6 column table with column headings 'Instance', 'Realm',  'ApplicationID', 'Identity, 'Priority', and 'Weight'.  One row is present for each Diameter Routing Peer.
 */
class SystemBwDiameterRoutingPeerGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemBwDiameterRoutingPeerGetListResponse';
    protected $routingPeerTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemBwDiameterRoutingPeerGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRoutingPeerTable(TableType $routingPeerTable = null)
    {
        $this->routingPeerTable = $routingPeerTable;
        $this->routingPeerTable->setElementName('routingPeerTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getRoutingPeerTable()
    {
        return $this->routingPeerTable;
    }
}
