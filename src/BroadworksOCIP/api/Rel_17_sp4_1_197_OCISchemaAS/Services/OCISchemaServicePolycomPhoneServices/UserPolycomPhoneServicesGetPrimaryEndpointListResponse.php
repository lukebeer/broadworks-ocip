<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePolycomPhoneServices; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserPolycomPhoneServicesGetPrimaryEndpointListRequest.
 *         The column headings for the deviceUserTable are: "Device Level", "Device Name", "Line/Port".
 */
class UserPolycomPhoneServicesGetPrimaryEndpointListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserPolycomPhoneServicesGetPrimaryEndpointListResponse';
    protected $deviceUserTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePolycomPhoneServices\UserPolycomPhoneServicesGetPrimaryEndpointListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDeviceUserTable(TableType $deviceUserTable = null)
    {
        $this->deviceUserTable = $deviceUserTable;
        $this->deviceUserTable->setElementName('deviceUserTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getDeviceUserTable()
    {
        return $this->deviceUserTable;
    }
}
