<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Add an OCI entry to the Broadworks Common Communication Transport (BCCT) protocol to interface mapping table.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemBCCTAddOCIInterfaceAddressRequest extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $interfaceNetAddress = null;

    public function __construct(
         $interfaceNetAddress
    ) {
        $this->setInterfaceNetAddress($interfaceNetAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setInterfaceNetAddress($interfaceNetAddress = null)
    {
        $this->interfaceNetAddress = ($interfaceNetAddress InstanceOf NetAddress)
             ? $interfaceNetAddress
             : new NetAddress($interfaceNetAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getInterfaceNetAddress()
    {
        return (!$this->interfaceNetAddress) ?: $this->interfaceNetAddress->getValue();
    }
}