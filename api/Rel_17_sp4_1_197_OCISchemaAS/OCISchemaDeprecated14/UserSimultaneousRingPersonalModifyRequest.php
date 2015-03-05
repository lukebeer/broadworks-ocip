<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SimultaneousRingSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementOutgoingDNorSIPURIList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user's simultaneous ring personal service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: UserSimultaneousRingPersonalModifyRequest14sp4
 */
class UserSimultaneousRingPersonalModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $isActive=null,
             $incomingCalls=null,
             ReplacementOutgoingDNorSIPURIList $simRingPhoneNumberList=null
    ) {
        $this->userId                 = new UserId($userId);
        $this->isActive               = $isActive;
        $this->incomingCalls          = new SimultaneousRingSelection($incomingCalls);
        $this->simRingPhoneNumberList = $simRingPhoneNumberList;
        $this->args                   = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setIncomingCalls($incomingCalls)
    {
        $incomingCalls and $this->incomingCalls = new SimultaneousRingSelection($incomingCalls);
    }

    public function getIncomingCalls()
    {
        return (!$this->incomingCalls) ?: $this->incomingCalls->value();
    }

    public function setSimRingPhoneNumberList($simRingPhoneNumberList)
    {
        $simRingPhoneNumberList and $this->simRingPhoneNumberList = new ReplacementOutgoingDNorSIPURIList($simRingPhoneNumberList);
    }

    public function getSimRingPhoneNumberList()
    {
        return (!$this->simRingPhoneNumberList) ?: $this->simRingPhoneNumberList->value();
    }
}
