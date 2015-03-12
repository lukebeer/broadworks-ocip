<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to a ServiceProviderPreferredCarrierGetListRequest. Contains a table with one row per carrier.
 *         The table columns are: "Country Code", "Intra-Lata PIC", "Inter-Lata PIC", "International PIC".
 */
class ServiceProviderPreferredCarrierGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                        = 'ServiceProviderPreferredCarrierGetListResponse';
    protected $serviceProviderCarrierTable = null;

    /**
     * @return ServiceProviderPreferredCarrierGetListResponse
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
        if (!$serviceProviderCarrierTable) return $this;
        $this->serviceProviderCarrierTable = $serviceProviderCarrierTable;
        $this->serviceProviderCarrierTable->setName('serviceProviderCarrierTable');
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
