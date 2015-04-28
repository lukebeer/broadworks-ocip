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
 * Response to ServiceProviderGetListRequest.
 *         Contains a 3 column table with column headings 'Service Provider Id', 'Service Provider Name'
 *         and 'Is Enterprise' and a row for each service provider or enterprise.
 */
class ServiceProviderGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderGetListResponse';
    protected $serviceProviderTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderTable(TableType $serviceProviderTable = null)
    {
        $this->serviceProviderTable = $serviceProviderTable;
        $this->serviceProviderTable->setElementName('serviceProviderTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getServiceProviderTable()
    {
        return $this->serviceProviderTable;
    }
}
