<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddressRange;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemZoneCallingRestrictionsNetAddressGetListRequest.
 *         Replaced by: SystemZoneNetAddressGetListResponse
 */
class SystemZoneCallingRestrictionsNetAddressGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemZoneCallingRestrictionsNetAddressGetListResponse';
    protected $netAddress;
    protected $netAddressRange;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemZoneCallingRestrictionsNetAddressGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setNetAddress($netAddress = null)
    {
        $this->netAddress = ($netAddress InstanceOf IPAddress)
             ? $netAddress
             : new IPAddress($netAddress);
        $this->netAddress->setName('netAddress');
        return $this;
    }

    /**
     * 
     * @return IPAddress $netAddress
     */
    public function getNetAddress()
    {
        return ($this->netAddress) ? $this->netAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setNetAddressRange(IPAddressRange $netAddressRange = null)
    {
        $this->netAddressRange = ($netAddressRange InstanceOf IPAddressRange)
             ? $netAddressRange
             : new IPAddressRange($netAddressRange);
        $this->netAddressRange->setName('netAddressRange');
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
