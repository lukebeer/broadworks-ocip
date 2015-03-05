<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerDomainName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerHomeZoneMobileCountryCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerHomeZoneNetworkCountryCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerHomeZoneLocationAreaCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerHomeZoneCellId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the EnterpriseBroadWorksMobileManagerGetHomeZoneRequest
 */
class EnterpriseBroadWorksMobileManagerGetHomeZoneResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $homeZoneDomainName,
             $mobileCountryCode,
             $mobileNetworkCode,
             $locationAreaCode,
             $cellIdentity
    ) {
        $this->homeZoneDomainName = new BroadWorksMobileManagerDomainName($homeZoneDomainName);
        $this->mobileCountryCode  = new BroadWorksMobileManagerHomeZoneMobileCountryCode($mobileCountryCode);
        $this->mobileNetworkCode  = new BroadWorksMobileManagerHomeZoneNetworkCountryCode($mobileNetworkCode);
        $this->locationAreaCode   = new BroadWorksMobileManagerHomeZoneLocationAreaCode($locationAreaCode);
        $this->cellIdentity       = new BroadWorksMobileManagerHomeZoneCellId($cellIdentity);
        $this->args               = func_get_args();
    }

    public function setHomeZoneDomainName($homeZoneDomainName)
    {
        $homeZoneDomainName and $this->homeZoneDomainName = new BroadWorksMobileManagerDomainName($homeZoneDomainName);
    }

    public function getHomeZoneDomainName()
    {
        return (!$this->homeZoneDomainName) ?: $this->homeZoneDomainName->value();
    }

    public function setMobileCountryCode($mobileCountryCode)
    {
        $mobileCountryCode and $this->mobileCountryCode = new BroadWorksMobileManagerHomeZoneMobileCountryCode($mobileCountryCode);
    }

    public function getMobileCountryCode()
    {
        return (!$this->mobileCountryCode) ?: $this->mobileCountryCode->value();
    }

    public function setMobileNetworkCode($mobileNetworkCode)
    {
        $mobileNetworkCode and $this->mobileNetworkCode = new BroadWorksMobileManagerHomeZoneNetworkCountryCode($mobileNetworkCode);
    }

    public function getMobileNetworkCode()
    {
        return (!$this->mobileNetworkCode) ?: $this->mobileNetworkCode->value();
    }

    public function setLocationAreaCode($locationAreaCode)
    {
        $locationAreaCode and $this->locationAreaCode = new BroadWorksMobileManagerHomeZoneLocationAreaCode($locationAreaCode);
    }

    public function getLocationAreaCode()
    {
        return (!$this->locationAreaCode) ?: $this->locationAreaCode->value();
    }

    public function setCellIdentity($cellIdentity)
    {
        $cellIdentity and $this->cellIdentity = new BroadWorksMobileManagerHomeZoneCellId($cellIdentity);
    }

    public function getCellIdentity()
    {
        return (!$this->cellIdentity) ?: $this->cellIdentity->value();
    }
}
