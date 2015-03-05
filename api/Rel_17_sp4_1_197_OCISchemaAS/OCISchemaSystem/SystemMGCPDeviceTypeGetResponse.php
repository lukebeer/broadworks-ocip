<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SignalingAddressType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedPositiveInt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceProtocol;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemMGCPDeviceTypeGetRequest.
 */
class SystemMGCPDeviceTypeGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isObsolete,
             $profile,
             UnboundedPositiveInt $numberOfPorts,
             $protocolChoice
    ) {
        $this->isObsolete     = $isObsolete;
        $this->profile        = new SignalingAddressType($profile);
        $this->numberOfPorts  = $numberOfPorts;
        $this->protocolChoice = new AccessDeviceProtocol($protocolChoice);
        $this->args           = func_get_args();
    }

    public function setIsObsolete($isObsolete)
    {
        $isObsolete and $this->isObsolete = new xs:boolean($isObsolete);
    }

    public function getIsObsolete()
    {
        return (!$this->isObsolete) ?: $this->isObsolete->value();
    }

    public function setProfile($profile)
    {
        $profile and $this->profile = new SignalingAddressType($profile);
    }

    public function getProfile()
    {
        return (!$this->profile) ?: $this->profile->value();
    }

    public function setNumberOfPorts($numberOfPorts)
    {
        $numberOfPorts and $this->numberOfPorts = new UnboundedPositiveInt($numberOfPorts);
    }

    public function getNumberOfPorts()
    {
        return (!$this->numberOfPorts) ?: $this->numberOfPorts->value();
    }

    public function setProtocolChoice($protocolChoice)
    {
        $protocolChoice and $this->protocolChoice = new AccessDeviceProtocol($protocolChoice);
    }

    public function getProtocolChoice()
    {
        return (!$this->protocolChoice) ?: $this->protocolChoice->value();
    }
}
