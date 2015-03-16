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
 * Response to SystemAccessDeviceGetUserListRequest.
 *         The column headings for the deviceUserTable are: "Line/Port", "Last Name",
 *         "First Name", "Phone Number", "Service Provider Id", "Group Id", "User Id",
 *         "User Type", "Endpoint Type", "Primary Line/Port", "Order"
 *         If the identity/device profile is an identity, the table will contain a row for each TEL-URI in the Phone Number column.
 *         If the identity/device profile is a real device, rows for the alternate numbers are not included.
 *         The User Type column contains one of the enumerated UserType values.
 *         The Endpoint Type column contains one of the enumerated EndpointType values.
 */
class SystemAccessDeviceGetUserListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemAccessDeviceGetUserListResponse';
    protected $deviceUserTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemAccessDeviceGetUserListResponse $response
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
        $this->deviceUserTable->setName('deviceUserTable');
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
