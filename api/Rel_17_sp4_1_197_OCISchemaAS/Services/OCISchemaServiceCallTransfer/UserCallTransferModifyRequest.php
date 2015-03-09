<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallTransfer; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallTransfer\CallTransferRecallNumberOfRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallTransfer\CallTransferBusyCampOnSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallTransfer\UserCallTransferModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user level data associated with Call Transfer.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallTransferModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                      = __CLASS__;
    protected $userId                                    = null;
    protected $isRecallActive                            = null;
    protected $recallNumberOfRings                       = null;
    protected $useDiversionInhibitorForBlindTransfer     = null;
    protected $useDiversionInhibitorForConsultativeCalls = null;
    protected $enableBusyCampOn                          = null;
    protected $busyCampOnSeconds                         = null;

    public function __construct(
         $userId,
         $isRecallActive = null,
         $recallNumberOfRings = null,
         $useDiversionInhibitorForBlindTransfer = null,
         $useDiversionInhibitorForConsultativeCalls = null,
         $enableBusyCampOn = null,
         $busyCampOnSeconds = null
    ) {
        $this->setUserId($userId);
        $this->setIsRecallActive($isRecallActive);
        $this->setRecallNumberOfRings($recallNumberOfRings);
        $this->setUseDiversionInhibitorForBlindTransfer($useDiversionInhibitorForBlindTransfer);
        $this->setUseDiversionInhibitorForConsultativeCalls($useDiversionInhibitorForConsultativeCalls);
        $this->setEnableBusyCampOn($enableBusyCampOn);
        $this->setBusyCampOnSeconds($busyCampOnSeconds);
    }

    /**
     * @return UserCallTransferModifyResponse
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
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

    /**
     * 
     */
    public function setIsRecallActive($isRecallActive = null)
    {
        $this->isRecallActive = (boolean) $isRecallActive;
    }

    /**
     * 
     */
    public function getIsRecallActive()
    {
        return (!$this->isRecallActive) ?: $this->isRecallActive;
    }

    /**
     * Number of Rings until a transferred call is recalled.
     */
    public function setRecallNumberOfRings($recallNumberOfRings = null)
    {
        $this->recallNumberOfRings = ($recallNumberOfRings InstanceOf CallTransferRecallNumberOfRings)
             ? $recallNumberOfRings
             : new CallTransferRecallNumberOfRings($recallNumberOfRings);
    }

    /**
     * Number of Rings until a transferred call is recalled.
     */
    public function getRecallNumberOfRings()
    {
        return (!$this->recallNumberOfRings) ?: $this->recallNumberOfRings->getValue();
    }

    /**
     * 
     */
    public function setUseDiversionInhibitorForBlindTransfer($useDiversionInhibitorForBlindTransfer = null)
    {
        $this->useDiversionInhibitorForBlindTransfer = (boolean) $useDiversionInhibitorForBlindTransfer;
    }

    /**
     * 
     */
    public function getUseDiversionInhibitorForBlindTransfer()
    {
        return (!$this->useDiversionInhibitorForBlindTransfer) ?: $this->useDiversionInhibitorForBlindTransfer;
    }

    /**
     * 
     */
    public function setUseDiversionInhibitorForConsultativeCalls($useDiversionInhibitorForConsultativeCalls = null)
    {
        $this->useDiversionInhibitorForConsultativeCalls = (boolean) $useDiversionInhibitorForConsultativeCalls;
    }

    /**
     * 
     */
    public function getUseDiversionInhibitorForConsultativeCalls()
    {
        return (!$this->useDiversionInhibitorForConsultativeCalls) ?: $this->useDiversionInhibitorForConsultativeCalls;
    }

    /**
     * 
     */
    public function setEnableBusyCampOn($enableBusyCampOn = null)
    {
        $this->enableBusyCampOn = (boolean) $enableBusyCampOn;
    }

    /**
     * 
     */
    public function getEnableBusyCampOn()
    {
        return (!$this->enableBusyCampOn) ?: $this->enableBusyCampOn;
    }

    /**
     * The allotted time for a call to camp on on busy transefer call.
     */
    public function setBusyCampOnSeconds($busyCampOnSeconds = null)
    {
        $this->busyCampOnSeconds = ($busyCampOnSeconds InstanceOf CallTransferBusyCampOnSeconds)
             ? $busyCampOnSeconds
             : new CallTransferBusyCampOnSeconds($busyCampOnSeconds);
    }

    /**
     * The allotted time for a call to camp on on busy transefer call.
     */
    public function getBusyCampOnSeconds()
    {
        return (!$this->busyCampOnSeconds) ?: $this->busyCampOnSeconds->getValue();
    }
}
