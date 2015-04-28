<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to a SystemPreferredCarrierGetListRequest. Contains a table with one row per carrier.
 *         The table columns are: "Carrier", "Country Code", "CIC", "Is Intra-Lata", "Is Inter-Lata", "Is International".
 *         The value in the "Is Intra-Lata", "Is Inter-Lata", and "Is International" columns is one of "true" or "false".
 */
class SystemPreferredCarrierGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemPreferredCarrierGetListResponse';
    protected $systemCarrierTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\SystemPreferredCarrierGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setSystemCarrierTable(TableType $systemCarrierTable = null)
    {
        $this->systemCarrierTable = $systemCarrierTable;
        $this->systemCarrierTable->setElementName('systemCarrierTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getSystemCarrierTable()
    {
        return $this->systemCarrierTable;
    }
}
