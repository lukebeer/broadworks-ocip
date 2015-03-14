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
 * Modify the system level data associated with Call Return.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCallReturnModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                = 'SystemCallReturnModifyRequest';
    protected $twoLevelActivation                  = null;
    protected $provideDate                         = null;
    protected $lastUnansweredCallOnly              = null;
    protected $confirmationKey                     = null;
    protected $allowRestrictedNumber               = null;
    protected $deleteNumberAfterAnsweredCallReturn = null;

    public function __construct(
         $twoLevelActivation = null,
         $provideDate = null,
         $lastUnansweredCallOnly = null,
         $confirmationKey = null,
         $allowRestrictedNumber = null,
         $deleteNumberAfterAnsweredCallReturn = null
    ) {
        $this->setTwoLevelActivation($twoLevelActivation);
        $this->setProvideDate($provideDate);
        $this->setLastUnansweredCallOnly($lastUnansweredCallOnly);
        $this->setConfirmationKey($confirmationKey);
        $this->setAllowRestrictedNumber($allowRestrictedNumber);
        $this->setDeleteNumberAfterAnsweredCallReturn($deleteNumberAfterAnsweredCallReturn);
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
    public function setTwoLevelActivation($twoLevelActivation = null)
    {
        if (!$twoLevelActivation) return $this;
        $this->twoLevelActivation = new PrimitiveType($twoLevelActivation);
        $this->twoLevelActivation->setName('twoLevelActivation');
        return $this;
    }

    /**
     * 
     * @return boolean $twoLevelActivation
     */
    public function getTwoLevelActivation()
    {
        return $this->twoLevelActivation->getValue();
    }

    /**
     * 
     */
    public function setProvideDate($provideDate = null)
    {
        if (!$provideDate) return $this;
        $this->provideDate = new PrimitiveType($provideDate);
        $this->provideDate->setName('provideDate');
        return $this;
    }

    /**
     * 
     * @return boolean $provideDate
     */
    public function getProvideDate()
    {
        return $this->provideDate->getValue();
    }

    /**
     * 
     */
    public function setLastUnansweredCallOnly($lastUnansweredCallOnly = null)
    {
        if (!$lastUnansweredCallOnly) return $this;
        $this->lastUnansweredCallOnly = new PrimitiveType($lastUnansweredCallOnly);
        $this->lastUnansweredCallOnly->setName('lastUnansweredCallOnly');
        return $this;
    }

    /**
     * 
     * @return boolean $lastUnansweredCallOnly
     */
    public function getLastUnansweredCallOnly()
    {
        return $this->lastUnansweredCallOnly->getValue();
    }

    /**
     * 
     */
    public function setConfirmationKey($confirmationKey = null)
    {
        if (!$confirmationKey) return $this;
        $this->confirmationKey = ($confirmationKey InstanceOf DigitAny)
             ? $confirmationKey
             : new DigitAny($confirmationKey);
        $this->confirmationKey->setName('confirmationKey');
        return $this;
    }

    /**
     * 
     * @return DigitAny $confirmationKey
     */
    public function getConfirmationKey()
    {
        return $this->confirmationKey->getValue();
    }

    /**
     * 
     */
    public function setAllowRestrictedNumber($allowRestrictedNumber = null)
    {
        if (!$allowRestrictedNumber) return $this;
        $this->allowRestrictedNumber = new PrimitiveType($allowRestrictedNumber);
        $this->allowRestrictedNumber->setName('allowRestrictedNumber');
        return $this;
    }

    /**
     * 
     * @return boolean $allowRestrictedNumber
     */
    public function getAllowRestrictedNumber()
    {
        return $this->allowRestrictedNumber->getValue();
    }

    /**
     * 
     */
    public function setDeleteNumberAfterAnsweredCallReturn($deleteNumberAfterAnsweredCallReturn = null)
    {
        if (!$deleteNumberAfterAnsweredCallReturn) return $this;
        $this->deleteNumberAfterAnsweredCallReturn = new PrimitiveType($deleteNumberAfterAnsweredCallReturn);
        $this->deleteNumberAfterAnsweredCallReturn->setName('deleteNumberAfterAnsweredCallReturn');
        return $this;
    }

    /**
     * 
     * @return boolean $deleteNumberAfterAnsweredCallReturn
     */
    public function getDeleteNumberAfterAnsweredCallReturn()
    {
        return $this->deleteNumberAfterAnsweredCallReturn->getValue();
    }
}
