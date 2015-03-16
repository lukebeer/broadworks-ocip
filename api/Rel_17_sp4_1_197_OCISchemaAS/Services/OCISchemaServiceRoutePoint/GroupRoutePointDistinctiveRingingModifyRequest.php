<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RingPattern;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the distinctive ringing configuration values for route point.
 *         
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupRoutePointDistinctiveRingingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupRoutePointDistinctiveRingingModifyRequest';
    protected $serviceUserId;
    protected $enableDistinctiveRinging;
    protected $distinctiveRingingRingPattern;
    protected $distinctiveRingingForceDeliveryRingPattern;

    public function __construct(
         $serviceUserId = '',
         $enableDistinctiveRinging = null,
         $distinctiveRingingRingPattern = null,
         $distinctiveRingingForceDeliveryRingPattern = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setEnableDistinctiveRinging($enableDistinctiveRinging);
        $this->setDistinctiveRingingRingPattern($distinctiveRingingRingPattern);
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
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId) ? $this->serviceUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableDistinctiveRinging($enableDistinctiveRinging = null)
    {
        $this->enableDistinctiveRinging = new PrimitiveType($enableDistinctiveRinging);
        $this->enableDistinctiveRinging->setName('enableDistinctiveRinging');
        return $this;
    }

    /**
     * 
     * @return boolean $enableDistinctiveRinging
     */
    public function getEnableDistinctiveRinging()
    {
        return ($this->enableDistinctiveRinging) ? $this->enableDistinctiveRinging->getValue() : null;
    }

    /**
     * 
     */
    public function setDistinctiveRingingRingPattern($distinctiveRingingRingPattern = null)
    {
        $this->distinctiveRingingRingPattern = ($distinctiveRingingRingPattern InstanceOf RingPattern)
             ? $distinctiveRingingRingPattern
             : new RingPattern($distinctiveRingingRingPattern);
        $this->distinctiveRingingRingPattern->setName('distinctiveRingingRingPattern');
        return $this;
    }

    /**
     * 
     * @return RingPattern $distinctiveRingingRingPattern
     */
    public function getDistinctiveRingingRingPattern()
    {
        return ($this->distinctiveRingingRingPattern) ? $this->distinctiveRingingRingPattern->getValue() : null;
    }

    /**
     * 
     */
    public function setDistinctiveRingingForceDeliveryRingPattern($distinctiveRingingForceDeliveryRingPattern = null)
    {
        $this->distinctiveRingingForceDeliveryRingPattern = ($distinctiveRingingForceDeliveryRingPattern InstanceOf RingPattern)
             ? $distinctiveRingingForceDeliveryRingPattern
             : new RingPattern($distinctiveRingingForceDeliveryRingPattern);
        $this->distinctiveRingingForceDeliveryRingPattern->setName('distinctiveRingingForceDeliveryRingPattern');
        return $this;
    }

    /**
     * 
     * @return RingPattern $distinctiveRingingForceDeliveryRingPattern
     */
    public function getDistinctiveRingingForceDeliveryRingPattern()
    {
        return ($this->distinctiveRingingForceDeliveryRingPattern) ? $this->distinctiveRingingForceDeliveryRingPattern->getValue() : null;
    }
}
