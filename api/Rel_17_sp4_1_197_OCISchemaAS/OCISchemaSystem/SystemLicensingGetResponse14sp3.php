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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemLicensingGetRequest14sp3. The subscriber license table columns are: "Name", "Licensed", "Used" and "Available".
 *         The group service license table columns are: "Name", "Licensed", "Used" and "Available".
 *         The virtual service license table columns are: "Name", "Licensed", "Used" and "Available".
 *         The user service license table columns are: "Name", "Licensed", "Used", "Used By Hosted Users", "Used By Trunk Users", "Available" and "Expiration Date".
 *         The system param license table columns are: "Name", "Licensed", "Used", Available".
 */
class SystemLicensingGetResponse14sp3 extends ComplexType implements ComplexInterface
{
    public    $name                       = 'SystemLicensingGetResponse14sp3';
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
     * @return SystemLicensingGetResponse14sp3
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setLicenseStrictness($licenseStrictness = null)
    {
        if (!$licenseStrictness) return $this;
        $this->licenseStrictness = ($licenseStrictness InstanceOf LicenseStrictness)
             ? $licenseStrictness
             : new LicenseStrictness($licenseStrictness);
        $this->licenseStrictness->setName('licenseStrictness');
        return $this;
    }

    /**
     * 
     * @return LicenseStrictness
     */
    public function getLicenseStrictness()
    {
        return $this->licenseStrictness->getValue();
    }

    /**
     * 
     */
    public function setGroupUserlimit($groupUserlimit = null)
    {
        if (!$groupUserlimit) return $this;
        $this->groupUserlimit = ($groupUserlimit InstanceOf GroupUserLicenseLimit)
             ? $groupUserlimit
             : new GroupUserLicenseLimit($groupUserlimit);
        $this->groupUserlimit->setName('groupUserlimit');
        return $this;
    }

    /**
     * 
     * @return GroupUserLicenseLimit
     */
    public function getGroupUserlimit()
    {
        return $this->groupUserlimit->getValue();
    }

    /**
     * 
     */
    public function setExpirationDate(xs:dateTime $expirationDate = null)
    {
        if (!$expirationDate) return $this;
        $this->expirationDate->setName('expirationDate');
        return $this;
    }

    /**
     * 
     * @return xs:dateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate->getValue();
    }

    /**
     * 
     */
    public function setHostId($hostId = null)
    {
        if (!$hostId) return $this;
        $this->hostId = ($hostId InstanceOf ServerHostId)
             ? $hostId
             : new ServerHostId($hostId);
        $this->hostId->setName('hostId');
        return $this;
    }

    /**
     * 
     * @return ServerHostId
     */
    public function getHostId()
    {
        return $this->hostId->getValue();
    }

    /**
     * 
     */
    public function setLicenseName($licenseName = null)
    {
        if (!$licenseName) return $this;
        $this->licenseName = ($licenseName InstanceOf LicenseName)
             ? $licenseName
             : new LicenseName($licenseName);
        $this->licenseName->setName('licenseName');
        return $this;
    }

    /**
     * 
     * @return LicenseName
     */
    public function getLicenseName()
    {
        return $this->licenseName->getValue();
    }

    /**
     * 
     */
    public function setNumberOfTrunkUsers($numberOfTrunkUsers = null)
    {
        if (!$numberOfTrunkUsers) return $this;
        $this->numberOfTrunkUsers = new PrimitiveType($numberOfTrunkUsers);
        $this->numberOfTrunkUsers->setName('numberOfTrunkUsers');
        return $this;
    }

    /**
     * 
     * @return xs:int
     */
    public function getNumberOfTrunkUsers()
    {
        return $this->numberOfTrunkUsers->getValue();
    }

    /**
     * 
     */
    public function setSubscriberLicenseTable(core:OCITable $subscriberLicenseTable = null)
    {
        if (!$subscriberLicenseTable) return $this;
        $this->subscriberLicenseTable->setName('subscriberLicenseTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getSubscriberLicenseTable()
    {
        return $this->subscriberLicenseTable->getValue();
    }

    /**
     * 
     */
    public function setGroupServiceLicenseTable(core:OCITable $groupServiceLicenseTable = null)
    {
        if (!$groupServiceLicenseTable) return $this;
        $this->groupServiceLicenseTable->setName('groupServiceLicenseTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getGroupServiceLicenseTable()
    {
        return $this->groupServiceLicenseTable->getValue();
    }

    /**
     * 
     */
    public function setVirtualServiceLicenseTable(core:OCITable $virtualServiceLicenseTable = null)
    {
        if (!$virtualServiceLicenseTable) return $this;
        $this->virtualServiceLicenseTable->setName('virtualServiceLicenseTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getVirtualServiceLicenseTable()
    {
        return $this->virtualServiceLicenseTable->getValue();
    }

    /**
     * 
     */
    public function setUserServiceLicenseTable(core:OCITable $userServiceLicenseTable = null)
    {
        if (!$userServiceLicenseTable) return $this;
        $this->userServiceLicenseTable->setName('userServiceLicenseTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getUserServiceLicenseTable()
    {
        return $this->userServiceLicenseTable->getValue();
    }

    /**
     * 
     */
    public function setSystemParamLicenseTable(core:OCITable $systemParamLicenseTable = null)
    {
        if (!$systemParamLicenseTable) return $this;
        $this->systemParamLicenseTable->setName('systemParamLicenseTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getSystemParamLicenseTable()
    {
        return $this->systemParamLicenseTable->getValue();
    }
}
