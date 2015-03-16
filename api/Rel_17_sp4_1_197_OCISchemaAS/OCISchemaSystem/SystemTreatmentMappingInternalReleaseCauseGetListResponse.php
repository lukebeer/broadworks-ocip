<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to a SystemTreatmentMappingInternalReleaseCauseGetListRequest. Contains a table with one row per mapping.
 *         The table columns are: "Internal Release Cause", "Treatment Id".
 */
class SystemTreatmentMappingInternalReleaseCauseGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemTreatmentMappingInternalReleaseCauseGetListResponse';
    protected $treatmentMappingTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemTreatmentMappingInternalReleaseCauseGetListResponse $response
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
        $this->treatmentMappingTable->setName('treatmentMappingTable');
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
