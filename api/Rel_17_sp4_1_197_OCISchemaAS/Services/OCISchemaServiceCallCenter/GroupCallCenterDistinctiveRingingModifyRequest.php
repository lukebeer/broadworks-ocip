<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RingPattern;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\GroupCallCenterDistinctiveRingingModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the distinctive ringing configuration values for call center.
 *         
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterDistinctiveRingingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                       = __CLASS__;
    protected $serviceUserId                              = null;
    protected $distinctiveRingingCallCenterCalls          = null;
    protected $distinctiveRingingRingPatternForCallCenter = null;
    protected $distinctiveRingingForceDeliveryRingPattern = null;

    public function __construct(
         $serviceUserId,
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
     * @return GroupCallCenterDistinctiveRingingModifyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setDistinctiveRingingCallCenterCalls($distinctiveRingingCallCenterCalls = null)
    {
        $this->distinctiveRingingCallCenterCalls = (boolean) $distinctiveRingingCallCenterCalls;
    }

    /**
     * 
     */
    public function getDistinctiveRingingCallCenterCalls()
    {
        return (!$this->distinctiveRingingCallCenterCalls) ?: $this->distinctiveRingingCallCenterCalls;
    }

    /**
     * The supported ring patterns.
     */
    public function setDistinctiveRingingRingPatternForCallCenter($distinctiveRingingRingPatternForCallCenter = null)
    {
        $this->distinctiveRingingRingPatternForCallCenter = ($distinctiveRingingRingPatternForCallCenter InstanceOf RingPattern)
             ? $distinctiveRingingRingPatternForCallCenter
             : new RingPattern($distinctiveRingingRingPatternForCallCenter);
    }

    /**
     * The supported ring patterns.
     */
    public function getDistinctiveRingingRingPatternForCallCenter()
    {
        return (!$this->distinctiveRingingRingPatternForCallCenter) ?: $this->distinctiveRingingRingPatternForCallCenter->getValue();
    }

    /**
     * The supported ring patterns.
     */
    public function setDistinctiveRingingForceDeliveryRingPattern($distinctiveRingingForceDeliveryRingPattern = null)
    {
        $this->distinctiveRingingForceDeliveryRingPattern = ($distinctiveRingingForceDeliveryRingPattern InstanceOf RingPattern)
             ? $distinctiveRingingForceDeliveryRingPattern
             : new RingPattern($distinctiveRingingForceDeliveryRingPattern);
    }

    /**
     * The supported ring patterns.
     */
    public function getDistinctiveRingingForceDeliveryRingPattern()
    {
        return (!$this->distinctiveRingingForceDeliveryRingPattern) ?: $this->distinctiveRingingForceDeliveryRingPattern->getValue();
    }
}
