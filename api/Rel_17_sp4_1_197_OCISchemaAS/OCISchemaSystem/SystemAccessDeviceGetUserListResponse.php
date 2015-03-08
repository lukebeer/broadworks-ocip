<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


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
    const     RESPONSE_TYPE    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemAccessDeviceGetUserListResponse';
    public    $name            = __CLASS__;
    protected $deviceUserTable = null;


    /**
     * 
     */
    public function setDeviceUserTable(core:OCITable $deviceUserTable = null)
    {
        $this->deviceUserTable = core:OCITable $deviceUserTable;
    }

    /**
     * 
     */
    public function getDeviceUserTable()
    {
        return (!$this->deviceUserTable) ?: $this->deviceUserTable->getValue();
    }
}