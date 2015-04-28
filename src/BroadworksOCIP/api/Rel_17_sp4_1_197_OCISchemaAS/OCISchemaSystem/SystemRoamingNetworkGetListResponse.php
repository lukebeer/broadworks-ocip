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
 * Response to the SystemRoamingNetworkGetListRequest.
 *         Contains a table with columns: "MSC Address", "Network Translation Index".
 */
class SystemRoamingNetworkGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemRoamingNetworkGetListResponse';
    protected $roamingNetworkTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemRoamingNetworkGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRoamingNetworkTable(TableType $roamingNetworkTable = null)
    {
        $this->roamingNetworkTable = $roamingNetworkTable;
        $this->roamingNetworkTable->setElementName('roamingNetworkTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getRoamingNetworkTable()
    {
        return $this->roamingNetworkTable;
    }
}
