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
 * Modify a device CPE config file server.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replaced By: SystemCPEConfigModifyFileServerRequest14sp6
 */
class SystemCPEConfigModifyFileServerRequest extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $deviceType         = null;
    protected $ftpHostNetAddress  = null;
    protected $ftpUserId          = null;
    protected $ftpUserPassword    = null;
    protected $cpeFileDirectory   = null;
    protected $passiveFTP         = null;

    public function __construct(
         $deviceType,
         $ftpHostNetAddress = null,
         $ftpUserId = null,
         $ftpUserPassword = null,
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

    public function setDeviceType($deviceType = null)
    {
        $this->deviceType = ($deviceType InstanceOf AccessDeviceType)
             ? $deviceType
             : new AccessDeviceType($deviceType);
    }

    public function getDeviceType()
    {
        return (!$this->deviceType) ?: $this->deviceType->value();
    }

    public function setFtpHostNetAddress($ftpHostNetAddress = null)
    {
        $this->ftpHostNetAddress = ($ftpHostNetAddress InstanceOf NetAddress)
             ? $ftpHostNetAddress
             : new NetAddress($ftpHostNetAddress);
    }

    public function getFtpHostNetAddress()
    {
        return (!$this->ftpHostNetAddress) ?: $this->ftpHostNetAddress->value();
    }

    public function setFtpUserId($ftpUserId = null)
    {
        $this->ftpUserId = ($ftpUserId InstanceOf FTPUserId)
             ? $ftpUserId
             : new FTPUserId($ftpUserId);
    }

    public function getFtpUserId()
    {
        return (!$this->ftpUserId) ?: $this->ftpUserId->value();
    }

    public function setFtpUserPassword($ftpUserPassword = null)
    {
        $this->ftpUserPassword = ($ftpUserPassword InstanceOf FTPUserPassword)
             ? $ftpUserPassword
             : new FTPUserPassword($ftpUserPassword);
    }

    public function getFtpUserPassword()
    {
        return (!$this->ftpUserPassword) ?: $this->ftpUserPassword->value();
    }

    public function setCpeFileDirectory($cpeFileDirectory = null)
    {
        $this->cpeFileDirectory = ($cpeFileDirectory InstanceOf CPEFileDirectory)
             ? $cpeFileDirectory
             : new CPEFileDirectory($cpeFileDirectory);
    }

    public function getCpeFileDirectory()
    {
        return (!$this->cpeFileDirectory) ?: $this->cpeFileDirectory->value();
    }

    public function setPassiveFTP(xs:boolean $passiveFTP = null)
    {
    }

    public function getPassiveFTP()
    {
        return (!$this->passiveFTP) ?: $this->passiveFTP->value();
    }
}
