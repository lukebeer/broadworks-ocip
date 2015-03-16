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
    public    $name = 'AccessDeviceMultipleContactEndpointRead';
    protected $accessDevice;
    protected $linePort;
    protected $contact;
    protected $staticRegistrationCapable;
    protected $useDomain;

    public function __construct(
         $accessDevice = '',
         $linePort = '',
         $contact = null,
         $staticRegistrationCapable = '',
         $useDomain = ''
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
        return ($this->accessDevice) ? $this->accessDevice->getValue() : null;
    }

    /**
     * 
     */
    public function setLinePort($linePort = null)
    {
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
        return ($this->linePort) ? $this->linePort->getValue() : null;
    }

    /**
     * 
     */
    public function setContact($contact = null)
    {
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
        return ($this->contact) ? $this->contact->getValue() : null;
    }

    /**
     * 
     */
    public function setStaticRegistrationCapable($staticRegistrationCapable = null)
    {
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
        return ($this->staticRegistrationCapable) ? $this->staticRegistrationCapable->getValue() : null;
    }

    /**
     * 
     */
    public function setUseDomain($useDomain = null)
    {
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
        return ($this->useDomain) ? $this->useDomain->getValue() : null;
    }
}
