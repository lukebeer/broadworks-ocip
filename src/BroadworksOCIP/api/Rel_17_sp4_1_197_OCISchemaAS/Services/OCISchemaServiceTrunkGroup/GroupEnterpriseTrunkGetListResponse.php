<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupEnterpriseTrunkGetListRequest.
 *         Contains a table of enterprise trunks defined in the enterprise
 *         The column headings are: "Enterprise Trunk Name", "Routing Type"
 */
class GroupEnterpriseTrunkGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupEnterpriseTrunkGetListResponse';
    protected $enterpriseTrunkTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\GroupEnterpriseTrunkGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnterpriseTrunkTable(TableType $enterpriseTrunkTable = null)
    {
        $this->enterpriseTrunkTable = $enterpriseTrunkTable;
        $this->enterpriseTrunkTable->setElementName('enterpriseTrunkTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getEnterpriseTrunkTable()
    {
        return $this->enterpriseTrunkTable;
    }
}
