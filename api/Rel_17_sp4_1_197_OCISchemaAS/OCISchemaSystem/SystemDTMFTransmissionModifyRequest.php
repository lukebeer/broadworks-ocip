<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\DtmfTransmissionSignalingContentType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\DTMFTransmissionMethod;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the DTMF transmission settings.
 *       The response is either SuccessResponse or an ErrorResponse.
 */
class SystemDTMFTransmissionModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                 = 'SystemDTMFTransmissionModifyRequest';
    protected $transmissionMethod   = null;
    protected $signalingContentType = null;

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
        if (!$transmissionMethod) return $this;
        $this->transmissionMethod = ($transmissionMethod InstanceOf DTMFTransmissionMethod)
             ? $transmissionMethod
             : new DTMFTransmissionMethod($transmissionMethod);
        $this->transmissionMethod->setName('transmissionMethod');
        return $this;
    }

    /**
     * 
     * @return DTMFTransmissionMethod $transmissionMethod
     */
    public function getTransmissionMethod()
    {
        return $this->transmissionMethod->getValue();
    }

    /**
     * 
     */
    public function setSignalingContentType($signalingContentType = null)
    {
        if (!$signalingContentType) return $this;
        $this->signalingContentType = ($signalingContentType InstanceOf DtmfTransmissionSignalingContentType)
             ? $signalingContentType
             : new DtmfTransmissionSignalingContentType($signalingContentType);
        $this->signalingContentType->setName('signalingContentType');
        return $this;
    }

    /**
     * 
     * @return DtmfTransmissionSignalingContentType $signalingContentType
     */
    public function getSignalingContentType()
    {
        return $this->signalingContentType->getValue();
    }
}
