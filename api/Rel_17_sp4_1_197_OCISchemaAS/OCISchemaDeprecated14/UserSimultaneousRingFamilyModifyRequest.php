<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementOutgoingDNorSIPURIList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SimultaneousRingSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user's simultaneous ring family service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: UserSimultaneousRingFamilyModifyRequest14sp4
 */
class UserSimultaneousRingFamilyModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'UserSimultaneousRingFamilyModifyRequest';
    protected $userId;
    protected $isActive;
    protected $incomingCalls;
    protected $simRingPhoneNumberList;

    public function __construct(
         $userId = '',
         $isActive = null,
         $incomingCalls = null,
         $simRingPhoneNumberList = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setIncomingCalls($incomingCalls);
        $this->setSimRingPhoneNumberList($simRingPhoneNumberList);
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
    public function setIncomingCalls($incomingCalls = null)
    {
        $this->incomingCalls = ($incomingCalls InstanceOf SimultaneousRingSelection)
             ? $incomingCalls
             : new SimultaneousRingSelection($incomingCalls);
        $this->incomingCalls->setName('incomingCalls');
        return $this;
    }

    /**
     * 
     * @return SimultaneousRingSelection $incomingCalls
     */
    public function getIncomingCalls()
    {
        return ($this->incomingCalls) ? $this->incomingCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setSimRingPhoneNumberList(ReplacementOutgoingDNorSIPURIList $simRingPhoneNumberList = null)
    {
        $this->simRingPhoneNumberList = ($simRingPhoneNumberList InstanceOf ReplacementOutgoingDNorSIPURIList)
             ? $simRingPhoneNumberList
             : new ReplacementOutgoingDNorSIPURIList($simRingPhoneNumberList);
        $this->simRingPhoneNumberList->setName('simRingPhoneNumberList');
        return $this;
    }

    /**
     * 
     * @return ReplacementOutgoingDNorSIPURIList $simRingPhoneNumberList
     */
    public function getSimRingPhoneNumberList()
    {
        return $this->simRingPhoneNumberList;
    }
}
