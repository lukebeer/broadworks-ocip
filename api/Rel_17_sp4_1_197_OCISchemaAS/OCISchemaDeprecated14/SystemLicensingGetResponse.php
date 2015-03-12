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
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemLicensingGetRequest. The license table columns are: "Name", "Licensed", "Used",
 *         "Available" and "Expiration Date".
 *         Replaced By: SystemLicensingGetResponse14sp3
 */
class SystemLicensingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name              = 'SystemLicensingGetResponse';
    protected $licenseStrictness = null;
    protected $groupUserlimit    = null;
    protected $expirationDate    = null;
    protected $hostId            = null;
    protected $licenseName       = null;
    protected $licenseTable      = null;

    /**
     * @return SystemLicensingGetResponse
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
    public function setLicenseTable(TableType $licenseTable = null)
    {
        if (!$licenseTable) return $this;
        $this->licenseTable = $licenseTable;
        $this->licenseTable->setName('licenseTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getLicenseTable()
    {
        return $this->licenseTable;
    }
}
