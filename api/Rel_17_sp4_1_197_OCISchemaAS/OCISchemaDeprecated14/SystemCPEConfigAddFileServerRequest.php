<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FTPUserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FTPUserPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CPEFileDirectory;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a device CPE config file server.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replaced By: SystemCPEConfigAddFileServerRequest14sp6
 */
class SystemCPEConfigAddFileServerRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $deviceType,
             $ftpHostNetAddress,
             $ftpUserId,
             $ftpUserPassword,
             $cpeFileDirectory=null,
             $passiveFTP=null
    ) {
        $this->deviceType        = new AccessDeviceType($deviceType);
        $this->ftpHostNetAddress = new NetAddress($ftpHostNetAddress);
        $this->ftpUserId         = new FTPUserId($ftpUserId);
        $this->ftpUserPassword   = new FTPUserPassword($ftpUserPassword);
        $this->cpeFileDirectory  = new CPEFileDirectory($cpeFileDirectory);
        $this->passiveFTP        = $passiveFTP;
        $this->args              = func_get_args();
    }

    public function setDeviceType($deviceType)
    {
        $deviceType and $this->deviceType = new AccessDeviceType($deviceType);
    }

    public function getDeviceType()
    {
        return (!$this->deviceType) ?: $this->deviceType->value();
    }

    public function setFtpHostNetAddress($ftpHostNetAddress)
    {
        $ftpHostNetAddress and $this->ftpHostNetAddress = new NetAddress($ftpHostNetAddress);
    }

    public function getFtpHostNetAddress()
    {
        return (!$this->ftpHostNetAddress) ?: $this->ftpHostNetAddress->value();
    }

    public function setFtpUserId($ftpUserId)
    {
        $ftpUserId and $this->ftpUserId = new FTPUserId($ftpUserId);
    }

    public function getFtpUserId()
    {
        return (!$this->ftpUserId) ?: $this->ftpUserId->value();
    }

    public function setFtpUserPassword($ftpUserPassword)
    {
        $ftpUserPassword and $this->ftpUserPassword = new FTPUserPassword($ftpUserPassword);
    }

    public function getFtpUserPassword()
    {
        return (!$this->ftpUserPassword) ?: $this->ftpUserPassword->value();
    }

    public function setCpeFileDirectory($cpeFileDirectory)
    {
        $cpeFileDirectory and $this->cpeFileDirectory = new CPEFileDirectory($cpeFileDirectory);
    }

    public function getCpeFileDirectory()
    {
        return (!$this->cpeFileDirectory) ?: $this->cpeFileDirectory->value();
    }

    public function setPassiveFTP($passiveFTP)
    {
        $passiveFTP and $this->passiveFTP = new xs:boolean($passiveFTP);
    }

    public function getPassiveFTP()
    {
        return (!$this->passiveFTP) ?: $this->passiveFTP->value();
    }
}
