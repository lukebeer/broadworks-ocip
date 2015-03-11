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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a performance measurements reporting ftp server.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemPerformanceMeasurementReportingAddFileServerRequest extends ComplexType implements ComplexInterface
{
    public    $name              = 'SystemPerformanceMeasurementReportingAddFileServerRequest';
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
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
     * @return NetAddress
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
     * @return FTPUserId
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
     * @return FTPUserPassword
     */
    public function getFtpUserPassword()
    {
        return $this->ftpUserPassword->getValue();
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
     * @return xs:boolean
     */
    public function getPassiveFTP()
    {
        return $this->passiveFTP->getValue();
    }
}
