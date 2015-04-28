<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\DtmfTransmissionSignalingContentType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\DTMFTransmissionMethod;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the DTMF transmission settings.
 *       The response is either SuccessResponse or an ErrorResponse.
 */
class SystemDTMFTransmissionModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemDTMFTransmissionModifyRequest';
    protected $transmissionMethod;
    protected $signalingContentType;

    public function __construct(
         $transmissionMethod = null,
         $signalingContentType = null
    ) {
        $this->setTransmissionMethod($transmissionMethod);
        $this->setSignalingContentType($signalingContentType);
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
    public function setTransmissionMethod($transmissionMethod = null)
    {
        $this->transmissionMethod = ($transmissionMethod InstanceOf DTMFTransmissionMethod)
             ? $transmissionMethod
             : new DTMFTransmissionMethod($transmissionMethod);
        $this->transmissionMethod->setElementName('transmissionMethod');
        return $this;
    }

    /**
     * 
     * @return DTMFTransmissionMethod $transmissionMethod
     */
    public function getTransmissionMethod()
    {
        return ($this->transmissionMethod)
            ? $this->transmissionMethod->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSignalingContentType($signalingContentType = null)
    {
        $this->signalingContentType = ($signalingContentType InstanceOf DtmfTransmissionSignalingContentType)
             ? $signalingContentType
             : new DtmfTransmissionSignalingContentType($signalingContentType);
        $this->signalingContentType->setElementName('signalingContentType');
        return $this;
    }

    /**
     * 
     * @return DtmfTransmissionSignalingContentType $signalingContentType
     */
    public function getSignalingContentType()
    {
        return ($this->signalingContentType)
            ? $this->signalingContentType->getElementValue()
            : null;
    }
}
