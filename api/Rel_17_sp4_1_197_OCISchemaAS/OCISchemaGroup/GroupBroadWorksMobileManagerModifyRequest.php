<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerCertificateFile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerInformationFile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerMaxTxPerSecond;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the BroadWorks Mobile Manager settings.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupBroadWorksMobileManagerModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                          = __CLASS__;
    protected $serviceProviderId             = null;
    protected $groupId                       = null;
    protected $informationFile               = null;
    protected $certificateFile               = null;
    protected $localToCarrier                = null;
    protected $maxTxPerSecondEnabled         = null;
    protected $maxTxPerSecond                = null;
    protected $tldnEnabled                   = null;
    protected $genericNumberEnabled          = null;
    protected $mobileStateCheckEnabled       = null;
    protected $locationBasedServicesEnabled  = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $informationFile = null,
         $certificateFile = null,
         $localToCarrier = null,
         $maxTxPerSecondEnabled = null,
         $maxTxPerSecond = null,
         $tldnEnabled = null,
         $genericNumberEnabled = null,
         $mobileStateCheckEnabled = null,
         $locationBasedServicesEnabled = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setInformationFile($informationFile);
        $this->setCertificateFile($certificateFile);
        $this->setLocalToCarrier($localToCarrier);
        $this->setMaxTxPerSecondEnabled($maxTxPerSecondEnabled);
        $this->setMaxTxPerSecond($maxTxPerSecond);
        $this->setTldnEnabled($tldnEnabled);
        $this->setGenericNumberEnabled($genericNumberEnabled);
        $this->setMobileStateCheckEnabled($mobileStateCheckEnabled);
        $this->setLocationBasedServicesEnabled($locationBasedServicesEnabled);
    }

    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setInformationFile($informationFile = null)
    {
        $this->informationFile = ($informationFile InstanceOf BroadWorksMobileManagerInformationFile)
             ? $informationFile
             : new BroadWorksMobileManagerInformationFile($informationFile);
    }

    public function getInformationFile()
    {
        return (!$this->informationFile) ?: $this->informationFile->value();
    }

    public function setCertificateFile($certificateFile = null)
    {
        $this->certificateFile = ($certificateFile InstanceOf BroadWorksMobileManagerCertificateFile)
             ? $certificateFile
             : new BroadWorksMobileManagerCertificateFile($certificateFile);
    }

    public function getCertificateFile()
    {
        return (!$this->certificateFile) ?: $this->certificateFile->value();
    }

    public function setLocalToCarrier(xs:boolean $localToCarrier = null)
    {
    }

    public function getLocalToCarrier()
    {
        return (!$this->localToCarrier) ?: $this->localToCarrier->value();
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
