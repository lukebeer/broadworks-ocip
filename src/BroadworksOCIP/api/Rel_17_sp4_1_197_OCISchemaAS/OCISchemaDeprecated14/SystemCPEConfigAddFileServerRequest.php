<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CPEFileDirectory;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FTPUserPassword;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FTPUserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Add a device CPE config file server.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replaced By: SystemCPEConfigAddFileServerRequest14sp6
 */
class SystemCPEConfigAddFileServerRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCPEConfigAddFileServerRequest';
    protected $deviceType;
    protected $ftpHostNetAddress;
    protected $ftpUserId;
    protected $ftpUserPassword;
    protected $cpeFileDirectory;
    protected $passiveFTP;

    public function __construct(
         $deviceType = '',
         $ftpHostNetAddress = '',
         $ftpUserId = '',
         $ftpUserPassword = '',
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
        $this->deviceType = ($deviceType InstanceOf AccessDeviceType)
             ? $deviceType
             : new AccessDeviceType($deviceType);
        $this->deviceType->setElementName('deviceType');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceType $deviceType
     */
    public function getDeviceType()
    {
        return ($this->deviceType)
            ? $this->deviceType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setFtpHostNetAddress($ftpHostNetAddress = null)
    {
        $this->ftpHostNetAddress = ($ftpHostNetAddress InstanceOf NetAddress)
             ? $ftpHostNetAddress
             : new NetAddress($ftpHostNetAddress);
        $this->ftpHostNetAddress->setElementName('ftpHostNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $ftpHostNetAddress
     */
    public function getFtpHostNetAddress()
    {
        return ($this->ftpHostNetAddress)
            ? $this->ftpHostNetAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setFtpUserId($ftpUserId = null)
    {
        $this->ftpUserId = ($ftpUserId InstanceOf FTPUserId)
             ? $ftpUserId
             : new FTPUserId($ftpUserId);
        $this->ftpUserId->setElementName('ftpUserId');
        return $this;
    }

    /**
     * 
     * @return FTPUserId $ftpUserId
     */
    public function getFtpUserId()
    {
        return ($this->ftpUserId)
            ? $this->ftpUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setFtpUserPassword($ftpUserPassword = null)
    {
        $this->ftpUserPassword = ($ftpUserPassword InstanceOf FTPUserPassword)
             ? $ftpUserPassword
             : new FTPUserPassword($ftpUserPassword);
        $this->ftpUserPassword->setElementName('ftpUserPassword');
        return $this;
    }

    /**
     * 
     * @return FTPUserPassword $ftpUserPassword
     */
    public function getFtpUserPassword()
    {
        return ($this->ftpUserPassword)
            ? $this->ftpUserPassword->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCpeFileDirectory($cpeFileDirectory = null)
    {
        $this->cpeFileDirectory = ($cpeFileDirectory InstanceOf CPEFileDirectory)
             ? $cpeFileDirectory
             : new CPEFileDirectory($cpeFileDirectory);
        $this->cpeFileDirectory->setElementName('cpeFileDirectory');
        return $this;
    }

    /**
     * 
     * @return CPEFileDirectory $cpeFileDirectory
     */
    public function getCpeFileDirectory()
    {
        return ($this->cpeFileDirectory)
            ? $this->cpeFileDirectory->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPassiveFTP($passiveFTP = null)
    {
        $this->passiveFTP = new PrimitiveType($passiveFTP);
        $this->passiveFTP->setElementName('passiveFTP');
        return $this;
    }

    /**
     * 
     * @return boolean $passiveFTP
     */
    public function getPassiveFTP()
    {
        return ($this->passiveFTP)
            ? $this->passiveFTP->getElementValue()
            : null;
    }
}
