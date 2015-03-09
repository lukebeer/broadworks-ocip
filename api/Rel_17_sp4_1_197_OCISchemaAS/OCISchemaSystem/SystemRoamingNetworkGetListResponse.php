<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemRoamingNetworkGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the SystemRoamingNetworkGetListRequest.
 *         Contains a table with columns: "MSC Address", "Network Translation Index".
 */
class SystemRoamingNetworkGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $roamingNetworkTable = null;

    /**
     * @return SystemRoamingNetworkGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRoamingNetworkTable(core:OCITable $roamingNetworkTable = null)
    {
        $this->roamingNetworkTable =  $roamingNetworkTable;
    }

    /**
     * 
     */
    public function getRoamingNetworkTable()
    {
        return (!$this->roamingNetworkTable) ?: $this->roamingNetworkTable->getValue();
    }
}
