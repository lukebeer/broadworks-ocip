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
     * Delete a performance measurements reporting ftp server.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemPerformanceMeasurementReportingDeleteFileServerRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $ftpHostNetAddress = null;

    public function __construct(
         $ftpHostNetAddress
    ) {
        $this->setFtpHostNetAddress($ftpHostNetAddress);
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
}