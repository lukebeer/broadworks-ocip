<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerDomainName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerDeactivationReason;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerMaxTxPerSecond;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the EnterpriseBroadWorksMobileManagerGetRequest
 */
class EnterpriseBroadWorksMobileManagerGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $mobileManagerId,
             $name,
             $isActive,
             $localToCarrier,
             $deactivationReason=null,
             $maxTxPerSecondEnabled,
             $maxTxPerSecond=null,
             $tldnEnabled,
             $genericNumberEnabled,
             $mobileStateCheckEnabled,
             $locationBasedServicesEnabled
    ) {
        $this->mobileManagerId              = new BroadWorksMobileManagerDomainName($mobileManagerId);
        $this->name                         = new BroadWorksMobileManagerName($name);
        $this->isActive                     = $isActive;
        $this->localToCarrier               = $localToCarrier;
        $this->deactivationReason           = new BroadWorksMobileManagerDeactivationReason($deactivationReason);
        $this->maxTxPerSecondEnabled        = $maxTxPerSecondEnabled;
        $this->maxTxPerSecond               = new BroadWorksMobileManagerMaxTxPerSecond($maxTxPerSecond);
        $this->tldnEnabled                  = $tldnEnabled;
        $this->genericNumberEnabled         = $genericNumberEnabled;
        $this->mobileStateCheckEnabled      = $mobileStateCheckEnabled;
        $this->locationBasedServicesEnabled = $locationBasedServicesEnabled;
        $this->args                         = func_get_args();
    }

    public function setMobileManagerId($mobileManagerId)
    {
        $mobileManagerId and $this->mobileManagerId = new BroadWorksMobileManagerDomainName($mobileManagerId);
    }

    public function getMobileManagerId()
    {
        return (!$this->mobileManagerId) ?: $this->mobileManagerId->value();
    }

    public function setName($name)
    {
        $name and $this->name = new BroadWorksMobileManagerName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setLocalToCarrier($localToCarrier)
    {
        $localToCarrier and $this->localToCarrier = new xs:boolean($localToCarrier);
    }

    public function getLocalToCarrier()
    {
        return (!$this->localToCarrier) ?: $this->localToCarrier->value();
    }

    public function setDeactivationReason($deactivationReason)
    {
        $deactivationReason and $this->deactivationReason = new BroadWorksMobileManagerDeactivationReason($deactivationReason);
    }

    public function getDeactivationReason()
    {
        return (!$this->deactivationReason) ?: $this->deactivationReason->value();
    }

    public function setMaxTxPerSecondEnabled($maxTxPerSecondEnabled)
    {
        $maxTxPerSecondEnabled and $this->maxTxPerSecondEnabled = new xs:boolean($maxTxPerSecondEnabled);
    }

    public function getMaxTxPerSecondEnabled()
    {
        return (!$this->maxTxPerSecondEnabled) ?: $this->maxTxPerSecondEnabled->value();
    }

    public function setMaxTxPerSecond($maxTxPerSecond)
    {
        $maxTxPerSecond and $this->maxTxPerSecond = new BroadWorksMobileManagerMaxTxPerSecond($maxTxPerSecond);
    }

    public function getMaxTxPerSecond()
    {
        return (!$this->maxTxPerSecond) ?: $this->maxTxPerSecond->value();
    }

    public function setTldnEnabled($tldnEnabled)
    {
        $tldnEnabled and $this->tldnEnabled = new xs:boolean($tldnEnabled);
    }

    public function getTldnEnabled()
    {
        return (!$this->tldnEnabled) ?: $this->tldnEnabled->value();
    }

    public function setGenericNumberEnabled($genericNumberEnabled)
    {
        $genericNumberEnabled and $this->genericNumberEnabled = new xs:boolean($genericNumberEnabled);
    }

    public function getGenericNumberEnabled()
    {
        return (!$this->genericNumberEnabled) ?: $this->genericNumberEnabled->value();
    }

    public function setMobileStateCheckEnabled($mobileStateCheckEnabled)
    {
        $mobileStateCheckEnabled and $this->mobileStateCheckEnabled = new xs:boolean($mobileStateCheckEnabled);
    }

    public function getMobileStateCheckEnabled()
    {
        return (!$this->mobileStateCheckEnabled) ?: $this->mobileStateCheckEnabled->value();
    }

    public function setLocationBasedServicesEnabled($locationBasedServicesEnabled)
    {
        $locationBasedServicesEnabled and $this->locationBasedServicesEnabled = new xs:boolean($locationBasedServicesEnabled);
    }

    public function getLocationBasedServicesEnabled()
    {
        return (!$this->locationBasedServicesEnabled) ?: $this->locationBasedServicesEnabled->value();
    }
}
