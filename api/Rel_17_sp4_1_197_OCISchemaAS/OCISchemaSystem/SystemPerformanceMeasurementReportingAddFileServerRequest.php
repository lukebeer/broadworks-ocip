<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FTPUserPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FTPUserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Add a performance measurements reporting ftp server.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemPerformanceMeasurementReportingAddFileServerRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $ftpHostNetAddress = null;
    protected $ftpUserId         = null;
    protected $ftpUserPassword   = null;
    protected $passiveFTP        = null;

    public function __construct(
         $ftpHostNetAddress,
         $ftpUserId,
         $ftpUserPassword,
         $passiveFTP = null
    ) {
        $this->setFtpHostNetAddress($ftpHostNetAddress);
        $this->setFtpUserId($ftpUserId);
        $this->setFtpUserPassword($ftpUserPassword);
        $this->setPassiveFTP($passiveFTP);
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
