<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Trunk group device endpoint used in the context of modify that can have multiple contacts.
 */
class TrunkGroupDeviceMultipleContactEndpointModify extends ComplexType implements ComplexInterface
{
    public    $elementName = 'TrunkGroupDeviceMultipleContactEndpointModify';
    protected $name;
    protected $linePort;
    protected $contactList;

    public function __construct(
         $name = null,
         $linePort = null,
         $contactList = null
    ) {
        $this->setName($name);
        $this->setLinePort($linePort);
        $this->setContactList($contactList);
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
    public function setContactList($contactList = null)
    {
        $this->contactList = new SimpleContent($contactList);
        $this->contactList->setElementName('contactList');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $contactList
     */
    public function getContactList()
    {
        return ($this->contactList)
            ? $this->contactList->getElementValue()
            : null;
    }
}
