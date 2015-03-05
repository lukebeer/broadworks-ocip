<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LicenseStrictness;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserLicenseLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:dateTime;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServerHostId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LicenseName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:int;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
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
    public    $name = __CLASS__;

    public function __construct(
             $licenseStrictness,
             $groupUserlimit,
             $expirationDate=null,
             $hostId=null,
             $licenseName=null,
             $numberOfTrunkUsers,
             $subscriberLicenseTable,
             $groupServiceLicenseTable,
             $virtualServiceLicenseTable,
             $userServiceLicenseTable,
             $systemParamLicenseTable
    ) {
        $this->licenseStrictness          = $licenseStrictness;
        $this->groupUserlimit             = $groupUserlimit;
        $this->expirationDate             = $expirationDate;
        $this->hostId                     = $hostId;
        $this->licenseName                = $licenseName;
        $this->numberOfTrunkUsers         = $numberOfTrunkUsers;
        $this->subscriberLicenseTable     = $subscriberLicenseTable;
        $this->groupServiceLicenseTable   = $groupServiceLicenseTable;
        $this->virtualServiceLicenseTable = $virtualServiceLicenseTable;
        $this->userServiceLicenseTable    = $userServiceLicenseTable;
        $this->systemParamLicenseTable    = $systemParamLicenseTable;
        $this->args                       = func_get_args();
    }

    public function setLicenseStrictness($licenseStrictness)
    {
        $licenseStrictness and $this->licenseStrictness = new LicenseStrictness($licenseStrictness);
    }

    public function getLicenseStrictness()
    {
        return (!$this->licenseStrictness) ?: $this->licenseStrictness->value();
    }

    public function setGroupUserlimit($groupUserlimit)
    {
        $groupUserlimit and $this->groupUserlimit = new GroupUserLicenseLimit($groupUserlimit);
    }

    public function getGroupUserlimit()
    {
        return (!$this->groupUserlimit) ?: $this->groupUserlimit->value();
    }

    public function setExpirationDate($expirationDate)
    {
        $expirationDate and $this->expirationDate = new xs:dateTime($expirationDate);
    }

    public function getExpirationDate()
    {
        return (!$this->expirationDate) ?: $this->expirationDate->value();
    }

    public function setHostId($hostId)
    {
        $hostId and $this->hostId = new ServerHostId($hostId);
    }

    public function getHostId()
    {
        return (!$this->hostId) ?: $this->hostId->value();
    }

    public function setLicenseName($licenseName)
    {
        $licenseName and $this->licenseName = new LicenseName($licenseName);
    }

    public function getLicenseName()
    {
        return (!$this->licenseName) ?: $this->licenseName->value();
    }

    public function setNumberOfTrunkUsers($numberOfTrunkUsers)
    {
        $numberOfTrunkUsers and $this->numberOfTrunkUsers = new xs:int($numberOfTrunkUsers);
    }

    public function getNumberOfTrunkUsers()
    {
        return (!$this->numberOfTrunkUsers) ?: $this->numberOfTrunkUsers->value();
    }

    public function setSubscriberLicenseTable($subscriberLicenseTable)
    {
        $subscriberLicenseTable and $this->subscriberLicenseTable = new core:OCITable($subscriberLicenseTable);
    }

    public function getSubscriberLicenseTable()
    {
        return (!$this->subscriberLicenseTable) ?: $this->subscriberLicenseTable->value();
    }

    public function setGroupServiceLicenseTable($groupServiceLicenseTable)
    {
        $groupServiceLicenseTable and $this->groupServiceLicenseTable = new core:OCITable($groupServiceLicenseTable);
    }

    public function getGroupServiceLicenseTable()
    {
        return (!$this->groupServiceLicenseTable) ?: $this->groupServiceLicenseTable->value();
    }

    public function setVirtualServiceLicenseTable($virtualServiceLicenseTable)
    {
        $virtualServiceLicenseTable and $this->virtualServiceLicenseTable = new core:OCITable($virtualServiceLicenseTable);
    }

    public function getVirtualServiceLicenseTable()
    {
        return (!$this->virtualServiceLicenseTable) ?: $this->virtualServiceLicenseTable->value();
    }

    public function setUserServiceLicenseTable($userServiceLicenseTable)
    {
        $userServiceLicenseTable and $this->userServiceLicenseTable = new core:OCITable($userServiceLicenseTable);
    }

    public function getUserServiceLicenseTable()
    {
        return (!$this->userServiceLicenseTable) ?: $this->userServiceLicenseTable->value();
    }

    public function setSystemParamLicenseTable($systemParamLicenseTable)
    {
        $systemParamLicenseTable and $this->systemParamLicenseTable = new core:OCITable($systemParamLicenseTable);
    }

    public function getSystemParamLicenseTable()
    {
        return (!$this->systemParamLicenseTable) ?: $this->systemParamLicenseTable->value();
    }
}
