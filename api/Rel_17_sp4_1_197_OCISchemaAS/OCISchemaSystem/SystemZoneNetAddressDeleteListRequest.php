<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddressRange;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Deletes a list of IP addresses from a zone
 *         The response is SuccessResponse or an ErrorResponse.
 */
class SystemZoneNetAddressDeleteListRequest extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $zoneName         = null;
    protected $netAddress       = null;
    protected $netAddressRange  = null;

    public function __construct(
         $zoneName,
         $netAddress = null,
         IPAddressRange $netAddressRange = null
    ) {
        $this->setZoneName($zoneName);
        $this->setNetAddress($netAddress);
        $this->setNetAddressRange($netAddressRange);
    }

    public function setZoneName($zoneName = null)
    {
        $this->zoneName = ($zoneName InstanceOf ZoneName)
             ? $zoneName
             : new ZoneName($zoneName);
    }

    public function getZoneName()
    {
        return (!$this->zoneName) ?: $this->zoneName->value();
    }

    public function setNetAddress($netAddress = null)
    {
        $this->netAddress = ($netAddress InstanceOf IPAddress)
             ? $netAddress
             : new IPAddress($netAddress);
    }

    public function getNetAddress()
    {
        return (!$this->netAddress) ?: $this->netAddress->value();
    }

    public function setNetAddressRange(IPAddressRange $netAddressRange = null)
    {
    }

    public function getNetAddressRange()
    {
        return (!$this->netAddressRange) ?: $this->netAddressRange->value();
    }
}
