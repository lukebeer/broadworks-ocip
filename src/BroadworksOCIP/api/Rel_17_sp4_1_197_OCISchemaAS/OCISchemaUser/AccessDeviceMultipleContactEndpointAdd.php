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
 * Access device end point used in the context of add that can have more than one contact defined.
 *         Only Static Registration capabable devices may have more than one contact defined.
 */
class AccessDeviceMultipleContactEndpointAdd extends ComplexType implements ComplexInterface
{
    public    $elementName = 'AccessDeviceMultipleContactEndpointAdd';
    protected $accessDevice;
    protected $linePort;
    protected $contact;

    public function __construct(
         $accessDevice = '',
         $linePort = '',
         $contact = null
    ) {
        $this->setAccessDevice($accessDevice);
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
    public function setAccessDevice($accessDevice = null)
    {
        $this->accessDevice = new SimpleContent($accessDevice);
        $this->accessDevice->setElementName('accessDevice');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $accessDevice
     */
    public function getAccessDevice()
    {
        return ($this->accessDevice)
            ? $this->accessDevice->getElementValue()
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
