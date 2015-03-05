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
    public    $name = __CLASS__;

    public function __construct(
             $webServerClusterPublicFQDN=null,
             $applicationServerClusterPrimaryPublicFQDN=null,
             $applicationServerClusterSecondaryPublicFQDN=null,
             $applicationServerClusterPrimaryPrivateFQDN=null,
             $applicationServerClusterSecondaryPrivateFQDN=null
    ) {
        $this->webServerClusterPublicFQDN                   = new NetAddress($webServerClusterPublicFQDN);
        $this->applicationServerClusterPrimaryPublicFQDN    = new NetAddress($applicationServerClusterPrimaryPublicFQDN);
        $this->applicationServerClusterSecondaryPublicFQDN  = new NetAddress($applicationServerClusterSecondaryPublicFQDN);
        $this->applicationServerClusterPrimaryPrivateFQDN   = new NetAddress($applicationServerClusterPrimaryPrivateFQDN);
        $this->applicationServerClusterSecondaryPrivateFQDN = new NetAddress($applicationServerClusterSecondaryPrivateFQDN);
        $this->args                                         = func_get_args();
    }

    public function setWebServerClusterPublicFQDN($webServerClusterPublicFQDN)
    {
        $webServerClusterPublicFQDN and $this->webServerClusterPublicFQDN = new NetAddress($webServerClusterPublicFQDN);
    }

    public function getWebServerClusterPublicFQDN()
    {
        return (!$this->webServerClusterPublicFQDN) ?: $this->webServerClusterPublicFQDN->value();
    }

    public function setApplicationServerClusterPrimaryPublicFQDN($applicationServerClusterPrimaryPublicFQDN)
    {
        $applicationServerClusterPrimaryPublicFQDN and $this->applicationServerClusterPrimaryPublicFQDN = new NetAddress($applicationServerClusterPrimaryPublicFQDN);
    }

    public function getApplicationServerClusterPrimaryPublicFQDN()
    {
        return (!$this->applicationServerClusterPrimaryPublicFQDN) ?: $this->applicationServerClusterPrimaryPublicFQDN->value();
    }

    public function setApplicationServerClusterSecondaryPublicFQDN($applicationServerClusterSecondaryPublicFQDN)
    {
        $applicationServerClusterSecondaryPublicFQDN and $this->applicationServerClusterSecondaryPublicFQDN = new NetAddress($applicationServerClusterSecondaryPublicFQDN);
    }

    public function getApplicationServerClusterSecondaryPublicFQDN()
    {
        return (!$this->applicationServerClusterSecondaryPublicFQDN) ?: $this->applicationServerClusterSecondaryPublicFQDN->value();
    }

    public function setApplicationServerClusterPrimaryPrivateFQDN($applicationServerClusterPrimaryPrivateFQDN)
    {
        $applicationServerClusterPrimaryPrivateFQDN and $this->applicationServerClusterPrimaryPrivateFQDN = new NetAddress($applicationServerClusterPrimaryPrivateFQDN);
    }

    public function getApplicationServerClusterPrimaryPrivateFQDN()
    {
        return (!$this->applicationServerClusterPrimaryPrivateFQDN) ?: $this->applicationServerClusterPrimaryPrivateFQDN->value();
    }

    public function setApplicationServerClusterSecondaryPrivateFQDN($applicationServerClusterSecondaryPrivateFQDN)
    {
        $applicationServerClusterSecondaryPrivateFQDN and $this->applicationServerClusterSecondaryPrivateFQDN = new NetAddress($applicationServerClusterSecondaryPrivateFQDN);
    }

    public function getApplicationServerClusterSecondaryPrivateFQDN()
    {
        return (!$this->applicationServerClusterSecondaryPrivateFQDN) ?: $this->applicationServerClusterSecondaryPrivateFQDN->value();
    }
}
