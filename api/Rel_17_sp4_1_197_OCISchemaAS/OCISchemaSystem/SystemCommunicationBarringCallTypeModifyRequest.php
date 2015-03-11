<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringCallType;
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
    public    $name                  = 'SystemCommunicationBarringCallTypeModifyRequest';
    protected $callType              = null;
    protected $networkServerCallType = null;

    public function __construct(
         $callType,
         $networkServerCallType = null
    ) {
        $this->setCallType($callType);
        $this->setNetworkServerCallType($networkServerCallType);
    }

    /**
     * @return 
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
        if (!$callType) return $this;
        $this->callType = ($callType InstanceOf CommunicationBarringCallType)
             ? $callType
             : new CommunicationBarringCallType($callType);
        $this->callType->setName('callType');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringCallType
     */
    public function getCallType()
    {
        return $this->callType->getValue();
    }

    /**
     * 
     */
    public function setNetworkServerCallType($networkServerCallType = null)
    {
        if (!$networkServerCallType) return $this;
        $this->networkServerCallType = ($networkServerCallType InstanceOf NetworkServerCallType)
             ? $networkServerCallType
             : new NetworkServerCallType($networkServerCallType);
        $this->networkServerCallType->setName('networkServerCallType');
        return $this;
    }

    /**
     * 
     * @return NetworkServerCallType
     */
    public function getNetworkServerCallType()
    {
        return $this->networkServerCallType->getValue();
    }
}
