<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSimultaneousRingFamily; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SimultaneousRingReplacementNumberList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaActivation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user's simultaneous ring family service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserSimultaneousRingFamilyModifyRequest17 extends ComplexType implements ComplexInterface
{
    public    $name = 'UserSimultaneousRingFamilyModifyRequest17';
    protected $userId;
    protected $isActive;
    protected $doNotRingIfOnCall;
    protected $simultaneousRingNumberList;
    protected $criteriaActivation;

    public function __construct(
         $userId = '',
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
    public function setDoNotRingIfOnCall($doNotRingIfOnCall = null)
    {
        $this->doNotRingIfOnCall = new PrimitiveType($doNotRingIfOnCall);
        $this->doNotRingIfOnCall->setName('doNotRingIfOnCall');
        return $this;
    }

    /**
     * 
     * @return boolean $doNotRingIfOnCall
     */
    public function getDoNotRingIfOnCall()
    {
        return ($this->doNotRingIfOnCall) ? $this->doNotRingIfOnCall->getValue() : null;
    }

    /**
     * 
     */
    public function setSimultaneousRingNumberList(SimultaneousRingReplacementNumberList $simultaneousRingNumberList = null)
    {
        $this->simultaneousRingNumberList = ($simultaneousRingNumberList InstanceOf SimultaneousRingReplacementNumberList)
             ? $simultaneousRingNumberList
             : new SimultaneousRingReplacementNumberList($simultaneousRingNumberList);
        $this->simultaneousRingNumberList->setName('simultaneousRingNumberList');
        return $this;
    }

    /**
     * 
     * @return SimultaneousRingReplacementNumberList $simultaneousRingNumberList
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
        $this->criteriaActivation = ($criteriaActivation InstanceOf CriteriaActivation)
             ? $criteriaActivation
             : new CriteriaActivation($criteriaActivation);
        $this->criteriaActivation->setName('criteriaActivation');
        return $this;
    }

    /**
     * 
     * @return CriteriaActivation $criteriaActivation
     */
    public function getCriteriaActivation()
    {
        return $this->criteriaActivation;
    }
}
