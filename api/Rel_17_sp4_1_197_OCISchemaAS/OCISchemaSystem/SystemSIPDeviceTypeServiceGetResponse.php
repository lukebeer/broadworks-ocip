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
     * Response to SystemSIPDeviceTypeServiceGetRequest.
 *         Contains the list of device type services integrated to BroadWorks.
 */
class SystemSIPDeviceTypeServiceGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                 = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSIPDeviceTypeServiceGetResponse';
    public    $name                         = __CLASS__;
    protected $supportsPolycomPhoneServices = null;


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
        return (!$this->supportsPolycomPhoneServices) ?: $this->supportsPolycomPhoneServices->getValue();
    }
}