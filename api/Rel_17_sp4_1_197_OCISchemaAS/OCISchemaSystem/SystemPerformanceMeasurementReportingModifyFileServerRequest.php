<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a performance measurements reporting ftp server.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemPerformanceMeasurementReportingModifyFileServerRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $ftpHostNetAddress,
             $passiveFTP=null
    ) {
        $this->ftpHostNetAddress = new NetAddress($ftpHostNetAddress);
        $this->passiveFTP        = $passiveFTP;
        $this->args              = func_get_args();
    }

    public function setFtpHostNetAddress($ftpHostNetAddress)
    {
        $ftpHostNetAddress and $this->ftpHostNetAddress = new NetAddress($ftpHostNetAddress);
    }

    public function getFtpHostNetAddress()
    {
        return (!$this->ftpHostNetAddress) ?: $this->ftpHostNetAddress->value();
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
