<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to ServiceProviderServicePackGetServiceUsageListRequest.
 *         The column headings are "Service Pack Name", "Total Packs" and "Allocated to Groups"
 */
class ServiceProviderServicePackGetServiceUsageListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderServicePackGetServiceUsageListResponse';
    protected $serviceUsageTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderServicePackGetServiceUsageListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUsageTable(TableType $serviceUsageTable = null)
    {
        $this->serviceUsageTable = $serviceUsageTable;
        $this->serviceUsageTable->setElementName('serviceUsageTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getServiceUsageTable()
    {
        return $this->serviceUsageTable;
    }
}
