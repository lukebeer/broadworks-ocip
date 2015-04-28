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
 * Response to the SystemCommunicationBarringServiceProviderGetCriteriaUsageListRequest.
 *         The response contains a table of all Service Providers that use the specific Communication Barring criteria. The column headings are "Service Provider Id", "Service Provider Name" and "Is Enterprise"
 */
class SystemCommunicationBarringServiceProviderGetCriteriaUsageListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCommunicationBarringServiceProviderGetCriteriaUsageListResponse';
    protected $serviceProviderTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCommunicationBarringServiceProviderGetCriteriaUsageListResponse $response
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
