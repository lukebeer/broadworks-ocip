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
 * Trunk group device endpoint that can have multiple contacts.
 */
class TrunkGroupDeviceMultipleContactEndpointRead extends ComplexType implements ComplexInterface
{
    public    $elementName = 'TrunkGroupDeviceMultipleContactEndpointRead';
    protected $name;
    protected $linePort;
    protected $contact;
    protected $staticRegistrationCapable;
    protected $useDomain;
    protected $isPilotUser;

    public function __construct(
         $name = '',
         $linePort = '',
         $contact = null,
         $staticRegistrationCapable = '',
         $useDomain = '',
         $isPilotUser = ''
    ) {
        $this->setName($name);
        $this->setLinePort($linePort);
        $this->setContact($contact);
        $this->setStaticRegistrationCapable($staticRegistrationCapable);
        $this->setUseDomain($useDomain);
        $this->setIsPilotUser($isPilotUser);
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
    public function setName($name = null)
    {
        $this->name = new SimpleContent($name);
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $name
     */
    public function getName()
    {
        return ($this->name)
            ? $this->name->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLinePort($linePort = null)
    {
        $this->linePort = new SimpleContent($linePort);
        $this->linePort->setElementName('linePort');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $linePort
     */
    public function getLinePort()
    {
        return ($this->linePort)
            ? $this->linePort->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setContact($contact = null)
    {
        $this->contact = new SimpleContent($contact);
        $this->contact->setElementName('contact');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $contact
     */
    public function getContact()
    {
        return ($this->contact)
            ? $this->contact->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setStaticRegistrationCapable($staticRegistrationCapable = null)
    {
        $this->staticRegistrationCapable = new SimpleContent($staticRegistrationCapable);
        $this->staticRegistrationCapable->setElementName('staticRegistrationCapable');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $staticRegistrationCapable
     */
    public function getStaticRegistrationCapable()
    {
        return ($this->staticRegistrationCapable)
            ? $this->staticRegistrationCapable->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseDomain($useDomain = null)
    {
        $this->useDomain = new SimpleContent($useDomain);
        $this->useDomain->setElementName('useDomain');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $useDomain
     */
    public function getUseDomain()
    {
        return ($this->useDomain)
            ? $this->useDomain->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsPilotUser($isPilotUser = null)
    {
        $this->isPilotUser = new SimpleContent($isPilotUser);
        $this->isPilotUser->setElementName('isPilotUser');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $isPilotUser
     */
    public function getIsPilotUser()
    {
        return ($this->isPilotUser)
            ? $this->isPilotUser->getElementValue()
            : null;
    }
}
