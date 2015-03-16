<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HotelingAssociationLimitHours;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserHotelingGuestGetRequest14.
 *         Replaced By: UserSharedCallAppearanceAddEndpointRequest14sp2
 */
class UserHotelingGuestGetResponse14 extends ComplexType implements ComplexInterface
{
    public    $name = 'UserHotelingGuestGetResponse14';
    protected $isActive;
    protected $associationLimitHours;
    protected $hostUserId;
    protected $hostLastName;
    protected $hostFirstName;
    protected $hostAssociationDateTime;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserHotelingGuestGetResponse14 $response
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
    public function setHostUserId($hostUserId = null)
    {
        $this->hostUserId = ($hostUserId InstanceOf UserId)
             ? $hostUserId
             : new UserId($hostUserId);
        $this->hostUserId->setName('hostUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $hostUserId
     */
    public function getHostUserId()
    {
        return ($this->hostUserId) ? $this->hostUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setHostLastName($hostLastName = null)
    {
        $this->hostLastName = ($hostLastName InstanceOf LastName)
             ? $hostLastName
             : new LastName($hostLastName);
        $this->hostLastName->setName('hostLastName');
        return $this;
    }

    /**
     * 
     * @return LastName $hostLastName
     */
    public function getHostLastName()
    {
        return ($this->hostLastName) ? $this->hostLastName->getValue() : null;
    }

    /**
     * 
     */
    public function setHostFirstName($hostFirstName = null)
    {
        $this->hostFirstName = ($hostFirstName InstanceOf FirstName)
             ? $hostFirstName
             : new FirstName($hostFirstName);
        $this->hostFirstName->setName('hostFirstName');
        return $this;
    }

    /**
     * 
     * @return FirstName $hostFirstName
     */
    public function getHostFirstName()
    {
        return ($this->hostFirstName) ? $this->hostFirstName->getValue() : null;
    }

    /**
     * 
     */
    public function setHostAssociationDateTime(xs:dateTime $hostAssociationDateTime = null)
    {
        $this->hostAssociationDateTime->setName('hostAssociationDateTime');
        return $this;
    }

    /**
     * 
     * @return xs:dateTime $hostAssociationDateTime
     */
    public function getHostAssociationDateTime()
    {
        return ($this->hostAssociationDateTime) ? $this->hostAssociationDateTime->getValue() : null;
    }
}
