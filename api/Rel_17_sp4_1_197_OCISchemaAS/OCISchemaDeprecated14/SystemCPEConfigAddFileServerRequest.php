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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a device CPE config file server.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replaced By: SystemCPEConfigAddFileServerRequest14sp6
 */
class SystemCPEConfigAddFileServerRequest extends ComplexType implements ComplexInterface
{
    public    $name              = 'SystemCPEConfigAddFileServerRequest';
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
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDeviceType($deviceType = null)
    {
        if (!$deviceType) return $this;
        $this->deviceType = ($deviceType InstanceOf AccessDeviceType)
             ? $deviceType
             : new AccessDeviceType($deviceType);
        $this->deviceType->setName('deviceType');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceType $deviceType
     */
    public function getDeviceType()
    {
        return $this->deviceType->getValue();
    }

    /**
     * 
     */
    public function setFtpHostNetAddress($ftpHostNetAddress = null)
    {
        if (!$ftpHostNetAddress) return $this;
        $this->ftpHostNetAddress = ($ftpHostNetAddress InstanceOf NetAddress)
             ? $ftpHostNetAddress
             : new NetAddress($ftpHostNetAddress);
        $this->ftpHostNetAddress->setName('ftpHostNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $ftpHostNetAddress
     */
    public function getFtpHostNetAddress()
    {
        return $this->ftpHostNetAddress->getValue();
    }

    /**
     * 
     */
    public function setFtpUserId($ftpUserId = null)
    {
        if (!$ftpUserId) return $this;
        $this->ftpUserId = ($ftpUserId InstanceOf FTPUserId)
             ? $ftpUserId
             : new FTPUserId($ftpUserId);
        $this->ftpUserId->setName('ftpUserId');
        return $this;
    }

    /**
     * 
     * @return FTPUserId $ftpUserId
     */
    public function getFtpUserId()
    {
        return $this->ftpUserId->getValue();
    }

    /**
     * 
     */
    public function setFtpUserPassword($ftpUserPassword = null)
    {
        if (!$ftpUserPassword) return $this;
        $this->ftpUserPassword = ($ftpUserPassword InstanceOf FTPUserPassword)
             ? $ftpUserPassword
             : new FTPUserPassword($ftpUserPassword);
        $this->ftpUserPassword->setName('ftpUserPassword');
        return $this;
    }

    /**
     * 
     * @return FTPUserPassword $ftpUserPassword
     */
    public function getFtpUserPassword()
    {
        return $this->ftpUserPassword->getValue();
    }

    /**
     * 
     */
    public function setCpeFileDirectory($cpeFileDirectory = null)
    {
        if (!$cpeFileDirectory) return $this;
        $this->cpeFileDirectory = ($cpeFileDirectory InstanceOf CPEFileDirectory)
             ? $cpeFileDirectory
             : new CPEFileDirectory($cpeFileDirectory);
        $this->cpeFileDirectory->setName('cpeFileDirectory');
        return $this;
    }

    /**
     * 
     * @return CPEFileDirectory $cpeFileDirectory
     */
    public function getCpeFileDirectory()
    {
        return $this->cpeFileDirectory->getValue();
    }

    /**
     * 
     */
    public function setPassiveFTP($passiveFTP = null)
    {
        if (!$passiveFTP) return $this;
        $this->passiveFTP = new PrimitiveType($passiveFTP);
        $this->passiveFTP->setName('passiveFTP');
        return $this;
    }

    /**
     * 
     * @return boolean $passiveFTP
     */
    public function getPassiveFTP()
    {
        return $this->passiveFTP->getValue();
    }
}
