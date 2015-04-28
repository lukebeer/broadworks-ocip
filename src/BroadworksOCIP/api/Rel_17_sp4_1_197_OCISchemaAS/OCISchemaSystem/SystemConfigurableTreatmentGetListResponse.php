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
 * Response to a SystemConfigurableTreatmentGetListRequest. Contains a table with one row per treatment.
 *         The table columns are: "Treatment Id", "Description".
 */
class SystemConfigurableTreatmentGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemConfigurableTreatmentGetListResponse';
    protected $treatmentTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemConfigurableTreatmentGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTreatmentTable(TableType $treatmentTable = null)
    {
        $this->treatmentTable = $treatmentTable;
        $this->treatmentTable->setElementName('treatmentTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getTreatmentTable()
    {
        return $this->treatmentTable;
    }
}
