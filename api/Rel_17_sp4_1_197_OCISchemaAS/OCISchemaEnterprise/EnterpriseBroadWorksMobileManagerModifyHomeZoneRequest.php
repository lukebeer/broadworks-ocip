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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify an existing home zone in the BroadWorks Mobile Manager.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class EnterpriseBroadWorksMobileManagerModifyHomeZoneRequest extends ComplexType implements ComplexInterface
{
    public    $name               = 'EnterpriseBroadWorksMobileManagerModifyHomeZoneRequest';
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
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setHomeZoneId($homeZoneId = null)
    {
        if (!$homeZoneId) return $this;
        $this->homeZoneId = new PrimitiveType($homeZoneId);
        $this->homeZoneId->setName('homeZoneId');
        return $this;
    }

    /**
     * 
     * @return xs:string
     */
    public function getHomeZoneId()
    {
        return $this->homeZoneId->getValue();
    }

    /**
     * 
     */
    public function setHomeZoneDomainName($homeZoneDomainName = null)
    {
        if (!$homeZoneDomainName) return $this;
        $this->homeZoneDomainName = ($homeZoneDomainName InstanceOf BroadWorksMobileManagerDomainName)
             ? $homeZoneDomainName
             : new BroadWorksMobileManagerDomainName($homeZoneDomainName);
        $this->homeZoneDomainName->setName('homeZoneDomainName');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerDomainName
     */
    public function getHomeZoneDomainName()
    {
        return $this->homeZoneDomainName->getValue();
    }

    /**
     * 
     */
    public function setMobileCountryCode($mobileCountryCode = null)
    {
        if (!$mobileCountryCode) return $this;
        $this->mobileCountryCode = ($mobileCountryCode InstanceOf BroadWorksMobileManagerHomeZoneMobileCountryCode)
             ? $mobileCountryCode
             : new BroadWorksMobileManagerHomeZoneMobileCountryCode($mobileCountryCode);
        $this->mobileCountryCode->setName('mobileCountryCode');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerHomeZoneMobileCountryCode
     */
    public function getMobileCountryCode()
    {
        return $this->mobileCountryCode->getValue();
    }

    /**
     * 
     */
    public function setMobileNetworkCode($mobileNetworkCode = null)
    {
        if (!$mobileNetworkCode) return $this;
        $this->mobileNetworkCode = ($mobileNetworkCode InstanceOf BroadWorksMobileManagerHomeZoneNetworkCountryCode)
             ? $mobileNetworkCode
             : new BroadWorksMobileManagerHomeZoneNetworkCountryCode($mobileNetworkCode);
        $this->mobileNetworkCode->setName('mobileNetworkCode');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerHomeZoneNetworkCountryCode
     */
    public function getMobileNetworkCode()
    {
        return $this->mobileNetworkCode->getValue();
    }

    /**
     * 
     */
    public function setLocationAreaCode($locationAreaCode = null)
    {
        if (!$locationAreaCode) return $this;
        $this->locationAreaCode = ($locationAreaCode InstanceOf BroadWorksMobileManagerHomeZoneLocationAreaCode)
             ? $locationAreaCode
             : new BroadWorksMobileManagerHomeZoneLocationAreaCode($locationAreaCode);
        $this->locationAreaCode->setName('locationAreaCode');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerHomeZoneLocationAreaCode
     */
    public function getLocationAreaCode()
    {
        return $this->locationAreaCode->getValue();
    }

    /**
     * 
     */
    public function setCellIdentity($cellIdentity = null)
    {
        if (!$cellIdentity) return $this;
        $this->cellIdentity = ($cellIdentity InstanceOf BroadWorksMobileManagerHomeZoneCellId)
             ? $cellIdentity
             : new BroadWorksMobileManagerHomeZoneCellId($cellIdentity);
        $this->cellIdentity->setName('cellIdentity');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerHomeZoneCellId
     */
    public function getCellIdentity()
    {
        return $this->cellIdentity->getValue();
    }
}
