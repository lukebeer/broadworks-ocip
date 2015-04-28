<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHotelingGuest; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HotelingAssociationLimitHours;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserHotelingGuestGetRequest14sp4
 */
class UserHotelingGuestGetResponse14sp4 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserHotelingGuestGetResponse14sp4';
    protected $isActive;
    protected $enableAssociationLimit;
    protected $associationLimitHours;
    protected $hostUserId;
    protected $hostLastName;
    protected $hostFirstName;
    protected $hostAssociationDateTime;
    protected $hostEnforcesAssociationLimit;
    protected $hostAssociationLimitHours;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHotelingGuest\UserHotelingGuestGetResponse14sp4 $response
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
    public function setEnableAssociationLimit($enableAssociationLimit = null)
    {
        $this->enableAssociationLimit = new PrimitiveType($enableAssociationLimit);
        $this->enableAssociationLimit->setElementName('enableAssociationLimit');
        return $this;
    }

    /**
     * 
     * @return boolean $enableAssociationLimit
     */
    public function getEnableAssociationLimit()
    {
        return ($this->enableAssociationLimit)
            ? $this->enableAssociationLimit->getElementValue()
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
    public function setHostUserId($hostUserId = null)
    {
        $this->hostUserId = ($hostUserId InstanceOf UserId)
             ? $hostUserId
             : new UserId($hostUserId);
        $this->hostUserId->setElementName('hostUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $hostUserId
     */
    public function getHostUserId()
    {
        return ($this->hostUserId)
            ? $this->hostUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHostLastName($hostLastName = null)
    {
        $this->hostLastName = ($hostLastName InstanceOf LastName)
             ? $hostLastName
             : new LastName($hostLastName);
        $this->hostLastName->setElementName('hostLastName');
        return $this;
    }

    /**
     * 
     * @return LastName $hostLastName
     */
    public function getHostLastName()
    {
        return ($this->hostLastName)
            ? $this->hostLastName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHostFirstName($hostFirstName = null)
    {
        $this->hostFirstName = ($hostFirstName InstanceOf FirstName)
             ? $hostFirstName
             : new FirstName($hostFirstName);
        $this->hostFirstName->setElementName('hostFirstName');
        return $this;
    }

    /**
     * 
     * @return FirstName $hostFirstName
     */
    public function getHostFirstName()
    {
        return ($this->hostFirstName)
            ? $this->hostFirstName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHostAssociationDateTime($hostAssociationDateTime = null)
    {
        $this->hostAssociationDateTime = new PrimitiveType($hostAssociationDateTime);
        $this->hostAssociationDateTime->setElementName('hostAssociationDateTime');
        return $this;
    }

    /**
     * 
     * @return string $hostAssociationDateTime
     */
    public function getHostAssociationDateTime()
    {
        return ($this->hostAssociationDateTime)
            ? $this->hostAssociationDateTime->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHostEnforcesAssociationLimit($hostEnforcesAssociationLimit = null)
    {
        $this->hostEnforcesAssociationLimit = new PrimitiveType($hostEnforcesAssociationLimit);
        $this->hostEnforcesAssociationLimit->setElementName('hostEnforcesAssociationLimit');
        return $this;
    }

    /**
     * 
     * @return boolean $hostEnforcesAssociationLimit
     */
    public function getHostEnforcesAssociationLimit()
    {
        return ($this->hostEnforcesAssociationLimit)
            ? $this->hostEnforcesAssociationLimit->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHostAssociationLimitHours($hostAssociationLimitHours = null)
    {
        $this->hostAssociationLimitHours = ($hostAssociationLimitHours InstanceOf HotelingAssociationLimitHours)
             ? $hostAssociationLimitHours
             : new HotelingAssociationLimitHours($hostAssociationLimitHours);
        $this->hostAssociationLimitHours->setElementName('hostAssociationLimitHours');
        return $this;
    }

    /**
     * 
     * @return HotelingAssociationLimitHours $hostAssociationLimitHours
     */
    public function getHostAssociationLimitHours()
    {
        return ($this->hostAssociationLimitHours)
            ? $this->hostAssociationLimitHours->getElementValue()
            : null;
    }
}
