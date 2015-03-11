<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSimultaneousRingPersonal; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SimultaneousRingReplacementNumberList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaActivation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user's simultaneous ring personal service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserSimultaneousRingPersonalModifyRequest17 extends ComplexType implements ComplexInterface
{
    public    $name                       = 'UserSimultaneousRingPersonalModifyRequest17';
    protected $userId                     = null;
    protected $isActive                   = null;
    protected $doNotRingIfOnCall          = null;
    protected $simultaneousRingNumberList = null;
    protected $criteriaActivation         = null;

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
    public function setDoNotRingIfOnCall($doNotRingIfOnCall = null)
    {
        if (!$doNotRingIfOnCall) return $this;
        $this->doNotRingIfOnCall = new PrimitiveType($doNotRingIfOnCall);
        $this->doNotRingIfOnCall->setName('doNotRingIfOnCall');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDoNotRingIfOnCall()
    {
        return $this->doNotRingIfOnCall->getValue();
    }

    /**
     * 
     */
    public function setSimultaneousRingNumberList(SimultaneousRingReplacementNumberList $simultaneousRingNumberList = null)
    {
        if (!$simultaneousRingNumberList) return $this;
        $this->simultaneousRingNumberList = $simultaneousRingNumberList;
        $this->simultaneousRingNumberList->setName('simultaneousRingNumberList');
        return $this;
    }

    /**
     * 
     * @return SimultaneousRingReplacementNumberList
     */
    public function getSimultaneousRingNumberList()
    {
        return $this->simultaneousRingNumberList;
    }

    /**
     * 
     */
    public function setCriteriaActivation(CriteriaActivation $criteriaActivation = null)
    {
        if (!$criteriaActivation) return $this;
        $this->criteriaActivation = $criteriaActivation;
        $this->criteriaActivation->setName('criteriaActivation');
        return $this;
    }

    /**
     * 
     * @return CriteriaActivation
     */
    public function getCriteriaActivation()
    {
        return $this->criteriaActivation;
    }
}
