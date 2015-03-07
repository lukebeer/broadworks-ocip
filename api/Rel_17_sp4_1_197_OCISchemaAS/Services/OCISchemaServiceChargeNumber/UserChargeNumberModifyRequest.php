<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceChargeNumber; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user level data associated with Charge Number.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserChargeNumberModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                    = __CLASS__;
    protected $userId                                  = null;
    protected $phoneNumber                             = null;
    protected $useChargeNumberForEnhancedTranslations  = null;
    protected $sendChargeNumberToNetwork               = null;

    public function __construct(
         $userId,
         $phoneNumber = null,
         $useChargeNumberForEnhancedTranslations = null,
         $sendChargeNumberToNetwork = null
    ) {
        $this->setUserId($userId);
        $this->setPhoneNumber($phoneNumber);
        $this->setUseChargeNumberForEnhancedTranslations($useChargeNumberForEnhancedTranslations);
        $this->setSendChargeNumberToNetwork($sendChargeNumberToNetwork);
    }

    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = ($phoneNumber InstanceOf DN)
             ? $phoneNumber
             : new DN($phoneNumber);
    }

    public function getPhoneNumber()
    {
        return (!$this->phoneNumber) ?: $this->phoneNumber->value();
    }

    public function setUseChargeNumberForEnhancedTranslations(xs:boolean $useChargeNumberForEnhancedTranslations = null)
    {
    }

    public function getUseChargeNumberForEnhancedTranslations()
    {
        return (!$this->useChargeNumberForEnhancedTranslations) ?: $this->useChargeNumberForEnhancedTranslations->value();
    }

    public function setSendChargeNumberToNetwork(xs:boolean $sendChargeNumberToNetwork = null)
    {
    }

    public function getSendChargeNumberToNetwork()
    {
        return (!$this->sendChargeNumberToNetwork) ?: $this->sendChargeNumberToNetwork->value();
    }
}
