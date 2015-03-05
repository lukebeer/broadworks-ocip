<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemNetworkRoutingServerGetListRequest. The routing Network Server table column
 *         headings are: "Net Address", "Port", "Transport", "Poll", "OpState", "Description".
 */
class SystemNetworkRoutingServerGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $networkRoutingServerTable
    ) {
        $this->networkRoutingServerTable = $networkRoutingServerTable;
        $this->args                      = func_get_args();
    }

    public function setNetworkRoutingServerTable($networkRoutingServerTable)
    {
        $networkRoutingServerTable and $this->networkRoutingServerTable = new core:OCITable($networkRoutingServerTable);
    }

    public function getNetworkRoutingServerTable()
    {
        return (!$this->networkRoutingServerTable) ?: $this->networkRoutingServerTable->value();
    }
}
