<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CPEFileDirectory;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FTPUserPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FTPUserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Add a device CPE config file server.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replaced By: SystemCPEConfigAddFileServerRequest14sp6
 */
class SystemCPEConfigAddFileServerRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $deviceType        = null;
    protected $ftpHostNetAddress = null;
    protected $ftpUserId         = null;
    protected $ftpUserPassword   = null;
    protected $cpeFileDirectory  = null;
    protected $passiveFTP        = null;

    public function __construct(
         $deviceType,
         $ftpHostNetAddress,
         $ftpUserId,
         $ftpUserPassword,
         $cpeFileDirectory = null,
         $passiveFTP = null
    ) {
        $this->setDeviceType($deviceType);
        $this->setFtpHostNetAddress($ftpHostNetAddress);
        $this->setFtpUserId($ftpUserId);
        $this->setFtpUserPassword($ftpUserPassword);
        $this->setCpeFileDirectory($cpeFileDirectory);
        $this->setPassiveFTP($passiveFTP);
    }

    /**
     * Access device type.
     */
    public function setDeviceType($deviceType = null)
    {
        $this->deviceType = ($deviceType InstanceOf AccessDeviceType)
             ? $deviceType
             : new AccessDeviceType($deviceType);
    }

    /**
     * Access device type.
     */
    public function getDeviceType()
    {
        return (!$this->deviceType) ?: $this->deviceType->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setFtpHostNetAddress($ftpHostNetAddress = null)
    {
        $this->ftpHostNetAddress = ($ftpHostNetAddress InstanceOf NetAddress)
             ? $ftpHostNetAddress
             : new NetAddress($ftpHostNetAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getFtpHostNetAddress()
    {
        return (!$this->ftpHostNetAddress) ?: $this->ftpHostNetAddress->getValue();
    }

    /**
     * A user id for an FTP server.
     */
    public function setFtpUserId($ftpUserId = null)
    {
        $this->ftpUserId = ($ftpUserId InstanceOf FTPUserId)
             ? $ftpUserId
             : new FTPUserId($ftpUserId);
    }

    /**
     * A user id for an FTP server.
     */
    public function getFtpUserId()
    {
        return (!$this->ftpUserId) ?: $this->ftpUserId->getValue();
    }

    /**
     * A password for an FTP server.
     */
    public function setFtpUserPassword($ftpUserPassword = null)
    {
        $this->ftpUserPassword = ($ftpUserPassword InstanceOf FTPUserPassword)
             ? $ftpUserPassword
             : new FTPUserPassword($ftpUserPassword);
    }

    /**
     * A password for an FTP server.
     */
    public function getFtpUserPassword()
    {
        return (!$this->ftpUserPassword) ?: $this->ftpUserPassword->getValue();
    }

    /**
     * CPE Configuration File Directory.
     */
    public function setCpeFileDirectory($cpeFileDirectory = null)
    {
        $this->cpeFileDirectory = ($cpeFileDirectory InstanceOf CPEFileDirectory)
             ? $cpeFileDirectory
             : new CPEFileDirectory($cpeFileDirectory);
    }

    /**
     * CPE Configuration File Directory.
     */
    public function getCpeFileDirectory()
    {
        return (!$this->cpeFileDirectory) ?: $this->cpeFileDirectory->getValue();
    }

    /**
     * 
     */
    public function setPassiveFTP($passiveFTP = null)
    {
        $this->passiveFTP = (boolean) $passiveFTP;
    }

    /**
     * 
     */
    public function getPassiveFTP()
    {
        return (!$this->passiveFTP) ?: $this->passiveFTP->getValue();
    }
}
