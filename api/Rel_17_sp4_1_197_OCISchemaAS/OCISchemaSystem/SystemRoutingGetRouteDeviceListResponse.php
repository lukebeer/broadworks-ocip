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
 * Response to SystemRoutingGetRouteDeviceListRequest. The column headings are "Net Address",
 *         "Port", "Transport" and "Description".
 */
class SystemRoutingGetRouteDeviceListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemRoutingGetRouteDeviceListResponse';
    protected $routeDeviceTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemRoutingGetRouteDeviceListResponse $response
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
