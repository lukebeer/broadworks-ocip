<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticHoldRetrieve; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticHoldRetrieve\AutomaticHoldRetrieveRecallTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
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
    public    $name               = 'UserAutomaticHoldRetrieveModifyRequest';
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
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserId($userId = null)
    {
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        if (!$isActive) return $this;
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setRecallTimerSeconds($recallTimerSeconds = null)
    {
        if (!$recallTimerSeconds) return $this;
        $this->recallTimerSeconds = ($recallTimerSeconds InstanceOf AutomaticHoldRetrieveRecallTimerSeconds)
             ? $recallTimerSeconds
             : new AutomaticHoldRetrieveRecallTimerSeconds($recallTimerSeconds);
        $this->recallTimerSeconds->setName('recallTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return AutomaticHoldRetrieveRecallTimerSeconds $recallTimerSeconds
     */
    public function getRecallTimerSeconds()
    {
        return $this->recallTimerSeconds->getValue();
    }
}
