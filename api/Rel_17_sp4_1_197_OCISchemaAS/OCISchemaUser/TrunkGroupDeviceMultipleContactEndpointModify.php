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
 * Trunk group device endpoint used in the context of modify that can have multiple contacts.
 */
class TrunkGroupDeviceMultipleContactEndpointModify extends ComplexType implements ComplexInterface
{
    public    $name        = 'TrunkGroupDeviceMultipleContactEndpointModify';
    protected $name        = null;
    protected $linePort    = null;
    protected $contactList = null;

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
        if (!$name) return $this;
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
     * @return SimpleContent $linePort
     */
    public function getLinePort()
    {
        return $this->linePort->getValue();
    }

    /**
     * 
     */
    public function setContactList($contactList = null)
    {
        if (!$contactList) return $this;
        $this->contactList = new SimpleContent($contactList);
        $this->contactList->setName('contactList');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $contactList
     */
    public function getContactList()
    {
        return $this->contactList->getValue();
    }
}
