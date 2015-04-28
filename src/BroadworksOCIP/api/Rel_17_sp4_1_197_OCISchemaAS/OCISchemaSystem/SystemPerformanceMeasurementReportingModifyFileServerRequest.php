<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify a performance measurements reporting ftp server.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemPerformanceMeasurementReportingModifyFileServerRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemPerformanceMeasurementReportingModifyFileServerRequest';
    protected $ftpHostNetAddress;
    protected $passiveFTP;

    public function __construct(
         $ftpHostNetAddress = '',
         $passiveFTP = null
    ) {
        $this->setFtpHostNetAddress($ftpHostNetAddress);
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
