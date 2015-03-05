<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LicenseStrictness;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserLicenseLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:dateTime;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServerHostId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LicenseName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemLicensingGetRequest. The license table columns are: "Name", "Licensed", "Used",
 *         "Available" and "Expiration Date".
 *         Replaced By: SystemLicensingGetResponse14sp3
 */
class SystemLicensingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $licenseStrictness,
             $groupUserlimit,
             $expirationDate=null,
             $hostId=null,
             $licenseName=null,
             $licenseTable
    ) {
        $this->licenseStrictness = $licenseStrictness;
        $this->groupUserlimit    = $groupUserlimit;
        $this->expirationDate    = $expirationDate;
        $this->hostId            = $hostId;
        $this->licenseName       = $licenseName;
        $this->licenseTable      = $licenseTable;
        $this->args              = func_get_args();
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

    public function setLicenseTable($licenseTable)
    {
        $licenseTable and $this->licenseTable = new core:OCITable($licenseTable);
    }

    public function getLicenseTable()
    {
        return (!$this->licenseTable) ?: $this->licenseTable->value();
    }
}
