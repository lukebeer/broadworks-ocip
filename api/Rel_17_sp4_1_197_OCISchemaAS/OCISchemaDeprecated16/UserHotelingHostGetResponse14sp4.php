<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

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
 * Response to UserHotelingHostGetRequest14sp4.
 */
class UserHotelingHostGetResponse14sp4 extends ComplexType implements ComplexInterface
{
    public    $name                     = 'UserHotelingHostGetResponse14sp4';
    protected $isActive                 = null;
    protected $enforceAssociationLimit  = null;
    protected $associationLimitHours    = null;
    protected $accessLevel              = null;
    protected $guestLastName            = null;
    protected $guestFirstName           = null;
    protected $guestPhoneNumber         = null;
    protected $guestExtension           = null;
    protected $guestLocationDialingCode = null;
    protected $guestAssociationDateTime = null;

    /**
     * @return UserHotelingHostGetResponse14sp4
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
    public function setEnforceAssociationLimit($enforceAssociationLimit = null)
    {
        if (!$enforceAssociationLimit) return $this;
        $this->enforceAssociationLimit = new PrimitiveType($enforceAssociationLimit);
        $this->enforceAssociationLimit->setName('enforceAssociationLimit');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnforceAssociationLimit()
    {
        return $this->enforceAssociationLimit->getValue();
    }

    /**
     * 
     */
    public function setAssociationLimitHours($associationLimitHours = null)
    {
        if (!$associationLimitHours) return $this;
        $this->associationLimitHours = ($associationLimitHours InstanceOf HotelingAssociationLimitHours)
             ? $associationLimitHours
             : new HotelingAssociationLimitHours($associationLimitHours);
        $this->associationLimitHours->setName('associationLimitHours');
        return $this;
    }

    /**
     * 
     * @return HotelingAssociationLimitHours
     */
    public function getAssociationLimitHours()
    {
        return $this->associationLimitHours->getValue();
    }

    /**
     * 
     */
    public function setAccessLevel($accessLevel = null)
    {
        if (!$accessLevel) return $this;
        $this->accessLevel = ($accessLevel InstanceOf HotelingHostAccessLevel)
             ? $accessLevel
             : new HotelingHostAccessLevel($accessLevel);
        $this->accessLevel->setName('accessLevel');
        return $this;
    }

    /**
     * 
     * @return HotelingHostAccessLevel
     */
    public function getAccessLevel()
    {
        return $this->accessLevel->getValue();
    }

    /**
     * 
     */
    public function setGuestLastName($guestLastName = null)
    {
        if (!$guestLastName) return $this;
        $this->guestLastName = ($guestLastName InstanceOf LastName)
             ? $guestLastName
             : new LastName($guestLastName);
        $this->guestLastName->setName('guestLastName');
        return $this;
    }

    /**
     * 
     * @return LastName
     */
    public function getGuestLastName()
    {
        return $this->guestLastName->getValue();
    }

    /**
     * 
     */
    public function setGuestFirstName($guestFirstName = null)
    {
        if (!$guestFirstName) return $this;
        $this->guestFirstName = ($guestFirstName InstanceOf FirstName)
             ? $guestFirstName
             : new FirstName($guestFirstName);
        $this->guestFirstName->setName('guestFirstName');
        return $this;
    }

    /**
     * 
     * @return FirstName
     */
    public function getGuestFirstName()
    {
        return $this->guestFirstName->getValue();
    }

    /**
     * 
     */
    public function setGuestPhoneNumber($guestPhoneNumber = null)
    {
        if (!$guestPhoneNumber) return $this;
        $this->guestPhoneNumber = ($guestPhoneNumber InstanceOf DN)
             ? $guestPhoneNumber
             : new DN($guestPhoneNumber);
        $this->guestPhoneNumber->setName('guestPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return DN
     */
    public function getGuestPhoneNumber()
    {
        return $this->guestPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setGuestExtension($guestExtension = null)
    {
        if (!$guestExtension) return $this;
        $this->guestExtension = ($guestExtension InstanceOf Extension)
             ? $guestExtension
             : new Extension($guestExtension);
        $this->guestExtension->setName('guestExtension');
        return $this;
    }

    /**
     * 
     * @return Extension
     */
    public function getGuestExtension()
    {
        return $this->guestExtension->getValue();
    }

    /**
     * 
     */
    public function setGuestLocationDialingCode($guestLocationDialingCode = null)
    {
        if (!$guestLocationDialingCode) return $this;
        $this->guestLocationDialingCode = ($guestLocationDialingCode InstanceOf LocationDialingCode)
             ? $guestLocationDialingCode
             : new LocationDialingCode($guestLocationDialingCode);
        $this->guestLocationDialingCode->setName('guestLocationDialingCode');
        return $this;
    }

    /**
     * 
     * @return LocationDialingCode
     */
    public function getGuestLocationDialingCode()
    {
        return $this->guestLocationDialingCode->getValue();
    }

    /**
     * 
     */
    public function setGuestAssociationDateTime(xs:dateTime $guestAssociationDateTime = null)
    {
        if (!$guestAssociationDateTime) return $this;
        $this->guestAssociationDateTime->setName('guestAssociationDateTime');
        return $this;
    }

    /**
     * 
     * @return xs:dateTime
     */
    public function getGuestAssociationDateTime()
    {
        return $this->guestAssociationDateTime->getValue();
    }
}
