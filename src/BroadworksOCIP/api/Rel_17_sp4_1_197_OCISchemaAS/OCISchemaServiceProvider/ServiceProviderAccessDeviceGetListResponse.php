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
 * Response to ServiceProviderAccessDeviceGetListRequest.
 *         Contains a table of devices configured in the service provider.
 *         The column headings are: "Device Name", "Device Type", "Available Ports",
 *         "Net Address", "MAC Address", and "Status".
 */
class ServiceProviderAccessDeviceGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderAccessDeviceGetListResponse';
    protected $accessDeviceTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderAccessDeviceGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAccessDeviceTable(TableType $accessDeviceTable = null)
    {
        $this->accessDeviceTable = $accessDeviceTable;
        $this->accessDeviceTable->setElementName('accessDeviceTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getAccessDeviceTable()
    {
        return $this->accessDeviceTable;
    }
}
