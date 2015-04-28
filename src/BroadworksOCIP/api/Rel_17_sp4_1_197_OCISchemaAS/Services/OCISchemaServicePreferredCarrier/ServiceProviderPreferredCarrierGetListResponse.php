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
 * Response to a ServiceProviderPreferredCarrierGetListRequest. Contains a table with one row per carrier.
 *         The table columns are: "Country Code", "Intra-Lata PIC", "Inter-Lata PIC", "International PIC".
 */
class ServiceProviderPreferredCarrierGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderPreferredCarrierGetListResponse';
    protected $serviceProviderCarrierTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\ServiceProviderPreferredCarrierGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderCarrierTable(TableType $serviceProviderCarrierTable = null)
    {
        $this->serviceProviderCarrierTable = $serviceProviderCarrierTable;
        $this->serviceProviderCarrierTable->setElementName('serviceProviderCarrierTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getServiceProviderCarrierTable()
    {
        return $this->serviceProviderCarrierTable;
    }
}
