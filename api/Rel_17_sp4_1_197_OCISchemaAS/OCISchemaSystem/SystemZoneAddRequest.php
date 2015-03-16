<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PhysicalLocation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddressRange;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a Zone and optional Net Addresses and Physical Locations.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemZoneAddRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemZoneAddRequest';
    protected $zoneName;
    protected $netAddress;
    protected $netAddressRange;
    protected $locationBasedPhysicalLocation;
    protected $callingZonePhysicalLocation;

    public function __construct(
         $zoneName = '',
         $netAddress = null,
         $netAddressRange = null,
         $locationBasedPhysicalLocation = null,
         $callingZonePhysicalLocation = null
    ) {
        $this->setZoneName($zoneName);
        $this->setNetAddress($netAddress);
        $this->setNetAddressRange($netAddressRange);
        $this->setLocationBasedPhysicalLocation($locationBasedPhysicalLocation);
        $this->setCallingZonePhysicalLocation($callingZonePhysicalLocation);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setZoneName($zoneName = null)
    {
        $this->zoneName = ($zoneName InstanceOf ZoneName)
             ? $zoneName
             : new ZoneName($zoneName);
        $this->zoneName->setElementName('zoneName');
        return $this;
    }

    /**
     * 
     * @return ZoneName $zoneName
     */
    public function getZoneName()
    {
        return ($this->zoneName)
            ? $this->zoneName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNetAddress($netAddress = null)
    {
        $this->netAddress = ($netAddress InstanceOf IPAddress)
             ? $netAddress
             : new IPAddress($netAddress);
        $this->netAddress->setElementName('netAddress');
        return $this;
    }

    /**
     * 
     * @return IPAddress $netAddress
     */
    public function getNetAddress()
    {
        return ($this->netAddress)
            ? $this->netAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNetAddressRange(IPAddressRange $netAddressRange = null)
    {
        $this->netAddressRange = ($netAddressRange InstanceOf IPAddressRange)
             ? $netAddressRange
             : new IPAddressRange($netAddressRange);
        $this->netAddressRange->setElementName('netAddressRange');
        return $this;
    }

    /**
     * 
     * @return IPAddressRange $netAddressRange
     */
    public function getNetAddressRange()
    {
        return $this->netAddressRange;
    }

    /**
     * 
     */
    public function setLocationBasedPhysicalLocation($locationBasedPhysicalLocation = null)
    {
        $this->locationBasedPhysicalLocation = ($locationBasedPhysicalLocation InstanceOf PhysicalLocation)
             ? $locationBasedPhysicalLocation
             : new PhysicalLocation($locationBasedPhysicalLocation);
        $this->locationBasedPhysicalLocation->setElementName('locationBasedPhysicalLocation');
        return $this;
    }

    /**
     * 
     * @return PhysicalLocation $locationBasedPhysicalLocation
     */
    public function getLocationBasedPhysicalLocation()
    {
        return ($this->locationBasedPhysicalLocation)
            ? $this->locationBasedPhysicalLocation->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallingZonePhysicalLocation($callingZonePhysicalLocation = null)
    {
        $this->callingZonePhysicalLocation = ($callingZonePhysicalLocation InstanceOf PhysicalLocation)
             ? $callingZonePhysicalLocation
             : new PhysicalLocation($callingZonePhysicalLocation);
        $this->callingZonePhysicalLocation->setElementName('callingZonePhysicalLocation');
        return $this;
    }

    /**
     * 
     * @return PhysicalLocation $callingZonePhysicalLocation
     */
    public function getCallingZonePhysicalLocation()
    {
        return ($this->callingZonePhysicalLocation)
            ? $this->callingZonePhysicalLocation->getElementValue()
            : null;
    }
}
