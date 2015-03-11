<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHotelingGuest; 

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
 * Response to UserHotelingGuestGetRequest14sp4
 */
class UserHotelingGuestGetResponse14sp4 extends ComplexType implements ComplexInterface
{
    public    $name                         = 'UserHotelingGuestGetResponse14sp4';
    protected $isActive                     = null;
    protected $enableAssociationLimit       = null;
    protected $associationLimitHours        = null;
    protected $hostUserId                   = null;
    protected $hostLastName                 = null;
    protected $hostFirstName                = null;
    protected $hostAssociationDateTime      = null;
    protected $hostEnforcesAssociationLimit = null;
    protected $hostAssociationLimitHours    = null;

    /**
     * @return UserHotelingGuestGetResponse14sp4
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
    public function setEnableAssociationLimit($enableAssociationLimit = null)
    {
        if (!$enableAssociationLimit) return $this;
        $this->enableAssociationLimit = new PrimitiveType($enableAssociationLimit);
        $this->enableAssociationLimit->setName('enableAssociationLimit');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableAssociationLimit()
    {
        return $this->enableAssociationLimit->getValue();
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
    public function setHostUserId($hostUserId = null)
    {
        if (!$hostUserId) return $this;
        $this->hostUserId = ($hostUserId InstanceOf UserId)
             ? $hostUserId
             : new UserId($hostUserId);
        $this->hostUserId->setName('hostUserId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getHostUserId()
    {
        return $this->hostUserId->getValue();
    }

    /**
     * 
     */
    public function setHostLastName($hostLastName = null)
    {
        if (!$hostLastName) return $this;
        $this->hostLastName = ($hostLastName InstanceOf LastName)
             ? $hostLastName
             : new LastName($hostLastName);
        $this->hostLastName->setName('hostLastName');
        return $this;
    }

    /**
     * 
     * @return LastName
     */
    public function getHostLastName()
    {
        return $this->hostLastName->getValue();
    }

    /**
     * 
     */
    public function setHostFirstName($hostFirstName = null)
    {
        if (!$hostFirstName) return $this;
        $this->hostFirstName = ($hostFirstName InstanceOf FirstName)
             ? $hostFirstName
             : new FirstName($hostFirstName);
        $this->hostFirstName->setName('hostFirstName');
        return $this;
    }

    /**
     * 
     * @return FirstName
     */
    public function getHostFirstName()
    {
        return $this->hostFirstName->getValue();
    }

    /**
     * 
     */
    public function setHostAssociationDateTime(xs:dateTime $hostAssociationDateTime = null)
    {
        if (!$hostAssociationDateTime) return $this;
        $this->hostAssociationDateTime->setName('hostAssociationDateTime');
        return $this;
    }

    /**
     * 
     * @return xs:dateTime
     */
    public function getHostAssociationDateTime()
    {
        return $this->hostAssociationDateTime->getValue();
    }

    /**
     * 
     */
    public function setHostEnforcesAssociationLimit($hostEnforcesAssociationLimit = null)
    {
        if (!$hostEnforcesAssociationLimit) return $this;
        $this->hostEnforcesAssociationLimit = new PrimitiveType($hostEnforcesAssociationLimit);
        $this->hostEnforcesAssociationLimit->setName('hostEnforcesAssociationLimit');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getHostEnforcesAssociationLimit()
    {
        return $this->hostEnforcesAssociationLimit->getValue();
    }

    /**
     * 
     */
    public function setHostAssociationLimitHours($hostAssociationLimitHours = null)
    {
        if (!$hostAssociationLimitHours) return $this;
        $this->hostAssociationLimitHours = ($hostAssociationLimitHours InstanceOf HotelingAssociationLimitHours)
             ? $hostAssociationLimitHours
             : new HotelingAssociationLimitHours($hostAssociationLimitHours);
        $this->hostAssociationLimitHours->setName('hostAssociationLimitHours');
        return $this;
    }

    /**
     * 
     * @return HotelingAssociationLimitHours
     */
    public function getHostAssociationLimitHours()
    {
        return $this->hostAssociationLimitHours->getValue();
    }
}
