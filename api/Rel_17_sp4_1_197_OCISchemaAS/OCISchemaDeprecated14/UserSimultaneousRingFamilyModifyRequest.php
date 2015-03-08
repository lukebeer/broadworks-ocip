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
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the user's simultaneous ring family service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: UserSimultaneousRingFamilyModifyRequest14sp4
 */
class UserSimultaneousRingFamilyModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                   = __CLASS__;
    protected $userId                 = null;
    protected $isActive               = null;
    protected $incomingCalls          = null;
    protected $simRingPhoneNumberList = null;

    public function __construct(
         $userId,
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
        return (!$this->isActive) ?: $this->isActive->getValue();
    }

    /**
     * Simultaneous Ring Selection.
     */
    public function setIncomingCalls($incomingCalls = null)
    {
        $this->incomingCalls = ($incomingCalls InstanceOf SimultaneousRingSelection)
             ? $incomingCalls
             : new SimultaneousRingSelection($incomingCalls);
    }

    /**
     * Simultaneous Ring Selection.
     */
    public function getIncomingCalls()
    {
        return (!$this->incomingCalls) ?: $this->incomingCalls->getValue();
    }

    /**
     * A list of phone numbers or sipuris that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function setSimRingPhoneNumberList(ReplacementOutgoingDNorSIPURIList $simRingPhoneNumberList = null)
    {
        $this->simRingPhoneNumberList =  $simRingPhoneNumberList;
    }

    /**
     * A list of phone numbers or sipuris that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function getSimRingPhoneNumberList()
    {
        return (!$this->simRingPhoneNumberList) ?: $this->simRingPhoneNumberList->getValue();
    }
}
