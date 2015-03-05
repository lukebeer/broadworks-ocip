<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerInformationFile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerCertificateFile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerMaxTxPerSecond;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add the BroadWorks Mobile Manager.
 *         Only one BroadWorks Mobile Manager can be added per group.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupBroadWorksMobileManagerAddRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $informationFile,
             $certificateFile,
             $isActive,
             $localToCarrier,
             $maxTxPerSecondEnabled,
             $maxTxPerSecond=null,
             $tldnEnabled,
             $genericNumberEnabled,
             $mobileStateCheckEnabled,
             $locationBasedServicesEnabled
    ) {
        $this->serviceProviderId            = new ServiceProviderId($serviceProviderId);
        $this->groupId                      = new GroupId($groupId);
        $this->informationFile              = new BroadWorksMobileManagerInformationFile($informationFile);
        $this->certificateFile              = new BroadWorksMobileManagerCertificateFile($certificateFile);
        $this->isActive                     = $isActive;
        $this->localToCarrier               = $localToCarrier;
        $this->maxTxPerSecondEnabled        = $maxTxPerSecondEnabled;
        $this->maxTxPerSecond               = new BroadWorksMobileManagerMaxTxPerSecond($maxTxPerSecond);
        $this->tldnEnabled                  = $tldnEnabled;
        $this->genericNumberEnabled         = $genericNumberEnabled;
        $this->mobileStateCheckEnabled      = $mobileStateCheckEnabled;
        $this->locationBasedServicesEnabled = $locationBasedServicesEnabled;
        $this->args                         = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setInformationFile($informationFile)
    {
        $informationFile and $this->informationFile = new BroadWorksMobileManagerInformationFile($informationFile);
    }

    public function getInformationFile()
    {
        return (!$this->informationFile) ?: $this->informationFile->value();
    }

    public function setCertificateFile($certificateFile)
    {
        $certificateFile and $this->certificateFile = new BroadWorksMobileManagerCertificateFile($certificateFile);
    }

    public function getCertificateFile()
    {
        return (!$this->certificateFile) ?: $this->certificateFile->value();
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
