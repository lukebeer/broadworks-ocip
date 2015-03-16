<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RingPattern;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the distinctive ringing configuration values for call center.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterModifyDistinctiveRingingRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterModifyDistinctiveRingingRequest';
    protected $serviceUserId;
    protected $distinctiveRingingCallCenterCalls;
    protected $distinctiveRingingRingPatternForCallCenter;
    protected $distinctiveRingingForceDeliveryRingPattern;

    public function __construct(
         $serviceUserId = '',
         $distinctiveRingingCallCenterCalls = null,
         $distinctiveRingingRingPatternForCallCenter = null,
         $distinctiveRingingForceDeliveryRingPattern = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setDistinctiveRingingCallCenterCalls($distinctiveRingingCallCenterCalls);
        $this->setDistinctiveRingingRingPatternForCallCenter($distinctiveRingingRingPatternForCallCenter);
        $this->setDistinctiveRingingForceDeliveryRingPattern($distinctiveRingingForceDeliveryRingPattern);
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
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setElementName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId)
            ? $this->serviceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDistinctiveRingingCallCenterCalls($distinctiveRingingCallCenterCalls = null)
    {
        $this->distinctiveRingingCallCenterCalls = new PrimitiveType($distinctiveRingingCallCenterCalls);
        $this->distinctiveRingingCallCenterCalls->setElementName('distinctiveRingingCallCenterCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $distinctiveRingingCallCenterCalls
     */
    public function getDistinctiveRingingCallCenterCalls()
    {
        return ($this->distinctiveRingingCallCenterCalls)
            ? $this->distinctiveRingingCallCenterCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDistinctiveRingingRingPatternForCallCenter($distinctiveRingingRingPatternForCallCenter = null)
    {
        $this->distinctiveRingingRingPatternForCallCenter = ($distinctiveRingingRingPatternForCallCenter InstanceOf RingPattern)
             ? $distinctiveRingingRingPatternForCallCenter
             : new RingPattern($distinctiveRingingRingPatternForCallCenter);
        $this->distinctiveRingingRingPatternForCallCenter->setElementName('distinctiveRingingRingPatternForCallCenter');
        return $this;
    }

    /**
     * 
     * @return RingPattern $distinctiveRingingRingPatternForCallCenter
     */
    public function getDistinctiveRingingRingPatternForCallCenter()
    {
        return ($this->distinctiveRingingRingPatternForCallCenter)
            ? $this->distinctiveRingingRingPatternForCallCenter->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDistinctiveRingingForceDeliveryRingPattern($distinctiveRingingForceDeliveryRingPattern = null)
    {
        $this->distinctiveRingingForceDeliveryRingPattern = ($distinctiveRingingForceDeliveryRingPattern InstanceOf RingPattern)
             ? $distinctiveRingingForceDeliveryRingPattern
             : new RingPattern($distinctiveRingingForceDeliveryRingPattern);
        $this->distinctiveRingingForceDeliveryRingPattern->setElementName('distinctiveRingingForceDeliveryRingPattern');
        return $this;
    }

    /**
     * 
     * @return RingPattern $distinctiveRingingForceDeliveryRingPattern
     */
    public function getDistinctiveRingingForceDeliveryRingPattern()
    {
        return ($this->distinctiveRingingForceDeliveryRingPattern)
            ? $this->distinctiveRingingForceDeliveryRingPattern->getElementValue()
            : null;
    }
}
