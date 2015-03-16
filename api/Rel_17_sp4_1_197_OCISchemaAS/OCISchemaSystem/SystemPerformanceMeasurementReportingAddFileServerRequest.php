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
    public    $name = 'SystemPerformanceMeasurementReportingAddFileServerRequest';
    protected $ftpHostNetAddress;
    protected $ftpUserId;
    protected $ftpUserPassword;
    protected $passiveFTP;

    public function __construct(
         $ftpHostNetAddress = '',
         $ftpUserId = '',
         $ftpUserPassword = '',
         $passiveFTP = null
    ) {
        $this->setFtpHostNetAddress($ftpHostNetAddress);
        $this->setFtpUserId($ftpUserId);
        $this->setFtpUserPassword($ftpUserPassword);
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
    public function setFtpHostNetAddress($ftpHostNetAddress = null)
    {
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
        return ($this->ftpHostNetAddress) ? $this->ftpHostNetAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setFtpUserId($ftpUserId = null)
    {
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
        return ($this->ftpUserId) ? $this->ftpUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setFtpUserPassword($ftpUserPassword = null)
    {
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
        return ($this->ftpUserPassword) ? $this->ftpUserPassword->getValue() : null;
    }

    /**
     * 
     */
    public function setPassiveFTP($passiveFTP = null)
    {
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
        return ($this->passiveFTP) ? $this->passiveFTP->getValue() : null;
    }
}
