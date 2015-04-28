<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\GroupUserLicenseLimit;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\LicenseStrictness;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ServerHostId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\LicenseName;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemLicensingGetRequest. The license table columns are: "Name", "Licensed", "Used",
 *         "Available" and "Expiration Date".
 *         Replaced By: SystemLicensingGetResponse14sp3
 */
class SystemLicensingGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemLicensingGetResponse';
    protected $licenseStrictness;
    protected $groupUserlimit;
    protected $expirationDate;
    protected $hostId;
    protected $licenseName;
    protected $licenseTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemLicensingGetResponse $response
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
        $this->licenseStrictness->setElementName('licenseStrictness');
        return $this;
    }

    /**
     * 
     * @return LicenseStrictness $licenseStrictness
     */
    public function getLicenseStrictness()
    {
        return ($this->licenseStrictness)
            ? $this->licenseStrictness->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupUserlimit($groupUserlimit = null)
    {
        $this->groupUserlimit = ($groupUserlimit InstanceOf GroupUserLicenseLimit)
             ? $groupUserlimit
             : new GroupUserLicenseLimit($groupUserlimit);
        $this->groupUserlimit->setElementName('groupUserlimit');
        return $this;
    }

    /**
     * 
     * @return GroupUserLicenseLimit $groupUserlimit
     */
    public function getGroupUserlimit()
    {
        return ($this->groupUserlimit)
            ? $this->groupUserlimit->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setExpirationDate($expirationDate = null)
    {
        $this->expirationDate = new PrimitiveType($expirationDate);
        $this->expirationDate->setElementName('expirationDate');
        return $this;
    }

    /**
     * 
     * @return string $expirationDate
     */
    public function getExpirationDate()
    {
        return ($this->expirationDate)
            ? $this->expirationDate->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHostId($hostId = null)
    {
        $this->hostId = ($hostId InstanceOf ServerHostId)
             ? $hostId
             : new ServerHostId($hostId);
        $this->hostId->setElementName('hostId');
        return $this;
    }

    /**
     * 
     * @return ServerHostId $hostId
     */
    public function getHostId()
    {
        return ($this->hostId)
            ? $this->hostId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLicenseName($licenseName = null)
    {
        $this->licenseName = ($licenseName InstanceOf LicenseName)
             ? $licenseName
             : new LicenseName($licenseName);
        $this->licenseName->setElementName('licenseName');
        return $this;
    }

    /**
     * 
     * @return LicenseName $licenseName
     */
    public function getLicenseName()
    {
        return ($this->licenseName)
            ? $this->licenseName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLicenseTable(TableType $licenseTable = null)
    {
        $this->licenseTable = $licenseTable;
        $this->licenseTable->setElementName('licenseTable');
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
