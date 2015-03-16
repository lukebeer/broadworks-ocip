<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallReturn; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitAny;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemCallReturnGetRequest.
 */
class SystemCallReturnGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCallReturnGetResponse';
    protected $twoLevelActivation;
    protected $provideDate;
    protected $lastUnansweredCallOnly;
    protected $confirmationKey;
    protected $allowRestrictedNumber;
    protected $deleteNumberAfterAnsweredCallReturn;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallReturn\SystemCallReturnGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTwoLevelActivation($twoLevelActivation = null)
    {
        $this->twoLevelActivation = new PrimitiveType($twoLevelActivation);
        $this->twoLevelActivation->setElementName('twoLevelActivation');
        return $this;
    }

    /**
     * 
     * @return boolean $twoLevelActivation
     */
    public function getTwoLevelActivation()
    {
        return ($this->twoLevelActivation)
            ? $this->twoLevelActivation->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setProvideDate($provideDate = null)
    {
        $this->provideDate = new PrimitiveType($provideDate);
        $this->provideDate->setElementName('provideDate');
        return $this;
    }

    /**
     * 
     * @return boolean $provideDate
     */
    public function getProvideDate()
    {
        return ($this->provideDate)
            ? $this->provideDate->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLastUnansweredCallOnly($lastUnansweredCallOnly = null)
    {
        $this->lastUnansweredCallOnly = new PrimitiveType($lastUnansweredCallOnly);
        $this->lastUnansweredCallOnly->setElementName('lastUnansweredCallOnly');
        return $this;
    }

    /**
     * 
     * @return boolean $lastUnansweredCallOnly
     */
    public function getLastUnansweredCallOnly()
    {
        return ($this->lastUnansweredCallOnly)
            ? $this->lastUnansweredCallOnly->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConfirmationKey($confirmationKey = null)
    {
        $this->confirmationKey = ($confirmationKey InstanceOf DigitAny)
             ? $confirmationKey
             : new DigitAny($confirmationKey);
        $this->confirmationKey->setElementName('confirmationKey');
        return $this;
    }

    /**
     * 
     * @return DigitAny $confirmationKey
     */
    public function getConfirmationKey()
    {
        return ($this->confirmationKey)
            ? $this->confirmationKey->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowRestrictedNumber($allowRestrictedNumber = null)
    {
        $this->allowRestrictedNumber = new PrimitiveType($allowRestrictedNumber);
        $this->allowRestrictedNumber->setElementName('allowRestrictedNumber');
        return $this;
    }

    /**
     * 
     * @return boolean $allowRestrictedNumber
     */
    public function getAllowRestrictedNumber()
    {
        return ($this->allowRestrictedNumber)
            ? $this->allowRestrictedNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDeleteNumberAfterAnsweredCallReturn($deleteNumberAfterAnsweredCallReturn = null)
    {
        $this->deleteNumberAfterAnsweredCallReturn = new PrimitiveType($deleteNumberAfterAnsweredCallReturn);
        $this->deleteNumberAfterAnsweredCallReturn->setElementName('deleteNumberAfterAnsweredCallReturn');
        return $this;
    }

    /**
     * 
     * @return boolean $deleteNumberAfterAnsweredCallReturn
     */
    public function getDeleteNumberAfterAnsweredCallReturn()
    {
        return ($this->deleteNumberAfterAnsweredCallReturn)
            ? $this->deleteNumberAfterAnsweredCallReturn->getElementValue()
            : null;
    }
}
