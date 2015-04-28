<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddressRange;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Deletes a list of IP addresses from a zone
 *         The response is SuccessResponse or an ErrorResponse.
 *         Replaced by: SystemZoneNetAddressDeleteListRequest
 */
class SystemZoneCallingRestrictionsNetAddressDeleteListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemZoneCallingRestrictionsNetAddressDeleteListRequest';
    protected $zoneName;
    protected $netAddress;
    protected $netAddressRange;

    public function __construct(
         $zoneName = '',
         $netAddress = null,
         $netAddressRange = null
    ) {
        $this->setZoneName($zoneName);
        $this->setNetAddress($netAddress);
        $this->setNetAddressRange($netAddressRange);
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
}
