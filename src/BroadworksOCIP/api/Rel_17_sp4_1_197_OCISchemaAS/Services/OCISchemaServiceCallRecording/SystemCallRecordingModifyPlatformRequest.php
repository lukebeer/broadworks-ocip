<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallRecording; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallRecording\CallRecordingPlatformDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallRecording\CallRecordingPlatformName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallRecording\MediaStream;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TransportProtocol;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the specified Call Recording platform.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCallRecordingModifyPlatformRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCallRecordingModifyPlatformRequest';
    protected $name;
    protected $netAddress;
    protected $port;
    protected $mediaStream;
    protected $becomeSystemDefault;
    protected $transportType;
    protected $description;

    public function __construct(
         $name = '',
         $netAddress = null,
         $port = null,
         $mediaStream = null,
         $becomeSystemDefault = null,
         $transportType = null,
         $description = null
    ) {
        $this->setName($name);
        $this->setNetAddress($netAddress);
        $this->setPort($port);
        $this->setMediaStream($mediaStream);
        $this->setBecomeSystemDefault($becomeSystemDefault);
        $this->setTransportType($transportType);
        $this->setDescription($description);
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
        $this->name = ($name InstanceOf CallRecordingPlatformName)
             ? $name
             : new CallRecordingPlatformName($name);
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return CallRecordingPlatformName $name
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
    public function setNetAddress($netAddress = null)
    {
        $this->netAddress = ($netAddress InstanceOf NetAddress)
             ? $netAddress
             : new NetAddress($netAddress);
        $this->netAddress->setElementName('netAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $netAddress
     */
    public function getNetAddress()
    {
        return ($this->netAddress)
            ? $this->netAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPort($port = null)
    {
        $this->port = ($port InstanceOf Port)
             ? $port
             : new Port($port);
        $this->port->setElementName('port');
        return $this;
    }

    /**
     * 
     * @return Port $port
     */
    public function getPort()
    {
        return ($this->port)
            ? $this->port->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMediaStream($mediaStream = null)
    {
        $this->mediaStream = ($mediaStream InstanceOf MediaStream)
             ? $mediaStream
             : new MediaStream($mediaStream);
        $this->mediaStream->setElementName('mediaStream');
        return $this;
    }

    /**
     * 
     * @return MediaStream $mediaStream
     */
    public function getMediaStream()
    {
        return ($this->mediaStream)
            ? $this->mediaStream->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBecomeSystemDefault($becomeSystemDefault = null)
    {
        $this->becomeSystemDefault = new PrimitiveType($becomeSystemDefault);
        $this->becomeSystemDefault->setElementName('becomeSystemDefault');
        return $this;
    }

    /**
     * 
     * @return boolean $becomeSystemDefault
     */
    public function getBecomeSystemDefault()
    {
        return ($this->becomeSystemDefault)
            ? $this->becomeSystemDefault->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTransportType($transportType = null)
    {
        $this->transportType = ($transportType InstanceOf TransportProtocol)
             ? $transportType
             : new TransportProtocol($transportType);
        $this->transportType->setElementName('transportType');
        return $this;
    }

    /**
     * 
     * @return TransportProtocol $transportType
     */
    public function getTransportType()
    {
        return ($this->transportType)
            ? $this->transportType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf CallRecordingPlatformDescription)
             ? $description
             : new CallRecordingPlatformDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return CallRecordingPlatformDescription $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }
}
