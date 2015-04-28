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
 * Response to SystemRoutingGetRouteDeviceListRequest. The column headings are "Net Address",
 *         "Port", "Transport" and "Description".
 */
class SystemRoutingGetRouteDeviceListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemRoutingGetRouteDeviceListResponse';
    protected $routeDeviceTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemRoutingGetRouteDeviceListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRouteDeviceTable(TableType $routeDeviceTable = null)
    {
        $this->routeDeviceTable = $routeDeviceTable;
        $this->routeDeviceTable->setElementName('routeDeviceTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getRouteDeviceTable()
    {
        return $this->routeDeviceTable;
    }
}
