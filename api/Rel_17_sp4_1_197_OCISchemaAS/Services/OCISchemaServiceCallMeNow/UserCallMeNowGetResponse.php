<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow\CallMeNowAnswerConfirmation;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserCallMeNowGetRequest. The criteria table's column headings are:
 *         "Is Active", "Criteria Name", "Time Schedule", "Call To", "Reject Call" and "Holiday Schedule".
 */
class UserCallMeNowGetResponse extends ComplexType implements ComplexInterface
{
    public    $name               = 'UserCallMeNowGetResponse';
    protected $isActive           = null;
    protected $answerConfirmation = null;
    protected $criteriaTable      = null;

    /**
     * @return UserCallMeNowGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
    public function setAnswerConfirmation($answerConfirmation = null)
    {
        if (!$answerConfirmation) return $this;
        $this->answerConfirmation = ($answerConfirmation InstanceOf CallMeNowAnswerConfirmation)
             ? $answerConfirmation
             : new CallMeNowAnswerConfirmation($answerConfirmation);
        $this->answerConfirmation->setName('answerConfirmation');
        return $this;
    }

    /**
     * 
     * @return CallMeNowAnswerConfirmation
     */
    public function getAnswerConfirmation()
    {
        return $this->answerConfirmation->getValue();
    }

    /**
     * 
     */
    public function setCriteriaTable(TableType $criteriaTable = null)
    {
        if (!$criteriaTable) return $this;
        $this->criteriaTable = $criteriaTable;
        $this->criteriaTable->setName('criteriaTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getCriteriaTable()
    {
        return $this->criteriaTable->getValue();
    }
}
