<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddressRange;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemZoneCallingRestrictionsNetAddressGetListRequest.
 *         Replaced by: SystemZoneNetAddressGetListResponse
 */
class SystemZoneCallingRestrictionsNetAddressGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $netAddress=null,
             IPAddressRange $netAddressRange=null
    ) {
        $this->netAddress      = new IPAddress($netAddress);
        $this->netAddressRange = $netAddressRange;
        $this->args            = func_get_args();
    }

    public function setNetAddress($netAddress)
    {
        $netAddress and $this->netAddress = new IPAddress($netAddress);
    }

    public function getNetAddress()
    {
        return (!$this->netAddress) ?: $this->netAddress->value();
    }

    public function setNetAddressRange($netAddressRange)
    {
        $netAddressRange and $this->netAddressRange = new IPAddressRange($netAddressRange);
    }

    public function getNetAddressRange()
    {
        return (!$this->netAddressRange) ?: $this->netAddressRange->value();
    }
}
