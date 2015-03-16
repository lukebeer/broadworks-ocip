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
    public    $name = 'SystemLicensingGetResponse';
    protected $licenseStrictness;
    protected $groupUserlimit;
    protected $expirationDate;
    protected $hostId;
    protected $licenseName;
    protected $licenseTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemLicensingGetResponse $response
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
        $this->licenseStrictness = ($licenseStrictness InstanceOf LicenseStrictness)
             ? $licenseStrictness
             : new LicenseStrictness($licenseStrictness);
        $this->licenseStrictness->setName('licenseStrictness');
        return $this;
    }

    /**
     * 
     * @return LicenseStrictness $licenseStrictness
     */
    public function getLicenseStrictness()
    {
        return ($this->licenseStrictness) ? $this->licenseStrictness->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupUserlimit($groupUserlimit = null)
    {
        $this->groupUserlimit = ($groupUserlimit InstanceOf GroupUserLicenseLimit)
             ? $groupUserlimit
             : new GroupUserLicenseLimit($groupUserlimit);
        $this->groupUserlimit->setName('groupUserlimit');
        return $this;
    }

    /**
     * 
     * @return GroupUserLicenseLimit $groupUserlimit
     */
    public function getGroupUserlimit()
    {
        return ($this->groupUserlimit) ? $this->groupUserlimit->getValue() : null;
    }

    /**
     * 
     */
    public function setExpirationDate(xs:dateTime $expirationDate = null)
    {
        $this->expirationDate->setName('expirationDate');
        return $this;
    }

    /**
     * 
     * @return xs:dateTime $expirationDate
     */
    public function getExpirationDate()
    {
        return ($this->expirationDate) ? $this->expirationDate->getValue() : null;
    }

    /**
     * 
     */
    public function setHostId($hostId = null)
    {
        $this->hostId = ($hostId InstanceOf ServerHostId)
             ? $hostId
             : new ServerHostId($hostId);
        $this->hostId->setName('hostId');
        return $this;
    }

    /**
     * 
     * @return ServerHostId $hostId
     */
    public function getHostId()
    {
        return ($this->hostId) ? $this->hostId->getValue() : null;
    }

    /**
     * 
     */
    public function setLicenseName($licenseName = null)
    {
        $this->licenseName = ($licenseName InstanceOf LicenseName)
             ? $licenseName
             : new LicenseName($licenseName);
        $this->licenseName->setName('licenseName');
        return $this;
    }

    /**
     * 
     * @return LicenseName $licenseName
     */
    public function getLicenseName()
    {
        return ($this->licenseName) ? $this->licenseName->getValue() : null;
    }

    /**
     * 
     */
    public function setLicenseTable(TableType $licenseTable = null)
    {
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
