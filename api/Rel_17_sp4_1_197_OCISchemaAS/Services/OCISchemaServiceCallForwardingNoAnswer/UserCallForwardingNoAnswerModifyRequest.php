<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallForwardingNoAnswer; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallForwardingNoAnswer\CallForwardingNoAnswerNumberOfRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user level data associated with Call Forwarding No Answer.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Engineering Note: This command is used internally by Call Processing.
 */
class UserCallForwardingNoAnswerModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'UserCallForwardingNoAnswerModifyRequest';
    protected $userId;
    protected $isActive;
    protected $forwardToPhoneNumber;
    protected $numberOfRings;

    public function __construct(
         $userId = '',
         $isActive = null,
         $forwardToPhoneNumber = null,
         $numberOfRings = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setForwardToPhoneNumber($forwardToPhoneNumber);
        $this->setNumberOfRings($numberOfRings);
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
        return ($this->userId) ? $this->userId->getValue() : null;
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
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
        return ($this->isActive) ? $this->isActive->getValue() : null;
    }

    /**
     * 
     */
    public function setForwardToPhoneNumber($forwardToPhoneNumber = null)
    {
        $this->forwardToPhoneNumber = ($forwardToPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $forwardToPhoneNumber
             : new OutgoingDNorSIPURI($forwardToPhoneNumber);
        $this->forwardToPhoneNumber->setName('forwardToPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $forwardToPhoneNumber
     */
    public function getForwardToPhoneNumber()
    {
        return ($this->forwardToPhoneNumber) ? $this->forwardToPhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setNumberOfRings($numberOfRings = null)
    {
        $this->numberOfRings = ($numberOfRings InstanceOf CallForwardingNoAnswerNumberOfRings)
             ? $numberOfRings
             : new CallForwardingNoAnswerNumberOfRings($numberOfRings);
        $this->numberOfRings->setName('numberOfRings');
        return $this;
    }

    /**
     * 
     * @return CallForwardingNoAnswerNumberOfRings $numberOfRings
     */
    public function getNumberOfRings()
    {
        return ($this->numberOfRings) ? $this->numberOfRings->getValue() : null;
    }
}
