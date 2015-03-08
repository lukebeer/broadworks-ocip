<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddressRange;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Adds a list of IP addresses to a zone
 *         The response is SuccessResponse or an ErrorResponse.
 *         Replaced by: SystemZoneNetAddressAddListRequest
 */
class SystemZoneCallingRestrictionsNetAddressAddListRequest extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $zoneName        = null;
    protected $netAddress      = null;
    protected $netAddressRange = null;

    public function __construct(
         $zoneName,
         $netAddress = null,
         IPAddressRange $netAddressRange = null
    ) {
        $this->setZoneName($zoneName);
        $this->setNetAddress($netAddress);
        $this->setNetAddressRange($netAddressRange);
    }

    /**
     * Zone Name.
     */
    public function setZoneName($zoneName = null)
    {
        $this->zoneName = ($zoneName InstanceOf ZoneName)
             ? $zoneName
             : new ZoneName($zoneName);
    }

    /**
     * Zone Name.
     */
    public function getZoneName()
    {
        return (!$this->zoneName) ?: $this->zoneName->getValue();
    }

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
