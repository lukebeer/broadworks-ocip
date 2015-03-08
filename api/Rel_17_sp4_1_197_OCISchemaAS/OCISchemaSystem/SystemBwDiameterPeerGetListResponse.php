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
     * Contains a 5 column table with column headings 'Instance', 'Identity', 'IP Address', 'Port', and 'Enabled'. One row is present for each peer.
 */
class SystemBwDiameterPeerGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemBwDiameterPeerGetListResponse';
    public    $name      = __CLASS__;
    protected $peerTable = null;


    /**
     * 
     */
    public function setPeerTable(core:OCITable $peerTable = null)
    {
        $this->peerTable = core:OCITable $peerTable;
    }

    /**
     * 
     */
    public function getPeerTable()
    {
        return (!$this->peerTable) ?: $this->peerTable->getValue();
    }
}