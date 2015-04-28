<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringCallType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkServerCallType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify a Communication Barring Call Type.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCommunicationBarringCallTypeModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCommunicationBarringCallTypeModifyRequest';
    protected $callType;
    protected $networkServerCallType;

    public function __construct(
         $callType = '',
         $networkServerCallType = null
    ) {
        $this->setCallType($callType);
        $this->setNetworkServerCallType($networkServerCallType);
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
    public function setCallType($callType = null)
    {
        $this->callType = ($callType InstanceOf CommunicationBarringCallType)
             ? $callType
             : new CommunicationBarringCallType($callType);
        $this->callType->setElementName('callType');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringCallType $callType
     */
    public function getCallType()
    {
        return ($this->callType)
            ? $this->callType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNetworkServerCallType($networkServerCallType = null)
    {
        $this->networkServerCallType = ($networkServerCallType InstanceOf NetworkServerCallType)
             ? $networkServerCallType
             : new NetworkServerCallType($networkServerCallType);
        $this->networkServerCallType->setElementName('networkServerCallType');
        return $this;
    }

    /**
     * 
     * @return NetworkServerCallType $networkServerCallType
     */
    public function getNetworkServerCallType()
    {
        return ($this->networkServerCallType)
            ? $this->networkServerCallType->getElementValue()
            : null;
    }
}
