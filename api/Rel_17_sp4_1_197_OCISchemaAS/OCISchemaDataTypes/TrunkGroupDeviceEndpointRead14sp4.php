<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupDeviceEndpointRead14sp4;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Trunk group device endpoint.
 */
class TrunkGroupDeviceEndpointRead14sp4 extends ComplexType implements ComplexInterface
{
    public    $responseType              = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupDeviceEndpointRead14sp4';
    public    $name                      = 'TrunkGroupDeviceEndpointRead14sp4';
    protected $name                      = null;
    protected $linePort                  = null;
    protected $contact                   = null;
    protected $staticRegistrationCapable = null;
    protected $useDomain                 = null;
    protected $isPilotUser               = null;

    public function __construct(
         $name,
         $linePort,
         $contact = null,
         $staticRegistrationCapable,
         $useDomain,
         $isPilotUser
    ) {
        $this->setName($name);
        $this->setLinePort($linePort);
        $this->setContact($contact);
        $this->setStaticRegistrationCapable($staticRegistrationCapable);
        $this->setUseDomain($useDomain);
        $this->setIsPilotUser($isPilotUser);
    }

    /**
     * @return TrunkGroupDeviceEndpointRead14sp4
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
        if (!$name) return $this;
        $this->name = new SimpleContent($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getName()
    {
        return $this->name->getValue();
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
     * @return SimpleContent
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
     * @return SimpleContent
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
     * @return SimpleContent
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
     * @return SimpleContent
     */
    public function getUseDomain()
    {
        return $this->useDomain->getValue();
    }

    /**
     * 
     */
    public function setIsPilotUser($isPilotUser = null)
    {
        if (!$isPilotUser) return $this;
        $this->isPilotUser = new SimpleContent($isPilotUser);
        $this->isPilotUser->setName('isPilotUser');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getIsPilotUser()
    {
        return $this->isPilotUser->getValue();
    }
}
