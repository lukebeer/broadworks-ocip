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
    const     RESPONSE_TYPE      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemLicensingGetResponse';
    public    $name              = __CLASS__;
    protected $licenseStrictness = null;
    protected $groupUserlimit    = null;
    protected $expirationDate    = null;
    protected $hostId            = null;
    protected $licenseName       = null;
    protected $licenseTable      = null;


    /**
     * License type.
     */
    public function setLicenseStrictness($licenseStrictness = null)
    {
        $this->licenseStrictness = ($licenseStrictness InstanceOf LicenseStrictness)
             ? $licenseStrictness
             : new LicenseStrictness($licenseStrictness);
    }

    /**
     * License type.
     */
    public function getLicenseStrictness()
    {
        return (!$this->licenseStrictness) ?: $this->licenseStrictness->getValue();
    }

    /**
     * The max number of users in a group that will consume a group license.
     *         This number has to be greater than 0. For example, if the number is 300,
     *         then the first 300 users in a group will consume one group license and
     *         the #301 user will consume the second group license.
     */
    public function setGroupUserlimit($groupUserlimit = null)
    {
        $this->groupUserlimit = ($groupUserlimit InstanceOf GroupUserLicenseLimit)
             ? $groupUserlimit
             : new GroupUserLicenseLimit($groupUserlimit);
    }

    /**
     * The max number of users in a group that will consume a group license.
     *         This number has to be greater than 0. For example, if the number is 300,
     *         then the first 300 users in a group will consume one group license and
     *         the #301 user will consume the second group license.
     */
    public function getGroupUserlimit()
    {
        return (!$this->groupUserlimit) ?: $this->groupUserlimit->getValue();
    }

    /**
     * 
     */
    public function setExpirationDate(xs:dateTime $expirationDate = null)
    {
        $this->expirationDate = xs:dateTime $expirationDate;
    }

    /**
     * 
     */
    public function getExpirationDate()
    {
        return (!$this->expirationDate) ?: $this->expirationDate->getValue();
    }

    /**
     * Uniquely identifies the server computer hardware.
     */
    public function setHostId($hostId = null)
    {
        $this->hostId = ($hostId InstanceOf ServerHostId)
             ? $hostId
             : new ServerHostId($hostId);
    }

    /**
     * Uniquely identifies the server computer hardware.
     */
    public function getHostId()
    {
        return (!$this->hostId) ?: $this->hostId->getValue();
    }

    /**
     * Something that has been licensed.
     */
    public function setLicenseName($licenseName = null)
    {
        $this->licenseName = ($licenseName InstanceOf LicenseName)
             ? $licenseName
             : new LicenseName($licenseName);
    }

    /**
     * Something that has been licensed.
     */
    public function getLicenseName()
    {
        return (!$this->licenseName) ?: $this->licenseName->getValue();
    }

    /**
     * 
     */
    public function setLicenseTable(core:OCITable $licenseTable = null)
    {
        $this->licenseTable = core:OCITable $licenseTable;
    }

    /**
     * 
     */
    public function getLicenseTable()
    {
        return (!$this->licenseTable) ?: $this->licenseTable->getValue();
    }
}
