<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerHomeZoneNetworkCountryCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerHomeZoneMobileCountryCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerHomeZoneLocationAreaCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerHomeZoneCellId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerDomainName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the EnterpriseBroadWorksMobileManagerGetHomeZoneRequest
 */
class EnterpriseBroadWorksMobileManagerGetHomeZoneResponse extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $homeZoneDomainName  = null;
    protected $mobileCountryCode   = null;
    protected $mobileNetworkCode   = null;
    protected $locationAreaCode    = null;
    protected $cellIdentity        = null;


    public function setHomeZoneDomainName($homeZoneDomainName = null)
    {
        $this->homeZoneDomainName = ($homeZoneDomainName InstanceOf BroadWorksMobileManagerDomainName)
             ? $homeZoneDomainName
             : new BroadWorksMobileManagerDomainName($homeZoneDomainName);
    }

    public function getHomeZoneDomainName()
    {
        return (!$this->homeZoneDomainName) ?: $this->homeZoneDomainName->value();
    }

    public function setMobileCountryCode($mobileCountryCode = null)
    {
        $this->mobileCountryCode = ($mobileCountryCode InstanceOf BroadWorksMobileManagerHomeZoneMobileCountryCode)
             ? $mobileCountryCode
             : new BroadWorksMobileManagerHomeZoneMobileCountryCode($mobileCountryCode);
    }

    public function getMobileCountryCode()
    {
        return (!$this->mobileCountryCode) ?: $this->mobileCountryCode->value();
    }

    public function setMobileNetworkCode($mobileNetworkCode = null)
    {
        $this->mobileNetworkCode = ($mobileNetworkCode InstanceOf BroadWorksMobileManagerHomeZoneNetworkCountryCode)
             ? $mobileNetworkCode
             : new BroadWorksMobileManagerHomeZoneNetworkCountryCode($mobileNetworkCode);
    }

    public function getMobileNetworkCode()
    {
        return (!$this->mobileNetworkCode) ?: $this->mobileNetworkCode->value();
    }

    public function setLocationAreaCode($locationAreaCode = null)
    {
        $this->locationAreaCode = ($locationAreaCode InstanceOf BroadWorksMobileManagerHomeZoneLocationAreaCode)
             ? $locationAreaCode
             : new BroadWorksMobileManagerHomeZoneLocationAreaCode($locationAreaCode);
    }

    public function getLocationAreaCode()
    {
        return (!$this->locationAreaCode) ?: $this->locationAreaCode->value();
    }

    public function setCellIdentity($cellIdentity = null)
    {
        $this->cellIdentity = ($cellIdentity InstanceOf BroadWorksMobileManagerHomeZoneCellId)
             ? $cellIdentity
             : new BroadWorksMobileManagerHomeZoneCellId($cellIdentity);
    }

    public function getCellIdentity()
    {
        return (!$this->cellIdentity) ?: $this->cellIdentity->value();
    }
}
