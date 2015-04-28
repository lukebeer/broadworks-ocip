<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere\BroadWorksAnywherePhoneNumberDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaActivation;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify a BroadWorks Anywhere phone number
 *           The response is either a SuccessResponse or an ErrorResponse.
 */
class UserBroadWorksAnywhereModifyPhoneNumberRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserBroadWorksAnywhereModifyPhoneNumberRequest';
    protected $userId;
    protected $phoneNumber;
    protected $newPhoneNumber;
    protected $description;
    protected $isActive;
    protected $outboundAlternateNumber;
    protected $broadworksCallControl;
    protected $useDiversionInhibitor;
    protected $answerConfirmationRequired;
    protected $criteriaActivation;

    public function __construct(
         $userId = '',
         $phoneNumber = '',
         $newPhoneNumber = null,
         $description = null,
         $isActive = null,
         $outboundAlternateNumber = null,
         $broadworksCallControl = null,
         $useDiversionInhibitor = null,
         $answerConfirmationRequired = null,
         $criteriaActivation = null
    ) {
        $this->setUserId($userId);
        $this->setPhoneNumber($phoneNumber);
        $this->setNewPhoneNumber($newPhoneNumber);
        $this->setDescription($description);
        $this->setIsActive($isActive);
        $this->setOutboundAlternateNumber($outboundAlternateNumber);
        $this->setBroadworksCallControl($broadworksCallControl);
        $this->setUseDiversionInhibitor($useDiversionInhibitor);
        $this->setAnswerConfirmationRequired($answerConfirmationRequired);
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
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = ($phoneNumber InstanceOf DN)
             ? $phoneNumber
             : new DN($phoneNumber);
        $this->phoneNumber->setElementName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $phoneNumber
     */
    public function getPhoneNumber()
    {
        return ($this->phoneNumber)
            ? $this->phoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNewPhoneNumber($newPhoneNumber = null)
    {
        $this->newPhoneNumber = ($newPhoneNumber InstanceOf DN)
             ? $newPhoneNumber
             : new DN($newPhoneNumber);
        $this->newPhoneNumber->setElementName('newPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $newPhoneNumber
     */
    public function getNewPhoneNumber()
    {
        return ($this->newPhoneNumber)
            ? $this->newPhoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf BroadWorksAnywherePhoneNumberDescription)
             ? $description
             : new BroadWorksAnywherePhoneNumberDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return BroadWorksAnywherePhoneNumberDescription $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOutboundAlternateNumber($outboundAlternateNumber = null)
    {
        $this->outboundAlternateNumber = ($outboundAlternateNumber InstanceOf OutgoingDNorSIPURI)
             ? $outboundAlternateNumber
             : new OutgoingDNorSIPURI($outboundAlternateNumber);
        $this->outboundAlternateNumber->setElementName('outboundAlternateNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $outboundAlternateNumber
     */
    public function getOutboundAlternateNumber()
    {
        return ($this->outboundAlternateNumber)
            ? $this->outboundAlternateNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBroadworksCallControl($broadworksCallControl = null)
    {
        $this->broadworksCallControl = new PrimitiveType($broadworksCallControl);
        $this->broadworksCallControl->setElementName('broadworksCallControl');
        return $this;
    }

    /**
     * 
     * @return boolean $broadworksCallControl
     */
    public function getBroadworksCallControl()
    {
        return ($this->broadworksCallControl)
            ? $this->broadworksCallControl->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseDiversionInhibitor($useDiversionInhibitor = null)
    {
        $this->useDiversionInhibitor = new PrimitiveType($useDiversionInhibitor);
        $this->useDiversionInhibitor->setElementName('useDiversionInhibitor');
        return $this;
    }

    /**
     * 
     * @return boolean $useDiversionInhibitor
     */
    public function getUseDiversionInhibitor()
    {
        return ($this->useDiversionInhibitor)
            ? $this->useDiversionInhibitor->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAnswerConfirmationRequired($answerConfirmationRequired = null)
    {
        $this->answerConfirmationRequired = new PrimitiveType($answerConfirmationRequired);
        $this->answerConfirmationRequired->setElementName('answerConfirmationRequired');
        return $this;
    }

    /**
     * 
     * @return boolean $answerConfirmationRequired
     */
    public function getAnswerConfirmationRequired()
    {
        return ($this->answerConfirmationRequired)
            ? $this->answerConfirmationRequired->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCriteriaActivation(CriteriaActivation $criteriaActivation = null)
    {
        $this->criteriaActivation = ($criteriaActivation InstanceOf CriteriaActivation)
             ? $criteriaActivation
             : new CriteriaActivation($criteriaActivation);
        $this->criteriaActivation->setElementName('criteriaActivation');
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
