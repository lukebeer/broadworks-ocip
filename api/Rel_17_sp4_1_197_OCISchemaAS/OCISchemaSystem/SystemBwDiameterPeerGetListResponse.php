<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Contains a 5 column table with column headings 'Instance', 'Identity', 'IP Address', 'Port', and 'Enabled'. One row is present for each peer.
 */
class SystemBwDiameterPeerGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name      = 'SystemBwDiameterPeerGetListResponse';
    protected $peerTable = null;

    /**
     * @return SystemBwDiameterPeerGetListResponse
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
        if (!$peerTable) return $this;
        $this->peerTable = $peerTable;
        $this->peerTable->setName('peerTable');
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
