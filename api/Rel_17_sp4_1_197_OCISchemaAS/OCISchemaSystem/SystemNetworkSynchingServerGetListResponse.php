<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemNetworkSynchingServerGetListRequest. The Network Server table column
 *         headings are: "Net Address", "Port", "Description".
 */
class SystemNetworkSynchingServerGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                             = __CLASS__;
    protected $preferredNetworkServerNetAddress = null;
    protected $networkSynchingServerTable       = null;


    /**
     * IP Address, hostname, or domain.
     */
    public function setPreferredNetworkServerNetAddress($preferredNetworkServerNetAddress = null)
    {
        $this->preferredNetworkServerNetAddress = ($preferredNetworkServerNetAddress InstanceOf NetAddress)
             ? $preferredNetworkServerNetAddress
             : new NetAddress($preferredNetworkServerNetAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getPreferredNetworkServerNetAddress()
    {
        return (!$this->preferredNetworkServerNetAddress) ?: $this->preferredNetworkServerNetAddress->getValue();
    }

    /**
     * 
     */
    public function setNetworkSynchingServerTable(core:OCITable $networkSynchingServerTable = null)
    {
        $this->networkSynchingServerTable =  $networkSynchingServerTable;
    }

    /**
     * 
     */
    public function getNetworkSynchingServerTable()
    {
        return (!$this->networkSynchingServerTable) ?: $this->networkSynchingServerTable->getValue();
    }
}
