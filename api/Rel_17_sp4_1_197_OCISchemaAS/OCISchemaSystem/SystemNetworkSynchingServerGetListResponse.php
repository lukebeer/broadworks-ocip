<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemNetworkSynchingServerGetListRequest. The Network Server table column
 *         headings are: "Net Address", "Port", "Description".
 */
class SystemNetworkSynchingServerGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $preferredNetworkServerNetAddress=null,
             $networkSynchingServerTable
    ) {
        $this->preferredNetworkServerNetAddress = new NetAddress($preferredNetworkServerNetAddress);
        $this->networkSynchingServerTable       = $networkSynchingServerTable;
        $this->args                             = func_get_args();
    }

    public function setPreferredNetworkServerNetAddress($preferredNetworkServerNetAddress)
    {
        $preferredNetworkServerNetAddress and $this->preferredNetworkServerNetAddress = new NetAddress($preferredNetworkServerNetAddress);
    }

    public function getPreferredNetworkServerNetAddress()
    {
        return (!$this->preferredNetworkServerNetAddress) ?: $this->preferredNetworkServerNetAddress->value();
    }

    public function setNetworkSynchingServerTable($networkSynchingServerTable)
    {
        $networkSynchingServerTable and $this->networkSynchingServerTable = new core:OCITable($networkSynchingServerTable);
    }

    public function getNetworkSynchingServerTable()
    {
        return (!$this->networkSynchingServerTable) ?: $this->networkSynchingServerTable->value();
    }
}
