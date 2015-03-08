<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify a performance measurements reporting ftp server.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemPerformanceMeasurementReportingModifyFileServerRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $ftpHostNetAddress = null;
    protected $passiveFTP        = null;

    public function __construct(
         $ftpHostNetAddress,
         $passiveFTP = null
    ) {
        $this->setFtpHostNetAddress($ftpHostNetAddress);
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
