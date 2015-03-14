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
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify Server Addresses.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemServerAddressesModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                         = 'SystemServerAddressesModifyRequest';
    protected $webServerClusterPublicFQDN                   = null;
    protected $applicationServerClusterPrimaryPublicFQDN    = null;
    protected $applicationServerClusterSecondaryPublicFQDN  = null;
    protected $applicationServerClusterPrimaryPrivateFQDN   = null;
    protected $applicationServerClusterSecondaryPrivateFQDN = null;

    public function __construct(
         $webServerClusterPublicFQDN = null,
         $applicationServerClusterPrimaryPublicFQDN = null,
         $applicationServerClusterSecondaryPublicFQDN = null,
         $applicationServerClusterPrimaryPrivateFQDN = null,
         $applicationServerClusterSecondaryPrivateFQDN = null
    ) {
        $this->setWebServerClusterPublicFQDN($webServerClusterPublicFQDN);
        $this->setApplicationServerClusterPrimaryPublicFQDN($applicationServerClusterPrimaryPublicFQDN);
        $this->setApplicationServerClusterSecondaryPublicFQDN($applicationServerClusterSecondaryPublicFQDN);
        $this->setApplicationServerClusterPrimaryPrivateFQDN($applicationServerClusterPrimaryPrivateFQDN);
        $this->setApplicationServerClusterSecondaryPrivateFQDN($applicationServerClusterSecondaryPrivateFQDN);
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
    public function setWebServerClusterPublicFQDN($webServerClusterPublicFQDN = null)
    {
        if (!$webServerClusterPublicFQDN) return $this;
        $this->webServerClusterPublicFQDN = ($webServerClusterPublicFQDN InstanceOf NetAddress)
             ? $webServerClusterPublicFQDN
             : new NetAddress($webServerClusterPublicFQDN);
        $this->webServerClusterPublicFQDN->setName('webServerClusterPublicFQDN');
        return $this;
    }

    /**
     * 
     * @return NetAddress $webServerClusterPublicFQDN
     */
    public function getWebServerClusterPublicFQDN()
    {
        return $this->webServerClusterPublicFQDN->getValue();
    }

    /**
     * 
     */
    public function setApplicationServerClusterPrimaryPublicFQDN($applicationServerClusterPrimaryPublicFQDN = null)
    {
        if (!$applicationServerClusterPrimaryPublicFQDN) return $this;
        $this->applicationServerClusterPrimaryPublicFQDN = ($applicationServerClusterPrimaryPublicFQDN InstanceOf NetAddress)
             ? $applicationServerClusterPrimaryPublicFQDN
             : new NetAddress($applicationServerClusterPrimaryPublicFQDN);
        $this->applicationServerClusterPrimaryPublicFQDN->setName('applicationServerClusterPrimaryPublicFQDN');
        return $this;
    }

    /**
     * 
     * @return NetAddress $applicationServerClusterPrimaryPublicFQDN
     */
    public function getApplicationServerClusterPrimaryPublicFQDN()
    {
        return $this->applicationServerClusterPrimaryPublicFQDN->getValue();
    }

    /**
     * 
     */
    public function setApplicationServerClusterSecondaryPublicFQDN($applicationServerClusterSecondaryPublicFQDN = null)
    {
        if (!$applicationServerClusterSecondaryPublicFQDN) return $this;
        $this->applicationServerClusterSecondaryPublicFQDN = ($applicationServerClusterSecondaryPublicFQDN InstanceOf NetAddress)
             ? $applicationServerClusterSecondaryPublicFQDN
             : new NetAddress($applicationServerClusterSecondaryPublicFQDN);
        $this->applicationServerClusterSecondaryPublicFQDN->setName('applicationServerClusterSecondaryPublicFQDN');
        return $this;
    }

    /**
     * 
     * @return NetAddress $applicationServerClusterSecondaryPublicFQDN
     */
    public function getApplicationServerClusterSecondaryPublicFQDN()
    {
        return $this->applicationServerClusterSecondaryPublicFQDN->getValue();
    }

    /**
     * 
     */
    public function setApplicationServerClusterPrimaryPrivateFQDN($applicationServerClusterPrimaryPrivateFQDN = null)
    {
        if (!$applicationServerClusterPrimaryPrivateFQDN) return $this;
        $this->applicationServerClusterPrimaryPrivateFQDN = ($applicationServerClusterPrimaryPrivateFQDN InstanceOf NetAddress)
             ? $applicationServerClusterPrimaryPrivateFQDN
             : new NetAddress($applicationServerClusterPrimaryPrivateFQDN);
        $this->applicationServerClusterPrimaryPrivateFQDN->setName('applicationServerClusterPrimaryPrivateFQDN');
        return $this;
    }

    /**
     * 
     * @return NetAddress $applicationServerClusterPrimaryPrivateFQDN
     */
    public function getApplicationServerClusterPrimaryPrivateFQDN()
    {
        return $this->applicationServerClusterPrimaryPrivateFQDN->getValue();
    }

    /**
     * 
     */
    public function setApplicationServerClusterSecondaryPrivateFQDN($applicationServerClusterSecondaryPrivateFQDN = null)
    {
        if (!$applicationServerClusterSecondaryPrivateFQDN) return $this;
        $this->applicationServerClusterSecondaryPrivateFQDN = ($applicationServerClusterSecondaryPrivateFQDN InstanceOf NetAddress)
             ? $applicationServerClusterSecondaryPrivateFQDN
             : new NetAddress($applicationServerClusterSecondaryPrivateFQDN);
        $this->applicationServerClusterSecondaryPrivateFQDN->setName('applicationServerClusterSecondaryPrivateFQDN');
        return $this;
    }

    /**
     * 
     * @return NetAddress $applicationServerClusterSecondaryPrivateFQDN
     */
    public function getApplicationServerClusterSecondaryPrivateFQDN()
    {
        return $this->applicationServerClusterSecondaryPrivateFQDN->getValue();
    }
}
