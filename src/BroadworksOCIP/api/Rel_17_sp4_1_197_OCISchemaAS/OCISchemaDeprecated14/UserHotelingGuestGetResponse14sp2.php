<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

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
 * Response to UserHotelingGuestGetRequest14.
 *         Replaced by: UserHotelingGuestGetResponse14sp4
 */
class UserHotelingGuestGetResponse14sp2 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserHotelingGuestGetResponse14sp2';
    protected $isActive;
    protected $associationLimitHours;
    protected $hostUserId;
    protected $hostLastName;
    protected $hostFirstName;
    protected $hostAssociationDateTime;
    protected $hostAssociationLimitHours;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserHotelingGuestGetResponse14sp2 $response
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
