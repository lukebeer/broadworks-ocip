<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSimultaneousRingFamily; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SimultaneousRingReplacementNumberList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaActivation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user's simultaneous ring family service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserSimultaneousRingFamilyModifyRequest17 extends ComplexType implements ComplexInterface
{
    public    $name                        = __CLASS__;
    protected $userId                      = null;
    protected $isActive                    = null;
    protected $doNotRingIfOnCall           = null;
    protected $simultaneousRingNumberList  = null;
    protected $criteriaActivation          = null;

    public function __construct(
         $userId,
         $isActive = null,
         $doNotRingIfOnCall = null,
         SimultaneousRingReplacementNumberList $simultaneousRingNumberList = null,
         CriteriaActivation $criteriaActivation = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setDoNotRingIfOnCall($doNotRingIfOnCall);
        $this->setSimultaneousRingNumberList($simultaneousRingNumberList);
        $this->setCriteriaActivation($criteriaActivation);
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

    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setDoNotRingIfOnCall(xs:boolean $doNotRingIfOnCall = null)
    {
    }

    public function getDoNotRingIfOnCall()
    {
        return (!$this->doNotRingIfOnCall) ?: $this->doNotRingIfOnCall->value();
    }

    public function setSimultaneousRingNumberList(SimultaneousRingReplacementNumberList $simultaneousRingNumberList = null)
    {
    }

    public function getSimultaneousRingNumberList()
    {
        return (!$this->simultaneousRingNumberList) ?: $this->simultaneousRingNumberList->value();
    }

    public function setCriteriaActivation(CriteriaActivation $criteriaActivation = null)
    {
    }

    public function getCriteriaActivation()
    {
        return (!$this->criteriaActivation) ?: $this->criteriaActivation->value();
    }
}
