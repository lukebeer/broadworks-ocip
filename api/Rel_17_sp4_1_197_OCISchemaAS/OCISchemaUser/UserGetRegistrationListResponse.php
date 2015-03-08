<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserGetRegistrationListRequest.
 *         The table column headings are:
 *           "Device Level", "Device Name", "Order", "URI", "Expiration", "Line/Port", "Endpoint Type".
 *         The "Device Level" column contains one of the AccessDeviceLevel enumerated constants.
 *         The "Line/Port" column in IMS mode can be any Public User Identity which can be either a
 *         SIPURI or a TELURI.
 *         The expiration column will be empty when the registration is static.
 *         The Endpoint Type column contains one of the enumerated EndpointType values.
 *         The Endpoint Type is empty when the registration is against a TELURI.
 *         The table is sorted by: telURI (after SIPURI), Line/Port, static (after dynamic), order.
 */
class UserGetRegistrationListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserGetRegistrationListResponse';
    public    $name              = __CLASS__;
    protected $registrationTable = null;


    /**
     * 
     */
    public function setRegistrationTable(core:OCITable $registrationTable = null)
    {
        $this->registrationTable = core:OCITable $registrationTable;
    }

    /**
     * 
     */
    public function getRegistrationTable()
    {
        return (!$this->registrationTable) ?: $this->registrationTable->getValue();
    }
}
