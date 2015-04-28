<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerHomeZoneNetworkCountryCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerHomeZoneMobileCountryCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerHomeZoneLocationAreaCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerHomeZoneCellId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerDomainName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify an existing home zone in the BroadWorks Mobile Manager.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupBroadWorksMobileManagerModifyHomeZoneRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupBroadWorksMobileManagerModifyHomeZoneRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $homeZoneId;
    protected $homeZoneDomainName;
    protected $mobileCountryCode;
    protected $mobileNetworkCode;
    protected $locationAreaCode;
    protected $cellIdentity;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $homeZoneId = '',
         $homeZoneDomainName = null,
         $mobileCountryCode = null,
         $mobileNetworkCode = null,
         $locationAreaCode = null,
         $cellIdentity = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setHomeZoneId($homeZoneId);
        $this->setHomeZoneDomainName($homeZoneDomainName);
        $this->setMobileCountryCode($mobileCountryCode);
        $this->setMobileNetworkCode($mobileNetworkCode);
        $this->setLocationAreaCode($locationAreaCode);
        $this->setCellIdentity($cellIdentity);
    }

    /**
     * @return mixed $response
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
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHomeZoneId($homeZoneId = null)
    {
        $this->homeZoneId = new PrimitiveType($homeZoneId);
        $this->homeZoneId->setElementName('homeZoneId');
        return $this;
    }

    /**
     * 
     * @return string $homeZoneId
     */
    public function getHomeZoneId()
    {
        return ($this->homeZoneId)
            ? $this->homeZoneId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHomeZoneDomainName($homeZoneDomainName = null)
    {
        $this->homeZoneDomainName = ($homeZoneDomainName InstanceOf BroadWorksMobileManagerDomainName)
             ? $homeZoneDomainName
             : new BroadWorksMobileManagerDomainName($homeZoneDomainName);
        $this->homeZoneDomainName->setElementName('homeZoneDomainName');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerDomainName $homeZoneDomainName
     */
    public function getHomeZoneDomainName()
    {
        return ($this->homeZoneDomainName)
            ? $this->homeZoneDomainName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMobileCountryCode($mobileCountryCode = null)
    {
        $this->mobileCountryCode = ($mobileCountryCode InstanceOf BroadWorksMobileManagerHomeZoneMobileCountryCode)
             ? $mobileCountryCode
             : new BroadWorksMobileManagerHomeZoneMobileCountryCode($mobileCountryCode);
        $this->mobileCountryCode->setElementName('mobileCountryCode');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerHomeZoneMobileCountryCode $mobileCountryCode
     */
    public function getMobileCountryCode()
    {
        return ($this->mobileCountryCode)
            ? $this->mobileCountryCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMobileNetworkCode($mobileNetworkCode = null)
    {
        $this->mobileNetworkCode = ($mobileNetworkCode InstanceOf BroadWorksMobileManagerHomeZoneNetworkCountryCode)
             ? $mobileNetworkCode
             : new BroadWorksMobileManagerHomeZoneNetworkCountryCode($mobileNetworkCode);
        $this->mobileNetworkCode->setElementName('mobileNetworkCode');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerHomeZoneNetworkCountryCode $mobileNetworkCode
     */
    public function getMobileNetworkCode()
    {
        return ($this->mobileNetworkCode)
            ? $this->mobileNetworkCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLocationAreaCode($locationAreaCode = null)
    {
        $this->locationAreaCode = ($locationAreaCode InstanceOf BroadWorksMobileManagerHomeZoneLocationAreaCode)
             ? $locationAreaCode
             : new BroadWorksMobileManagerHomeZoneLocationAreaCode($locationAreaCode);
        $this->locationAreaCode->setElementName('locationAreaCode');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerHomeZoneLocationAreaCode $locationAreaCode
     */
    public function getLocationAreaCode()
    {
        return ($this->locationAreaCode)
            ? $this->locationAreaCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCellIdentity($cellIdentity = null)
    {
        $this->cellIdentity = ($cellIdentity InstanceOf BroadWorksMobileManagerHomeZoneCellId)
             ? $cellIdentity
             : new BroadWorksMobileManagerHomeZoneCellId($cellIdentity);
        $this->cellIdentity->setElementName('cellIdentity');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerHomeZoneCellId $cellIdentity
     */
    public function getCellIdentity()
    {
        return ($this->cellIdentity)
            ? $this->cellIdentity->getElementValue()
            : null;
    }
}
