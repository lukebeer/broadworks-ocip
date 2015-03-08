<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePolycomPhoneServices; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserPolycomPhoneServicesGetPrimaryEndpointListRequest.
 *         The column headings for the deviceUserTable are: "Device Level", "Device Name", "Line/Port".
 */
class UserPolycomPhoneServicesGetPrimaryEndpointListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePolycomPhoneServices\UserPolycomPhoneServicesGetPrimaryEndpointListResponse';
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
