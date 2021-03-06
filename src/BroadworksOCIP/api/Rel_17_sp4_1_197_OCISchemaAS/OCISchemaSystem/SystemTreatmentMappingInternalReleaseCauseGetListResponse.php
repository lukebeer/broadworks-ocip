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
 * Response to a SystemTreatmentMappingInternalReleaseCauseGetListRequest. Contains a table with one row per mapping.
 *         The table columns are: "Internal Release Cause", "Treatment Id".
 */
class SystemTreatmentMappingInternalReleaseCauseGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemTreatmentMappingInternalReleaseCauseGetListResponse';
    protected $treatmentMappingTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemTreatmentMappingInternalReleaseCauseGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTreatmentMappingTable(TableType $treatmentMappingTable = null)
    {
        $this->treatmentMappingTable = $treatmentMappingTable;
        $this->treatmentMappingTable->setElementName('treatmentMappingTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getTreatmentMappingTable()
    {
        return $this->treatmentMappingTable;
    }
}
