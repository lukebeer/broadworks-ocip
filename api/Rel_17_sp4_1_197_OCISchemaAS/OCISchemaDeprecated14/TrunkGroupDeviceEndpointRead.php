<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Trunk group device endpoint.
 */
class TrunkGroupDeviceEndpointRead extends ComplexType implements ComplexInterface
{
    public    $name = 'TrunkGroupDeviceEndpointRead';
    protected $serviceUserId;
    protected $name;
    protected $linePort;
    protected $contact;
    protected $staticRegistrationCapable;
    protected $useDomain;

    public function __construct(
         $serviceUserId = '',
         $name = '',
         $linePort = '',
         $contact = null,
         $staticRegistrationCapable = '',
         $useDomain = ''
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setName($name);
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
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = new SimpleContent($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId) ? $this->serviceUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        $this->name = new SimpleContent($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $name
     */
    public function getName()
    {
        return ($this->name) ? $this->name->getValue() : null;
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
