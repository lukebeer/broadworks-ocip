<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Information about the primary server in the high-availablity cluster.
 *         For optimization, we only get the hostname and addresses for primary if they are
 *         explicitly requested or if the current server is not the primary.
 */
class PrimaryInfoGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'PrimaryInfoGetResponse';
    protected $isPrimary;
    protected $hostnameForPrimary;
    protected $addressForPrimary;
    protected $privateAddressForPrimary;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\PrimaryInfoGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Is the server that processed this request the primary in the cluster?
     */
    public function setIsPrimary($isPrimary = null)
    {
        $this->isPrimary = new PrimitiveType($isPrimary);
        $this->isPrimary->setElementName('isPrimary');
        return $this;
    }

    /**
     * Is the server that processed this request the primary in the cluster?
     * @return boolean $isPrimary
     */
    public function getIsPrimary()
    {
        return ($this->isPrimary)
            ? $this->isPrimary->getElementValue()
            : null;
    }

    /**
     * Primary server's hostname.
     */
    public function setHostnameForPrimary($hostnameForPrimary = null)
    {
        $this->hostnameForPrimary = ($hostnameForPrimary InstanceOf NetAddress)
             ? $hostnameForPrimary
             : new NetAddress($hostnameForPrimary);
        $this->hostnameForPrimary->setElementName('hostnameForPrimary');
        return $this;
    }

    /**
     * Primary server's hostname.
     * @return NetAddress $hostnameForPrimary
     */
    public function getHostnameForPrimary()
    {
        return ($this->hostnameForPrimary)
            ? $this->hostnameForPrimary->getElementValue()
            : null;
    }

    /**
     * List of addresses for primary server in cluster.
     */
    public function setAddressForPrimary($addressForPrimary = null)
    {
        $this->addressForPrimary = ($addressForPrimary InstanceOf NetAddress)
             ? $addressForPrimary
             : new NetAddress($addressForPrimary);
        $this->addressForPrimary->setElementName('addressForPrimary');
        return $this;
    }

    /**
     * List of addresses for primary server in cluster.
     * @return NetAddress $addressForPrimary
     */
    public function getAddressForPrimary()
    {
        return ($this->addressForPrimary)
            ? $this->addressForPrimary->getElementValue()
            : null;
    }

    /**
     * List of private addresses for primary server in cluster.
     */
    public function setPrivateAddressForPrimary($privateAddressForPrimary = null)
    {
        $this->privateAddressForPrimary = ($privateAddressForPrimary InstanceOf NetAddress)
             ? $privateAddressForPrimary
             : new NetAddress($privateAddressForPrimary);
        $this->privateAddressForPrimary->setElementName('privateAddressForPrimary');
        return $this;
    }

    /**
     * List of private addresses for primary server in cluster.
     * @return NetAddress $privateAddressForPrimary
     */
    public function getPrivateAddressForPrimary()
    {
        return ($this->privateAddressForPrimary)
            ? $this->privateAddressForPrimary->getElementValue()
            : null;
    }
}
