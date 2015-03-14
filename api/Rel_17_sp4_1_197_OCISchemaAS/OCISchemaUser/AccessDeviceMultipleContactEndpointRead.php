<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Access device end point that can have multiple contacts.
 */
class AccessDeviceMultipleContactEndpointRead extends ComplexType implements ComplexInterface
{
    public    $name                      = 'AccessDeviceMultipleContactEndpointRead';
    protected $accessDevice              = null;
    protected $linePort                  = null;
    protected $contact                   = null;
    protected $staticRegistrationCapable = null;
    protected $useDomain                 = null;

    public function __construct(
         $accessDevice,
         $linePort,
         $contact = null,
         $staticRegistrationCapable,
         $useDomain
    ) {
        $this->setAccessDevice($accessDevice);
        $this->setLinePort($linePort);
        $this->setContact($contact);
        $this->setStaticRegistrationCapable($staticRegistrationCapable);
        $this->setUseDomain($useDomain);
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
    public function setAccessDevice($accessDevice = null)
    {
        if (!$accessDevice) return $this;
        $this->accessDevice = new SimpleContent($accessDevice);
        $this->accessDevice->setName('accessDevice');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $accessDevice
     */
    public function getAccessDevice()
    {
        return $this->accessDevice->getValue();
    }

    /**
     * 
     */
    public function setLinePort($linePort = null)
    {
        if (!$linePort) return $this;
        $this->linePort = new SimpleContent($linePort);
        $this->linePort->setName('linePort');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $linePort
     */
    public function getLinePort()
    {
        return $this->linePort->getValue();
    }

    /**
     * 
     */
    public function setContact($contact = null)
    {
        if (!$contact) return $this;
        $this->contact = new SimpleContent($contact);
        $this->contact->setName('contact');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $contact
     */
    public function getContact()
    {
        return $this->contact->getValue();
    }

    /**
     * 
     */
    public function setStaticRegistrationCapable($staticRegistrationCapable = null)
    {
        if (!$staticRegistrationCapable) return $this;
        $this->staticRegistrationCapable = new SimpleContent($staticRegistrationCapable);
        $this->staticRegistrationCapable->setName('staticRegistrationCapable');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $staticRegistrationCapable
     */
    public function getStaticRegistrationCapable()
    {
        return $this->staticRegistrationCapable->getValue();
    }

    /**
     * 
     */
    public function setUseDomain($useDomain = null)
    {
        if (!$useDomain) return $this;
        $this->useDomain = new SimpleContent($useDomain);
        $this->useDomain->setName('useDomain');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $useDomain
     */
    public function getUseDomain()
    {
        return $this->useDomain->getValue();
    }
}
