<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\GroupUserLicenseLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\LicenseStrictness;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ServerHostId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\LicenseName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemLicensingGetRequest14sp3. The subscriber license table columns are: "Name", "Licensed", "Used" and "Available".
 *         The group service license table columns are: "Name", "Licensed", "Used" and "Available".
 *         The virtual service license table columns are: "Name", "Licensed", "Used" and "Available".
 *         The user service license table columns are: "Name", "Licensed", "Used", "Used By Hosted Users", "Used By Trunk Users", "Available" and "Expiration Date".
 *         The system param license table columns are: "Name", "Licensed", "Used", Available".
 */
class SystemLicensingGetResponse14sp3 extends ComplexType implements ComplexInterface
{
    public    $name                        = __CLASS__;
    protected $licenseStrictness           = null;
    protected $groupUserlimit              = null;
    protected $expirationDate              = null;
    protected $hostId                      = null;
    protected $licenseName                 = null;
    protected $numberOfTrunkUsers          = null;
    protected $subscriberLicenseTable      = null;
    protected $groupServiceLicenseTable    = null;
    protected $virtualServiceLicenseTable  = null;
    protected $userServiceLicenseTable     = null;
    protected $systemParamLicenseTable     = null;


    public function setLicenseStrictness($licenseStrictness = null)
    {
        $this->licenseStrictness = ($licenseStrictness InstanceOf LicenseStrictness)
             ? $licenseStrictness
             : new LicenseStrictness($licenseStrictness);
    }

    public function getLicenseStrictness()
    {
        return (!$this->licenseStrictness) ?: $this->licenseStrictness->value();
    }

    public function setGroupUserlimit($groupUserlimit = null)
    {
        $this->groupUserlimit = ($groupUserlimit InstanceOf GroupUserLicenseLimit)
             ? $groupUserlimit
             : new GroupUserLicenseLimit($groupUserlimit);
    }

    public function getGroupUserlimit()
    {
        return (!$this->groupUserlimit) ?: $this->groupUserlimit->value();
    }

    public function setExpirationDate(xs:dateTime $expirationDate = null)
    {
    }

    public function getExpirationDate()
    {
        return (!$this->expirationDate) ?: $this->expirationDate->value();
    }

    public function setHostId($hostId = null)
    {
        $this->hostId = ($hostId InstanceOf ServerHostId)
             ? $hostId
             : new ServerHostId($hostId);
    }

    public function getHostId()
    {
        return (!$this->hostId) ?: $this->hostId->value();
    }

    public function setLicenseName($licenseName = null)
    {
        $this->licenseName = ($licenseName InstanceOf LicenseName)
             ? $licenseName
             : new LicenseName($licenseName);
    }

    public function getLicenseName()
    {
        return (!$this->licenseName) ?: $this->licenseName->value();
    }

    public function setNumberOfTrunkUsers(xs:int $numberOfTrunkUsers = null)
    {
    }

    public function getNumberOfTrunkUsers()
    {
        return (!$this->numberOfTrunkUsers) ?: $this->numberOfTrunkUsers->value();
    }

    public function setSubscriberLicenseTable(core:OCITable $subscriberLicenseTable = null)
    {
    }

    public function getSubscriberLicenseTable()
    {
        return (!$this->subscriberLicenseTable) ?: $this->subscriberLicenseTable->value();
    }

    public function setGroupServiceLicenseTable(core:OCITable $groupServiceLicenseTable = null)
    {
    }

    public function getGroupServiceLicenseTable()
    {
        return (!$this->groupServiceLicenseTable) ?: $this->groupServiceLicenseTable->value();
    }

    public function setVirtualServiceLicenseTable(core:OCITable $virtualServiceLicenseTable = null)
    {
    }

    public function getVirtualServiceLicenseTable()
    {
        return (!$this->virtualServiceLicenseTable) ?: $this->virtualServiceLicenseTable->value();
    }

    public function setUserServiceLicenseTable(core:OCITable $userServiceLicenseTable = null)
    {
    }

    public function getUserServiceLicenseTable()
    {
        return (!$this->userServiceLicenseTable) ?: $this->userServiceLicenseTable->value();
    }

    public function setSystemParamLicenseTable(core:OCITable $systemParamLicenseTable = null)
    {
    }

    public function getSystemParamLicenseTable()
    {
        return (!$this->systemParamLicenseTable) ?: $this->systemParamLicenseTable->value();
    }
}
