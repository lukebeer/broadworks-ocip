<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemTreatmentMappingNetworkSIPStatusGetListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to a SystemTreatmentMappingNetworkSIPStatusGetListRequest. Contains a table with one row per mapping.
 *         The table columns are: "SIP Status Code", "Treatment Id".
 */
class SystemTreatmentMappingNetworkSIPStatusGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                  = __CLASS__;
    protected $treatmentMappingTable = null;

    /**
     * @return SystemTreatmentMappingNetworkSIPStatusGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTreatmentMappingTable(core:OCITable $treatmentMappingTable = null)
    {
        $this->treatmentMappingTable =  $treatmentMappingTable;
    }

    /**
     * 
     */
    public function getTreatmentMappingTable()
    {
        return (!$this->treatmentMappingTable) ?: $this->treatmentMappingTable->getValue();
    }
}
