<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Trunk group device endpoint used in the context of modify.
 */
class TrunkGroupDeviceEndpointModify extends ComplexType implements ComplexInterface
{
    public    $elementName = 'TrunkGroupDeviceEndpointModify';
    protected $name;
    protected $linePort;
    protected $contact;

    public function __construct(
         $name = '',
         $linePort = '',
         $contact = null
    ) {
        $this->setName($name);
        $this->setLinePort($linePort);
        $this->setContact($contact);
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
}
