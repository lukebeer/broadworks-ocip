<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\GroupUserLicenseLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\LicenseStrictness;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ServerHostId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\LicenseName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemLicensingGetRequest. The license table columns are: "Name", "Licensed", "Used",
 *         "Available" and "Expiration Date".
 *         Replaced By: SystemLicensingGetResponse14sp3
 */
class SystemLicensingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $licenseStrictness  = null;
    protected $groupUserlimit     = null;
    protected $expirationDate     = null;
    protected $hostId             = null;
    protected $licenseName        = null;
    protected $licenseTable       = null;


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

    public function setLicenseTable(core:OCITable $licenseTable = null)
    {
    }

    public function getLicenseTable()
    {
        return (!$this->licenseTable) ?: $this->licenseTable->value();
    }
}
