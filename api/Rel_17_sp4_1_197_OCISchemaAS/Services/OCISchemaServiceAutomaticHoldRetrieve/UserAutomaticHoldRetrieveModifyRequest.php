<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAutomaticHoldRetrieve; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticHoldRetrieve\AutomaticHoldRetrieveRecallTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAutomaticHoldRetrieve\UserAutomaticHoldRetrieveModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user level data associated with Automatic Hold/Retrieve.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserAutomaticHoldRetrieveModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $userId             = null;
    protected $isActive           = null;
    protected $recallTimerSeconds = null;

    public function __construct(
         $userId,
         $isActive = null,
         $recallTimerSeconds = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setRecallTimerSeconds($recallTimerSeconds);
    }

    /**
     * @return UserAutomaticHoldRetrieveModifyResponse
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
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive;
    }

    /**
     * Call Timer
     */
    public function setRecallTimerSeconds($recallTimerSeconds = null)
    {
        $this->recallTimerSeconds = ($recallTimerSeconds InstanceOf AutomaticHoldRetrieveRecallTimerSeconds)
             ? $recallTimerSeconds
             : new AutomaticHoldRetrieveRecallTimerSeconds($recallTimerSeconds);
    }

    /**
     * Call Timer
     */
    public function getRecallTimerSeconds()
    {
        return (!$this->recallTimerSeconds) ?: $this->recallTimerSeconds->getValue();
    }
}
