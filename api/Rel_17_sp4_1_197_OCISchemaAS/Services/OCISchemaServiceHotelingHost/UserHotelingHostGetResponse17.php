<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHotelingHost; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHotelingHost\HotelingHostAccessLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HotelingAssociationLimitHours;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LocationDialingCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Extension17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserHotelingHostGetRequest17.
 */
class UserHotelingHostGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name = 'UserHotelingHostGetResponse17';
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
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHotelingHost\UserHotelingHostGetResponse17 $response
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
    public function setEnforceAssociationLimit($enforceAssociationLimit = null)
    {
        $this->enforceAssociationLimit = new PrimitiveType($enforceAssociationLimit);
        $this->enforceAssociationLimit->setName('enforceAssociationLimit');
        return $this;
    }

    /**
     * 
     * @return boolean $enforceAssociationLimit
     */
    public function getEnforceAssociationLimit()
    {
        return ($this->enforceAssociationLimit) ? $this->enforceAssociationLimit->getValue() : null;
    }

    /**
     * 
     */
    public function setAssociationLimitHours($associationLimitHours = null)
    {
        $this->associationLimitHours = ($associationLimitHours InstanceOf HotelingAssociationLimitHours)
             ? $associationLimitHours
             : new HotelingAssociationLimitHours($associationLimitHours);
        $this->associationLimitHours->setName('associationLimitHours');
        return $this;
    }

    /**
     * 
     * @return HotelingAssociationLimitHours $associationLimitHours
     */
    public function getAssociationLimitHours()
    {
        return ($this->associationLimitHours) ? $this->associationLimitHours->getValue() : null;
    }

    /**
     * 
     */
    public function setAccessLevel($accessLevel = null)
    {
        $this->accessLevel = ($accessLevel InstanceOf HotelingHostAccessLevel)
             ? $accessLevel
             : new HotelingHostAccessLevel($accessLevel);
        $this->accessLevel->setName('accessLevel');
        return $this;
    }

    /**
     * 
     * @return HotelingHostAccessLevel $accessLevel
     */
    public function getAccessLevel()
    {
        return ($this->accessLevel) ? $this->accessLevel->getValue() : null;
    }

    /**
     * 
     */
    public function setGuestLastName($guestLastName = null)
    {
        $this->guestLastName = ($guestLastName InstanceOf LastName)
             ? $guestLastName
             : new LastName($guestLastName);
        $this->guestLastName->setName('guestLastName');
        return $this;
    }

    /**
     * 
     * @return LastName $guestLastName
     */
    public function getGuestLastName()
    {
        return ($this->guestLastName) ? $this->guestLastName->getValue() : null;
    }

    /**
     * 
     */
    public function setGuestFirstName($guestFirstName = null)
    {
        $this->guestFirstName = ($guestFirstName InstanceOf FirstName)
             ? $guestFirstName
             : new FirstName($guestFirstName);
        $this->guestFirstName->setName('guestFirstName');
        return $this;
    }

    /**
     * 
     * @return FirstName $guestFirstName
     */
    public function getGuestFirstName()
    {
        return ($this->guestFirstName) ? $this->guestFirstName->getValue() : null;
    }

    /**
     * 
     */
    public function setGuestPhoneNumber($guestPhoneNumber = null)
    {
        $this->guestPhoneNumber = ($guestPhoneNumber InstanceOf DN)
             ? $guestPhoneNumber
             : new DN($guestPhoneNumber);
        $this->guestPhoneNumber->setName('guestPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN $guestPhoneNumber
     */
    public function getGuestPhoneNumber()
    {
        return ($this->guestPhoneNumber) ? $this->guestPhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setGuestExtension($guestExtension = null)
    {
        $this->guestExtension = ($guestExtension InstanceOf Extension17)
             ? $guestExtension
             : new Extension17($guestExtension);
        $this->guestExtension->setName('guestExtension');
        return $this;
    }

    /**
     * 
     * @return Extension17 $guestExtension
     */
    public function getGuestExtension()
    {
        return ($this->guestExtension) ? $this->guestExtension->getValue() : null;
    }

    /**
     * 
     */
    public function setGuestLocationDialingCode($guestLocationDialingCode = null)
    {
        $this->guestLocationDialingCode = ($guestLocationDialingCode InstanceOf LocationDialingCode)
             ? $guestLocationDialingCode
             : new LocationDialingCode($guestLocationDialingCode);
        $this->guestLocationDialingCode->setName('guestLocationDialingCode');
        return $this;
    }

    /**
     * 
     * @return LocationDialingCode $guestLocationDialingCode
     */
    public function getGuestLocationDialingCode()
    {
        return ($this->guestLocationDialingCode) ? $this->guestLocationDialingCode->getValue() : null;
    }

    /**
     * 
     */
    public function setGuestAssociationDateTime(xs:dateTime $guestAssociationDateTime = null)
    {
        $this->guestAssociationDateTime->setName('guestAssociationDateTime');
        return $this;
    }

    /**
     * 
     * @return xs:dateTime $guestAssociationDateTime
     */
    public function getGuestAssociationDateTime()
    {
        return ($this->guestAssociationDateTime) ? $this->guestAssociationDateTime->getValue() : null;
    }
}
