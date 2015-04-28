<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSpeedDial100; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SpeedDialDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserSpeedDial100GetRequest.
 */
class UserSpeedDial100GetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserSpeedDial100GetResponse';
    protected $phoneNumber;
    protected $description;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSpeedDial100\UserSpeedDial100GetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = ($phoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $phoneNumber
             : new OutgoingDNorSIPURI($phoneNumber);
        $this->phoneNumber->setElementName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $phoneNumber
     */
    public function getPhoneNumber()
    {
        return ($this->phoneNumber)
            ? $this->phoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf SpeedDialDescription)
             ? $description
             : new SpeedDialDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return SpeedDialDescription $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }
}
