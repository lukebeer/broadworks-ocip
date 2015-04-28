<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHotelingHost; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHotelingHost\HotelingHostAccessLevel;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HotelingAssociationLimitHours;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LocationDialingCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Extension17;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserHotelingHostGetRequest17.
 */
class UserHotelingHostGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserHotelingHostGetResponse17';
    protected $isActive;
    protected $enforceAssociationLimit;
    protected $associationLimitHours;
    protected $accessLevel;
    protected $guestLastName;
    protected $guestFirstName;
    protected $guestPhoneNumber;
    protected $guestExtension;
    protected $guestLocationDialingCode;
    protected $guestAssociationDateTime;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHotelingHost\UserHotelingHostGetResponse17 $response
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
    public function setEnforceAssociationLimit($enforceAssociationLimit = null)
    {
        $this->enforceAssociationLimit = new PrimitiveType($enforceAssociationLimit);
        $this->enforceAssociationLimit->setElementName('enforceAssociationLimit');
        return $this;
    }

    /**
     * 
     * @return boolean $enforceAssociationLimit
     */
    public function getEnforceAssociationLimit()
    {
        return ($this->enforceAssociationLimit)
            ? $this->enforceAssociationLimit->getElementValue()
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
        $this->guestExtension = ($guestExtension InstanceOf Extension17)
             ? $guestExtension
             : new Extension17($guestExtension);
        $this->guestExtension->setElementName('guestExtension');
        return $this;
    }

    /**
     * 
     * @return Extension17 $guestExtension
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
    public function setGuestAssociationDateTime($guestAssociationDateTime = null)
    {
        $this->guestAssociationDateTime = new PrimitiveType($guestAssociationDateTime);
        $this->guestAssociationDateTime->setElementName('guestAssociationDateTime');
        return $this;
    }

    /**
     * 
     * @return string $guestAssociationDateTime
     */
    public function getGuestAssociationDateTime()
    {
        return ($this->guestAssociationDateTime)
            ? $this->guestAssociationDateTime->getElementValue()
            : null;
    }
}
