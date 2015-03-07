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
    public    $name                                          = __CLASS__;
    protected $webServerClusterPublicFQDN                    = null;
    protected $applicationServerClusterPrimaryPublicFQDN     = null;
    protected $applicationServerClusterSecondaryPublicFQDN   = null;
    protected $applicationServerClusterPrimaryPrivateFQDN    = null;
    protected $applicationServerClusterSecondaryPrivateFQDN  = null;


    public function setWebServerClusterPublicFQDN($webServerClusterPublicFQDN = null)
    {
        $this->webServerClusterPublicFQDN = ($webServerClusterPublicFQDN InstanceOf NetAddress)
             ? $webServerClusterPublicFQDN
             : new NetAddress($webServerClusterPublicFQDN);
    }

    public function getWebServerClusterPublicFQDN()
    {
        return (!$this->webServerClusterPublicFQDN) ?: $this->webServerClusterPublicFQDN->value();
    }

    public function setApplicationServerClusterPrimaryPublicFQDN($applicationServerClusterPrimaryPublicFQDN = null)
    {
        $this->applicationServerClusterPrimaryPublicFQDN = ($applicationServerClusterPrimaryPublicFQDN InstanceOf NetAddress)
             ? $applicationServerClusterPrimaryPublicFQDN
             : new NetAddress($applicationServerClusterPrimaryPublicFQDN);
    }

    public function getApplicationServerClusterPrimaryPublicFQDN()
    {
        return (!$this->applicationServerClusterPrimaryPublicFQDN) ?: $this->applicationServerClusterPrimaryPublicFQDN->value();
    }

    public function setApplicationServerClusterSecondaryPublicFQDN($applicationServerClusterSecondaryPublicFQDN = null)
    {
        $this->applicationServerClusterSecondaryPublicFQDN = ($applicationServerClusterSecondaryPublicFQDN InstanceOf NetAddress)
             ? $applicationServerClusterSecondaryPublicFQDN
             : new NetAddress($applicationServerClusterSecondaryPublicFQDN);
    }

    public function getApplicationServerClusterSecondaryPublicFQDN()
    {
        return (!$this->applicationServerClusterSecondaryPublicFQDN) ?: $this->applicationServerClusterSecondaryPublicFQDN->value();
    }

    public function setApplicationServerClusterPrimaryPrivateFQDN($applicationServerClusterPrimaryPrivateFQDN = null)
    {
        $this->applicationServerClusterPrimaryPrivateFQDN = ($applicationServerClusterPrimaryPrivateFQDN InstanceOf NetAddress)
             ? $applicationServerClusterPrimaryPrivateFQDN
             : new NetAddress($applicationServerClusterPrimaryPrivateFQDN);
    }

    public function getApplicationServerClusterPrimaryPrivateFQDN()
    {
        return (!$this->applicationServerClusterPrimaryPrivateFQDN) ?: $this->applicationServerClusterPrimaryPrivateFQDN->value();
    }

    public function setApplicationServerClusterSecondaryPrivateFQDN($applicationServerClusterSecondaryPrivateFQDN = null)
    {
        $this->applicationServerClusterSecondaryPrivateFQDN = ($applicationServerClusterSecondaryPrivateFQDN InstanceOf NetAddress)
             ? $applicationServerClusterSecondaryPrivateFQDN
             : new NetAddress($applicationServerClusterSecondaryPrivateFQDN);
    }

    public function getApplicationServerClusterSecondaryPrivateFQDN()
    {
        return (!$this->applicationServerClusterSecondaryPrivateFQDN) ?: $this->applicationServerClusterSecondaryPrivateFQDN->value();
    }
}
