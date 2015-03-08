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
     * Response to SystemNetworkRoutingServerGetListRequest. The routing Network Server table column
 *         headings are: "Net Address", "Port", "Transport", "Poll", "OpState", "Description".
 */
class SystemNetworkRoutingServerGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE              = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemNetworkRoutingServerGetListResponse';
    public    $name                      = __CLASS__;
    protected $networkRoutingServerTable = null;


    /**
     * 
     */
    public function setNetworkRoutingServerTable(core:OCITable $networkRoutingServerTable = null)
    {
        $this->networkRoutingServerTable = core:OCITable $networkRoutingServerTable;
    }

    /**
     * 
     */
    public function getNetworkRoutingServerTable()
    {
        return (!$this->networkRoutingServerTable) ?: $this->networkRoutingServerTable->getValue();
    }
}