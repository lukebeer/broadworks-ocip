<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSIPDeviceTypeServiceGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemSIPDeviceTypeServiceGetRequest.
 *         Contains the list of device type services integrated to BroadWorks.
 */
class SystemSIPDeviceTypeServiceGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                         = __CLASS__;
    protected $supportsPolycomPhoneServices = null;

    /**
     * @return SystemSIPDeviceTypeServiceGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setSupportsPolycomPhoneServices($supportsPolycomPhoneServices = null)
    {
        $this->supportsPolycomPhoneServices = (boolean) $supportsPolycomPhoneServices;
    }

    /**
     * 
     */
    public function getSupportsPolycomPhoneServices()
    {
        return (!$this->supportsPolycomPhoneServices) ?: $this->supportsPolycomPhoneServices;
    }
}
