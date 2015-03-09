<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin\PrimaryInfoGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Information about the primary server in the high-availablity cluster.
 *         For optimization, we only get the hostname and addresses for primary if they are
 *         explicitly requested or if the current server is not the primary.
 */
class PrimaryInfoGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                     = __CLASS__;
    protected $isPrimary                = null;
    protected $hostnameForPrimary       = null;
    protected $addressForPrimary        = null;
    protected $privateAddressForPrimary = null;

    /**
     * @return PrimaryInfoGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsPrimary($isPrimary = null)
    {
        $this->isPrimary = (boolean) $isPrimary;
    }

    /**
     * 
     */
    public function getIsPrimary()
    {
        return (!$this->isPrimary) ?: $this->isPrimary;
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setHostnameForPrimary($hostnameForPrimary = null)
    {
        $this->hostnameForPrimary = ($hostnameForPrimary InstanceOf NetAddress)
             ? $hostnameForPrimary
             : new NetAddress($hostnameForPrimary);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getHostnameForPrimary()
    {
        return (!$this->hostnameForPrimary) ?: $this->hostnameForPrimary->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setAddressForPrimary($addressForPrimary = null)
    {
        $this->addressForPrimary = ($addressForPrimary InstanceOf NetAddress)
             ? $addressForPrimary
             : new NetAddress($addressForPrimary);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getAddressForPrimary()
    {
        return (!$this->addressForPrimary) ?: $this->addressForPrimary->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setPrivateAddressForPrimary($privateAddressForPrimary = null)
    {
        $this->privateAddressForPrimary = ($privateAddressForPrimary InstanceOf NetAddress)
             ? $privateAddressForPrimary
             : new NetAddress($privateAddressForPrimary);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getPrivateAddressForPrimary()
    {
        return (!$this->privateAddressForPrimary) ?: $this->privateAddressForPrimary->getValue();
    }
}
