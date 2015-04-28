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
 * Response to ServiceProviderAccessDeviceGetUserListRequest.
 *         The column headings for the deviceUserTable are: "Line/Port", "Last Name",
 *         "First Name", "Phone Number", "Group Id", "User Id",
 *         "User Type", "Endpoint Type", "Primary Line/Port", "Order"
 *         In IMS mode, the table will contain a row for each TEL-URI in the Phone Number column.
 *         In standalone mode, rows for the alternate numbers are not included.
 *         The User Type column contains one of the enumerated UserType values.
 *         The Endpoint Type column contains one of the enumerated EndpointType values.
 */
class ServiceProviderAccessDeviceGetUserListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderAccessDeviceGetUserListResponse';
    protected $deviceUserTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderAccessDeviceGetUserListResponse $response
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
