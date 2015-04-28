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
 * Contains a 5 column table with column headings 'Instance', 'Identity', 'IP Address', 'Port', and 'Enabled'. One row is present for each peer.
 */
class SystemBwDiameterPeerGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemBwDiameterPeerGetListResponse';
    protected $peerTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemBwDiameterPeerGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPeerTable(TableType $peerTable = null)
    {
        $this->peerTable = $peerTable;
        $this->peerTable->setElementName('peerTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getPeerTable()
    {
        return $this->peerTable;
    }
}
