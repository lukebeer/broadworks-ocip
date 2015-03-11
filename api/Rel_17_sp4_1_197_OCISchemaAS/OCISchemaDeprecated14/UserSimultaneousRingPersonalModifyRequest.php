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
 * Modify the user's simultaneous ring personal service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: UserSimultaneousRingPersonalModifyRequest14sp4
 */
class UserSimultaneousRingPersonalModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                   = 'UserSimultaneousRingPersonalModifyRequest';
    protected $userId                 = null;
    protected $isActive               = null;
    protected $incomingCalls          = null;
    protected $simRingPhoneNumberList = null;

    public function __construct(
         $userId,
         $isActive = null,
         $incomingCalls = null,
         ReplacementOutgoingDNorSIPURIList $simRingPhoneNumberList = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setIncomingCalls($incomingCalls);
        $this->setSimRingPhoneNumberList($simRingPhoneNumberList);
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
     * @return UserId
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
     * @return xs:boolean
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setIncomingCalls($incomingCalls = null)
    {
        if (!$incomingCalls) return $this;
        $this->incomingCalls = ($incomingCalls InstanceOf SimultaneousRingSelection)
             ? $incomingCalls
             : new SimultaneousRingSelection($incomingCalls);
        $this->incomingCalls->setName('incomingCalls');
        return $this;
    }

    /**
     * 
     * @return SimultaneousRingSelection
     */
    public function getIncomingCalls()
    {
        return $this->incomingCalls->getValue();
    }

    /**
     * 
     */
    public function setSimRingPhoneNumberList(ReplacementOutgoingDNorSIPURIList $simRingPhoneNumberList = null)
    {
        if (!$simRingPhoneNumberList) return $this;
        $this->simRingPhoneNumberList = $simRingPhoneNumberList;
        $this->simRingPhoneNumberList->setName('simRingPhoneNumberList');
        return $this;
    }

    /**
     * 
     * @return ReplacementOutgoingDNorSIPURIList
     */
    public function getSimRingPhoneNumberList()
    {
        return $this->simRingPhoneNumberList;
    }
}
