<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the require confirmation setting for the destination.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserSimultaneousRingPersonalModifyPhoneNumberRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'UserSimultaneousRingPersonalModifyPhoneNumberRequest';
    protected $userId;
    protected $phoneNumber;
    protected $answerConfirmationRequired;

    public function __construct(
         $userId = '',
         $phoneNumber = '',
         $answerConfirmationRequired = null
    ) {
        $this->setUserId($userId);
        $this->setPhoneNumber($phoneNumber);
        $this->setAnswerConfirmationRequired($answerConfirmationRequired);
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
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = ($phoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $phoneNumber
             : new OutgoingDNorSIPURI($phoneNumber);
        $this->phoneNumber->setName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $phoneNumber
     */
    public function getPhoneNumber()
    {
        return ($this->phoneNumber) ? $this->phoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setAnswerConfirmationRequired($answerConfirmationRequired = null)
    {
        $this->answerConfirmationRequired = new PrimitiveType($answerConfirmationRequired);
        $this->answerConfirmationRequired->setName('answerConfirmationRequired');
        return $this;
    }

    /**
     * 
     * @return boolean $answerConfirmationRequired
     */
    public function getAnswerConfirmationRequired()
    {
        return ($this->answerConfirmationRequired) ? $this->answerConfirmationRequired->getValue() : null;
    }
}
