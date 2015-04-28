<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the EnterpriseCallCenterAgentUnavailableCodeGetListRequest.
 *         Contains a table with column headings: "Is Active", "Code", "Description".
 */
class EnterpriseCallCenterAgentUnavailableCodeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseCallCenterAgentUnavailableCodeGetListResponse';
    protected $unavailableCodesTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\EnterpriseCallCenterAgentUnavailableCodeGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUnavailableCodesTable(TableType $unavailableCodesTable = null)
    {
        $this->unavailableCodesTable = $unavailableCodesTable;
        $this->unavailableCodesTable->setElementName('unavailableCodesTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getUnavailableCodesTable()
    {
        return $this->unavailableCodesTable;
    }
}
