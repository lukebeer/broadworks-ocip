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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify an existing home zone in the BroadWorks Mobile Manager.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class EnterpriseBroadWorksMobileManagerModifyHomeZoneRequest extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $serviceProviderId  = null;
    protected $homeZoneId         = null;
    protected $homeZoneDomainName = null;
    protected $mobileCountryCode  = null;
    protected $mobileNetworkCode  = null;
    protected $locationAreaCode   = null;
    protected $cellIdentity       = null;

    public function __construct(
         $serviceProviderId,
         $homeZoneId,
         $homeZoneDomainName = null,
         $mobileCountryCode = null,
         $mobileNetworkCode = null,
         $locationAreaCode = null,
         $cellIdentity = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setHomeZoneId($homeZoneId);
        $this->setHomeZoneDomainName($homeZoneDomainName);
        $this->setMobileCountryCode($mobileCountryCode);
        $this->setMobileNetworkCode($mobileNetworkCode);
        $this->setLocationAreaCode($locationAreaCode);
        $this->setCellIdentity($cellIdentity);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setHomeZoneId($homeZoneId = null)
    {
        $this->homeZoneId = (string) $homeZoneId;
    }

    /**
     * 
     */
    public function getHomeZoneId()
    {
        return (!$this->homeZoneId) ?: $this->homeZoneId->getValue();
    }

    /**
     * Domain name.
     */
    public function setHomeZoneDomainName($homeZoneDomainName = null)
    {
        $this->homeZoneDomainName = ($homeZoneDomainName InstanceOf BroadWorksMobileManagerDomainName)
             ? $homeZoneDomainName
             : new BroadWorksMobileManagerDomainName($homeZoneDomainName);
    }

    /**
     * Domain name.
     */
    public function getHomeZoneDomainName()
    {
        return (!$this->homeZoneDomainName) ?: $this->homeZoneDomainName->getValue();
    }

    /**
     * Country dialing code.
     *         A single asterisk or digit range from 000 to 999.
     */
    public function setMobileCountryCode($mobileCountryCode = null)
    {
        $this->mobileCountryCode = ($mobileCountryCode InstanceOf BroadWorksMobileManagerHomeZoneMobileCountryCode)
             ? $mobileCountryCode
             : new BroadWorksMobileManagerHomeZoneMobileCountryCode($mobileCountryCode);
    }

    /**
     * Country dialing code.
     *         A single asterisk or digit range from 000 to 999.
     */
    public function getMobileCountryCode()
    {
        return (!$this->mobileCountryCode) ?: $this->mobileCountryCode->getValue();
    }

    /**
     * Network Country Code
     *         A single asterisk or digit range from 00 to 999.
     */
    public function setMobileNetworkCode($mobileNetworkCode = null)
    {
        $this->mobileNetworkCode = ($mobileNetworkCode InstanceOf BroadWorksMobileManagerHomeZoneNetworkCountryCode)
             ? $mobileNetworkCode
             : new BroadWorksMobileManagerHomeZoneNetworkCountryCode($mobileNetworkCode);
    }

    /**
     * Network Country Code
     *         A single asterisk or digit range from 00 to 999.
     */
    public function getMobileNetworkCode()
    {
        return (!$this->mobileNetworkCode) ?: $this->mobileNetworkCode->getValue();
    }

    /**
     * Location area code.
     *         A single asterisk or digit range from 0 to 65535.
     */
    public function setLocationAreaCode($locationAreaCode = null)
    {
        $this->locationAreaCode = ($locationAreaCode InstanceOf BroadWorksMobileManagerHomeZoneLocationAreaCode)
             ? $locationAreaCode
             : new BroadWorksMobileManagerHomeZoneLocationAreaCode($locationAreaCode);
    }

    /**
     * Location area code.
     *         A single asterisk or digit range from 0 to 65535.
     */
    public function getLocationAreaCode()
    {
        return (!$this->locationAreaCode) ?: $this->locationAreaCode->getValue();
    }

    /**
     * Cell ID.
     *         A single asterisk or digit range from 0 to 65535.
     */
    public function setCellIdentity($cellIdentity = null)
    {
        $this->cellIdentity = ($cellIdentity InstanceOf BroadWorksMobileManagerHomeZoneCellId)
             ? $cellIdentity
             : new BroadWorksMobileManagerHomeZoneCellId($cellIdentity);
    }

    /**
     * Cell ID.
     *         A single asterisk or digit range from 0 to 65535.
     */
    public function getCellIdentity()
    {
        return (!$this->cellIdentity) ?: $this->cellIdentity->getValue();
    }
}