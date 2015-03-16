<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHotelingHost\HotelingHostAccessLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HotelingAssociationLimitHours;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LocationDialingCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Extension;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserHotelingHostGetRequest14.
 *         Replaced by: UserHotelingHostGetResponse14sp4
 */
class UserHotelingHostGetResponse14 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserHotelingHostGetResponse14';
    protected $isActive;
    protected $associationLimitHours;
    protected $accessLevel;
    protected $guestLastName;
    protected $guestFirstName;
    protected $guestPhoneNumber;
    protected $guestExtension;
    protected $guestLocationDialingCode;
    protected $guestAssociationDateTime;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserHotelingHostGetResponse14 $response
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
    public function setAssociationLimitHours($associationLimitHours = null)
    {
        $this->associationLimitHours = ($associationLimitHours InstanceOf HotelingAssociationLimitHours)
             ? $associationLimitHours
             : new HotelingAssociationLimitHours($associationLimitHours);
        $this->associationLimitHours->setElementName('associationLimitHours');
        return $this;
    }

    /**
     * 
     * @return HotelingAssociationLimitHours $associationLimitHours
     */
    public function getAssociationLimitHours()
    {
        return ($this->associationLimitHours)
            ? $this->associationLimitHours->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAccessLevel($accessLevel = null)
    {
        $this->accessLevel = ($accessLevel InstanceOf HotelingHostAccessLevel)
             ? $accessLevel
             : new HotelingHostAccessLevel($accessLevel);
        $this->accessLevel->setElementName('accessLevel');
        return $this;
    }

    /**
     * 
     * @return HotelingHostAccessLevel $accessLevel
     */
    public function getAccessLevel()
    {
        return ($this->accessLevel)
            ? $this->accessLevel->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGuestLastName($guestLastName = null)
    {
        $this->guestLastName = ($guestLastName InstanceOf LastName)
             ? $guestLastName
             : new LastName($guestLastName);
        $this->guestLastName->setElementName('guestLastName');
        return $this;
    }

    /**
     * 
     * @return LastName $guestLastName
     */
    public function getGuestLastName()
    {
        return ($this->guestLastName)
            ? $this->guestLastName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGuestFirstName($guestFirstName = null)
    {
        $this->guestFirstName = ($guestFirstName InstanceOf FirstName)
             ? $guestFirstName
             : new FirstName($guestFirstName);
        $this->guestFirstName->setElementName('guestFirstName');
        return $this;
    }

    /**
     * 
     * @return FirstName $guestFirstName
     */
    public function getGuestFirstName()
    {
        return ($this->guestFirstName)
            ? $this->guestFirstName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGuestPhoneNumber($guestPhoneNumber = null)
    {
        $this->guestPhoneNumber = ($guestPhoneNumber InstanceOf DN)
             ? $guestPhoneNumber
             : new DN($guestPhoneNumber);
        $this->guestPhoneNumber->setElementName('guestPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $guestPhoneNumber
     */
    public function getGuestPhoneNumber()
    {
        return ($this->guestPhoneNumber)
            ? $this->guestPhoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGuestExtension($guestExtension = null)
    {
        $this->guestExtension = ($guestExtension InstanceOf Extension)
             ? $guestExtension
             : new Extension($guestExtension);
        $this->guestExtension->setElementName('guestExtension');
        return $this;
    }

    /**
     * 
     * @return Extension $guestExtension
     */
    public function getGuestExtension()
    {
        return ($this->guestExtension)
            ? $this->guestExtension->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGuestLocationDialingCode($guestLocationDialingCode = null)
    {
        $this->guestLocationDialingCode = ($guestLocationDialingCode InstanceOf LocationDialingCode)
             ? $guestLocationDialingCode
             : new LocationDialingCode($guestLocationDialingCode);
        $this->guestLocationDialingCode->setElementName('guestLocationDialingCode');
        return $this;
    }

    /**
     * 
     * @return LocationDialingCode $guestLocationDialingCode
     */
    public function getGuestLocationDialingCode()
    {
        return ($this->guestLocationDialingCode)
            ? $this->guestLocationDialingCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGuestAssociationDateTime(xs:dateTime $guestAssociationDateTime = null)
    {
        $this->guestAssociationDateTime->setElementName('guestAssociationDateTime');
        return $this;
    }

    /**
     * 
     * @return xs:dateTime $guestAssociationDateTime
     */
    public function getGuestAssociationDateTime()
    {
        return ($this->guestAssociationDateTime)
            ? $this->guestAssociationDateTime->getElementValue()
            : null;
    }
}
