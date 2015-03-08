<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Contains a 6 column table with column headings 'Instance', 'Realm',  'ApplicationID', 'Identity, 'Priority', and 'Weight'.  One row is present for each Diameter Routing Peer.
 */
class SystemBwDiameterRoutingPeerGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE     = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemBwDiameterRoutingPeerGetListResponse';
    public    $name             = __CLASS__;
    protected $routingPeerTable = null;


    /**
     * 
     */
    public function setRoutingPeerTable(core:OCITable $routingPeerTable = null)
    {
        $this->routingPeerTable = core:OCITable $routingPeerTable;
    }

    /**
     * 
     */
    public function getRoutingPeerTable()
    {
        return (!$this->routingPeerTable) ?: $this->routingPeerTable->getValue();
    }
}