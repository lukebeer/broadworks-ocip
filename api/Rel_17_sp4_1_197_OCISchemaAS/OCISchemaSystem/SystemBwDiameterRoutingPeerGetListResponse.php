<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemBwDiameterRoutingPeerGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Contains a 6 column table with column headings 'Instance', 'Realm',  'ApplicationID', 'Identity, 'Priority', and 'Weight'.  One row is present for each Diameter Routing Peer.
 */
class SystemBwDiameterRoutingPeerGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $routingPeerTable = null;

    /**
     * @return SystemBwDiameterRoutingPeerGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRoutingPeerTable(core:OCITable $routingPeerTable = null)
    {
        $this->routingPeerTable =  $routingPeerTable;
    }

    /**
     * 
     */
    public function getRoutingPeerTable()
    {
        return (!$this->routingPeerTable) ?: $this->routingPeerTable->getValue();
    }
}
