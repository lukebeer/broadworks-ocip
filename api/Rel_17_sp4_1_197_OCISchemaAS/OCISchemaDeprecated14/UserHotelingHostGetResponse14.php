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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserHotelingHostGetResponse14;
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
    public    $name                     = __CLASS__;
    protected $isActive                 = null;
    protected $associationLimitHours    = null;
    protected $accessLevel              = null;
    protected $guestLastName            = null;
    protected $guestFirstName           = null;
    protected $guestPhoneNumber         = null;
    protected $guestExtension           = null;
    protected $guestLocationDialingCode = null;
    protected $guestAssociationDateTime = null;

    /**
     * @return UserHotelingHostGetResponse14
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
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive;
    }

    /**
     * Maximum time limit for hoteling guests association to hoteling hosts
     */
    public function setAssociationLimitHours($associationLimitHours = null)
    {
        $this->associationLimitHours = ($associationLimitHours InstanceOf HotelingAssociationLimitHours)
             ? $associationLimitHours
             : new HotelingAssociationLimitHours($associationLimitHours);
    }

    /**
     * Maximum time limit for hoteling guests association to hoteling hosts
     */
    public function getAssociationLimitHours()
    {
        return (!$this->associationLimitHours) ?: $this->associationLimitHours->getValue();
    }

    /**
     * Access level of the Hoteling Host Service
     */
    public function setAccessLevel($accessLevel = null)
    {
        $this->accessLevel = ($accessLevel InstanceOf HotelingHostAccessLevel)
             ? $accessLevel
             : new HotelingHostAccessLevel($accessLevel);
    }

    /**
     * Access level of the Hoteling Host Service
     */
    public function getAccessLevel()
    {
        return (!$this->accessLevel) ?: $this->accessLevel->getValue();
    }

    /**
     * Last Name is the last name of a user or an administrator.
     */
    public function setGuestLastName($guestLastName = null)
    {
        $this->guestLastName = ($guestLastName InstanceOf LastName)
             ? $guestLastName
             : new LastName($guestLastName);
    }

    /**
     * Last Name is the last name of a user or an administrator.
     */
    public function getGuestLastName()
    {
        return (!$this->guestLastName) ?: $this->guestLastName->getValue();
    }

    /**
     * First Name is the first name of a user or an administrator.
     */
    public function setGuestFirstName($guestFirstName = null)
    {
        $this->guestFirstName = ($guestFirstName InstanceOf FirstName)
             ? $guestFirstName
             : new FirstName($guestFirstName);
    }

    /**
     * First Name is the first name of a user or an administrator.
     */
    public function getGuestFirstName()
    {
        return (!$this->guestFirstName) ?: $this->guestFirstName->getValue();
    }

    /**
     * Directory Number in E164 Format.
     */
    public function setGuestPhoneNumber($guestPhoneNumber = null)
    {
        $this->guestPhoneNumber = ($guestPhoneNumber InstanceOf DN)
             ? $guestPhoneNumber
             : new DN($guestPhoneNumber);
    }

    /**
     * Directory Number in E164 Format.
     */
    public function getGuestPhoneNumber()
    {
        return (!$this->guestPhoneNumber) ?: $this->guestPhoneNumber->getValue();
    }

    /**
     * DEPRECATION NOTE: This is only used by deprecated R16 and R14 commands.
     *         Extension.
     */
    public function setGuestExtension($guestExtension = null)
    {
        $this->guestExtension = ($guestExtension InstanceOf Extension)
             ? $guestExtension
             : new Extension($guestExtension);
    }

    /**
     * DEPRECATION NOTE: This is only used by deprecated R16 and R14 commands.
     *         Extension.
     */
    public function getGuestExtension()
    {
        return (!$this->guestExtension) ?: $this->guestExtension->getValue();
    }

    /**
     * Group location dialing code for groups that are part of a enterprise.
     */
    public function setGuestLocationDialingCode($guestLocationDialingCode = null)
    {
        $this->guestLocationDialingCode = ($guestLocationDialingCode InstanceOf LocationDialingCode)
             ? $guestLocationDialingCode
             : new LocationDialingCode($guestLocationDialingCode);
    }

    /**
     * Group location dialing code for groups that are part of a enterprise.
     */
    public function getGuestLocationDialingCode()
    {
        return (!$this->guestLocationDialingCode) ?: $this->guestLocationDialingCode->getValue();
    }

    /**
     * 
     */
    public function setGuestAssociationDateTime(xs:dateTime $guestAssociationDateTime = null)
    {
        $this->guestAssociationDateTime =  $guestAssociationDateTime;
    }

    /**
     * 
     */
    public function getGuestAssociationDateTime()
    {
        return (!$this->guestAssociationDateTime) ?: $this->guestAssociationDateTime->getValue();
    }
}
