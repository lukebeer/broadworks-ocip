<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddressRange;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemZoneNetAddressGetListRequest.
 */
class SystemZoneNetAddressGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemZoneNetAddressGetListResponse';
    public    $name            = __CLASS__;
    protected $netAddress      = null;
    protected $netAddressRange = null;


    /**
     * Numeric IP Address.
     */
    public function setNetAddress($netAddress = null)
    {
        $this->netAddress = ($netAddress InstanceOf IPAddress)
             ? $netAddress
             : new IPAddress($netAddress);
    }

    /**
     * Numeric IP Address.
     */
    public function getNetAddress()
    {
        return (!$this->netAddress) ?: $this->netAddress->getValue();
    }

    /**
     * IP Address Range.
     */
    public function setNetAddressRange(IPAddressRange $netAddressRange = null)
    {
        $this->netAddressRange = IPAddressRange $netAddressRange;
    }

    /**
     * IP Address Range.
     */
    public function getNetAddressRange()
    {
        return (!$this->netAddressRange) ?: $this->netAddressRange->getValue();
    }
}
