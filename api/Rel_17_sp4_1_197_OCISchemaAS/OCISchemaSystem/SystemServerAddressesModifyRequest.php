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
    public    $elementName = 'SystemServerAddressesModifyRequest';
    protected $webServerClusterPublicFQDN;
    protected $applicationServerClusterPrimaryPublicFQDN;
    protected $applicationServerClusterSecondaryPublicFQDN;
    protected $applicationServerClusterPrimaryPrivateFQDN;
    protected $applicationServerClusterSecondaryPrivateFQDN;

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
        $this->webServerClusterPublicFQDN = ($webServerClusterPublicFQDN InstanceOf NetAddress)
             ? $webServerClusterPublicFQDN
             : new NetAddress($webServerClusterPublicFQDN);
        $this->webServerClusterPublicFQDN->setElementName('webServerClusterPublicFQDN');
        return $this;
    }

    /**
     * 
     * @return NetAddress $webServerClusterPublicFQDN
     */
    public function getWebServerClusterPublicFQDN()
    {
        return ($this->webServerClusterPublicFQDN)
            ? $this->webServerClusterPublicFQDN->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setApplicationServerClusterPrimaryPublicFQDN($applicationServerClusterPrimaryPublicFQDN = null)
    {
        $this->applicationServerClusterPrimaryPublicFQDN = ($applicationServerClusterPrimaryPublicFQDN InstanceOf NetAddress)
             ? $applicationServerClusterPrimaryPublicFQDN
             : new NetAddress($applicationServerClusterPrimaryPublicFQDN);
        $this->applicationServerClusterPrimaryPublicFQDN->setElementName('applicationServerClusterPrimaryPublicFQDN');
        return $this;
    }

    /**
     * 
     * @return NetAddress $applicationServerClusterPrimaryPublicFQDN
     */
    public function getApplicationServerClusterPrimaryPublicFQDN()
    {
        return ($this->applicationServerClusterPrimaryPublicFQDN)
            ? $this->applicationServerClusterPrimaryPublicFQDN->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setApplicationServerClusterSecondaryPublicFQDN($applicationServerClusterSecondaryPublicFQDN = null)
    {
        $this->applicationServerClusterSecondaryPublicFQDN = ($applicationServerClusterSecondaryPublicFQDN InstanceOf NetAddress)
             ? $applicationServerClusterSecondaryPublicFQDN
             : new NetAddress($applicationServerClusterSecondaryPublicFQDN);
        $this->applicationServerClusterSecondaryPublicFQDN->setElementName('applicationServerClusterSecondaryPublicFQDN');
        return $this;
    }

    /**
     * 
     * @return NetAddress $applicationServerClusterSecondaryPublicFQDN
     */
    public function getApplicationServerClusterSecondaryPublicFQDN()
    {
        return ($this->applicationServerClusterSecondaryPublicFQDN)
            ? $this->applicationServerClusterSecondaryPublicFQDN->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setApplicationServerClusterPrimaryPrivateFQDN($applicationServerClusterPrimaryPrivateFQDN = null)
    {
        $this->applicationServerClusterPrimaryPrivateFQDN = ($applicationServerClusterPrimaryPrivateFQDN InstanceOf NetAddress)
             ? $applicationServerClusterPrimaryPrivateFQDN
             : new NetAddress($applicationServerClusterPrimaryPrivateFQDN);
        $this->applicationServerClusterPrimaryPrivateFQDN->setElementName('applicationServerClusterPrimaryPrivateFQDN');
        return $this;
    }

    /**
     * 
     * @return NetAddress $applicationServerClusterPrimaryPrivateFQDN
     */
    public function getApplicationServerClusterPrimaryPrivateFQDN()
    {
        return ($this->applicationServerClusterPrimaryPrivateFQDN)
            ? $this->applicationServerClusterPrimaryPrivateFQDN->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setApplicationServerClusterSecondaryPrivateFQDN($applicationServerClusterSecondaryPrivateFQDN = null)
    {
        $this->applicationServerClusterSecondaryPrivateFQDN = ($applicationServerClusterSecondaryPrivateFQDN InstanceOf NetAddress)
             ? $applicationServerClusterSecondaryPrivateFQDN
             : new NetAddress($applicationServerClusterSecondaryPrivateFQDN);
        $this->applicationServerClusterSecondaryPrivateFQDN->setElementName('applicationServerClusterSecondaryPrivateFQDN');
        return $this;
    }

    /**
     * 
     * @return NetAddress $applicationServerClusterSecondaryPrivateFQDN
     */
    public function getApplicationServerClusterSecondaryPrivateFQDN()
    {
        return ($this->applicationServerClusterSecondaryPrivateFQDN)
            ? $this->applicationServerClusterSecondaryPrivateFQDN->getElementValue()
            : null;
    }
}
