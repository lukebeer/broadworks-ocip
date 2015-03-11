<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerDeactivationReason;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerMaxTxPerSecond;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerDomainName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerName;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupBroadWorksMobileManagerGetRequest
 */
class GroupBroadWorksMobileManagerGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                         = 'GroupBroadWorksMobileManagerGetResponse';
    protected $mobileManagerId              = null;
    protected $name                         = null;
    protected $isActive                     = null;
    protected $localToCarrier               = null;
    protected $deactivationReason           = null;
    protected $maxTxPerSecondEnabled        = null;
    protected $maxTxPerSecond               = null;
    protected $tldnEnabled                  = null;
    protected $genericNumberEnabled         = null;
    protected $mobileStateCheckEnabled      = null;
    protected $locationBasedServicesEnabled = null;

    /**
     * @return GroupBroadWorksMobileManagerGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setMobileManagerId($mobileManagerId = null)
    {
        if (!$mobileManagerId) return $this;
        $this->mobileManagerId = ($mobileManagerId InstanceOf BroadWorksMobileManagerDomainName)
             ? $mobileManagerId
             : new BroadWorksMobileManagerDomainName($mobileManagerId);
        $this->mobileManagerId->setName('mobileManagerId');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerDomainName
     */
    public function getMobileManagerId()
    {
        return $this->mobileManagerId->getValue();
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        if (!$name) return $this;
        $this->name = ($name InstanceOf BroadWorksMobileManagerName)
             ? $name
             : new BroadWorksMobileManagerName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerName
     */
    public function getName()
    {
        return $this->name->getValue();
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
    public function setLocalToCarrier($localToCarrier = null)
    {
        if (!$localToCarrier) return $this;
        $this->localToCarrier = new PrimitiveType($localToCarrier);
        $this->localToCarrier->setName('localToCarrier');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getLocalToCarrier()
    {
        return $this->localToCarrier->getValue();
    }

    /**
     * 
     */
    public function setDeactivationReason($deactivationReason = null)
    {
        if (!$deactivationReason) return $this;
        $this->deactivationReason = ($deactivationReason InstanceOf BroadWorksMobileManagerDeactivationReason)
             ? $deactivationReason
             : new BroadWorksMobileManagerDeactivationReason($deactivationReason);
        $this->deactivationReason->setName('deactivationReason');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerDeactivationReason
     */
    public function getDeactivationReason()
    {
        return $this->deactivationReason->getValue();
    }

    /**
     * 
     */
    public function setMaxTxPerSecondEnabled($maxTxPerSecondEnabled = null)
    {
        if (!$maxTxPerSecondEnabled) return $this;
        $this->maxTxPerSecondEnabled = new PrimitiveType($maxTxPerSecondEnabled);
        $this->maxTxPerSecondEnabled->setName('maxTxPerSecondEnabled');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMaxTxPerSecondEnabled()
    {
        return $this->maxTxPerSecondEnabled->getValue();
    }

    /**
     * 
     */
    public function setMaxTxPerSecond($maxTxPerSecond = null)
    {
        if (!$maxTxPerSecond) return $this;
        $this->maxTxPerSecond = ($maxTxPerSecond InstanceOf BroadWorksMobileManagerMaxTxPerSecond)
             ? $maxTxPerSecond
             : new BroadWorksMobileManagerMaxTxPerSecond($maxTxPerSecond);
        $this->maxTxPerSecond->setName('maxTxPerSecond');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerMaxTxPerSecond
     */
    public function getMaxTxPerSecond()
    {
        return $this->maxTxPerSecond->getValue();
    }

    /**
     * 
     */
    public function setTldnEnabled($tldnEnabled = null)
    {
        if (!$tldnEnabled) return $this;
        $this->tldnEnabled = new PrimitiveType($tldnEnabled);
        $this->tldnEnabled->setName('tldnEnabled');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getTldnEnabled()
    {
        return $this->tldnEnabled->getValue();
    }

    /**
     * 
     */
    public function setGenericNumberEnabled($genericNumberEnabled = null)
    {
        if (!$genericNumberEnabled) return $this;
        $this->genericNumberEnabled = new PrimitiveType($genericNumberEnabled);
        $this->genericNumberEnabled->setName('genericNumberEnabled');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getGenericNumberEnabled()
    {
        return $this->genericNumberEnabled->getValue();
    }

    /**
     * 
     */
    public function setMobileStateCheckEnabled($mobileStateCheckEnabled = null)
    {
        if (!$mobileStateCheckEnabled) return $this;
        $this->mobileStateCheckEnabled = new PrimitiveType($mobileStateCheckEnabled);
        $this->mobileStateCheckEnabled->setName('mobileStateCheckEnabled');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMobileStateCheckEnabled()
    {
        return $this->mobileStateCheckEnabled->getValue();
    }

    /**
     * 
     */
    public function setLocationBasedServicesEnabled($locationBasedServicesEnabled = null)
    {
        if (!$locationBasedServicesEnabled) return $this;
        $this->locationBasedServicesEnabled = new PrimitiveType($locationBasedServicesEnabled);
        $this->locationBasedServicesEnabled->setName('locationBasedServicesEnabled');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getLocationBasedServicesEnabled()
    {
        return $this->locationBasedServicesEnabled->getValue();
    }
}
