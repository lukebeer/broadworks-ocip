<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkServerCallType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


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
