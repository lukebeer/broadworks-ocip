<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemServerAddressesGetRequest.
 *         Contains a list of system Server Addresses.
 *         See also:
 *           PrimaryInfoGetResponse
 *           PublicClusterGetFullyQualifiedDomainNameResponse
 *           ServingInfoGetResponse
 */
class SystemServerAddressesGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                                 = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemServerAddressesGetResponse';
    public    $name                                         = __CLASS__;
    protected $webServerClusterPublicFQDN                   = null;
    protected $applicationServerClusterPrimaryPublicFQDN    = null;
    protected $applicationServerClusterSecondaryPublicFQDN  = null;
    protected $applicationServerClusterPrimaryPrivateFQDN   = null;
    protected $applicationServerClusterSecondaryPrivateFQDN = null;


    /**
     * IP Address, hostname, or domain.
     */
    public function setWebServerClusterPublicFQDN($webServerClusterPublicFQDN = null)
    {
        $this->webServerClusterPublicFQDN = ($webServerClusterPublicFQDN InstanceOf NetAddress)
             ? $webServerClusterPublicFQDN
             : new NetAddress($webServerClusterPublicFQDN);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getWebServerClusterPublicFQDN()
    {
        return (!$this->webServerClusterPublicFQDN) ?: $this->webServerClusterPublicFQDN->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setApplicationServerClusterPrimaryPublicFQDN($applicationServerClusterPrimaryPublicFQDN = null)
    {
        $this->applicationServerClusterPrimaryPublicFQDN = ($applicationServerClusterPrimaryPublicFQDN InstanceOf NetAddress)
             ? $applicationServerClusterPrimaryPublicFQDN
             : new NetAddress($applicationServerClusterPrimaryPublicFQDN);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getApplicationServerClusterPrimaryPublicFQDN()
    {
        return (!$this->applicationServerClusterPrimaryPublicFQDN) ?: $this->applicationServerClusterPrimaryPublicFQDN->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setApplicationServerClusterSecondaryPublicFQDN($applicationServerClusterSecondaryPublicFQDN = null)
    {
        $this->applicationServerClusterSecondaryPublicFQDN = ($applicationServerClusterSecondaryPublicFQDN InstanceOf NetAddress)
             ? $applicationServerClusterSecondaryPublicFQDN
             : new NetAddress($applicationServerClusterSecondaryPublicFQDN);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getApplicationServerClusterSecondaryPublicFQDN()
    {
        return (!$this->applicationServerClusterSecondaryPublicFQDN) ?: $this->applicationServerClusterSecondaryPublicFQDN->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setApplicationServerClusterPrimaryPrivateFQDN($applicationServerClusterPrimaryPrivateFQDN = null)
    {
        $this->applicationServerClusterPrimaryPrivateFQDN = ($applicationServerClusterPrimaryPrivateFQDN InstanceOf NetAddress)
             ? $applicationServerClusterPrimaryPrivateFQDN
             : new NetAddress($applicationServerClusterPrimaryPrivateFQDN);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getApplicationServerClusterPrimaryPrivateFQDN()
    {
        return (!$this->applicationServerClusterPrimaryPrivateFQDN) ?: $this->applicationServerClusterPrimaryPrivateFQDN->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setApplicationServerClusterSecondaryPrivateFQDN($applicationServerClusterSecondaryPrivateFQDN = null)
    {
        $this->applicationServerClusterSecondaryPrivateFQDN = ($applicationServerClusterSecondaryPrivateFQDN InstanceOf NetAddress)
             ? $applicationServerClusterSecondaryPrivateFQDN
             : new NetAddress($applicationServerClusterSecondaryPrivateFQDN);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getApplicationServerClusterSecondaryPrivateFQDN()
    {
        return (!$this->applicationServerClusterSecondaryPrivateFQDN) ?: $this->applicationServerClusterSecondaryPrivateFQDN->getValue();
    }
}
