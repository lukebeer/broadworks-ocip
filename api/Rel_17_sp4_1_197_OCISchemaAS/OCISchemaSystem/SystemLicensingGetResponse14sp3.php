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
    public    $name                       = __CLASS__;
    protected $licenseStrictness          = null;
    protected $groupUserlimit             = null;
    protected $expirationDate             = null;
    protected $hostId                     = null;
    protected $licenseName                = null;
    protected $numberOfTrunkUsers         = null;
    protected $subscriberLicenseTable     = null;
    protected $groupServiceLicenseTable   = null;
    protected $virtualServiceLicenseTable = null;
    protected $userServiceLicenseTable    = null;
    protected $systemParamLicenseTable    = null;


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
        $this->expirationDate =  $expirationDate;
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
    public function setNumberOfTrunkUsers($numberOfTrunkUsers = null)
    {
        $this->numberOfTrunkUsers = (int) $numberOfTrunkUsers;
    }

    /**
     * 
     */
    public function getNumberOfTrunkUsers()
    {
        return (!$this->numberOfTrunkUsers) ?: $this->numberOfTrunkUsers->getValue();
    }

    /**
     * 
     */
    public function setSubscriberLicenseTable(core:OCITable $subscriberLicenseTable = null)
    {
        $this->subscriberLicenseTable =  $subscriberLicenseTable;
    }

    /**
     * 
     */
    public function getSubscriberLicenseTable()
    {
        return (!$this->subscriberLicenseTable) ?: $this->subscriberLicenseTable->getValue();
    }

    /**
     * 
     */
    public function setGroupServiceLicenseTable(core:OCITable $groupServiceLicenseTable = null)
    {
        $this->groupServiceLicenseTable =  $groupServiceLicenseTable;
    }

    /**
     * 
     */
    public function getGroupServiceLicenseTable()
    {
        return (!$this->groupServiceLicenseTable) ?: $this->groupServiceLicenseTable->getValue();
    }

    /**
     * 
     */
    public function setVirtualServiceLicenseTable(core:OCITable $virtualServiceLicenseTable = null)
    {
        $this->virtualServiceLicenseTable =  $virtualServiceLicenseTable;
    }

    /**
     * 
     */
    public function getVirtualServiceLicenseTable()
    {
        return (!$this->virtualServiceLicenseTable) ?: $this->virtualServiceLicenseTable->getValue();
    }

    /**
     * 
     */
    public function setUserServiceLicenseTable(core:OCITable $userServiceLicenseTable = null)
    {
        $this->userServiceLicenseTable =  $userServiceLicenseTable;
    }

    /**
     * 
     */
    public function getUserServiceLicenseTable()
    {
        return (!$this->userServiceLicenseTable) ?: $this->userServiceLicenseTable->getValue();
    }

    /**
     * 
     */
    public function setSystemParamLicenseTable(core:OCITable $systemParamLicenseTable = null)
    {
        $this->systemParamLicenseTable =  $systemParamLicenseTable;
    }

    /**
     * 
     */
    public function getSystemParamLicenseTable()
    {
        return (!$this->systemParamLicenseTable) ?: $this->systemParamLicenseTable->getValue();
    }
}
