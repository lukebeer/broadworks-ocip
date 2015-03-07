<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerDeactivationReason;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerMaxTxPerSecond;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerDomainName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the EnterpriseBroadWorksMobileManagerGetRequest
 */
class EnterpriseBroadWorksMobileManagerGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                          = __CLASS__;
    protected $mobileManagerId               = null;
    protected $name                          = null;
    protected $isActive                      = null;
    protected $localToCarrier                = null;
    protected $deactivationReason            = null;
    protected $maxTxPerSecondEnabled         = null;
    protected $maxTxPerSecond                = null;
    protected $tldnEnabled                   = null;
    protected $genericNumberEnabled          = null;
    protected $mobileStateCheckEnabled       = null;
    protected $locationBasedServicesEnabled  = null;


    public function setMobileManagerId($mobileManagerId = null)
    {
        $this->mobileManagerId = ($mobileManagerId InstanceOf BroadWorksMobileManagerDomainName)
             ? $mobileManagerId
             : new BroadWorksMobileManagerDomainName($mobileManagerId);
    }

    public function getMobileManagerId()
    {
        return (!$this->mobileManagerId) ?: $this->mobileManagerId->value();
    }

    public function setName($name = null)
    {
        $this->name = ($name InstanceOf BroadWorksMobileManagerName)
             ? $name
             : new BroadWorksMobileManagerName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }

    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setLocalToCarrier(xs:boolean $localToCarrier = null)
    {
    }

    public function getLocalToCarrier()
    {
        return (!$this->localToCarrier) ?: $this->localToCarrier->value();
    }

    public function setDeactivationReason($deactivationReason = null)
    {
        $this->deactivationReason = ($deactivationReason InstanceOf BroadWorksMobileManagerDeactivationReason)
             ? $deactivationReason
             : new BroadWorksMobileManagerDeactivationReason($deactivationReason);
    }

    public function getDeactivationReason()
    {
        return (!$this->deactivationReason) ?: $this->deactivationReason->value();
    }

    public function setMaxTxPerSecondEnabled(xs:boolean $maxTxPerSecondEnabled = null)
    {
    }

    public function getMaxTxPerSecondEnabled()
    {
        return (!$this->maxTxPerSecondEnabled) ?: $this->maxTxPerSecondEnabled->value();
    }

    public function setMaxTxPerSecond($maxTxPerSecond = null)
    {
        $this->maxTxPerSecond = ($maxTxPerSecond InstanceOf BroadWorksMobileManagerMaxTxPerSecond)
             ? $maxTxPerSecond
             : new BroadWorksMobileManagerMaxTxPerSecond($maxTxPerSecond);
    }

    public function getMaxTxPerSecond()
    {
        return (!$this->maxTxPerSecond) ?: $this->maxTxPerSecond->value();
    }

    public function setTldnEnabled(xs:boolean $tldnEnabled = null)
    {
    }

    public function getTldnEnabled()
    {
        return (!$this->tldnEnabled) ?: $this->tldnEnabled->value();
    }

    public function setGenericNumberEnabled(xs:boolean $genericNumberEnabled = null)
    {
    }

    public function getGenericNumberEnabled()
    {
        return (!$this->genericNumberEnabled) ?: $this->genericNumberEnabled->value();
    }

    public function setMobileStateCheckEnabled(xs:boolean $mobileStateCheckEnabled = null)
    {
    }

    public function getMobileStateCheckEnabled()
    {
        return (!$this->mobileStateCheckEnabled) ?: $this->mobileStateCheckEnabled->value();
    }

    public function setLocationBasedServicesEnabled(xs:boolean $locationBasedServicesEnabled = null)
    {
    }

    public function getLocationBasedServicesEnabled()
    {
        return (!$this->locationBasedServicesEnabled) ?: $this->locationBasedServicesEnabled->value();
    }
}
