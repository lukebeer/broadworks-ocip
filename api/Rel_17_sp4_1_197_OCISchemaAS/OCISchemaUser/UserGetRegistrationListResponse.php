<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


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
    public    $name              = 'UserGetRegistrationListResponse';
    protected $registrationTable = null;

    /**
     * @return UserGetRegistrationListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRegistrationTable(core:OCITable $registrationTable = null)
    {
        if (!$registrationTable) return $this;
        $this->registrationTable->setName('registrationTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getRegistrationTable()
    {
        return $this->registrationTable->getValue();
    }
}
